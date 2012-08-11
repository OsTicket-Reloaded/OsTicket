<?php
if(!defined('SETUPINC')) die('Kwaheri wafiki!');

$info=($errors && $_POST)?Format::input($_POST):array(); //use post data.
   
if(!isset($info['title'])) {
    $info['title']='osTicket :: Support Ticket System';
}
if(!isset($info['dbhost'])) {
    $info['dbhost']='localhost';
}
if(!isset($info['prefix'])) {
    $info['prefix']='ost_';
}


?>
<div style="padding:3px; padding-top:1px; padding-bottom:5px;">
&nbsp;All fields are required.
<form action=install.php method=post name=setup>
<table width="100%" cellspacing="0" cellpadding="2" class="setup">
	<!-- (issue 6) -->
	<tr>
        <td>OSTicket Language:</td><td>
        <?php 
        $langs = Translator::listLanguages();
        ?>
        <select name="ostlang" id="ostlang" onChange="var uri = '<?php 
	$uri = $_SERVER['PHP_SELF'];
	if(strpos($uri, '?')){
		$uri.='&';
	}else{
		$uri.='?';
	} 
	$uri .= 'ostlang=';
	echo $uri;
?>';
var option=this.options[this.selectedIndex];
if (option.value!='nothing'){
	document.location = uri+option.value ;
}">
        <?php   
        foreach($langs as  $lang ) {
        	$option = "<option value=\"". $lang ."\" "; 
        	if($lang == $info['ostlang'] || $lang == $_GET['ostlang']){
        		$option .= "selected='selected'";
        	} 
        	$option .= ">";
        	$nameLang = Translator::languageName($lang);
        	$option .= "($lang) $nameLang </option>\n";
        	echo $option;
        }
        ?>
        </select> 
            &nbsp;<p><font class="error"><?php echo $errors['ostlang']; ?></font></p>
        </td>
    </tr>
    <tr class="title"><td colspan=2>osTicket web path and title</td></tr>
    <tr class="subtitle"><td colspan=2>Url to osTicket installation on your server and the title.</td></tr>
    <tr><td width=150>HelpDesk URL:</td><td><b><?php echo URL?></b></td></tr>
    <tr>
        <td>HelpDesk Title:</td><td><input type=text name=title size=40 value="<?php echo $info['title']?>">
            &nbsp;<font class="error"><?php echo $errors['title']?></font></td>
    </tr>
    <tr class="title"><td colspan=2>System email</td></tr>
    <tr class="subtitle"><td colspan=2>Default system email (e.g support@yourdomain.com) You can change or add more emails later.</td></tr>
    <tr><td>Default Email:</td><td><input type=text name=sysemail size=40 value="<?php echo $info['sysemail']?>">
            &nbsp;<font class="error"><?php echo $errors['sysemail']?></font></td>
    </tr> 
    <tr class="title"><td colspan=2>Admin user</td></tr>
    <tr class="subtitle"><td colspan=2>Min of six characters for the password. You can change or add more users later.</td></tr>
    <tr>
        <td colspan=2>
         <table border=0 cellspacing=0 cellpadding=2 class="clean">
            <tr><td width=150>Username:</td>
                <td><input type=text name=username size=20 value="<?php echo $info['username']?>">
                    &nbsp;<font class="error"><?php echo $errors['username']?></font></td></tr>
            <tr><td>Password:</td>
                <td><input type=password name=password size=20 value="<?php echo $info['password']?>">
                    &nbsp;<font class="error"><?php echo $errors['password']?></font></td></tr>
            <tr><td>Password (again):</td>
                <td><input type=password name=password2 size=20 value="<?php echo $info['password2']?>">
                    &nbsp;<font class="error"><?php echo $errors['password2']?></font></td>
            </tr>
            <tr><td>Email:</td><td><input type=text name=email size=40 value="<?php echo $info['email']?>">
                    &nbsp;<font class="error"><?php echo $errors['email']?></font></td></tr>
         </table>
        </td>
    </tr>
    <tr class="title"><td colspan=2>Database</td></tr>
    <tr class="subtitle"><td colspan=2>MySQL (version 4.4+) is the only database supported at the moment.</td></tr>
    <tr>
        <td colspan=2><span class="error"><b><?php echo $errors['mysql']?></b></span>
         <table cellspacing=1 cellpadding=2 border=0>
            <tr><td width=150>MySQL Table Prefix:</td><td><input type=text name=prefix size=20 value="<?php echo $info['prefix']?>" >
                    <font class="error"><?php echo $errors['prefix']?></font></td></tr>
            <tr><td>MySQL Hostname:</td><td><input type=text name=dbhost size=20 value="<?php echo $info['dbhost']?>" >
                    <font class="error"><?php echo $errors['dbhost']?></font></td></tr>
            <tr><td>MySQL Database:</td><td><input type=text name=dbname size=20 value="<?php echo $info['dbname']?>">
                    <font class="error"><?php echo $errors['dbname']?></font></td></tr>
            <tr><td>MySQL Username:</td><td><input type=text name=dbuser size=20 value="<?php echo $info['dbuser']?>">
                    <font class="error"><?php echo $errors['dbuser']?></font></td></tr>
            <tr><td>MySQL Password:</td><td><input type=password name=dbpass size=20 value="<?php echo $info['dbpass']?>">
                    <font class="error"><?php echo $errors['dbpass']?></font></td></tr>
         </table>
        </td>
    </tr>
</table>
<div align="center">
    <input class="button" type=submit value="Install">
    <input class="button" type=reset name=reset value="Reset">
</div>
</form>
</div> 
