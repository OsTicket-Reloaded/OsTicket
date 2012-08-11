<?php
/*********************************************************************
    admin.php

    Handles all admin related pages....everything admin!

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2010 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
    $Id: admin.php,v 1.1.2.1 2009/08/17 19:27:50 carlos.delfino Exp $
**********************************************************************/
require('staff.inc.php');
//Make sure the user is admin type LOCKDOWN BABY!
if(!$thisuser or !$thisuser->isadmin()){
    header('Location: index.php');
    require('index.php'); // just in case!
    exit;
}


//Some security related warnings - bitch until fixed!!! :)
if(defined('THIS_VERSION') && strcasecmp($cfg->getVersion(),THIS_VERSION)) {
    $sysnotice=sprintf('The script is version %s while the database is version %s.',THIS_VERSION,$cfg->getVersion());
    if(file_exists('../setup/'))
        $sysnotice.=' Possibly caused by incomplete <a href="../setup/upgrade.php">upgrade</a>.';
    $errors['err']=$sysnotice; 
}elseif(!$cfg->isHelpDeskOffline()) {

    if(file_exists('../setup/')){
        $sysnotice=$trl->translate('TEXT_PLEASE_TAKE_A_MINUTE_TO_DELETE_INSTALL');
    }else{

        if(CONFIG_FILE && file_exists(CONFIG_FILE) && is_writable(CONFIG_FILE)) {
            //Confirm for real that the file is writable by group or world.
            clearstatcache(); //clear the cache!
            $perms = @fileperms(CONFIG_FILE);
            if(($perms & 0x0002) || ($perms & 0x0010)) { 
                $sysnotice=sprintf('Please change permission of config file (%s) to remove write access. e.g <i>chmod 644 %s</i>',
                                basename(CONFIG_FILE),basename(CONFIG_FILE));
    }
}

    }
    if(!$sysnotice && ini_get('register_globals'))
        $sysnotice='Please consider turning off register globals if possible';
}

//Access checked out OK...lets do the do 
define('OSTADMININC',TRUE); //checked by admin include files
define('ADMINPAGE',TRUE);   //Used by the header to swap menus.

//Files we might need.
//TODO: Do on-demand require...save some mem.
require_once(INCLUDE_DIR.'class.ticket.php');
require_once(INCLUDE_DIR.'class.dept.php');
require_once(INCLUDE_DIR.'class.email.php');
require_once(INCLUDE_DIR.'class.mailfetch.php');

//Handle a POST.
if($_POST && $_REQUEST['t'] && !$errors):
    //print_r($_POST);
    //WELCOME TO THE HOUSE OF PAIN.
    $errors=array(); //do it anyways.

    switch(strtolower($_REQUEST['t'])):
        case 'pref':
            //Do the dirty work behind the scenes.
            if($cfg->updatePref($_POST,$errors)){
                $msg='Preferences Updated Successfully';
                $cfg->reload();
            }else{
                $errors['err']=$errors['err']?$errors['err']:'Internal Error';
            }
            break;
        case 'attach':
            if($_POST['allow_attachments'] or $_POST['upload_dir']) {

                if($_POST['upload_dir']) //get the real path.
                    $_POST['upload_dir'] = realpath($_POST['upload_dir']);

                if(!$_POST['upload_dir'] or !is_writable($_POST['upload_dir'])) {
                    $errors['upload_dir']='Directory must be valid and writeable';
                    if($_POST['allow_attachments'])
                        $errors['allow_attachments']='Invalid upload dir';
                }elseif(!ini_get('file_uploads')) {
                    $errors['allow_attachments']='The \'file_uploads\' directive is disabled in php.ini';
                }
                
                if(!is_numeric($_POST['max_file_size']))
                    $errors['max_file_size']='Maximum file size required';

                if(!$_POST['allowed_filetypes'])
                    $errors['allowed_filetypes']='Allowed file extentions required';
            }
            if(!$errors) {
               $sql= 'UPDATE '.CONFIG_TABLE.' SET allow_attachments='.db_input(isset($_POST['allow_attachments'])?1:0).
                    ',upload_dir='.db_input($_POST['upload_dir']). 
                    ',max_file_size='.db_input($_POST['max_file_size']).
                    ',allowed_filetypes='.db_input(strtolower(preg_replace("/\n\r|\r\n|\n|\r/", '',trim($_POST['allowed_filetypes'])))).
                    ',email_attachments='.db_input(isset($_POST['email_attachments'])?1:0).
                    ',allow_email_attachments='.db_input(isset($_POST['allow_email_attachments'])?1:0).
                    ',allow_online_attachments='.db_input(isset($_POST['allow_online_attachments'])?1:0).
                    ',allow_online_attachments_onlogin='.db_input(isset($_POST['allow_online_attachments_onlogin'])?1:0).
                    ' WHERE id='.$cfg->getId();
               //echo $sql;
               if(db_query($sql)) {
                   $cfg->reload();
                   $msg='Attachments settings updated';
               }else{
                    $errors['err']='Update error!';
               }
            }else {
                $errors['err']='Error occured. See error messages below.';
                    
            }
            break;
        case 'api':
            include_once(INCLUDE_DIR.'class.api.php');
            switch(strtolower($_POST['do'])) {
                case 'add':
                    if(Api::add(trim($_POST['ip']),$errors))
                        $msg='Key created successfully for '.Format::htmlchars($_POST['ip']);
                    elseif(!$errors['err'])
                        $errors['err']='Error adding the IP. Try again';
                    break;
                case 'update_phrase':
                    if(Api::setPassphrase(trim($_POST['phrase']),$errors))
                        $msg='API passphrase updated successfully';
                    elseif(!$errors['err'])
                        $errors['err']='Error updating passphrase. Try again';
                    break;
                case 'mass_process':
                    if(!$_POST['ids'] || !is_array($_POST['ids'])) {
                        $errors['err']='You must select at least one entry to process';
                    }else{
                        $count=count($_POST['ids']);
                        $ids=implode(',',$_POST['ids']);
                        if($_POST['enable'] || $_POST['disable']) {
                            $resp=db_query('UPDATE '.API_KEY_TABLE.' SET isactive='.db_input($_POST['enable']?1:0).' WHERE id IN ('.$ids.')');
                                
                            if($resp && ($i=db_affected_rows())){
                                $msg="$i of $count selected key(s) updated";
                            }else {
                                $errors['err']='Unable to delete selected keys.';
                             }
                        }elseif($_POST['delete']){
                            $resp=db_query('DELETE FROM '.API_KEY_TABLE.'  WHERE id IN ('.$ids.')');
                            if($resp && ($i=db_affected_rows())){
                                $msg="$i of $count selected key(s) deleted";
                            }else{
                                $errors['err']='Unable to delete selected key(s). Try again';
                            }
                        }else {
                            $errors['err']='Unknown command';
                        }
                    }
                    break;
                default:
                    $errors['err']='Unknown action '.$_POST['do'];
            }
            break;
        case 'banlist': //BanList.
            require_once(INCLUDE_DIR.'class.banlist.php');
            switch(strtolower($_POST['a'])) {
                case 'add':
                    if(!$_POST['email'] || !Validator::is_email($_POST['email']))
                        $errors['err']='Please enter a valid email.';
                    elseif(BanList::isbanned($_POST['email']))
                        $errors['err']='Email already banned';
                    else{
                        if(BanList::add($_POST['email'],$thisuser->getName()))
                            $msg='Email added to banlist';
                        else
                            $errors['err']='Unable to add email to banlist. Try again';
                    }
                    break;
                case 'remove':
                    if(!$_POST['ids'] || !is_array($_POST['ids'])) {
                        $errors['err']='You must select at least one email';
                    }else{
                        //TODO: move mass remove to Banlist class when needed elsewhere...at the moment this is the only place.
                        $sql='DELETE FROM '.BANLIST_TABLE.' WHERE id IN ('.implode(',',$_POST['ids']).')';
                        if(db_query($sql) && ($num=db_affected_rows()))
                            $msg="$num of $count selected emails removed from banlist";
                        else
                            $errors['err']='Unable to make remove selected emails. Try again.';
                    }
                    break;
                default:
                    $errors['err']='Uknown banlist command!';
            }
            break;
        case 'email':
            require_once(INCLUDE_DIR.'class.email.php');
            $do=strtolower($_POST['do']);
            switch($do){
                case 'update':
                    $email = new Email($_POST['email_id']);
                    if($email && $email->getId()) {
                        if($email->update($_POST,$errors))
                            $msg='Email updated successfully';
                        elseif(!$errors['err'])
                            $errors['err']='Error updating email';
                    }else{
                        $errors['err']='Internal error';
                    }
                    break;
                case 'create':
                    if(Email::create($_POST,$errors))
                        $msg='Email added successfully';
                    elseif(!$errors['err'])
                         $errors['err']='Unable to add email. Internal error';
                    break;
                case 'mass_process':
                    if(!$_POST['ids'] || !is_array($_POST['ids'])) {
                        $errors['err']='You must select at least one email to process';
                    }else{
                        $count=count($_POST['ids']);
                        $ids=implode(',',$_POST['ids']);
                        $sql='SELECT count(dept_id) FROM '.DEPT_TABLE.' WHERE email_id IN ('.$ids.') OR autoresp_email_id IN ('.$ids.')';
                        list($depts)=db_fetch_row(db_query($sql));
                        if($depts>0){
                            $errors['err']='One or more of the selected emails is being used by a Dept. Remove association first.';    
                        }elseif($_POST['delete']){
                            $i=0;
                            foreach($_POST['ids'] as $k=>$v) {
                                if(Email::deleteEmail($v)) $i++;
                            }
                            if($i>0){
                                $msg="$i of $count selected email(s) deleted";
                            }else{
                                $errors['err']='Unable to delete selected email(s).';
                            }
                        }else{
                            $errors['err']='Unknown command';
                        }
                    }
                    break;
                default:
                    $errors['err']='Unknown topic action!';
            }
            break;
        case 'templates':
           include_once(INCLUDE_DIR.'class.msgtpl.php'); 
            $do=strtolower($_POST['do']);
            switch($do){
                case 'add':
                case 'create':
                    if(($tid=Template::create($_POST,$errors))){
                        $msg='Template created successfully';
                    }elseif(!$errors['err']){
                        $errors['err']='Error creating the template - try again';
                    }
                    break;
                case 'update':
                    $template=null;
                    if($_POST['id'] && is_numeric($_POST['id'])) {
                        $template= new Template($_POST['id']);
                        if(!$template || !$template->getId()) {
                            $template=null;
                            $errors['err']='Unknown template'.$id;
                  
                        }elseif($template->update($_POST,$errors)){
                            $msg='Template updated successfully';
                        }elseif(!$errors['err']){
                            $errors['err']='Error updating the template. Try again';
                        }
                    }
                    break;
                case 'mass_process':
                    if(!$_POST['ids'] || !is_array($_POST['ids'])) {
                        $errors['err']='You must select at least one template';
                    }elseif(in_array($cfg->getDefaultTemplateId(),$_POST['ids'])){
                        $errors['err']='You can not delete default template';
                    }else{
                        $count=count($_POST['ids']);
                        $ids=implode(',',$_POST['ids']);
                        $sql='SELECT count(dept_id) FROM '.DEPT_TABLE.' WHERE tpl_id IN ('.$ids.')';
                        list($tpl)=db_fetch_row(db_query($sql));
                        if($tpl>0){
                            $errors['err']='One or more of the selected templates is being used by a Dept. Remove association first.';
                        }elseif($_POST['delete']){
                            $sql='DELETE FROM '.EMAIL_TEMPLATE_TABLE.' WHERE tpl_id IN ('.$ids.') AND tpl_id!='.db_input($cfg->getDefaultTemplateId());
                            if(($result=db_query($sql)) && ($i=db_affected_rows()))
                                $msg="$i of $count selected templates(s) deleted";
                            else
                                $errors['err']='Unable to delete selected templates(s).';
                        }else{
                            $errors['err']='Unknown command';
                        }
                    }
                    break;
                default:
                    $errors['err']='Unknown action';
                    //print_r($_POST);
            }
            break;
    case 'topics':
        require_once(INCLUDE_DIR.'class.topic.php');
        $do=strtolower($_POST['do']);
        switch($do){
            case 'update':
                $topic = new Topic($_POST['topic_id']);
                if($topic && $topic->getId()) {
                    if($topic->update($_POST,$errors))
                        $msg='Topic updated successfully';
                    elseif(!$errors['err'])
                        $errors['err']='Error updating the topic';
                }else{
                    $errors['err']='Internal error';
                }
                break;
            case 'create':
                if(Topic::create($_POST,$errors))
                    $msg='Help topic created successfully';
                elseif(!$errors['err'])
                    $errors['err']='Unable to create the topic. Internal error';
                break;
            case 'mass_process':
                if(!$_POST['tids'] || !is_array($_POST['tids'])) {
                    $errors['err']='You must select at least one topic';
                }else{
                    $count=count($_POST['tids']);
                    $ids=implode(',',$_POST['tids']);
                    if($_POST['enable']){
                        $sql='UPDATE '.TOPIC_TABLE.' SET isactive=1, updated=NOW() WHERE topic_id IN ('.$ids.') AND isactive=0 ';
                        if(db_query($sql) && ($num=db_affected_rows()))
                            $msg="$num of $count selected services enabled";
                        else
                            $errors['err']='Unable to complete the action.';
                    }elseif($_POST['disable']){
                        $sql='UPDATE '.TOPIC_TABLE.' SET isactive=0, updated=NOW() WHERE topic_id IN ('.$ids.') AND isactive=1 ';
                        if(db_query($sql) && ($num=db_affected_rows()))
                            $msg="$num of $count selected topics disabled";
                        else
                            $errors['err']='Unable to disable selected topics';
                    }elseif($_POST['delete']){
                        $sql='DELETE FROM '.TOPIC_TABLE.' WHERE topic_id IN ('.$ids.')';        
                        if(db_query($sql) && ($num=db_affected_rows()))
                            $msg="$num of $count selected topics deleted!";
                        else
                            $errors['err']='Unable to delete selected topics';
                    }
                }
                break;
            default:
                $errors['err']='Unknown topic action!';
        }
        break;
    case 'groups':
        include_once(INCLUDE_DIR.'class.group.php');
        $do=strtolower($_POST['do']);
        switch($do){
            case 'update':
                if(Group::update($_POST['group_id'],$_POST,$errors)){
                    $msg='Group '.Format::htmlchars($_POST['group_name']).' updated successfully';
                }elseif(!$errors['err']) {
                    $errors['err']='Error(s) occured. Try again.';
                }
                break;
            case 'create':
                if(($gID=Group::create($_POST,$errors))){
                    $msg='Group '.Format::htmlchars($_POST['group_name']).' created successfully';
                }elseif(!$errors['err']) {
                    $errors['err']='Error(s) occured. Try again.';
                }
                break;
            default:
                //ok..at this point..look WMA.
                if($_POST['grps'] && is_array($_POST['grps'])) {
                    $ids=implode(',',$_POST['grps']);
                    $selected=count($_POST['grps']);
                    if(isset($_POST['activate_grps'])) {
                        $sql='UPDATE '.GROUP_TABLE.' SET group_enabled=1,updated=NOW() WHERE group_enabled=0 AND group_id IN('.$ids.')';
                        db_query($sql);
                        $msg=db_affected_rows()." of  $selected selected groups Enabled";
                    }elseif(in_array($thisuser->getDeptId(),$_POST['grps'])) {
                          $errors['err']="Trying to 'Disable' or 'Delete' your group? Doesn't make any sense!";
                    }elseif(isset($_POST['disable_grps'])) {
                        $sql='UPDATE '.GROUP_TABLE.' SET group_enabled=0, updated=NOW() WHERE group_enabled=1 AND group_id IN('.$ids.')';
                        db_query($sql);
                        $msg=db_affected_rows()." of  $selected selected groups Disabled"; 
                    }elseif(isset($_POST['delete_grps'])) {
                        $res=db_query('SELECT staff_id FROM '.STAFF_TABLE.' WHERE group_id IN('.$ids.')');
                        if(!$res || db_num_rows($res)) { //fail if any of the selected groups has users.
                            $errors['err']='One or more of the selected groups have users. Only empty groups can be deleted.';
                        }else{
                            db_query('DELETE FROM '.GROUP_TABLE.' WHERE group_id IN('.$ids.')');    
                            $msg=db_affected_rows()." of  $selected selected groups Deleted";
                        }
                    }else{
                         $errors['err']='Uknown command!';
                    }
                    
                }else{
                    $errors['err']='No groups selected.';
                }
        }
    break;
    case 'staff':
        include_once(INCLUDE_DIR.'class.staff.php');
        $do=strtolower($_POST['do']);
        switch($do){
            case 'update':
                $staff = new Staff($_POST['staff_id']);
                if($staff && $staff->getId()) {
                    if($staff->update($_POST,$errors))
                        $msg='Staff profile updated successfully';
                    elseif(!$errors['err'])
                        $errors['err']='Error updating the user';
                }else{
                    $errors['err']='Internal error';
                }
                break;
            case 'create':
                if(($uID=Staff::create($_POST,$errors)))
                    $msg=Format::htmlchars($_POST['firstname'].' '.$_POST['lastname']).' added successfully';
                elseif(!$errors['err'])
                    $errors['err']='Unable to add the user. Internal error';
                break;
            case 'mass_process':
                //ok..at this point..look WMA.
                if($_POST['uids'] && is_array($_POST['uids'])) {
                    $ids=implode(',',$_POST['uids']);
                    $selected=count($_POST['uids']);
                    if(isset($_POST['enable'])) {
                        $sql='UPDATE '.STAFF_TABLE.' SET isactive=1,updated=NOW() WHERE isactive=0 AND staff_id IN('.$ids.')';
                        db_query($sql);
                        $msg=db_affected_rows()." of  $selected selected users enabled";
                    
                    }elseif(in_array($thisuser->getId(),$_POST['uids'])) {
                        //sucker...watch what you are doing...why don't you just DROP the DB?
                        $errors['err']='You can not lock or delete yourself!';  
                    }elseif(isset($_POST['disable'])) {
                        $sql='UPDATE '.STAFF_TABLE.' SET isactive=0, updated=NOW() '.
                            ' WHERE isactive=1 AND staff_id IN('.$ids.') AND staff_id!='.$thisuser->getId();
                        db_query($sql);
                        $msg=db_affected_rows()." of  $selected selected users locked";
                        //Release tickets assigned to the user?? NO? could be a temp thing 
                        // May be auto-release if not logged in for X days? 
                    }elseif(isset($_POST['delete'])) {
                        db_query('DELETE FROM '.STAFF_TABLE.' WHERE staff_id IN('.$ids.') AND staff_id!='.$thisuser->getId());
                        $msg=db_affected_rows()." of  $selected selected users deleted";
                        //Demote the user 
                        db_query('UPDATE '.DEPT_TABLE.' SET manager_id=0 WHERE manager_id IN('.$ids.') ');
                        db_query('UPDATE '.TICKET_TABLE.' SET staff_id=0 WHERE staff_id IN('.$ids.') ');
                    }else{
                        $errors['err']='Uknown command!';
                    }
                }else{
                    $errors['err']='No users selected.';
                }
            break;
            default:
                $errors['err']='Uknown command!';
        }
    break;
    case 'dept':
        include_once(INCLUDE_DIR.'class.dept.php');
        $do=strtolower($_POST['do']);
        switch($do){
            case 'update':
                $dept = new Dept($_POST['dept_id']);
                if($dept && $dept->getId()) {
                    if($dept->update($_POST,$errors))
                        $msg=$trl->_t('TEXT_DEPT_UPDATED_SUCCESSFULLY');
                    elseif(!$errors['err'])
                        $errors['err']='Error updating the department';
                }else{
                    $errors['err']='Internal error';
                }
                break;
            case 'create':
                if(($deptID=Dept::create($_POST,$errors)))
                    $msg=Format::htmlchars($_POST['dept_name']).' added successfully';
                elseif(!$errors['err'])
                    $errors['err']='Unable to add department. Internal error';
                break;
            case 'mass_process':
                if(!$_POST['ids'] || !is_array($_POST['ids'])) {
                    $errors['err']='You must select at least one department';
                }elseif(!$_POST['public'] && in_array($cfg->getDefaultDeptId(),$_POST['ids'])) {
                    $errors['err']='You can not disable/delete a default department. Remove default Dept and try again.';
                }else{
                    $count=count($_POST['ids']);
                    $ids=implode(',',$_POST['ids']);
                    if($_POST['public']){
                        $sql='UPDATE '.DEPT_TABLE.' SET ispublic=1 WHERE dept_id IN ('.$ids.')';  
                        if(db_query($sql) && ($num=db_affected_rows()))
                            $warn="$num of $count selected departments made public";
                        else
                            $errors['err']='Unable to make depts public.';
                    }elseif($_POST['private']){
                        $sql='UPDATE '.DEPT_TABLE.' SET ispublic=0 WHERE dept_id IN ('.$ids.') AND dept_id!='.db_input($cfg->getDefaultDeptId());
                        if(db_query($sql) && ($num=db_affected_rows())) {
                            $warn="$num of $count selected departments made private";
                        }else
                            $errors['err']='Unable to make selected department(s) private. Possibly already private!';
                            
                    }elseif($_POST['delete']){
                        //Deny all deletes if one of the selections has members in it.
                        $sql='SELECT count(staff_id) FROM '.STAFF_TABLE.' WHERE dept_id IN ('.$ids.')';
                        list($members)=db_fetch_row(db_query($sql));
                        $sql='SELECT count(topic_id) FROM '.TOPIC_TABLE.' WHERE dept_id IN ('.$ids.')';
                        list($topics)=db_fetch_row(db_query($sql));
                        if($members){
                            $errors['err']='Can not delete Dept. with members. Move staff first.';
                        }elseif($topic){
                             $errors['err']='Can not delete Dept. associated with a help topics. Remove association first.';
                        }else{
                            //We have to deal with individual selection because of associated tickets and users.
                            $i=0;
                            foreach($_POST['ids'] as $k=>$v) {
                                if($v==$cfg->getDefaultDeptId()) continue; //Don't delete default dept. Triple checking!!!!!
                                if(Dept::delete($v)) $i++;
                            }
                            if($i>0){
                                $warn="$i of $count selected departments deleted";
                            }else{
                                $errors['err']='Unable to delete selected departments.';
                            }
                        }
                    }
                }
            break;            
            default:
                $errors['err']='Unknown Dept action';
        }
    break;
    default:
        $errors['err']='Uknown command!';
    endswitch;
endif;

//================ADMIN MAIN PAGE LOGIC==========================
//Process requested tab.
$thistab=strtolower($_REQUEST['t']?$_REQUEST['t']:'dashboard');
$inc=$page=''; //No outside crap please!
$submenu=array();
switch($thistab){
    //Preferences & settings
    case 'settings':
    case 'pref':
    case 'attach':
    case 'api':
        $nav->setTabActive('settings');
        $desc = $trl->translate('LABEL_PREFERENCES');
        $nav->addSubMenu(array('desc'=>$desc,'href'=>'admin.php?t=pref','iconclass'=>'preferences'));
        $desc = $trl->translate('LABEL_ATTACHMENTS');
        $nav->addSubMenu(array('desc'=>$desc,'href'=>'admin.php?t=attach','iconclass'=>'attachment'));
        $desc = $trl->translate('LABEL_API');
        $nav->addSubMenu(array('desc'=>$desc,'href'=>'admin.php?t=api','iconclass'=>'api'));
        switch($thistab):
        case 'settings':            
        case 'pref':        
            $page='preference.inc.php';
            break;
        case 'attach':
            $page='attachment.inc.php';
            break;
        case 'api':
            $page='api.inc.php';
        endswitch;
        break;   
    case 'dashboard':
    case 'syslog':
        $nav->setTabActive('dashboard');
        $desc = $trl->translate('LABEL_SYSTEM_LOGS'); 
        $nav->addSubMenu(array('desc'=>$desc,'href'=>'admin.php?t=syslog','iconclass'=>'syslogs'));
        $page='syslogs.inc.php';
        break;
    case 'email':
    case 'templates':
    case 'banlist':
        $nav->setTabActive('emails');
        $nav->addSubMenu(array('desc'=>'Email Addresses','href'=>'admin.php?t=email','iconclass'=>'emailSettings'));
        $nav->addSubMenu(array('desc'=>'Add New Email','href'=>'admin.php?t=email&a=new','iconclass'=>'newEmail'));
        $nav->addSubMenu(array('desc'=>'Templates','href'=>'admin.php?t=templates','title'=>'Email Templates','iconclass'=>'emailTemplates')); 
        $nav->addSubMenu(array('desc'=>'Banlist','href'=>'admin.php?t=banlist','title'=>'Banned Email','iconclass'=>'banList')); 
        switch(strtolower($_REQUEST['t'])){
            case 'templates':
                $page='templates.inc.php';
                $template=null;
                if(($id=$_REQUEST['id']?$_REQUEST['id']:$_POST['email_id']) && is_numeric($id)) {
                    include_once(INCLUDE_DIR.'class.msgtpl.php');
                    $template= new Template($id);
                    if(!$template || !$template->getId()) {
                        $template=null;
                        $errors['err']='Unable to fetch info on template ID#'.$id;
                    }else {
                        $page='template.inc.php';
                    }
                }
                break;
            case 'banlist':
                $page='banlist.inc.php';
                break;
            case 'email':
            default:
                include_once(INCLUDE_DIR.'class.email.php');
                $email=null;
                if(($id=$_REQUEST['id']?$_REQUEST['id']:$_POST['email_id']) && is_numeric($id)) {
                    $email= new Email($id,false);
                    if(!$email->load()) {
                        $email=null;
                        $errors['err']='Unable to fetch info on email ID#'.$id;
                    }
                }
                $page=($email or ($_REQUEST['a']=='new' && !$emailID))?'email.inc.php':'emails.inc.php';
        }
        break;
    case 'topics':
        require_once(INCLUDE_DIR.'class.topic.php');
        $topic=null;
        $nav->setTabActive('topics');
        $nav->addSubMenu(array('desc'=>'Help Topics','href'=>'admin.php?t=topics','iconclass'=>'helpTopics'));
        $nav->addSubMenu(array('desc'=>'Add New Topic','href'=>'admin.php?t=topics&a=new','iconclass'=>'newHelpTopic'));
        if(($id=$_REQUEST['id']?$_REQUEST['id']:$_POST['topic_id']) && is_numeric($id)) {
            $topic= new Topic($id);
            if(!$topic->load() && $topic->getId()==$id) {
                $topic=null;
                $errors['err']='Unable to fetch info on topic #'.$id;
            }
        }
        $page=($topic or ($_REQUEST['a']=='new' && !$topicID))?'topic.inc.php':'helptopics.inc.php';
        break;
    //Staff (users, groups and teams)
    case 'grp':
    case 'groups':
    case 'staff':
        $group=null;
        //Tab and Nav options.
        $nav->setTabActive('staff');
        $nav->addSubMenu(array('desc'=>'Staff Members','href'=>'admin.php?t=staff','iconclass'=>'users'));
        $nav->addSubMenu(array('desc'=>'Add New User','href'=>'admin.php?t=staff&a=new','iconclass'=>'newuser'));
        $nav->addSubMenu(array('desc'=>'User Groups','href'=>'admin.php?t=groups','iconclass'=>'groups'));
        $nav->addSubMenu(array('desc'=>'Add New Group','href'=>'admin.php?t=groups&a=new','iconclass'=>'newgroup'));
        $page='';
        switch($thistab){
            case 'grp':
            case 'groups':
                if(($id=$_REQUEST['id']?$_REQUEST['id']:$_POST['group_id']) && is_numeric($id)) {
                    $res=db_query('SELECT * FROM '.GROUP_TABLE.' WHERE group_id='.db_input($id));
                    if(!$res or !db_num_rows($res) or !($group=db_fetch_array($res)))
                        $errors['err']='Unable to fetch info on group ID#'.$id;
                }
                $page=($group or ($_REQUEST['a']=='new' && !$gID))?'group.inc.php':'groups.inc.php';
                break;
            case 'staff':
                $page='staffmembers.inc.php';
                if(($id=$_REQUEST['id']?$_REQUEST['id']:$_POST['staff_id']) && is_numeric($id)) {
                    $staff = new Staff($id);
                    if(!$staff || !is_object($staff) || $staff->getId()!=$id) {
                        $staff=null;
                        $errors['err']='Unable to fetch info on rep ID#'.$id;
                    }
                }
                $page=($staff or ($_REQUEST['a']=='new' && !$uID))?'staff.inc.php':'staffmembers.inc.php';
                break;
            default:
                $page='staffmembers.inc.php';
        }
        break;
    //Departments
    case 'dept': //lazy
    case 'depts':
        $dept=null;
        if(($id=$_REQUEST['id']?$_REQUEST['id']:$_POST['dept_id']) && is_numeric($id)) {
            $dept= new Dept($id);
            if(!$dept || !$dept->getId()) {
                $dept=null;
                $errors['err']='Unable to fetch info on Dept ID#'.$id;
            }
        }
        $page=($dept or ($_REQUEST['a']=='new' && !$deptID))?'dept.inc.php':'depts.inc.php';
        $nav->setTabActive('depts');
        $desc = $trl->_t('LABEL_DEPARTMENTS');
		$title = $trl->_t('LABEL_DEPARTMENTS');
        $nav->addSubMenu(array('desc'=>$desc,'href'=>'admin.php?t=depts','iconclass'=>$title));
        $desc = $trl->_t('LABEL_ADD_NEW_DEPT'); 
        $nav->addSubMenu(array('desc'=>$desc,'href'=>'admin.php?t=depts&a=new','iconclass'=>'newDepartment'));
        break;
    // (default)
    default:
        $page='pref.inc.php';
}
//========================= END ADMIN PAGE LOGIC ==============================//

$inc=($page)?STAFFINC_DIR.$page:'';
//Now lets render the page...
require(STAFFINC_DIR.'header.inc.php');
?>
<div>
    <?php if($errors['err']) {?>
        <p align="center" id="errormessage"><?php echo $errors['err']?></p>
    <?php }elseif($msg) {?>
        <p align="center" id="infomessage"><?php echo $msg?></p>
    <?php }elseif($warn) {?>
        <p align="center" id="warnmessage"><?php echo $warn?></p>
    <?php }?>
</div>
<table width="100%" border="0" cellspacing="0" cellpadding="1">
    <tr><td>
        <div style="margin:0 5px 5px 5px;">
        <?php 
            if($inc && file_exists($inc)){
                require($inc);
            }else{
                ?>
                <p align="center">
                    <font class="error">Problems loading requested admin page. (<?php echo Format::htmlchars($thistab)?>)</font>
                    <br>Possibly access denied, if you believe this is in error please get technical support.
                </p>
            <?php }?>
        </div>
    </td></tr>
</table>
<?php 
include_once(STAFFINC_DIR.'footer.inc.php');
?>
