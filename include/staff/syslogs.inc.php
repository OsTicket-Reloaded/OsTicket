<?php
if(!defined('OSTSCPINC') || !@$thisuser->isStaff()) die($trl->translate("TEXT_ACCESS_DENIED"));

global $trl;

$qstr='&t=syslog'; //Query string collector
if($_REQUEST['type']) { 
    $qstr.='&amp;type='.urlencode($_REQUEST['type']);
}

$type=null;

switch(strtolower($_REQUEST['type'])){
    case 'error':
        $title = t('LABEL_SYSTEM_LOGS_ERRORS');
        $type=$_REQUEST['type'];
        break;
    case 'warning':
        $title = t('LABEL_SYSTEM_LOGS_WARNINGS');
        $type=$_REQUEST['type'];
        break;
    case 'debug':
        $title = t('LABEL_SYSTEM_LOGS_DEBUG');
        $type=$_REQUEST['type'];
        break;
    default:
        $title = t('LABEL_SYSTEM_LOGS_ALL');
        $type=null;
}

$qwhere =' WHERE 1';

//Type
if($type){
    $qwhere.=' AND log_type='.db_input($type);    
}

//dates
$startTime  =($_REQUEST['startDate'] && (strlen($_REQUEST['startDate'])>=8))?strtotime($_REQUEST['startDate']):0;
$endTime    =($_REQUEST['endDate'] && (strlen($_REQUEST['endDate'])>=8))?strtotime($_REQUEST['endDate']):0;
if( ($startTime && $startTime>time()) or ($startTime>$endTime && $endTime>0)){
    $errors['err']='Entered date span is invalid. Selection ignored.';
    $startTime=$endTime=0;    
}else{
    
    //Have fun with dates.
    
    if($startTime){
    
        $qwhere.=' AND created>=FROM_UNIXTIME('.$startTime.')';
            
                
        $qstr.='&startDate='.urlencode($_REQUEST['startDate']);
                        
        
        
    }
    
    if($endTime){
    
        $qwhere.=' AND created<=FROM_UNIXTIME('.$endTime.')';
        
        $qstr.='&endDate='.urlencode($_REQUEST['endDate']);
        
    }
}

$qselect = 'SELECT log.* ';
$qfrom=' FROM '.SYSLOG_TABLE.' log ';
//get log count based on the query so far..
$total=db_count("SELECT count(*) $qfrom $qwhere");
$pagelimit=30;
$page = ($_GET['p'] && is_numeric($_GET['p']))?$_GET['p']:1;  
//pagenate
$pageNav=new Pagenate($total,$page,$pagelimit, $trl);
$pageNav->setURL('admin.php',$qstr);
$query="$qselect $qfrom $qwhere ORDER BY log.created DESC LIMIT ".$pageNav->getStart().",".$pageNav->getLimit();
//echo $query;
$result = db_query($query);
$showing=db_num_rows($resp)?$pageNav->showing():"";
?>
<div class="msg"><?php te('LABEL_SYSTEM_LOGS')?></div>
<div id='filter' >
 <form action="admin.php?t=syslog" method="get">
    <input type="hidden" name="t" value="syslog" />
    <div style="padding-left:15px;">
        <?php te('LABEL_SYSTEM_LOGS_DATESPAN')?>:
        &nbsp;<?php te('LABEL_SYSTEM_LOGS_FROM')?>&nbsp;<input id="sd" size=15 name="startDate" value="<?=Format::htmlchars($_REQUEST['startDate'])?>" 
                onclick="event.cancelBubble=true;calendar(this);" autocomplete=OFF>
            <a href="#" onclick="event.cancelBubble=true;calendar(getObj('sd')); return false;"><img src='images/cal.png'border=0 alt=""></a>
            &nbsp;&nbsp; <?php te('LABEL_SYSTEM_LOGS_TO')?> &nbsp;&nbsp;
            <input id="ed" size=15 name="endDate" value="<?=Format::htmlchars($_REQUEST['endDate'])?>" 
                onclick="event.cancelBubble=true;calendar(this);" autocomplete=OFF >
                <a href="#" onclick="event.cancelBubble=true;calendar(getObj('ed')); return false;"><img src='images/cal.png'border=0 alt=""></a>
            &nbsp;&nbsp;
            &nbsp;<?php te('LABEL_SYSTEM_LOGS_TYPE')?>:
            <select name='type'>
                <option value="" selected><?php te('LABEL_SYSTEM_LOGS_ALL')?></option>
                <option value="Error" <?=($type=='Error')?'selected="selected"':''?>><?php te('LABEL_SYSTEM_LOGS_ERRORS')?></option>
                <option value="Warning" <?=($type=='Warning')?'selected="selected"':''?>><?php te('LABEL_SYSTEM_LOGS_WARNINGS')?></option>
                <option value="Debug" <?=($type=='Debug')?'selected="selected"':''?>><?php te('LABEL_SYSTEM_LOGS_DEBUG')?></option>
            </select>
            &nbsp;&nbsp;
            <input type="submit" Value="<?php te('LABEL_SYSTEM_LOGS_GO')?>!" />
    </div>
 </form>
</div>
<div style="margin-bottom:20px; padding-top:0px;">
 <table width="100%" border="0" cellspacing=1 cellpadding=2>
    <form action="tickets.php" method="POST" name='tickets' onSubmit="return checkbox_checker(this,1,0);">
    <input type="hidden" name="a" value="mass_process" >
    <input type="hidden" name="status" value="<?=$statusss?>" >
    <tr><td>
       <table width="100%" border="0" cellspacing=0 cellpadding=2 class="logs" align="center">
        <tr><th><?=$title?></th></tr>
        <?
        $class = "row1";
        $total=0;
        if($result && ($num=db_num_rows($result))):
            $icons=array('Debug'=>'debugLog','Warning'=>'alertLog','Error'=>'errorLog');
            while ($row = db_fetch_array($result)) {
                $icon=isset($icons[$row['log_type']])?$icons[$row['log_type']]:'debugLog';
                ?>
            <tr class="<?=$class?> " id="<?=$row['log_id']?>">
                <td>
                  <a href="javascript:toggleMessage('<?=$row['log_id']?>');">
                  <img border="0" align="left" id="img_<?=$row['log_id']?>" src="images/plus.gif">
                  <span style="color:000; float: left; width:190px;"><?=Format::db_daydatetime($row['created'])?></span>
                  &nbsp;&nbsp;
                  <span class="Icon <?=$icon?>"><?=Format::htmlchars($row['title'])?></span></a>
                    <div id="msg_<?=$row['log_id']?>" class="hide">
                        <hr>
                        <?=Format::display($row['log'])?>
                        <span style="text-align:right;float:right;"><i><?=Format::htmlchars($row['ip_address'])?>&nbsp;&nbsp;</i></span>
                    </div>

                </td>
            </tr>
            <?
            $class = ($class =='row2') ?'row1':'row2';
            } //end of while.
        else: //not tickets found!! ?> 
            <tr class="<?=$class?>"><td><b><?php te('LABEL_SYSTEM_LOGS_NO_RESULTS')?></b></td></tr>
        <?
        endif; ?>
       </table>
    </td></tr>
    <?
    if($num>0){ 
    ?>
        <tr><td style="padding-left:20px">page:<?=$pageNav->getPageLinks()?></td></tr>
    <?} ?>
    </form>
 </table>
</div>
<?
