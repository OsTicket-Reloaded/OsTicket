<?php
if(!defined('OSTADMININC') || basename($_SERVER['SCRIPT_NAME'])==basename(__FILE__)) die('Habari/Jambo rafiki? '); //Say hi to our friend..
if(!$thisuser || !$thisuser->isadmin()) die($trl->translate("TEXT_ACCESS_DENIED"));

$info=($_POST && $errors)?$_POST:array(); //Re-use the post info on error...savekeyboards.org
if($email && $_REQUEST['a']!='new'){
    $title='Edit Email'; 
    $action='update';
    if(!$info) {
        $info=$email->getInfo();
        $info['userpass']=$info['userpass']?Misc::decrypt($info['userpass'],SECRET_SALT):'';
    }
    $qstr='?t=email&id='.$email->getId();
}else {
   $title='New Email';
   $action='create';
   $info['smtp_auth']=isset($info['smtp_auth'])?$info['smtp_auth']:1;
}

$info=Format::htmlchars($info);
//get the goodies.
$depts= db_query('SELECT dept_id,dept_name FROM '.DEPT_TABLE);
$priorities= db_query('SELECT priority_id,priority_desc FROM '.TICKET_PRIORITY_TABLE);
?>
<div class="msg"><?php echo $title?></div>
<table width="100%" border="0" cellspacing=0 cellpadding=0>
<form action="admin.php<?php echo $qstr?>" method="post">
 <input type="hidden" name="do" value="<?php echo $action?>">
 <input type="hidden" name="a" value="<?php echo Format::htmlchars($_REQUEST['a'])?>">
 <input type="hidden" name="t" value="email">
 <input type="hidden" name="email_id" value="<?php echo $info['email_id']?>">
 <tr><td>
    <table width="100%" border="0" cellspacing=0 cellpadding=2 class="tform">
        <tr class="header"><td colspan=2>Email Info</td></tr>
        <tr class="subheader">
            <td colspan=2 >Settings are mainly for emailed tickets. For online/web tickets see help topics.</td>
        </tr>
        <tr><th>Email Address</th>
            <td>
                <input type="text" name="email" size=30 value="<?php echo $info['email']?>">&nbsp;<font class="error">*&nbsp;<?php echo $errors['email']?></font>
            </td>
        </tr>
        <tr><th>Email Name:</th>
            <td>
                <input type="text" name="name" size=30 value="<?php echo $info['name']?>">&nbsp;<font class="error">&nbsp;<?php echo $errors['name']?></font>
                &nbsp;&nbsp;(<i>Optional email's FROM name.</i>)
            </td>
        </tr>
        <tr><th><?php $trl->_('LABEL_NEW_TICKET_PRIORITY')?></th>
            <td>
                <select name="priority_id">
                    <option value=0><?php $trl->_('LABEL_SELECT_PRIORITY')?></option>
                    <?php 
                    while (list($id,$name) = db_fetch_row($priorities)){
                        $selected = ($info['priority_id']==$id)?'selected':''; ?>
                        <option value="<?php echo $id?>"<?php echo $selected?>><?php echo $name?></option>
                    <?php 
                    }?>
                </select>&nbsp;<font class="error">*&nbsp;<?php echo $errors['priority_id']?></font>
            </td>
        </tr>
        <tr><th>New Ticket Dept.</th>
            <td>
                <select name="dept_id">
                    <option value=0>Select Department</option>
                    <?php 
                    while (list($id,$name) = db_fetch_row($depts)){
                        $selected = ($info['dept_id']==$id)?'selected':''; ?>
                        <option value="<?php echo $id?>"<?php echo $selected?>><?php echo $name?> Dept</option>
                    <?php 
                    }?>
                </select>&nbsp;<font class="error">&nbsp;<?php echo $errors['dept_id']?></font>&nbsp;
            </td>
        </tr>
        <tr><th>Auto Response</th>
            <td>
                <input type="checkbox" name="noautoresp" value=1 <?php echo $info['noautoresp']? 'checked': ''?> ><b>Disable</b> autoresponse for this email.
                &nbsp;&nbsp;(<i>Overwrite Dept setting</i>)
            </td>
        </tr>
        <tr class="subheader">
            <td colspan=2 ><b>Login info (optional)</b>: Required when IMAP/POP and/or SMTP are enabled.</td>
        </tr>
        <tr><th><?php echo $trl->translate('LABEL_USERNAME') ?></th>
            <td><input type="text" name="userid" size=35 value="<?php echo $info['userid']?>" autocomplete='off' >
                &nbsp;<font class="error">&nbsp;<?php echo $errors['userid']?></font>
            </td>
        </tr>
        <tr><th><?php echo $trl->translate('LABEL_PASSWORD') ?></th>
            <td>
               <input type="password" name="userpass" size=35 value="<?php echo $info['userpass']?>" autocomplete='off'>
                &nbsp;<font class="error">&nbsp;<?php echo $errors['userpass']?></font>
            </td>
        </tr>
        <tr class="header"><td colspan=2>Mail Account (Optional)</b></td></tr>
        <tr class="subheader"><td colspan=2>
             Setting for fetching incoming emails. Mail fetching must be enabled with autocron active or external cron setup.<br>
            <b>Please be patient, the system will try to login to mail server to validate the entered login info.</b>
            <font class="error">&nbsp;<?php echo $errors['mail']?></font></td></tr>
        <tr><th>Status</th>
            <td>
                <label><input type="radio" name="mail_active"  value="1"   <?php echo $info['mail_active']?'checked':''?> />Enable</label>
                <label><input type="radio" name="mail_active"  value="0"   <?php echo !$info['mail_active']?'checked':''?> />Disable</label>
                &nbsp;<font class="error">&nbsp;<?php echo $errors['mail_active']?></font>
            </td>
        </tr>
        <tr><th>Host</th>
            <td><input type="text" name="mail_host" size=35 value="<?php echo $info['mail_host']?>">
                &nbsp;<font class="error">&nbsp;<?php echo $errors['mail_host']?></font>
            </td>
        </tr>
        <tr><th>Port</th>
            <td><input type="text" name="mail_port" size=6 value="<?php echo $info['mail_port']?$info['mail_port']:''?>">
                &nbsp;<font class="error">&nbsp;<?php echo $errors['mail_port']?></font>
            </td>
        </tr>
        <tr><th>Protocol</th>
            <td>
                <select name="mail_protocol">
                    <option value='POP'>Select</option>
                    <option value='POP' <?php echo ($info['mail_protocol']=='POP')?'selected="selected"':''?> >POP</option>
                    <option value='IMAP' <?php echo ($info['mail_protocol']=='IMAP')?'selected="selected"':''?> >IMAP</option>
                </select>
                <font class="error">&nbsp;<?php echo $errors['mail_protocol']?></font>
            </td>
        </tr>

        <tr><th>Encryption</th>
            <td>
                 <label><input type="radio" name="mail_encryption"  value="NONE"
                    <?php echo ($info['mail_encryption']!='SSL')?'checked':''?> />None</label>
                 <label><input type="radio" name="mail_encryption"  value="SSL"
                    <?php echo ($info['mail_encryption']=='SSL')?'checked':''?> />SSL</label>
                <font class="error">&nbsp;<?php echo $errors['mail_encryption']?></font>
            </td>
        </tr>
        <tr><th>Fetch Frequency</th>
            <td>
                <input type="text" name="mail_fetchfreq" size=4 value="<?php echo $info['mail_fetchfreq']?$info['mail_fetchfreq']:''?>"> Delay intervals in minutes
                &nbsp;<font class="error">&nbsp;<?php echo $errors['mail_fetchfreq']?></font>
            </td>
        </tr>
        <tr><th>Maximum Emails Per Fetch</th>
            <td>
                <input type="text" name="mail_fetchmax" size=4 value="<?php echo $info['mail_fetchmax']?$info['mail_fetchmax']:''?>"> Maximum emails to process per fetch.
                &nbsp;<font class="error">&nbsp;<?php echo $errors['mail_fetchmax']?></font>
            </td>
        </tr>
        <tr><th>Delete Messages</th>
            <td>
                <input type="checkbox" name="mail_delete" value=1 <?php echo $info['mail_delete']? 'checked': ''?> >
                    Delete fetched message(s) (<i>recommended when using POP</i>)
                &nbsp;<font class="error">&nbsp;<?php echo $errors['mail_delete']?></font>
            </td>
        </tr>
        <tr class="header"><td colspan=2>SMTP Settings (Optional)</b></td></tr>
        <tr class="subheader"><td colspan=2>
             When enabled the <b>email account</b> will use SMTP server instead of internal PHP mail() function for outgoing emails.<br>
            <b>Please be patient, the system will try to login to SMTP server to validate the entered login info.</b>
                <font class="error">&nbsp;<?php echo $errors['smtp']?></font></td></tr>
        <tr><th>Status</th>
            <td>
                <label><input type="radio" name="smtp_active"  value="1"   <?php echo $info['smtp_active']?'checked':''?> />Enable</label>
                <label><input type="radio" name="smtp_active"  value="0"   <?php echo !$info['smtp_active']?'checked':''?> />Disable</label>
                &nbsp;<font class="error">&nbsp;<?php echo $errors['smtp_active']?></font>
            </td>
        </tr>
        <tr><th>SMTP Host</th>
            <td><input type="text" name="smtp_host" size=35 value="<?php echo $info['smtp_host']?>">
                &nbsp;<font class="error">&nbsp;<?php echo $errors['smtp_host']?></font>
            </td>
        </tr>
        <tr><th>SMTP Port</th>
            <td><input type="text" name="smtp_port" size=6 value="<?php echo $info['smtp_port']?$info['smtp_port']:''?>">
                &nbsp;<font class="error">&nbsp;<?php echo $errors['smtp_port']?></font>
            </td>
        </tr>
        <tr><th><?php echo $trl->translate('TEXT_AUTHENTICATION_REQUIRED_QUESTION')?></th>
            <td>

                 <label><input type="radio" name="smtp_auth"  value="1"
                    <?php echo $info['smtp_auth']?'checked':''?> />Yes</label>
                 <label><input type="radio" name="smtp_auth"  value="0"
                    <?php echo !$info['smtp_auth']?'checked':''?> />NO</label>
                <font class="error">&nbsp;<?php echo $errors['smtp_auth']?></font>
            </td>
        </tr>
        <tr><th>Encryption</th>
            <td>Best available authentication method is auto-selected based on what the sever supports.</td>
        </tr>
    </table>
   </td></tr>
   <tr><td style="padding:10px 0 10px 220px;">
            <input class="button" type="submit" name="submit" value="Submit">
            <input class="button" type="reset" name="reset" value="Reset">
            <input class="button" type="button" name="cancel" value="Cancel" onClick='window.location.href="admin.php?t=email"'>
        </td>
     </tr>
</form>
</table>
