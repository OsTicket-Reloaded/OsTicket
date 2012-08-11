<?php
if(!defined('OSTSCPINC') or !$thisuser->canManageKb()) die($trl->translate("TEXT_ACCESS_DENIED"));
$info=($errors && $_POST)?Format::input($_POST):Format::htmlchars($answer);
if($answer && $_REQUEST['a']!='add'){
    $title='Edit Premade Reply';
    $action='update';
}else {
    $title='Add New Premade Reply';
    $action='add';
    $info['isenabled']=1;
}
?>
<div>

    <?php if($errors['err']) {?>
        <p align="center" id="errormessage"><?php echo $errors['err']?></p>
    <?php }elseif($msg) {?>
        <p align="center" id="infomessage"><?php echo $msg?></p>
    <?php }elseif($warn) {?>
        <p id="warnmessage"><?php echo $warn?></p>
    <?php }?>
</div>
<div class="msg"><?php echo $title?></div>
<table width="100%" border="0" cellspacing=1 cellpadding=2>
    <form action="kb.php" method="POST" name="group">
    <input type="hidden" name="a" value="<?php echo $action?>">
    <input type="hidden" name="id" value="<?php echo $info['premade_id']?>">
    <tr><td width=80px><?php $trl->_('LABEL_TITLE')?>:</td>
        <td><input type="text" size=45 name="title" value="<?php echo $info['title']?>">
            &nbsp;<font class="error">*&nbsp;<?php echo $errors['title']?></font>
        </td>
    </tr>
    <tr>
        <td><?php $trl->_('LABEL_STATUS')?>:</td>
        <td>
            <input type="radio" name="isenabled"  value="1"   <?php echo $info['isenabled']?'checked':''?> /> Active
            <input type="radio" name="isenabled"  value="0"   <?php echo !$info['isenabled']?'checked':''?> />Offline
            &nbsp;<font class="error">&nbsp;<?php echo $errors['isenabled']?></font>
        </td>
    </tr>
    <tr><td valign="top"><?php $trl->_('LABEL_CATEGORY')?>:</td>
        <td>Department under which the 'answer' will be made available.&nbsp;<font class="error">&nbsp;<?php echo $errors['depts']?></font><br/>
            <select name=dept_id>
                <option value=0 selected><?php $trl->_('LABEL_ALL_DEPARTMENTS') ?></option>
                <?php 
                $depts= db_query('SELECT dept_id,dept_name FROM '.DEPT_TABLE.' ORDER BY dept_name');
                while (list($id,$name) = db_fetch_row($depts)){
                    $ck=($info['dept_id']==$id)?'selected':''; ?>
                    <option value="<?php echo $id?>" <?php echo $ck?>><?php echo $name?></option>
                <?php 
                }?>
            </select>
        </td>
    </tr>
    <tr><td valign="top"><?php $trl->_('LABEL_ANSWER')?>:</td>
        <td>Premade Reply - Ticket's base variables are supported.&nbsp;<font class="error">*&nbsp;<?php echo $errors['answer']?></font><br/>
            <textarea name="answer" id="answer" cols="90" rows="9" wrap="soft" style="width:80%"><?php echo $info['answer']?></textarea>
        </td>
    </tr>
    <tr>
        <td nowrap>&nbsp;</td>
        <td><br>
            <input class="button" type="submit" name="submit" value="Submit">
            <input class="button" type="reset" name="reset" value="Reset">
            <input class="button" type="button" name="cancel" value="Cancel" onClick='window.location.href="kb.php"'>
        </td>
    </tr>
    </form>
</table>
