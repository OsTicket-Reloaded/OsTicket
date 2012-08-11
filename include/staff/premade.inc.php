<?php
if(!defined('OSTSCPINC') or !is_object($thisuser) or !$thisuser->canManageKb()) die($trl->translate("TEXT_ACCESS_DENIED"));

global $trl;

//List premade answers.
$select='SELECT premade.*,dept_name ';
$from='FROM '.KB_PREMADE_TABLE.' premade LEFT JOIN '.DEPT_TABLE.' USING(dept_id) ';

//make sure the search query is 3 chars min...defaults to no query with warning message
if($_REQUEST['a']=='search') {
    if(!$_REQUEST['query'] || strlen($_REQUEST['query'])<3) {
        $errors['err']='Search term must be more than 3 chars';
    }else{
        //fulltext search.
        $search=true;
        $qstr.='&a='.urlencode($_REQUEST['a']);
        $qstr.='&query='.urlencode($_REQUEST['query']);
        $where=' WHERE MATCH(title,answer) AGAINST ('.db_input($_REQUEST['query']).')';
        if($_REQUEST['dept'])
            $where.=' AND dept_id='.db_input($_REQUEST['dept']);
    }
}

//I admit this crap sucks...but who cares??
$sortOptions=array('createdate'=>'premade.created','updatedate'=>'premade.updated','title'=>'premade.title');
$orderWays=array('DESC'=>'DESC','ASC'=>'ASC');
//Sorting options...
if($_REQUEST['sort']) {
    $order_column =$sortOptions[$_REQUEST['sort']];
}

if($_REQUEST['order']) {
    $order=$orderWays[$_REQUEST['order']];
}


$order_column=$order_column?$order_column:'premade.title';
$order=$order?$order:'DESC';

$order_by=$search?'':" ORDER BY $order_column $order ";


$total=db_count('SELECT count(*) '.$from.' '.$where);
$pagelimit=$thisuser->getPageLimit();
$pagelimit=$pagelimit?$pagelimit:PAGE_LIMIT; //true default...if all fails.
$page=($_GET['p'] && is_numeric($_GET['p']))?$_GET['p']:1;
$pageNav=new Pagenate($total,$page,$pagelimit, $trl);
$pageNav->setURL('kb.php',$qstr.'&sort='.urlencode($_REQUEST['sort']).'&order='.urlencode($_REQUEST['order']));
//Ok..lets roll...create the actual query
$query="$select $from $where $order_by LIMIT ".$pageNav->getStart().",".$pageNav->getLimit();
//echo $query;
$replies = db_query($query);
$showing=db_num_rows($replies)?$pageNav->showing():'';
$results_type=($search)?'Search Results':'Premade/Canned Replies';
$negorder=$order=='DESC'?'ASC':'DESC'; //Negate the sorting..
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
<div align="left">
    <form action="kb.php" method="GET" >
    <input type='hidden' name='a' value='search'>
    <?php $trl->_('LABEL_SEARCH_FOR')?>:&nbsp;<input type="text" name="query" value="<?php echo Format::htmlchars($_REQUEST['query'])?>">
    <?php $trl->_('LABEL_CATEGORY')?>
    <select name="dept">
            <option value=0><?php $trl->_('LABEL_ALL_DEPARTMENTS')?></option>
            <?php 
            $depts= db_query('SELECT dept_id,dept_name FROM '.DEPT_TABLE.' WHERE dept_id!='.db_input($ticket['dept_id']));
            while (list($deptId,$deptName) = db_fetch_row($depts)){
                $selected = ($_GET['dept']==$deptId)?'selected':''; ?>
                <option value="<?php echo $deptId?>"<?php echo $selected?>>&nbsp;&nbsp;<?php echo $deptName?></option>
           <?php }?>
    </select>
    &nbsp;
    <input type="submit" name="search" class="button" value="<?php $trl->_('LABEL_GO')?>">
    </form>
</div>
<div class="msg"><?php echo $result_type?>&nbsp;<?php echo $showing?></div>
<table width="100%" border="0" cellspacing=1 cellpadding=2>
   <form action="kb.php" method="POST" name="premade" onSubmit="return checkbox_checker(document.forms['premade'],1,0);">
   <input type=hidden name='a' value='process'>
   <tr><td>
     <table border="0" cellspacing=0 cellpadding=2 class="dtable" align="center" width="100%">
        <tr>
	        <th width="7px">&nbsp;</th>
	        <th>
                <a href="kb.php?sort=title&order=<?php echo $negorder?><?php echo $qstr?>" title="<?php $trl->_('LABEL_SORT_BY_TITLE') ?> <?php echo $negorder?>"><?php $trl->_('LABEL_REPLY_TITLE') ?></a></th>
            <th width=50><?php $trl->_('LABEL_STATUS') ?></th>
	        <th width=200><?php $trl->_('LABEL_CATEGORY_DEPT') ?></th> 
	        <th width=150 nowrap>
                <a href="kb.php?sort=updatedate&order=<?php echo $negorder?><?php echo $qstr?>" title="<?php $trl->_('LABEL_SORT_BY_UPDATE_DATE') ?> <?php echo $negorder?>"><?php $trl->_('LABEL_UPDATE_DATE')?></a></th>
        </tr>
        <?php 
        $class = 'row1';
        $total=0;
        $grps=($errors && is_array($_POST['grps']))?$_POST['grps']:null;
        if($replies && db_num_rows($replies)):
            while ($row = db_fetch_array($replies)) {
                $sel=false;
                if($canned && in_array($row['premade_id'],$canned)){
                    $class="$class highlight";
                    $sel=true;
                }elseif($replyID && $replyID==$row['premade_id']) {
                    $class="$class highlight";
                }
                ?>
            <tr class="<?php echo $class?>" id="<?php echo $row['premade_id']?>">
                <td width=7px>
                  <input type="checkbox" name="canned[]" value="<?php echo $row['premade_id']?>" <?php echo $sel?'checked':''?> 
                        onClick="highLight(this.value,this.checked);">
                <td><a href="kb.php?id=<?php echo $row['premade_id']?>"><?php echo Format::htmlchars(Format::truncate($row['title'],60))?></a></td>
                <td><b><?php echo $row['isenabled']?'Active':'Disabled'?></b></td>
                <td><?php echo $row['dept_name']?Format::htmlchars($row['dept_name']):$trl->_t('LABEL_ALL_DEPARTMENTS')?></td>
                <td><?php echo Format::db_datetime($row['updated'])?></td>
            </tr>
            <?php 
            $class = ($class =='row2') ?'row1':'row2';
            } //end of while.
        else: //nothin' found!! ?> 
            <tr class="<?php echo $class?>"><td colspan=6><b><?php $trl->_('LABEL_QUERY_RETURNED_ZERO_RESULT')?></b></td></tr>
        <?php 
        endif; ?>
    </table>
   </td></tr>
   <?php 
   if(db_num_rows($replies)>0): //Show options..
    ?>
   <tr><td style="padding-left:20px">
        <?php $trl->_('LABEL_SELECT')?>:&nbsp;
        <a href="#" onclick="return select_all(document.forms['premade'],true)"><?php $trl->_('LABEL_ALL')?></a>&nbsp;
        <a href="#" onclick="return toogle_all(document.forms['premade'],true)"><?php $trl->_('LABEL_TOGGLE')?></a>&nbsp;
        <a href="#" onclick="return reset_all(document.forms['premade'])"><?php $trl->_('LABEL_NONE')?></a>&nbsp;
        &nbsp;page:<?php echo $pageNav->getPageLinks()?>&nbsp;
    </td></td>
    <tr><td align="center">
            <input class="button" type="submit" name="enable" value="Enable" 
                onClick='return confirm("Are you sure you want to ENABLE selected entries?");'>
            <input class="button" type="submit" name="disable" value="Disable" 
                onClick='return confirm("Are you sure you want to DISABLE selected entries?");'>
            <input class="button" type="submit" name="delete" value="Delete" 
                onClick='return confirm("Are you sure you want to DELETE selected entries?");'>
    </td></td>
    <?php 
    endif;
    ?>
   </form>
 </table>
