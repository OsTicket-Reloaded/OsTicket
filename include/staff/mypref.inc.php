<?php
if(!defined('OSTSCPINC') || !is_object($thisuser) || !$rep) die('Kwaheri');
?>
<div class="msg">&nbsp;<?php echo $trl->translate('TITLE_MY_PREFERENCES');?></div>
<table width="100%" border="0" cellspacing=2 cellpadding=3>
 <form action="profile.php" method="post">
 <input type="hidden" name="t" value="pref">
 <input type="hidden" name="id" value="<?php echo $thisuser->getId()?>">
    <tr>
        <td width="145" nowrap>Maximum page size:</td>        
        <td>
            <select name="max_page_size">
                <?php 
                $pagelimit=$rep['max_page_size']?$rep['max_page_size']:$cfg->getPageSize();
                for ($i = 5; $i <= 50; $i += 5) {?>
                    <option <?php echo $pagelimit== $i ? 'SELECTED':''?>><?php echo $i?></option>
                <?php }?>
            </select> Tickets/items per page.
        </td>
    </tr>
    <tr>
        <td nowrap>Auto Refresh Rate:</td>
        <td>
            <input type="input" size=3 name="auto_refresh_rate" value="<?php echo $rep['auto_refresh_rate']?>">
            in Mins. (<i>Tickets page refresh rate in minutes. Enter 0 to disable</i>)
        </td>
    </tr>
    <tr>
        <td nowrap>Preferred Timezone:</td>
        <td>
            <select name="timezone_offset">
                <?php 
                $gmoffset  = date("Z") / 3600; //Server's offset.
                $currentoffset = ($rep['timezone_offset']==NULL)?$cfg->getTZOffset():$rep['timezone_offset'];
                echo"<option value=\"$gmoffset\">Server Time (GMT $gmoffset:00)</option>"; //Default if all fails.
                $timezones= db_query('SELECT offset,timezone FROM '.TIMEZONE_TABLE);
                while (list($offset,$tz) = db_fetch_row($timezones)){
                    $selected = ($currentoffset==$offset) ?'SELECTED':'';
                    $tag=($offset)?"GMT $offset ($tz)":" GMT ($tz)"; ?>
                    <option value="<?php echo $offset?>"<?php echo $selected?>><?php echo $tag?></option>
                <?php }?>
            </select>
        </td>
    </tr>
    <tr>
        <td>Daylight Savings:</td>
        <td>
            <input type="checkbox" name="daylight_saving" <?php echo $rep['daylight_saving'] ? 'checked': ''?>>Observe daylight saving
        </td>
    </tr>
   <tr><td>Current Time:</td>
        <td><b><i><?php echo Format::date($cfg->getDateTimeFormat(),Misc::gmtime(),$rep['timezone_offset'],$rep['daylight_saving'])?></i></b></td>
    </tr>  
    <tr>
        <td>&nbsp;</td>
        <td><br>
            <input class="button" type="submit" name="submit" value="Submit">
            <input class="button" type="reset" name="reset" value="Reset">
            <input class="button" type="button" name="cancel" value="Cancel" onClick='window.location.href="profile.php"'>
        </td>
    </tr>
 </form>
</table>
