<?php
if(!defined('OSTADMININC') || basename($_SERVER['SCRIPT_NAME'])==basename(__FILE__)) die('Habari/Jambo rafiki? '); //Say hi to our friend..
if(!$thisuser || !$thisuser->isadmin()) die($trl->translate("TEXT_ACCESS_DENIED"));

$info=($_POST && $errors)?Format::input($_POST):Format::htmlchars($cfg->getSMTPInfo());
?>
<div class="msg"><?php echo $title?></div>
<table width="98%" border="0" cellspacing=0 cellpadding=0>
<form action="admin.php?t=smtp" method="post">
 <input type="hidden" name="do" value="save">
 <input type="hidden" name="t" value="smtp">
 <tr><td>
    <table width="100%" border="0" cellspacing=0 cellpadding=2 class="tform">
        <tr class="header"><td colspan=2>SMTP Server Setting (Optional)</b></td></tr>
        <tr class="subheader"><td colspan=2>
             When enabled the system will use an SMTP server rather than the internal PHP mail() function for outgoing emails.<br>
             Leave the username and password empty of the SMTP server doesn't require authentication<br/>
            <b>Please be patient, the system will try to login to SMTP server to validate the entered login info.</b></td></tr>
        <tr><th>Enable SMTP</th>
            <td>
                <input type="radio" name="isenabled"  value="1"   <?php echo $info['isenabled']?'checked':''?> /><b>Yes</b>
                <input type="radio" name="isenabled"  value="0"   <?php echo !$info['isenabled']?'checked':''?> />No
                &nbsp;<font class="error">&nbsp;<?php echo $errors['isenabled']?></font>
            </td>
        </tr>
        <tr><th>SMTP Host</th>
            <td><input type="text" name="host" size=35 value="<?php echo $info['host']?>">
                &nbsp;<font class="error">*&nbsp;<?php echo $errors['host']?></font>
            </td>
        </tr>
        <tr><th>SMTP Port</th>
            <td><input type="text" name="port" size=6 value="<?php echo $info['port']?>">
                &nbsp;<font class="error">*&nbsp;<?php echo $errors['port']?></font>
            </td>
        </tr>
        <tr><th>Encryption</th>
            <td>
                 <input type="radio" name="issecure"  value="0"  
                    <?php echo !$info['issecure']?'checked':''?> />None
                 <input type="radio" name="issecure"  value="1"   
                    <?php echo $info['issecure']?'checked':''?> />TLS (secure)
                <font class="error">&nbsp;<?php echo $errors['issecure']?></font>
            </td>
        </tr>
        <tr><th><?php echo $trl->translate('LABEL_USERNAME') ?></th>
            <td class="mainTableAlt"><input type="text" name="userid" size=35 value="<?php echo $info['userid']?>" autocomplete='off' >
                &nbsp;<font class="error">*&nbsp;<?php echo $errors['userid']?></font>
            </td>
        </tr>
        <tr><th><?php echo $trl->translate('LABEL_PASSWORD') ?></th>
            <td><input type="password" name="userpass" size=35 value="<?php echo $info['userpass']?>" autocomplete='off'>
                &nbsp;<font class="error">*&nbsp;<?php echo $errors['userpass']?></font>
            </td>
        </tr>
        <tr><th>Email Address</th>
            <td>
                <input type="text" name="fromaddress" size=30 value="<?php echo $info['fromaddress']?>">
                    &nbsp;<font class="error">*&nbsp;<?php echo $errors['fromaddress']?></font>
            </td>
        </tr>
        <tr><th>Email Name:</th>
            <td>
                <input type="text" name="fromname" size=30 value="<?php echo $info['fromname']?>">&nbsp;<font class="error">&nbsp;<?php echo $errors['fromname']?></font>
                &nbsp;&nbsp;(<i>Optional email's FROM name.</i>)
            </td>
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
