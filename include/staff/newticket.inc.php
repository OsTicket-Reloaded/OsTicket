<?php
if(!defined('OSTSCPINC') || !is_object($thisuser) || !$thisuser->isStaff()) die($trl->translate("TEXT_ACCESS_DENIED"));
$info=($_POST && $errors)?Format::input($_POST):array(); //on error...use the post data
?>
<div width="100%">
    <?php if($errors['err']) {?>
        <p align="center" id="errormessage"><?php echo $errors['err']?></p>
    <?php }elseif($msg) {?>
        <p align="center" class="infomessage"><?php echo $msg?></p>
    <?php }elseif($warn) {?>
        <p class="warnmessage"><?php echo $warn?></p>
    <?php }?>
</div>
<form action="tickets.php" method="post" enctype="multipart/form-data">
<input type='hidden' name='a' value='open'>
<table width="80%" border="0" cellspacing="1" cellpadding="2">
    <tr><td align="left" colspan=2><?php  $trl->_('TEXT_PLEASE_FILL_STAFF_FORM_BELOW_OPEN_NEW_TICKET')?></td></tr>
    <tr>
        <td align="left" nowrap width="20%"><b><?php  $trl->_('LABEL_EMAIL_ADDRESS')?>:</b></td>
        <td>
            <input type="text" id="email" name="email" size="25" value="<?php echo $info['email']?>">
            &nbsp;<font class="error"><b>*</b>&nbsp;<?php echo $errors['email']?></font>
            <?php  if($cfg->notifyONNewStaffTicket()) {?>
               &nbsp;&nbsp;&nbsp;
               <input type="checkbox" name="alertuser" <?php echo (!$errors || $info['alertuser'])? 'checked': ''?>>Send alert to user.
            <?php }?>
        </td>
    </tr>
    <tr>
        <td align="left" ><b><?php $trl->_('LABEL_FULL_NAME');?>:</b></td>
        <td>
            <input type="text" id="name" name="name" size="25" value="<?php echo $info['name']?>">
            &nbsp;<font class="error"><b>*</b>&nbsp;<?php echo $errors['name']?></font>
        </td>
    </tr>
    <tr>
        <td align="left"><?php $trl->_('LABEL_TELEPHONE')?>:</td>
        <td><input type="text" name="phone" size="25" value="<?php echo $info['phone']?>">
            &nbsp;Ext&nbsp;<input type="text" name="phone_ext" size="6" value="<?php echo $info['phone_ext']?>">
            <font class="error">&nbsp;<?php echo $errors['phone']?></font></td>
    </tr>
    <tr height="2px"><td align="left" colspan=2 >&nbsp;</td></tr>
    <tr>
        <td align="left"><b><?php $trl->_('LABEL_TICKET_SOURCE')?>:</b></td>
        <td>
            <select name="source">
                <option value="" selected ><?php $trl->_('LABEL_SELECT_SOURCE')?></option>
                <option value="Phone" <?php echo ($info['source']=='Phone')?'selected':''?>><?php $trl->_('LABEL_PHONE')?></option>
                <option value="Email" <?php echo ($info['source']=='Email')?'selected':''?>><?php $trl->_('LABEL_EMAIL')?></option>
                <option value="Other" <?php echo ($info['source']=='Other')?'selected':''?>><?php $trl->_('LABEL_OTHER')?></option>
            </select>
            &nbsp;<font class="error"><b>*</b>&nbsp;<?php echo $errors['source']?></font>
        </td>
    </tr>
    <tr>
        <td align="left"><b><?php $trl->_('LABEL_DEPARTMENT')?>:</b></td>
        <td>
            <select name="deptId">
                <option value="" selected ><?php $trl->_('LABEL_SELECT_DEPARTMENT')?></option>
                <?php 
                 $services= db_query('SELECT dept_id,dept_name FROM '.DEPT_TABLE.' ORDER BY dept_name');
                 while (list($deptId,$dept) = db_fetch_row($services)){
                    $selected = ($info['deptId']==$deptId)?'selected':''; ?>
                    <option value="<?php echo $deptId?>"<?php echo $selected?>><?php echo $dept?></option>
                <?php 
                 }?>
            </select>
            &nbsp;<font class="error"><b>*</b>&nbsp;<?php echo $errors['deptId']?></font>
        </td>
    </tr>
    <tr>
        <td align="left"><b><?php $trl->_('LABEL_SUBJECT')?>:</b></td>
        <td>
            <input type="text" name="subject" size="35" value="<?php echo $info['subject']?>">
            &nbsp;<font class="error">*&nbsp;<?php echo $errors['subject']?></font>
        </td>
    </tr>
    <tr>
        <td align="left" valign="top"><b><?php $trl->_('LABEL_ISSUE_SUMMARY')?>:</b></td>
        <td>
            <i><?php $trl->_('TEXT_Visible to client')?></i><font class="error"><b>*&nbsp;<?php echo $errors['issue']?></b></font><br/>
            <?php 
            $sql='SELECT premade_id,title FROM '.KB_PREMADE_TABLE.' WHERE isenabled=1';
            $canned=db_query($sql);
            if($canned && db_num_rows($canned)) {
            ?>
             Premade:&nbsp;
              <select id="canned" name="canned"
                onChange="getCannedResponse(this.options[this.selectedIndex].value,this.form,'issue');this.selectedIndex='0';" >
                <option value="0" selected="selected">Select a premade reply/issue</option>
                <?php while(list($cannedId,$title)=db_fetch_row($canned)) { ?>
                <option value="<?php echo $cannedId?>" ><?php echo Format::htmlchars($title)?></option>
                <?php }?>
              </select>&nbsp;&nbsp;&nbsp;<label><input type='checkbox' value='1' name=append checked="true" />Append</label>
            <?php }?>
            <textarea name="issue" cols="55" rows="8" wrap="soft"><?php echo $info['issue']?></textarea></td>
    </tr>
    <?php if($cfg->canUploadFiles()) {
        ?>
    <tr>
        <td>Attachment:</td>
        <td>
            <input type="file" name="attachment"><font class="error">&nbsp;<?php echo $errors['attachment']?></font>
        </td>
    </tr>
    <?php }?>
    <tr>
        <td align="left" valign="top">Internal Note:</td>
        <td>
            <i>Optional Internal note(s).</i><font class="error"><b>&nbsp;<?php echo $errors['note']?></b></font><br/>
            <textarea name="note" cols="55" rows="5" wrap="soft"><?php echo $info['note']?></textarea></td>
    </tr>

    <tr>
        <td align="left" valign="top">Due Date:</td>
        <td>
            <i>Time is based on your time zone (GM <?php echo $thisuser->getTZoffset()?>)</i>&nbsp;<font class="error">&nbsp;<?php echo $errors['time']?></font><br>
            <input id="duedate" name="duedate" value="<?php echo Format::htmlchars($info['duedate'])?>"
                onclick="event.cancelBubble=true;calendar(this);" autocomplete=OFF>
            <a href="#" onclick="event.cancelBubble=true;calendar(getObj('duedate')); return false;"><img src='images/cal.png'border=0 alt=""></a>
            &nbsp;&nbsp;
            <?php
             $min=$hr=null;
             if($info['time'])
                list($hr,$min)=explode(':',$info['time']);
                echo Misc::timeDropdown($hr,$min,'time');
            ?>
            &nbsp;<font class="error">&nbsp;<?php echo $errors['duedate']?></font>
        </td>
    </tr>

    <?php 
      $sql='SELECT priority_id,priority_desc FROM '.TICKET_PRIORITY_TABLE.' ORDER BY priority_urgency DESC';
      if(($priorities=db_query($sql)) && db_num_rows($priorities)){ ?>
      <tr>
        <td align="left">Priority:</td>
        <td>
            <select name="pri">
              <?php 
                $info['pri']=$info['pri']?$info['pri']:$cfg->getDefaultPriorityId();
                while($row=db_fetch_array($priorities)){ ?>
                    <option value="<?php echo $row['priority_id']?>" <?php echo $info['pri']==$row['priority_id']?'selected':''?> ><?php echo $row['priority_desc']?></option>
              <?php }?>
            </select>
        </td>
       </tr>
    <?php  }?>
    <?php
    $services= db_query('SELECT topic_id,topic FROM '.TOPIC_TABLE.' WHERE isactive=1 ORDER BY topic');
    if($services && db_num_rows($services)){ ?>
    <tr>
        <td align="left" valign="top">Help Topic:</td>
        <td>
            <select name="topicId">
                <option value="" selected >Select One</option>
                <?php 
                 while (list($topicId,$topic) = db_fetch_row($services)){
                    $selected = ($info['topicId']==$topicId)?'selected':''; ?>
                    <option value="<?php echo $topicId?>"<?php echo $selected?>><?php echo $topic?></option>
                <?php 
                 }?>
            </select>
            &nbsp;<font class="error">&nbsp;<?php echo $errors['topicId']?></font>
        </td>
    </tr>
    <?php 
    }?>
    <tr>
        <td>Assign To:</td>
        <td>
            <select id="staffId" name="staffId">
                <option value="0" selected="selected">-Assign To Staff-</option>
                <?php 
                    //TODO: make sure the user's group is also active....DO a join.
                    $sql=' SELECT staff_id,CONCAT_WS(", ",lastname,firstname) as name FROM '.STAFF_TABLE.' WHERE isactive=1 AND onvacation=0 ';
                    $depts= db_query($sql.' ORDER BY lastname,firstname ');
                    while (list($staffId,$staffName) = db_fetch_row($depts)){
                        $selected = ($info['staffId']==$staffId)?'selected':''; ?>
                        <option value="<?php echo $staffId?>"<?php echo $selected?>><?php echo $staffName?></option>
                    <?php 
                    }?>
            </select><font class='error'>&nbsp;<?php echo $errors['staffId']?></font>
                &nbsp;&nbsp;&nbsp;
                <input type="checkbox" name="alertstaff" <?php echo (!$errors || $info['alertstaff'])? 'checked': ''?>>Send alert to assigned staff.
        </td>
    </tr>
    <tr>
        <td>Signature:</td>
        <td> <?php
            $appendStaffSig=$thisuser->appendMySignature();
            $info['signature']=!$info['signature']?'none':$info['signature']; //change 'none' to 'mine' to default to staff signature.
            ?>
            <div style="margin-top: 2px;">
                <label><input type="radio" name="signature" value="none" checked > None</label>
                <?php if($appendStaffSig) {?>
                    <label> <input type="radio" name="signature" value="mine" <?php echo $info['signature']=='mine'?'checked':''?> > My signature</label>
                 <?php }?>
                 <label><input type="radio" name="signature" value="dept" <?php echo $info['signature']=='dept'?'checked':''?> > Dept Signature (if any)</label>
            </div>
        </td>
    </tr>
    <tr height=2px><td align="left" colspan=2 >&nbsp;</td></tr>
    <tr>
        <td></td>
        <td>
            <input class="button" type="submit" name="submit_x" value="Submit Ticket">
            <input class="button" type="reset" value="Reset">
            <input class="button" type="button" name="cancel" value="Cancel" onClick='window.location.href="tickets.php"'>    
        </td>
    </tr>
</table>
  </form>
<script type="text/javascript">
    
    var options = {
        script:"ajax.php?api=tickets&f=searchbyemail&limit=10&",
        varname:"input",
        json: true,
        shownoresults:false,
        maxresults:10,
        callback: function (obj) { document.getElementById('email').value = obj.id; document.getElementById('name').value = obj.info; return false;}
    };
    var autosug = new bsn.AutoSuggest('email', options);
</script>
