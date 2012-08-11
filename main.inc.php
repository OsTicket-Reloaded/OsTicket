<?php
/*********************************************************************
    main.inc.php

    Master include file which must be included at the start of every file.
    The brain of the whole sytem. Don't monkey with it.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2010 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
    $Id: $
**********************************************************************/    
    
    #Disable direct access.
    if(!strcasecmp(basename($_SERVER['SCRIPT_NAME']),basename(__FILE__))) die('kwaheri rafiki!');

    #Disable Globals if enabled....before loading config info
    if(ini_get('register_globals')) {
       ini_set('register_globals',0);
       foreach($_REQUEST as $key=>$val)
           if(isset($$key))
               unset($$key);
    }

    #Disable url fopen && url include
    ini_set('allow_url_fopen', 0);
    ini_set('allow_url_include', 0);

    #Disable session ids on url.
    ini_set('session.use_trans_sid', 0);
    #No cache
    ini_set('session.cache_limiter', 'nocache');
    #Cookies
    //ini_set('session.cookie_path','/osticket/');

    #Error reporting...Good idea to ENABLE error reporting to a file. i.e display_errors should be set to false
    error_reporting(E_ALL ^ E_NOTICE); //Respect whatever is set in php.ini (sysadmin knows better??)
    #Don't display errors
    ini_set('display_errors',0);
    ini_set('display_startup_errors',0);

    //Start the session
    session_start();

    #Set Dir constants
    if(!defined('ROOT_PATH')) define('ROOT_PATH','./'); //root path. Damn directories
    define('ROOT_DIR',str_replace('\\\\', '/', realpath(dirname(__FILE__))).'/'); #Get real path for root dir ---linux and windows
    define('INCLUDE_DIR',ROOT_DIR.'include/'); //Change this if include is moved outside the web path.
    define('PEAR_DIR',INCLUDE_DIR.'pear/');
    define('SETUP_DIR',INCLUDE_DIR.'setup/');
  
    /*############## Do NOT monkey with anything else beyond this point UNLESS you really know what you are doing ##############*/

    #Current version..
    define('THIS_VERSION','1.6 ST'); //Changes from version to version.

    #load config info
    $configfile='';
    if(file_exists(ROOT_DIR.'ostconfig.php')) //Old installs prior to v 1.6 RC5
        $configfile=ROOT_DIR.'ostconfig.php';
        if(defined(DEFAULT_LANGUAGE))
                define('OSTLANG',DEFAULT_LANGUAGE);
    elseif(file_exists(INCLUDE_DIR.'settings.php')) //OLD config file.. v 1.6 RC5
        $configfile=INCLUDE_DIR.'settings.php';
    elseif(file_exists(INCLUDE_DIR.'ost-config.php')) //NEW config file v 1.6 stable ++
        $configfile=INCLUDE_DIR.'ost-config.php';
    elseif(file_exists(ROOT_DIR.'include/'))
        header('Location: '.ROOT_PATH.'setup/');

    if(!$configfile || !file_exists($configfile)) die('<b>Error loading settings. Contact admin.</b>');

    require($configfile);
    define('CONFIG_FILE',$configfile); //used in admin.php to check perm.
   
   //Path separator
    if(!defined('PATH_SEPARATOR')){
        if(strpos($_ENV['OS'],'Win')!==false || !strcasecmp(substr(PHP_OS, 0, 3),'WIN'))
            define('PATH_SEPARATOR', ';' ); //Windows
        else 
            define('PATH_SEPARATOR',':'); //Linux
    }

    //Set include paths. Overwrite the default paths.
    ini_set('include_path', './'.PATH_SEPARATOR.INCLUDE_DIR.PATH_SEPARATOR.PEAR_DIR);
   

    #include required files
    require(INCLUDE_DIR.'class.usersession.php');
    require(INCLUDE_DIR.'class.pagenate.php'); //Pagenate helper!
    require(INCLUDE_DIR.'class.sys.php'); //system loader & config & logger.
    require(INCLUDE_DIR.'class.misc.php');
    require(INCLUDE_DIR.'class.http.php');
    require(INCLUDE_DIR.'class.format.php'); //format helpers
    require(INCLUDE_DIR.'class.validator.php'); //Class to help with basic form input validation...please help improve it.
    require(INCLUDE_DIR.'mysql.php');
    require(INCLUDE_DIR.'class.translator.php'); // class for help to translate the application;

    #CURRENT EXECUTING SCRIPT.
    define('THISPAGE',Misc::currentURL());

    #pagenation default
    define('PAGE_LIMIT',20);

    # This is to support old installations. with no secret salt.
    if(!defined('SECRET_SALT')) define('SECRET_SALT',md5(TABLE_PREFIX.ADMIN_EMAIL));

    #Session related
    define('SESSION_SECRET', MD5(SECRET_SALT)); //Not that useful anymore...
    define('SESSION_TTL', 86400); // Default 24 hours
   
    define('DEFAULT_PRIORITY_ID',1);
    define('EXT_TICKET_ID_LEN',6); //Ticket create. when you start getting collisions. Applies only on random ticket ids.

    #Tables being used sytem wide
    define('CONFIG_TABLE',TABLE_PREFIX.'config');
    define('SYSLOG_TABLE',TABLE_PREFIX.'syslog');

    define('STAFF_TABLE',TABLE_PREFIX.'staff');
    define('DEPT_TABLE',TABLE_PREFIX.'department');
    define('TOPIC_TABLE',TABLE_PREFIX.'help_topic');
    define('GROUP_TABLE',TABLE_PREFIX.'groups');
   
    define('TICKET_TABLE',TABLE_PREFIX.'ticket');
    define('TICKET_NOTE_TABLE',TABLE_PREFIX.'ticket_note');
    define('TICKET_MESSAGE_TABLE',TABLE_PREFIX.'ticket_message');
    define('TICKET_RESPONSE_TABLE',TABLE_PREFIX.'ticket_response');
    define('TICKET_ATTACHMENT_TABLE',TABLE_PREFIX.'ticket_attachment');
    define('TICKET_PRIORITY_TABLE',TABLE_PREFIX.'ticket_priority');
    define('TICKET_LOCK_TABLE',TABLE_PREFIX.'ticket_lock');
  
    define('EMAIL_TABLE',TABLE_PREFIX.'email');
    define('EMAIL_TEMPLATE_TABLE',TABLE_PREFIX.'email_template');
    define('BANLIST_TABLE',TABLE_PREFIX.'email_banlist');
    define('API_KEY_TABLE',TABLE_PREFIX.'api_key');
    define('TIMEZONE_TABLE',TABLE_PREFIX.'timezone'); 
   
    /*
     * this line not can translated, because the translate object need acess 
     * config object and use the database information.
     */
    #Connect to the DB && get configuration from database
    $ferror=null;
    if (!db_connect(DBHOST,DBUSER,DBPASS) || !db_select_database(DBNAME)) {
        $ferror='Unable to connect to the database';
    }elseif(!($cfg=Sys::getConfig())){
        $ferror='Unable to load config info from DB. Get tech support.';
    }

    if($ferror){ //Fatal error
        Sys::alertAdmin('osTicket Fatal Error',$ferror); //try alerting admin.
        die("<b>Fatal Error:</b> Contact system adminstrator."); //Generic error.
        exit;
    }
    //Init
    $cfg->init();
    //Set default timezone...staff will overwrite it.
    $_SESSION['TZ_OFFSET']=$cfg->getTZoffset();
    $_SESSION['daylight']=$cfg->observeDaylightSaving();

    #Cleanup magic quotes crap.
    if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {
        $_POST=Format::strip_slashes($_POST);
        $_GET=Format::strip_slashes($_GET);
        $_REQUEST=Format::strip_slashes($_REQUEST);
    }
    
        $_SESSION['cfg']=$cfg;
    
	$trl = &Translator::init($cfg);
    $_SESSION['trl'] = &$trl;
    
?>
