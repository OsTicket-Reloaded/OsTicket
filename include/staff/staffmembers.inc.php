<?php
if(!defined('OSTADMININC') || !$thisuser->isadmin()) die($trl->translate("TEXT_ACCESS_DENIED"));

//List all staff members...not pagenating...
$sql='SELECT staff.staff_id, staff.group_id,staff.dept_id, firstname,lastname, username'.
     ',isactive,onvacation,isadmin,group_name,dept_name,DATE(staff.created) as created,lastlogin,staff.updated '.
     ' FROM '.STAFF_TABLE.' staff '.
     ' LEFT JOIN '.GROUP_TABLE.' groups ON staff.group_id=groups.group_id'.
     ' LEFT JOIN '.DEPT_TABLE.' dept ON staff.dept_id=dept.dept_id';
    
if($_REQUEST['dept'] && is_numeric($_REQUEST['dept'])){
    $id=$_REQUEST['dept'];
    $sql.=' WHERE staff.dept_id='.db_input($_REQUEST['dept']);
}
$users=db_query($sql.' ORDER BY lastname,firstname');
$showing=($num=db_num_rows($users))?"Staff Members":"No staff found. <a href='admin.php?t=staff&a=new&dept=$id'>Add New User</a>.";        
?>
 <div class="msg">&nbsp;<?php echo $showing?>&nbsp;</div>
 <table width="100%" border="0" cellspacing=1 cellpadding=2>
    <form action="admin.php?t=staff" method="POST" name="staff" onSubmit="return checkbox_checker(document.forms['staff'],1,0);">
    <input type=hidden name='a' value='staff'>
    <input type=hidden name='do' value='mass_process'>
    <tr><td>
     <table border="0" cellspacing=0 cellpadding=2 class="dtable" align="center" width="100%">
        <tr>
	        <th width="7px">&nbsp;</th>
	        <th>Full Name</th>
            <th>User Name</th>
            <th>Status</th>
            <th>Group</th>
            <th>Dept</th>
            <th>Created</th>
            <th>Last Login</th>
        </tr>
        <?php 
        $class = 'row1';
        $total=0;
        $uids=($errors && is_array($_POST['uids']))?$_POST['uids']:null;
        if($users && db_num_rows($users)):
            while ($row = db_fetch_array($users)) {
                $sel=false;
                if(($uids && in_array($row['staff_id'],$uids)) or ($uID && $uID==$row['staff_id'])){
                    $class="$class highlight";
                    $sel=true;
                }
                $name=ucfirst($row['firstname'].' '.$row['lastname']);
                ?>
            <tr class="<?php echo $class?>" id="<?php echo $row['staff_id']?>">
                <td width=7px>
                  <input type="checkbox" name="uids[]" value="<?php echo $row['staff_id']?>" <?php echo $sel?'checked':''?>  onClick="highLight(this.value,this.checked);">
                <td><a href="admin.php?t=staff&id=<?php echo $row['staff_id']?>"><?php echo Format::htmlchars($name)?></a>&nbsp;</td>
                <td><?php echo $row['username']?></td>
                <td><?php echo $row['isactive']?'Active':'<b>Locked</b>'?>&nbsp;<?php echo $row['onvacation']?'(<i>vacation</i>)':''?></td>
                <td><a href="admin.php?t=grp&id=<?php echo $row['group_id']?>"><?php echo Format::htmlchars($row['group_name'])?></a></td>
                <td><a href="admin.php?t=dept&id=<?php echo $row['dept_id']?>"><?php echo Format::htmlchars($row['dept_name'])?></a></td>
                <td><?php echo Format::db_date($row['created'])?></td>
                <td><?php echo Format::db_datetime($row['lastlogin'])?>&nbsp;</td>
            </tr>
            <?php 
            $class = ($class =='row2') ?'row1':'row2';
            } //end of while.
        else: ?> 
            <tr class="<?php echo $class?>"><td colspan=8><b>Query returned 0 results</b></td></tr>
        <?php 
        endif; ?>
     </table>
    </td></tr>
    <?php 
    if(db_num_rows($users)>0): //Show options..
     ?>
    <tr><td>
        <div style="margin-left:20px;">
            Select:&nbsp;
            <a href="#" onclick="return select_all(document.forms['staff'],true)">All</a>&nbsp;&nbsp;
            <a href="#" onclick="return toogle_all(document.forms['staff'],true)">Toggle</a>&nbsp;&nbsp;
            <a href="#" onclick="return reset_all(document.forms['staff'])">None</a>&nbsp;&nbsp;
        </div>
    </td></tr>
    <tr><td align="center">
        <input class="button" type="submit" name="enable" value="Enable" 
            onClick=' return confirm("Are you sure you want to ENABLE selected user(s)?");'>
        <input class="button" type="submit" name="disable" value="Lock" 
            onClick=' return confirm("Are you sure you want to LOCK selected user(s)?");'>
        <input class="button" type="submit" name="delete" value="Delete" 
            onClick=' return confirm("Are you sure you want to DELETE selected user(s)?");'>
    </td></tr>
    <?php 
    endif;
    ?>
    </form>
 </table>
