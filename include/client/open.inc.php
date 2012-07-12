<?php
if(!defined('OSTCLIENTINC')) die('Kwaheri rafiki!'); //Say bye to our friend..

$info=($_POST && $errors)?Format::input($_POST):($_GET ? Format::input($_GET) : array()); //on error...use the post data or use get data if available to prefill fields
?>
<div>
    <?if($errors['err']) {?>
        <p align="center" id="errormessage"><?php echo $errors['err']?></p>
    <?}elseif($msg) {?>
        <p align="center" id="infomessage"><?php echo $msg?></p>
    <?}elseif($warn) {?>
        <p id="warnmessage"><?php echo $warn?></p>
    <?}?>
</div>
<div><?php echo $trl->translate('TEXT_PLEASE_FILL_FORM_NEW_TICKET')?></div><br>
<form action="open.php" method="POST" enctype="multipart/form-data">
<table align="left" cellpadding=2 cellspacing=1 width="90%">
    <tr>
        <th width="20%"><?php echo $trl->translate('LABEL_FULL_NAME')?>:</th>
        <td>
            <?if ($thisclient && ($name=$thisclient->getName())) {
                ?>
                <input type="hidden" name="name" value="<?php echo $name?>"><?php echo $name?>
            <?}else {?>
                <input type="text" name="name" size="25" value="<?php echo $info['name']?>">
	        <?}?>
            &nbsp;<font class="error">*&nbsp;<?php echo $errors['name']?></font>
	        </td>
    </tr>
    <tr>
        <th nowrap ><?php echo $trl->translate('LABEL_EMAIL_ADDRESS')?>:</th>
        <td>
            <?if ($thisclient && ($email=$thisclient->getEmail())) {
                ?>
                <input type="hidden" name="email" size="25" value="<?php echo $email?>"><?php echo $email?>
            <?}else {?>             
                <input type="text" name="email" size="25" value="<?php echo $info['email']?>">
            <?}?>
            &nbsp;<font class="error">*&nbsp;<?php echo $errors['email']?></font>
            <?if ($thisclient && ($name=$thisclient->getName())) { ?>
            	<br>
				<A href="logout.php" ><?php echo $trl->translate('TEXT_NOT_THIS_USER')?></A>
			<?}?>
        </td>
    </tr>
    <tr>
        <td><?php echo $trl->translate('LABEL_TELEPHONE'); ?>:</td>
        <td><input type="text" name="phone" size="25" value="<?php echo $info['phone']?>">
             &nbsp;Ext&nbsp;<input type="text" name="phone_ext" size="6" value="<?php echo $info['phone_ext']?>">
            &nbsp;<font class="error">&nbsp;<?php echo $errors['phone']?></font></td>
    </tr>
    <tr height=2px><td align="left" colspan=2 >&nbsp;</td></tr>
    <tr>
        <th><?php echo $trl->translate('LABEL_HELP_TOPIC'); ?>:</th>
        <td>
            <select name="topicId">
                <option value="" selected ><?php $trl->_('LABEL_SELECT_ONE_TOPIC') ?></option>
                <?
                 $services= db_query('SELECT topic_id,topic FROM '.TOPIC_TABLE.' WHERE isactive=1 ORDER BY topic');
                 while (list($topicId,$topic) = db_fetch_row($services)){
                    $selected = ($info['topicId']==$topicId || $info['topic']==$topic)?'selected':''; ?>
                    <option value="<?php echo $topicId?>"<?php echo $selected?>><?php echo $topic?></option>
                <?
                 }?>
                <?php /*<option value="0" ><?php echo $trl->translate('TEXT_GENERAL_INQUIRY');?></option> */ ?>
            </select>
            &nbsp;<font class="error">*&nbsp;<?php echo $errors['topicId']?></font>
        </td>
    </tr>
    <tr>
        <th><?php echo $trl->translate('LABEL_SUBJECT')?>:</th>
        <td>
            <input type="text" name="subject" size="35" value="<?php echo $info['subject']?>">
            &nbsp;<font class="error">*&nbsp;<?php echo $errors['subject']?></font>
        </td>
    </tr>
    <tr>
        <th valign="top"><?php echo $trl->translate('LABEL_MESSAGE')?>:</th>
        <td>
            <? if($errors['message']) {?> <font class="error"><b>&nbsp;<?php echo $errors['message']?></b></font><br/><?}?>
            <textarea name="message" cols="35" rows="8" wrap="soft" style="width:85%"><?php echo $info['message']?></textarea></td>
    </tr>
    <?
    if($cfg->allowPriorityChange() ) {
      $sql='SELECT priority_id,priority_desc FROM '.TICKET_PRIORITY_TABLE.' WHERE ispublic=1 ORDER BY priority_urgency DESC';
      if(($priorities=db_query($sql)) && db_num_rows($priorities)){ ?>
      <tr>
        <td><?php echo $trl->translate('LABEL_PRIORITY')?>:</td>
        <td>
            <select name="pri">
              <?
                $info['pri']=$info['pri']?$info['pri']:$cfg->getDefaultPriorityId(); //use system's default priority.
                while($row=db_fetch_array($priorities)){ ?>
                    <option value="<?php echo $row['priority_id']?>" <?php echo $info['pri']==$row['priority_id']?'selected':''?> ><?php echo $row['priority_desc']?></option>
              <?}?>
            </select>
        </td>
       </tr>
    <? }
    }?>

    <?if(($cfg->allowOnlineAttachments() && !$cfg->allowAttachmentsOnlogin())  
                || ($cfg->allowAttachmentsOnlogin() && ($thisclient && $thisclient->isValid()))){
        
        ?>
    <tr>
        <td><?php echo $trl->translate('LABEL_ATTACHMENT')?>:</td>
        <td>
            <input type="file" name="attachment"><font class="error">&nbsp;<?php echo $errors['attachment']?></font>
        </td>
    </tr>
    <?}?>
    <?if($cfg && $cfg->enableCaptcha() && (!$thisclient || !$thisclient->isValid())) {
        if($_POST && $errors && !$errors['captcha'])
            $errors['captcha']='Please re-enter the text again';
        ?>
    <tr>
        <th valign="top">Captcha Text:</th>
        <td><img src="captcha.php" border="0" align="left">
        <span>&nbsp;&nbsp;<input type="text" name="captcha" size="7" value="">&nbsp;<i>Enter the text shown on the image.</i></span><br/>
                <font class="error">&nbsp;<?php echo $errors['captcha']?></font>
        </td>
    </tr>
    <?}?>
    <tr height=2px><td align="left" colspan=2 >&nbsp;</td></tr>
    <tr>
        <td></td>
        <td>
            <input class="button" type="submit" name="submit_x" value="<?php echo $trl->translate('LABEL_SUBMIT_TICKET')?>">
            <input class="button" type="reset" value="<?php echo $trl->translate('LABEL_RESET')?>">
            <input class="button" type="button" name="cancel" value="<?php echo $trl->translate('LABEL_CANCEL')?>" onClick='window.location.href="index.php"'>    
        </td>
    </tr>
</table>
</form>
