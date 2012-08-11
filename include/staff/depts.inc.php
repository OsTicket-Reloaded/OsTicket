<?php
if(!defined('OSTADMININC') || !$thisuser->isadmin()) die($trl->translate("TEXT_ACCESS_DENIED"));
//List all Depts
$sql='SELECT dept.dept_id,dept_name,email.email_id,email.email,email.name as email_name,ispublic,count(staff.staff_id) as users '.
     ',CONCAT_WS(" ",mgr.firstname,mgr.lastname) as manager,mgr.staff_id as manager_id,dept.created,dept.updated  FROM '.DEPT_TABLE.' dept '.
     ' LEFT JOIN '.STAFF_TABLE.' mgr ON dept.manager_id=mgr.staff_id '.
     ' LEFT JOIN '.EMAIL_TABLE.' email ON dept.email_id=email.email_id '.
     ' LEFT JOIN '.STAFF_TABLE.' staff ON dept.dept_id=staff.dept_id ';
$depts=db_query($sql.' GROUP BY dept.dept_id ORDER BY dept_name');    
?>
<div class="msg"><?php $trl->_('LABEL_DEPARTMENTS')?></div>
<table width="100%" border="0" cellspacing=1 cellpadding=2>
    <form action="admin.php?t=dept" method="POST" name="depts" onSubmit="return checkbox_checker(document.forms['depts'],1,0);">
    <input type=hidden name='do' value='mass_process'>
    <tr><td>
    <table border="0" cellspacing=0 cellpadding=2 class="dtable" align="center" width="100%">
        <tr>
	        <th width="7px">&nbsp;</th>
	        <th><?php $trl->_('LABEL_DEPT_NAME')?></th>
            <th><?php $trl->_('LABEL_TYPE')?></th>
            <th width=10><?php $trl->_('LABEL_USERS')?></th>
            <th><?php $trl->_('LABEL_PRIMARY_OUTGOING_EMAIL')?></th>
            <th><?php $trl->_('LABEL_MANAGER')?></th>
        </tr>
        <?php 
        $class = 'row1';
        $total=0;
        $ids=($errors && is_array($_POST['ids']))?$_POST['ids']:null;
        if($depts && db_num_rows($depts)):
            $defaultId=$cfg->getDefaultDeptId();
            while ($row = db_fetch_array($depts)) {
                $sel=false;
                if(($ids && in_array($row['dept_id'],$ids)) && ($deptID && $deptID==$row['dept_id'])){
                    $class="$class highlight";
                    $sel=true;
                }
                $row['email']=$row['email_name']?($row['email_name'].' &lt;'.$row['email'].'&gt;'):$row['email'];
                $default=($defaultId==$row['dept_id'])?'('.$trl->_t('LABEL_DEFAULT').')':'';
                ?>
            <tr class="<?php echo $class?>" id="<?php echo $row['dept_id']?>">
                <td width=7px>
                  <input type="checkbox" name="ids[]" value="<?php echo $row['dept_id']?>" <?php echo $sel?'checked':''?>  <?php echo $default?'disabled':''?>
                            onClick="highLight(this.value,this.checked);"> </td>
                <td><a href="admin.php?t=dept&id=<?php echo $row['dept_id']?>"><?php echo $row['dept_name']?></a>&nbsp;<?php echo $default?></td>
                <td><?php echo $row['ispublic']?$trl->_t('LABEL_PUBLIC'):'<b>'.$trl->_t('LABEL_PUBLIC').'</b>'?></td>
                <td>&nbsp;&nbsp;
                    <b>
                    <?php if($row['users']>0) {?>
                        <a href="admin.php?t=staff&dept=<?php echo $row['dept_id']?>"><?php echo $row['users']?></a>
                    <?php }else{?> 0
                    <?php }?>
                    </b>
                </td>
                <td><a href="admin.php?t=email&id=<?php echo $row['email_id']?>"><?php echo $row['email']?></a></td>
                <td><a href="admin.php?t=staff&id=<?php echo $row['manager_id']?>"><?php echo $row['manager']?>&nbsp;</a></td>
            </tr>
            <?php 
            $class = ($class =='row2') ?'row1':'row2';
            } //end of while.
        else: //not tickets found!! ?> 
            <tr class="<?php echo $class?>"><td colspan=6><b><?php $trl->_('TEXT_QUERY_RETURNED_ZERO_RESULTS')?></b></td></tr>
        <?php 
        endif; ?>
    </table>
    </td></tr>
    <?php 
    if($depts && db_num_rows($depts)): //Show options..
     ?>
    <tr>
        <td style="padding-left:20px">
            Select:&nbsp;
            <a href="#" onclick="return select_all(document.forms['depts'],true)"><?php $trl->_('LABEL_ALL')?></a>&nbsp;&nbsp;
            <a href="#" onclick="return reset_all(document.forms['depts'])"><?php $trl->_('LABEL_NONE')?></a>&nbsp;&nbsp;
            <a href="#" onclick="return toogle_all(document.forms['depts'],true)"><?php $trl->_('LABEL_TOGGLE')?></a>&nbsp;&nbsp;
        </td>
    </tr>
    <tr>
        <td align="center">
            <input class="button" type="submit" name="public" value="<?php $trl->_('LABEL_MAKE_PUBLIC')?>"
                onClick=' return confirm("Are you sure you want to make selected depts(s) public?");'>
            <input class="button" type="submit" name="private" value="<?php $trl->_('LABEL_MAKE_PRIVATE')?>" 
                onClick=' return confirm("Are you sure you want to make selected depts(s) private?");'>
            <input class="button" type="submit" name="delete" value="<?php $trl->_('LABEL_DELETE_DEPT_S')?>" 
                onClick=' return confirm("Are you sure you want to DELETE selected depts(s)?");'>
        </td>
    </tr>
    <?php 
    endif;
    ?>
    </form>
</table>
