<?php
if(!defined('OSTADMININC') || !$thisuser->isadmin()) die($trl->translate("TEXT_ACCESS_DENIED"));

$info=($errors && $_POST)?Format::input($_POST):Format::htmlchars($group);
if($group && $_REQUEST['a']!='new'){
    $title='Edit Group: '.$group['group_name'];
    $action='update';
}else {
    $title='Add New Group';
    $action='create';
    $info['group_enabled']=isset($info['group_enabled'])?$info['group_enabled']:1; //Default to active 
}

?>
<table width="100%" border="0" cellspacing=0 cellpadding=0>
 <form action="admin.php" method="POST" name="group">
 <input type="hidden" name="do" value="<?php echo $action?>">
 <input type="hidden" name="a" value="<?php echo Format::htmlchars($_REQUEST['a'])?>">
 <input type="hidden" name="t" value="groups">
 <input type="hidden" name="group_id" value="<?php echo $info['group_id']?>">
 <input type="hidden" name="old_name" value="<?php echo $info['group_name']?>">
 <tr><td>
    <table width="100%" border="0" cellspacing=0 cellpadding=2 class="tform">
        <tr class="header"><td colspan=2><?php echo Format::htmlchars($title)?></td></tr>
        <tr class="subheader"><td colspan=2>
            Group permissions set below applies cross all group members, but don't apply to adminstrators and Dept. managers in some cases.
            </td></tr>
        <tr><th>Group Name:</th>
            <td><input type="text" name="group_name" size=25 value="<?php echo $info['group_name']?>">
                &nbsp;<font class="error">*&nbsp;<?php echo $errors['group_name']?></font>
                    
            </td>
        </tr>
        <tr>
            <th>Group Status:</th>
            <td>
                <input type="radio" name="group_enabled"  value="1"   <?php echo $info['group_enabled']?'checked':''?> /> Active
                <input type="radio" name="group_enabled"  value="0"   <?php echo !$info['group_enabled']?'checked':''?> />Disabled
                &nbsp;<font class="error">&nbsp;<?php echo $errors['group_enabled']?></font>
            </td>
        </tr>
        <tr><th valign="top"><br><?php $trl->_('LABEL_DEPT_ACCESS')?></th>
            <td class="mainTableAlt"><i><?php $trl->_('TEXT_SELECT_DEPARTMENTS_GROUP_MEMBERS')?></i>
                &nbsp;<font class="error">&nbsp;<?php echo $errors['depts']?></font><br/>
                <?php 
                //Try to save the state on error...
                $access=($_POST['depts'] && $errors)?$_POST['depts']:explode(',',$info['dept_access']);
                $depts= db_query('SELECT dept_id,dept_name FROM '.DEPT_TABLE.' ORDER BY dept_name');
                while (list($id,$name) = db_fetch_row($depts)){
                    $ck=($access && in_array($id,$access))?'checked':''; ?>
                    <input type="checkbox" name="depts[]" value="<?php echo $id?>" <?php echo $ck?> > <?php echo $name?><br/>
                <?php 
                }?>
                <a href="#" onclick="return select_all(document.forms['group'])">Select All</a>&nbsp;&nbsp;
                <a href="#" onclick="return reset_all(document.forms['group'])">Select None</a>&nbsp;&nbsp; 
            </td>
        </tr>
        <tr><th>Can <b>Create</b> Tickets</th>
            <td>
                <input type="radio" name="can_create_tickets"  value="1"   <?php echo $info['can_create_tickets']?'checked':''?> />Yes 
                <input type="radio" name="can_create_tickets"  value="0"   <?php echo !$info['can_create_tickets']?'checked':''?> />No
                &nbsp;&nbsp;<i>Ability to open tickets on behalf of users!</i>
            </td>
        </tr>
        <tr><th>Can <b>Edit</b> Tickets</th>
            <td>
                <input type="radio" name="can_edit_tickets"  value="1"   <?php echo $info['can_edit_tickets']?'checked':''?> />Yes
                <input type="radio" name="can_edit_tickets"  value="0"   <?php echo !$info['can_edit_tickets']?'checked':''?> />No
                &nbsp;&nbsp;<i>Ability to edit tickets. Admins & Dept managers are allowed by default.</i>
            </td>
        </tr>
        <tr><th>Can <b>Close</b> Tickets</th>
            <td>
                <input type="radio" name="can_close_tickets"  value="1" <?php echo $info['can_close_tickets']?'checked':''?> />Yes
                <input type="radio" name="can_close_tickets"  value="0" <?php echo !$info['can_close_tickets']?'checked':''?> />No
                &nbsp;&nbsp;<i><b>Mass Close Only:</b> Staff can still close one ticket at a time when set to No</i>
            </td>
        </tr>
        <tr><th>Can <b>Transfer</b> Tickets</th>
            <td>
                <input type="radio" name="can_transfer_tickets"  value="1" <?php echo $info['can_transfer_tickets']?'checked':''?> />Yes
                <input type="radio" name="can_transfer_tickets"  value="0" <?php echo !$info['can_transfer_tickets']?'checked':''?> />No
                &nbsp;&nbsp;<i>Ability to transfer tickets from one dept to another.</i>
            </td>
        </tr>
        <tr><th>Can <b>Delete</b> Tickets</th>
            <td>
                <input type="radio" name="can_delete_tickets"  value="1"   <?php echo $info['can_delete_tickets']?'checked':''?> />Yes
                <input type="radio" name="can_delete_tickets"  value="0"   <?php echo !$info['can_delete_tickets']?'checked':''?> />No
                &nbsp;&nbsp;<i>Deleted tickets can't be recovered!</i>
            </td>
        </tr>
        <tr><th>Can Ban Emails</th>
            <td>
                <input type="radio" name="can_ban_emails"  value="1" <?php echo $info['can_ban_emails']?'checked':''?> />Yes
                <input type="radio" name="can_ban_emails"  value="0" <?php echo !$info['can_ban_emails']?'checked':''?> />No
                &nbsp;&nbsp;<i>Ability to add/remove emails from banlist via tickets interface.</i>
            </td>
        </tr>
        <tr><th>Can Manage Premade</th>
            <td>
                <input type="radio" name="can_manage_kb"  value="1" <?php echo $info['can_manage_kb']?'checked':''?> />Yes
                <input type="radio" name="can_manage_kb"  value="0" <?php echo !$info['can_manage_kb']?'checked':''?> />No
                &nbsp;&nbsp;<i>Ability to add/update/disable/delete premade responses.</i>
            </td>
        </tr>
    </table>
    <tr><td style="padding-left:165px;padding-top:20px;">
        <input class="button" type="submit" name="submit" value="Submit">
        <input class="button" type="reset" name="reset" value="Reset">
        <input class="button" type="button" name="cancel" value="Cancel" onClick='window.location.href="admin.php?t=groups"'>
        </td>
    </tr>
 </form>
</table>
