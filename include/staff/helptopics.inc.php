<?php
if(!defined('OSTADMININC') || !$thisuser->isadmin()) die($trl->translate("TEXT_ACCESS_DENIED"));

//List all help topics
$sql='SELECT topic_id,isactive,topic.noautoresp,topic.dept_id,topic,dept_name,priority_desc,topic.created,topic.updated FROM '.TOPIC_TABLE.' topic '.
     ' LEFT JOIN '.DEPT_TABLE.' dept ON dept.dept_id=topic.dept_id '.
     ' LEFT JOIN '.TICKET_PRIORITY_TABLE.' pri ON pri.priority_id=topic.priority_id ';
$services=db_query($sql.' ORDER BY topic'); 
?>
<div class="msg">Help Topics</div>
<table width="100%" border="0" cellspacing=1 cellpadding=2>
   <form action="admin.php?t=settings" method="POST" name="topic" onSubmit="return checkbox_checker(document.forms['topic'],1,0);">
   <input type='hidden' name='t' value='topics'>
   <input type=hidden name='do' value='mass_process'>
   <tr><td>
    <table border="0" cellspacing=0 cellpadding=2 class="dtable" align="center" width="100%">
        <tr>
	        <th width="7px">&nbsp;</th>
	        <th>Help Topic</th>
            <th>Status</th>
            <th>AutoResp.</th>
            <th>Department</th>
            <th>Priority</th>
	        <th>Last Updated</th>
        </tr>
        <?php 
        $class = 'row1';
        $total=0;
        $ids=($errors && is_array($_POST['tids']))?$_POST['tids']:null;
        if($services && db_num_rows($services)):
            while ($row = db_fetch_array($services)) {
                $sel=false;
                if(($ids && in_array($row['topic_id'],$ids)) or ($row['topic_id']==$topicID)){
                    $class="$class highlight";
                    $sel=true;
                }
                ?>
            <tr class="<?php echo $class?>" id="<?php echo $row['topic_id']?>">
                <td width=7px>
                 <input type="checkbox" name="tids[]" value="<?php echo $row['topic_id']?>" <?php echo $sel?'checked':''?>  onClick="highLight(this.value,this.checked);">
                <td><a href="admin.php?t=topics&id=<?php echo $row['topic_id']?>"><?php echo Format::htmlchars(Format::truncate($row['topic'],30))?></a></td>
                <td><?php echo $row['isactive']?'Active':'<b>Disabled</b>'?></td>
                <td>&nbsp;&nbsp;<?php echo $row['noautoresp']?'No':'<b>Yes</b>'?></td>
                <td><a href="admin.php?t=dept&id=<?php echo $row['dept_id']?>"><?php echo $row['dept_name']?></a></td>
                <td><?php echo $row['priority_desc']?></td>
                <td><?php echo Format::db_datetime($row['updated'])?></td>
            </tr>
            <?php 
            $class = ($class =='row2') ?'row1':'row2';
            } //end of while.
        else: //notthing! ?> 
            <tr class="<?php echo $class?>"><td colspan=8><b>Query returned 0 results</b></td></tr>
        <?php 
        endif; ?>
    </table>
    </td></tr>
    <?php 
    if(db_num_rows($services)>0): //Show options..
     ?>
    <tr>
        <td style="padding-left:20px">
            Select:&nbsp;
            <a href="#" onclick="return select_all(document.forms['topic'],true)">All</a>&nbsp;&nbsp;
            <a href="#" onclick="return reset_all(document.forms['topic'])">None</a>&nbsp;&nbsp;
            <a href="#" onclick="return toogle_all(document.forms['topic'],true)">Toggle</a>&nbsp;&nbsp;
        </td>
    </tr>
    <tr>
        <td align="center">
            <input class="button" type="submit" name="enable" value="Enable"
                onClick=' return confirm("Are you sure you want to make selected services active?");'>
            <input class="button" type="submit" name="disable" value="Disable" 
                onClick=' return confirm("Are you sure you want to DISABLE selected services?");'>
            <input class="button" type="submit" name="delete" value="Delete" 
                onClick=' return confirm("Are you sure you want to DELETE selected services?");'>
        </td>
    </tr>
    <?php 
    endif;
    ?>
    </form>
</table>
