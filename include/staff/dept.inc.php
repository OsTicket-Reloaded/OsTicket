<?php
if(!defined('OSTADMININC') || !$thisuser->isadmin()) die($trl->translate("TEXT_ACCESS_DENIED"));
$info=null;
if($dept && $_REQUEST['a']!='new'){
    //Editing Department.
    $title=$trl->_t('LABEL_UPDATE_DEPARTMENT');
    $action='update';
    $info=$dept->getInfo();
}else {
    $title=$trl->_t('LABEL_NEW_DEPARTMENT');
    $action='create';
    $info['ispublic']=isset($info['ispublic'])?$info['ispublic']:1;
    $info['ticket_auto_response']=isset($info['ticket_auto_response'])?$info['ticket_auto_response']:1;
    $info['message_auto_response']=isset($info['message_auto_response'])?$info['message_auto_response']:1;
}
$info=($errors && $_POST)?Format::input($_POST):Format::htmlchars($info);

?>
<div class="msg"><?php echo $title?></div>
<table width="100%" border="0" cellspacing=0 cellpadding=0>
 <form action="admin.php?t=dept&id=<?php echo $info['dept_id']?>" method="POST" name="dept">
 <input type="hidden" name="do" value="<?php echo $action?>">
 <input type="hidden" name="a" value="<?php echo Format::htmlchars($_REQUEST['a'])?>">
 <input type="hidden" name="t" value="dept">
 <input type="hidden" name="dept_id" value="<?php echo $info['dept_id']?>">
 <tr><td>
    <table width="100%" border="0" cellspacing=0 cellpadding=2 class="tform">
        <tr class="header"><td colspan=2><?php $trl->_('LABEL_DEPARTMENT')?></td></tr>
        <tr class="subheader"><td colspan=2 ><?php $trl->_('TEXT_DEPT_DEPENDS_ON_EMAIL')?></td></tr>
        <tr><th><?php $trl->_('LABEL_DEPT_NAME')?>:</th>
            <td><input type="text" name="dept_name" size=25 value="<?php echo $info['dept_name']?>">
                &nbsp;<font class="error">*&nbsp;<?php echo $errors['dept_name']?></font>
                    
            </td>
        </tr>
        <tr>
            <th><?php $trl->_('LABEL_DEPT_EMAIL')?>:</th>
            <td>
                <select name="email_id">
                    <option value=""><?php echo  $trl->translate('LABEL_SELECT_ONE_EMAIL') ?></option>
                    <?php 
                    $emails=db_query('SELECT email_id,email,name,smtp_active FROM '.EMAIL_TABLE);
                    while (list($id,$email,$name,$smtp) = db_fetch_row($emails)){
                        $email=$name?"$name &lt;$email&gt;":$email;
                        if($smtp)
                            $email.=' (SMTP)';
                        ?>
                     <option value="<?php echo $id?>"<?php echo ($info['email_id']==$id)?'selected':''?>><?php echo $email?></option>
                    <?php 
                    }?>
                 </select>
                 &nbsp;<font class="error">*&nbsp;<?php echo $errors['email_id']?></font>&nbsp;(<?php $trl->_('LABEL_OUTGOING_EMAIL')?>)
            </td>
        </tr>    
        <?php  if($info['dept_id']) { //update 
            $users= db_query('SELECT staff_id,CONCAT_WS(" ",firstname,lastname) as name FROM '.STAFF_TABLE.' WHERE dept_id='.db_input($info['dept_id']));
            ?>
        <tr>
            <th><?php $trl->_('LABEL_DEPT_MANAGER')?>:</th>
            <td>
                <?php if($users && db_num_rows($users)) {?>
                <select name="manager_id">
                    <option value=0 >-------<?php $trl->_('LABEL_DEPT_MANAGER_NONE')?>-------</option>
                    <option value=0 disabled ><?php $trl->_('LABEL_SELECT_MANAGER_OPTIONAL')?></option>
                     <?php 
                     while (list($id,$name) = db_fetch_row($users)){ ?>
                        <option value="<?php echo $id?>"<?php echo ($info['manager_id']==$id)?'selected':''?>><?php echo $name?></option>
                     <?php }?>
                     
                </select>
                 <?php }else {?>
                       <?php $trl->_('LABEL_NO_MANAGER_ADD_USERS')?>
                       <input type="hidden" name="manager_id"  value="0" />
                 <?php }?>
                    &nbsp;<font class="error">&nbsp;<?php echo $errors['manager_id']?></font>
            </td>
        </tr>
        <?php }?>
        <tr><th><?php $trl->_('LABEL_DEPT_TYPE')?></th>
            <td>
                <input type="radio" name="ispublic"  value="1"   <?php echo $info['ispublic']?'checked':''?> /><?php $trl->_('LABEL_PUBLIC')?>
                <input type="radio" name="ispublic"  value="0"   <?php echo !$info['ispublic']?'checked':''?> /><?php $trl->_('LABEL_PRIVATE_HIDDEN')?>
                &nbsp;<font class="error"><?php echo $errors['ispublic']?></font>
            </td>
        </tr>
        <tr>
            <th valign="top"><br/><?php $trl->_('LABEL_DEPT_SIGNATURE')?>:</th>
            <td>
                <i><?php $trl->_('TEXT_REQUIRED_WHEN_DEPT_IS_PUBLIC')?></i>&nbsp;&nbsp;&nbsp;<font class="error"><?php echo $errors['dept_signature']?></font><br/>
                <textarea name="dept_signature" cols="21" rows="5" style="width: 60%;"><?php echo $info['dept_signature']?></textarea>
                <br>
                <input type="checkbox" name="can_append_signature" <?php echo $info['can_append_signature'] ?'checked':''?> >
                <?php $trl->_('TEXT_CAM_BE_APPENDED_TO_RESPONSES')?>  
            </td>
        </tr>
        <tr><th><?php $trl->_('LABEL_EMAIL_TEMPLATES')?>:</th>
            <td>
                <select name="tpl_id">
                    <option value=0 disabled><?php $trl->_('LABEL_SELECT_TEMPLATE')?></option>
                    <option value="0" selected="selected"><?php $trl->_('LABEL_SYSTEM_DEFAULT_TEMPLATE')?></option>
                    <?php 
                    $templates=db_query('SELECT tpl_id,name FROM '.EMAIL_TEMPLATE_TABLE.' WHERE tpl_id!='.db_input($cfg->getDefaultTemplateId()));
                    while (list($id,$name) = db_fetch_row($templates)){
                        $selected = ($info['tpl_id']==$id)?'SELECTED':''; ?>
                        <option value="<?php echo $id?>"<?php echo $selected?>><?php echo Format::htmlchars($name)?></option>
                    <?php 
                    }?>
                </select><font class="error">&nbsp;<?php echo $errors['tpl_id']?></font><br/>
                <i><?php $trl->_('TEXT_USED_FOR_OUTGOING_EMAILS')?></i>
            </td>
        </tr>
        <tr class="header"><td colspan=2><?php $trl->_('LABEL_AUTORESPONDERS')?></td></tr>
        <tr class="subheader"><td colspan=2>
	        <?php $trl->_('TEXT_GLOBAL_AUTO_RESPONSE_SETTINGS')?> 
            </td>
        </tr>
        <tr><th><?php $trl->_('LABEL_NEW_TICKET')?>:</th>
            <td>
                <input type="radio" name="ticket_auto_response"  value="1"   <?php echo $info['ticket_auto_response']?'checked':''?> />Enable
                <input type="radio" name="ticket_auto_response"  value="0"   <?php echo !$info['ticket_auto_response']?'checked':''?> />Disable
            </td>
        </tr>
        <tr><th><?php $trl->_('LABEL_NEW_MESSAGE')?>:</th>
            <td>
                <input type="radio" name="message_auto_response"  value="1"   <?php echo $info['message_auto_response']?'checked':''?> />Enable
                <input type="radio" name="message_auto_response"  value="0"   <?php echo !$info['message_auto_response']?'checked':''?> />Disable
            </td>
        </tr>
        <tr>
            <th><?php $trl->_('LABEL_AUTO_RESPONSE_EMAIL')?>:</th>
            <td>
                <select name="autoresp_email_id">
                    <option value="0" disabled><?php echo  $trl->_('TEXT_SELECT_ONE_EMAIL') ?></option>
                    <option value="0" selected="selected"><?php $trl->_('LABEL_DEPT_EMAIL_ABOVE')?></option>
                    <?php 
                    $emails=db_query('SELECT email_id,email,name,smtp_active FROM '.EMAIL_TABLE.' WHERE email_id!='.db_input($info['email_id']));
                    if($emails && db_num_rows($emails)) {
                        while (list($id,$email,$name,$smtp) = db_fetch_row($emails)){
                            $email=$name?"$name &lt;$email&gt;":$email;
                            if($smtp)
                                $email.=' (SMTP)';
                            ?>
                            <option value="<?php echo $id?>"<?php echo ($info['autoresp_email_id']==$id)?'selected':''?>><?php echo $email?></option>
                        <?php 
                        }
                    }?>
                 </select>
                 &nbsp;<font class="error">&nbsp;<?php echo $errors['autoresp_email_id']?></font>&nbsp;<br/>
                 <i><?php $trl->_('TEXT_EMAIL_ADDRESS_USED_SEND_AUTO_RESPONSES')?></i>
            </td>
        </tr>
    </table>
    </td></tr>
    <tr><td style="padding:10px 0 10px 200px;">
        <input class="button" type="submit" name="submit" value="<?php $trl->_('LABEL_SUBMIT')?>">
        <input class="button" type="reset" name="reset" value="<?php $trl->_('LABEL_RESET')?>">
        <input class="button" type="button" name="cancel" value="<?php $trl->_('LABEL_CANCEL')?>" onClick='window.location.href="admin.php?t=dept"'>
    </td></tr>
    </form>
</table>
