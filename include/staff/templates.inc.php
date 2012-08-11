<?php
if(!defined('OSTADMININC') || !$thisuser->isadmin()) die($trl->translate("TEXT_ACCESS_DENIED"));

global $trl;

$select='SELECT tpl.*,count(dept.tpl_id) as depts ';
$from='FROM '.EMAIL_TEMPLATE_TABLE.' tpl '.
      'LEFT JOIN '.DEPT_TABLE.' dept USING(tpl_id) ';
$where='';
$sortOptions=array('date'=>'tpl.created','name'=>'tpl.name');
$orderWays=array('DESC'=>'DESC','ASC'=>'ASC');
//Sorting options...
if($_REQUEST['sort']) {
    $order_column =$sortOptions[$_REQUEST['sort']];
}

if($_REQUEST['order']) {
    $order=$orderWays[$_REQUEST['order']];
}
$order_column=$order_column?$order_column:'name';
$order=$order?$order:'ASC';
$order_by=" ORDER BY $order_column $order ";

$total=db_count('SELECT count(*) '.$from.' '.$where);
$pagelimit=1000;//No limit.
$page=($_GET['p'] && is_numeric($_GET['p']))?$_GET['p']:1;
$pageNav=new Pagenate($total,$page,$pagelimit, $trl);
$pageNav->setURL('admin.php',$qstr.'&sort='.urlencode($_REQUEST['sort']).'&order='.urlencode($_REQUEST['order']));
$query="$select $from $where GROUP BY tpl.tpl_id $order_by";
//echo $query;
$result = db_query($query);
$showing=db_num_rows($result)?$pageNav->showing():'';
$negorder=$order=='DESC'?'ASC':'DESC'; //Negate the sorting..
$deletable=0;
?>
<div class="msg">Email Templates</div>
<hr>
<div><b><?php echo $showing?></b></div>
 <table width="100%" border="0" cellspacing=1 cellpadding=2>
   <form action="admin.php?t=templates" method="POST" name="tpl" onSubmit="return checkbox_checker(document.forms['tpl'],1,0);">
   <input type=hidden name='t' value='templates'>
   <input type=hidden name='do' value='mass_process'>
   <tr><td>
    <table border="0" cellspacing=0 cellpadding=2 class="dtable" align="center" width="100%">
        <tr>
	        <th width="7px">&nbsp;</th>
	        <th>
                <a href="admin.php?t=templates&sort=name&order=<?php echo $negorder?><?php echo $qstr?>" title="Sort by name <?php echo $negorder?>">Name</a></th>
            <th width="20" nowrap>In-Use</th>
	        <th width="170" nowrap>&nbsp;&nbsp;
                <a href="admin.php?t=templates&sort=date&order=<?php echo $negorder?><?php echo $qstr?>" title="Sort By Create Date <?php echo $negorder?>">Last Update</a></th>
            <th width="170" nowrap>Created</th>
        </tr>
        <?php 
        $class = 'row1';
        $total=0;
        $sids=($errors && is_array($_POST['ids']))?$_POST['ids']:null;
        if($result && db_num_rows($result)):
            $dtpl=$cfg->getDefaultTemplateId();
            while ($row = db_fetch_array($result)) {
                $sel=false;
                $disabled='';
                if($dtpl==$row['tpl_id'] || $row['depts'])
                    $disabled='disabled';
                else {
                    $deletable++;
                    if($sids && in_array($row['tpl_id'],$sids)){
                        $class="$class highlight";
                        $sel=true;
                    }
                }
                ?>
            <tr class="<?php echo $class?>" id="<?php echo $row['tpl_id']?>">
                <td width=7px>
                  <input type="checkbox" name="ids[]" value="<?php echo $row['tpl_id']?>" <?php echo $sel?'checked':''?> <?php echo $disabled?>
                        onClick="highLight(this.value,this.checked);">
                <td><a href="admin.php?t=templates&id=<?php echo $row['tpl_id']?>"><?php echo $row['name']?></a></td>
                <td><?php echo $disabled?'Yes':'No'?></td>
                <td><?php echo Format::db_datetime($row['updated'])?></td>
                <td><?php echo Format::db_datetime($row['created'])?></td>
            </tr>
            <?php 
            $class = ($class =='row2') ?'row1':'row2';
            } //end of while.
        else: //nothin' found!! ?> 
            <tr class="<?php echo $class?>"><td colspan=5><b>Query returned 0 results</b>&nbsp;&nbsp;<a href="admin.php?t=templates">Index list</a></td></tr>
        <?php 
        endif; ?>
     </table>
    </td></tr>
    <?php 
    if(db_num_rows($result)>0 && $deletable): //Show options..
     ?>
    <tr>
        <td align="center">
            <input class="button" type="submit" name="delete" value="Delete Template(s)" 
                     onClick='return confirm("Are you sure you want to DELETE selected template(s)?");'>
        </td>
    </tr>
    <?php 
    endif;
    ?>
    </form>
 </table>
 <br/>
 <div class="msg">Add New Template</div>
 <hr>
 <div>
   To add a new template - select existing template and edit it thereafter.<br/>
   <form action="admin.php?t=templates" method="POST" >
    <input type=hidden name='t' value='templates'>
    <input type=hidden name='do' value='add'>
    Name:
    <input name="name" size=30 value="<?php echo ($errors)?Format::htmlchars($_REQUEST['name']):''?>" />
    <font class="error">*&nbsp;<?php echo $errors['name']?></font>&nbsp;&nbsp;
    Copy: 
    <select name="copy_template">
        <option value=0>Select Template to Copy</option>
          <?php 
          $result=db_query('SELECT tpl_id,name FROM '.EMAIL_TEMPLATE_TABLE);
          while (list($id,$name)= db_fetch_row($result)){ ?>
              <option value="<?php echo $id?>"><?php echo $name?></option>
                  <?php 
          }?>
     </select>&nbsp;<font class="error">*&nbsp;<?php echo $errors['copy_template']?></font>
     &nbsp;&nbsp; <input class="button" type="submit" name="add" value="Add">
 </div>
 <br/>
 <div class="msg">Variables</div>
 <hr>
 <div>
 Variables are used on email templates as placeholders. Please note that non-base variables depends on the context in question. 
 <table width="100%" border="0" cellspacing=1 cellpadding=2>
    <tr><td width="50%" valign="top"><b>Base Variables</b></td><td><b>Other Variables</b></td></tr>
    <tr>
        <td width="50%" valign="top">
            <table width="100%" border="0" cellspacing=1 cellpadding=1>
                <tr><td width="100">%id</td><td>Ticket ID (internal ID)</td></tr>
                <tr><td>%ticket</td><td>Ticket number (external ID)</td></tr>
                <tr><td>%email</td><td>Email address</td></tr>
                <tr><td>%name</td><td>Full name</td></tr>
                <tr><td>%subject</td><td>Subject</td></tr>
                <tr><td>%topic</td><td>Help topic (web only)</td></tr>
                <tr><td>%phone</td><td>Phone number | ext</td></tr>
                <tr><td>%status</td><td>Status</td></tr>
                <tr><td>%priority</td><td>Priority</td></tr>
                <tr><td>%dept</td><td>Department</td></tr>
                <tr><td>%assigned_staff</td><td>Assigned staff (if any)</td></tr>
                <tr><td>%createdate</td><td>Date created</td></tr>
                <tr><td>%duedate</td><td>Due date</td></tr>
                <tr><td>%closedate</td><td>Date closed</td></tr>
        </table>
        </td>
        <td valign="top">
            <table width="100%" border="0" cellspacing=1 cellpadding=1>
                <tr><td width="100">%message</td><td>Message (incoming)</td></tr>
                <tr><td>%response</td><td>Response (outgoing)</td></tr>
                <tr><td>%note</td><td>Internal note</td></tr>
                <tr><td>%staff</td><td>Staff's name (alert/notices)</td></tr>
                <tr><td>%assignee</td><td>Assigned staff</td></tr>
                <tr><td>%assigner</td><td>Staff assigning the ticket</td></tr>
                <tr><td>%url</td><td>osTicket's base url (FQDN)</td></tr>

            </table>
        </td>
    </tr>
 </table>
 </div>




