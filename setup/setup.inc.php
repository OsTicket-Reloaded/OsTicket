<?php
/*********************************************************************
    setup.inc.php

    Master include file for setup/install scripts.

    Peter Rotich <peter@osticket.com>
    Copyright (c)  2006-2010 osTicket
    http://www.osticket.com

    Released under the GNU General Public License WITHOUT ANY WARRANTY.
    See LICENSE.TXT for details.

    vim: expandtab sw=4 ts=4 sts=4:
    $Id: setup.inc.php,v 1.1.2.4 2009/10/09 11:36:32 carlos.delfino Exp $
**********************************************************************/
#define paths
define('SETUPINC',true);

if(!defined('INCLUDE_DIR')):
define('ROOT_PATH','../');
define('ROOT_DIR','../');
define('INCLUDE_DIR',ROOT_DIR.'include/');
endif;

#required files
require_once(INCLUDE_DIR.'mysql.php');
require_once(INCLUDE_DIR.'class.validator.php');
require_once(INCLUDE_DIR.'class.format.php');
require_once(INCLUDE_DIR.'class.misc.php');
require_once(INCLUDE_DIR.'class.translator.php');

#Table Prefix: TABLE_PREFIX must be defined by the caller 
function replace_table_prefix($query) {
    return str_replace('%TABLE_PREFIX%',PREFIX, $query);
}

// TODO (issue 6)
function load_sql_schema($schema,&$errors,$debug=false){

    //Get database schema
    if(!file_exists($schema) || !($schema=file_get_contents($schema))) {
        $errors['err']='Internal error. Please make sure your download is the latest';
        $errors[]='Error accessing SQL schema';
    }else{
        //Loadup SQL schema.
        $queries =array_map('replace_table_prefix',array_filter(array_map('trim',explode(';',$schema)))); //Don't fail me bro!
        if($queries && count($queries)) {
            @mysql_query('SET SESSION SQL_MODE =""');
            foreach($queries as $k=>$sql) {
                if(!mysql_query($sql)){
                    if($debug) echo $sql;
                    //Aborting on error.
                    $errors['err']='Invalid SQL schema. Get help from Developers';
                    $errors['sql']="[$sql] - ".mysql_error();
                    break;
                }
            }
        }else{
            $errors['err']='Error parsing SQL schema! Get help from developers';
        }
    }

    return $errors?false:true;
}


#Some messages....

ob_start();
echo "
Thank you for choosing osTicket.
    
Please make sure you join the osTicket forums at http://osticket.com/forums to stay up to date on the latest news, security alerts and updates. The osTicket forums are also a great place to get assistance, guidance, tips, and help from other osTicket users. In addition to the forums, the osTicket wiki provides a useful collection of educational materials, documentation, and notes from the community. We welcome your contributions to the osTicket community.

If you are looking for a greater level of support, we provide professional services and commercial support with guaranteed response times, and access to the core development team. We can also help customize osTicket or even add new features to the system to meet your unique needs.

For more information or to discuss your needs, please contact us today at http://carlosdelfino.eti.br. Your feedback is greatly appreciated!

- The osTicket Team";
$msg1 = ob_get_contents();
ob_end_clean();
define('OSTICKET_INSTALLED',trim($msg1));

ob_start();
echo "
osTicket upgraded!

Please make sure you join osTicket forums http://osticket.com/forums, if you haven't done so already, to stay upto date on the latest news, security alerts and updates. Your contribution to osTicket community will be appreciated!

The osTicket team is committed to providing support to all users through our free online resources and a full range of commercial support packages and services. For more information, or to discuss your needs, please contact us today at http://osticket.com/support/. Any feedback will be appreciated!

- The osTicket Team";
$msg2 = ob_get_contents();
ob_end_clean();
define('OSTICKET_UPGRADED',trim($msg2));


$msg='';
$errors=array();
?>
