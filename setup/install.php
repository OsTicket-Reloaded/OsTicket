<?php
/*********************************************************************
    install.php

    osTicket Installer.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2010 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
    $Id: $
**********************************************************************/

#inits
error_reporting(E_ALL ^ E_NOTICE); //turn on errors
ini_set('magic_quotes_gpc', 0);
ini_set('session.use_trans_sid', 0);
ini_set('session.cache_limiter', 'nocache');
ini_set('display_errors',1); //We want the user to see errors during install process.
ini_set('display_startup_errors',1);

#start session
session_start();
require('setup.inc.php');

$errors=array();
$fp=null;
$_SESSION['abort']=false;
define('VERSION','1.6 ST'); //Current version number
define('VERSION_VERBOSE','1.6 Stable'); //What the user sees during installation process.
define('CONFIGFILE','../include/ost-config.php'); //osTicket config file full path.
// TODO (issue 6)insert here code to select language to install
// how use a constant, need redefine the constant if 
//language  change on first instaltion screen
define('SCHEMAFILE','./inc/osticket-v1.6.sql'); //osTicket SQL schema.
define('URL',rtrim('http'.(($_SERVER['HTTPS']=='on')?'s':'').'://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']),'setup'));

$install='<strong>Need help?</strong> <a href="http://www.osticket.com/support/" target="_blank">Professional Installation Available</a>';
$support='<strong>Get a peace of mind</strong> <a href="http://www.osticket.com/support/" target="_blank">Commercial Support Available</a>';

//Basic checks 
$inc='install.inc.php';
$info=$install;

if(file_exists('../ostconfig.php') || file_exists('../include/settings.php')) { //old installation? try upgrading it buddy.
    header('Location: upgrade.php');
    die('Old installation exists....try upgrade instead');
}elseif((double)phpversion()<4.3){ //Old PHP installation
    $errors['err']='PHP installation seriously out of date';
    $inc='php.inc.php';
}elseif(!file_exists(CONFIGFILE)) { 
    $errors['err']=sprintf('Configuration file (%s) missing!',basename(CONFIGFILE));
    $inc='missing.inc.php';
}elseif(($cFile=file_get_contents(CONFIGFILE)) && preg_match("/define\('OSTINSTALLED',TRUE\)\;/i",$cFile)){
    $errors['err']='Configuration file already modified!';
    $inc='unclean.inc.php';
}elseif(!file_exists(CONFIGFILE) || !is_writable(CONFIGFILE)) { //writable config file??
    clearstatcache();
    $errors['err']='Configuration file is not writable';
    $inc='chmod.inc.php';
}else {
    $configfile=file_get_contents(CONFIGFILE); //Get the goodies...peek and tell.
    //Make SURE this is a new installation. 
    if(preg_match("/define\('OSTINSTALLED',TRUE\)\;/i",$configfile) || !strpos($configfile,'%CONFIG-DBHOST')){
        $errors['err']='Configuration file already modified!';
        $inc='unclean.inc.php';
    }elseif($_POST){
        $f=array();
        $f['ostlang']   = array('type'=>'string', 'required'=>1, 'error'=>'OsTicket Language is Required');
        $f['title']     = array('type'=>'string', 'required'=>1, 'error'=>'Title required');
        $f['sysemail']  = array('type'=>'email',  'required'=>1, 'error'=>'Valid email required');
        $f['username']  = array('type'=>'username', 'required'=>1, 'error'=>'Username required');
        $f['password']  = array('type'=>'password', 'required'=>1, 'error'=>'Password required');
        $f['password2'] = array('type'=>'password', 'required'=>1, 'error'=>'Confirm password');
        $f['email']     = array('type'=>'email',  'required'=>1, 'error'=>'Valid email required');
        $f['dbhost']    = array('type'=>'string', 'required'=>1, 'error'=>'Hostname required');
        $f['dbname']    = array('type'=>'string', 'required'=>1, 'error'=>'Database name required');
        $f['dbuser']    = array('type'=>'string', 'required'=>1, 'error'=>'Username required');
        $f['dbpass']    = array('type'=>'string', 'required'=>1, 'error'=>'password required');
        $f['prefix']    = array('type'=>'string', 'required'=>1, 'error'=>'Table prefix required');
        
        $validate = new Validator($f);
        if(!$validate->validate($_POST)){
            $errors=array_merge($errors,$validate->errors());
        }
        if($_POST['sysemail'] && $_POST['email'] && !strcasecmp($_POST['sysemail'],$_POST['email']))
            $errors['email']='Conflicts with system email above';
        if(!$errors && strcasecmp($_POST['password'],$_POST['password2']))
            $errors['password2']='passwords to not match!';
        //Check table prefix underscore required at the end!
        if($_POST['prefix'] && substr($_POST['prefix'], -1)!='_')
            $errors['prefix']='Bad prefix. Must have underscore (_) at the end. e.g \'ost_\'';
       
        //Make sure admin username is not very predictable.
        if(!$errors['username'] && in_array(strtolower($_POST['username']),array('admin','admins','username','osticket')))
            $errors['username']='Bad username';

        //Connect to the DB
        if(!$errors && !db_connect($_POST['dbhost'],$_POST['dbuser'],$_POST['dbpass']))
            $errors['mysql']='Unable to connect to MySQL server. Possibly invalid login info. <br>'; 
        //check mysql version
        if(!$errors && (db_version()<'4.1.1'))
            $errors['mysql']='osTicket requires MySQL 4.1.1 or better! Please upgrade';
        
        //Select the DB
        if(!$errors && !db_select_database($_POST['dbname'])) {
            //Try creating the missing DB
            if(!mysql_query('CREATE DATABASE '.$_POST['dbname'].' DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci')) {
                $errors['dbname']='Database doesn\'t exist';
                $errors['mysql']='Unable to create the database due to permission';
            }elseif(!db_select_database($_POST['dbname'])) {
                $errors['dbname']='Unable to select the database';
            }
        }
        //Get database schema
		// TODO (issue 6)
        if(!$errors && !file_exists(SCHEMAFILE)) {
            $errors['err']='Internal error. Please make sure your download is the latest';
            $errors['mysql']='Missing SQL schema file';
        }
        //Open the file for writing..
        if(!$errors && !($fp = @fopen(CONFIGFILE,'r+'))){
            $errors['err']='Unable to open config file for writing. Permission denied!';
        }

        //IF no errors..Do the install. Let the fun start...
        if(!$errors && $fp) {
            define('ADMIN_EMAIL',$_POST['email']); //Needed to report SQL errors during install.
            define('PREFIX',$_POST['prefix']); //Table prefix
            
            $debug=false; //Change it to true to show failed query
			
			// TODO (issue 6)
            if(!load_sql_schema(SCHEMAFILE,$errors,$debug) && !$errors['err'])
                $errors['err']='Error parsing SQL schema! Get help from developers';

            if(!$errors) {
                $info=$support;

                //Rewrite the config file.
                
                $configfile= str_replace('%CONFIG-OSTLANG',$_POST['ostlang'],$configfile);
                $configfile= str_replace("define('OSTINSTALLED',FALSE);","define('OSTINSTALLED',TRUE);",$configfile);
                $configfile= str_replace('%ADMIN-EMAIL',$_POST['email'],$configfile);
                $configfile= str_replace('%CONFIG-DBHOST',$_POST['dbhost'],$configfile);
                $configfile= str_replace('%CONFIG-DBNAME',$_POST['dbname'],$configfile);
                $configfile= str_replace('%CONFIG-DBUSER',$_POST['dbuser'],$configfile);
                $configfile= str_replace('%CONFIG-DBPASS',$_POST['dbpass'],$configfile);
                $configfile= str_replace('%CONFIG-PREFIX',$_POST['prefix'],$configfile);
                $configfile= str_replace('%CONFIG-SIRI',Misc::randcode(32),$configfile);

                if(ftruncate($fp,0) && fwrite($fp,$configfile)){
                    //Some more configurations.
                    $tzoffset= date("Z")/3600; //Server's offset.
                    //Create admin user. Dummy last name.
                    $sql='INSERT INTO '.PREFIX.'staff SET created=NOW(), isadmin=1,change_passwd=0,group_id=1,dept_id=1 '.
                        ',email='.db_input($_POST['email']).',firstname='.db_input('Admin').',lastname='.db_input('Admin').
                        ',username='.db_input($_POST['username']).',passwd='.db_input(MD5($_POST['password'])).
                        ',timezone_offset='.db_input($tzoffset);
                    mysql_query($sql);
                    //Add emails - hopefully the domain is actually valid
                    list($uname,$domain)=explode('@',$_POST['sysemail']);
                    //1 - main support email
                    $sql='INSERT INTO '.PREFIX.'email SET created=NOW(),updated=NOW(),priority_id=2,dept_id=1'.
                         ',name='.db_input('Support').',email='.db_input($_POST['sysemail']);
                    mysql_query($sql);
                    //2 - alert email
                    $sql='INSERT INTO '.PREFIX.'email SET created=NOW(),updated=NOW(),priority_id=1,dept_id=1'.
                         ',name='.db_input('osTicket Alerts').',email='.db_input('alerts@'.$domain);
                    mysql_query($sql);
                    //3 - noreply email
                    $sql='INSERT INTO '.PREFIX.'email SET created=NOW(),updated=NOW(),priority_id=1,dept_id=1'.
                         ',name='.db_input('').',email='.db_input('noreply@'.$domain);
                    mysql_query($sql);
                    //config info 
                    $sql='INSERT INTO '.PREFIX.'config SET updated=NOW() '.
                         ',isonline=0,default_email_id=1,alert_email_id=2,default_dept_id=1,default_template_id=1'.
                         ',timezone_offset='.db_input($tzoffset).
                         ',ostversion='.db_input(VERSION).
                         ',admin_email='.db_input($_POST['email']).
                         ',helpdesk_url='.db_input(URL).
                         ',helpdesk_title='.db_input($_POST['title']);
                    mysql_query($sql);
                    //Create a ticket to make the system warm and happy.
                    $sql='INSERT INTO '.PREFIX.'ticket SET created=NOW(),ticketID='.db_input(Misc::randNumber(6)).
                        ",priority_id=2,dept_id=1,email='support@osticket.com',name='osTicket Support' ".
                        ",subject='osTicket Installed!',helptopic='Commercial support',status='open',source='Web'";
                    if(db_query($sql) && ($id=db_insert_id())){
                        db_query('INSERT INTO '.PREFIX."ticket_message VALUES (1,$id,NULL,".db_input(OSTICKET_INSTALLED).",NULL,'Web','',NOW(),NULL)");
                    }
                    //Log a message.
                    $sql='INSERT INTO '.PREFIX.'syslog SET created=NOW(),updated=NOW() '.
                         ',title="osTicket installed!",log_type="Debug" '.
                         ',log='.db_input("Congratulations osTicket basic installation completed!\n\nThank you for choosing osTicket!").
                         ',ip_address='.db_input($_SERVER['REMOTE_ADDR']);
                    mysql_query($sql);
                    $msg='Congratulations osTicket basic installation completed!';
                    $inc='done.inc.php';
                }else{
                    $errors['err']='Unable to write to config file!';
                }
            }
            @fclose($fp);
        }else{
            
            $errors['err']=$errors['err']?$errors['err']:'Error(s) occured. Please correct them and try again';
        }
    }
}
$title=sprintf('osTicket version %s - Basic installation',VERSION_VERBOSE);
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>osTicket Installer</title>
<link rel="stylesheet" href="style.css" media="screen">
</head>
<body>
<div id="container">
    <div id="header">
        <a id="logo" href="#" title="osTicket"><img src="images/ostlogo.jpg" width="188" height="72" alt="osTicket Installer"></a>
        <p id="info"><?php echo $info?></p>
    </div>
    <div id="nav">
        <ul id="sub_nav">
            <li><?php echo $title?></li>
        </ul>
    </div>
    <div class="clear"></div>
    <div id="content" width="100%" height="100%">
       <div>
            <?php if($errors['err']) {?>
                <p align="center" id="errormessage"><?php echo $errors['err']?></p>
            <?php }elseif($msg) {?>
                <p align="center" id="infomessage"><?php echo $msg?></p>
            <?php }elseif($warn) {?>
                <p align="center" id="warnmessage"><?php echo $warn?></p>
            <?php }?>
        </div>
        <div style="padding:0 3px 5px 3px;">
        <?php
            if(file_exists("./inc/$inc"))
                require("./inc/$inc");
            else
                echo '<span class="error">Invalid path - get technical support</span>';
        ?>
        </div>
    </div>
    <div id="footer">Copyright &copy; <?php echo date('Y')?>&nbsp;osTicket-reloaded.com. &nbsp;All Rights Reserved.</div>
</div>
</body>
</html>
