<?php defined('OSTSCPINC') or die('Invalid path'); 
$trl->sendHeader();
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $trl->getLang();?>" lang="<?php echo $trl->getLang();?>">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $trl->getCharset();?>" />
<title>osTicket:: SCP Login</title>
<link rel="stylesheet" href="css/login.css" type="text/css" />
<meta name="robots" content="noindex" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="pragma" content="no-cache" />
</head>
<body id="loginBody">
<h1 id="logo"><a href="index.php">osTicket Staff Control Panel</a></h1>
<div id="loginBox">
	<h1 style="clear: both;"><?php echo $msg?></h1>
	<form action="login.php" method="post">
	<input type="hidden" name=do value="scplogin" />
    <table border=0 align="center">
        <tr><td width=100px align="right"><b><?php echo  $labelUsername; ?></b>:</td><td><input type="text" name="username" id="name" value="" /></td></tr>
        <tr><td align="right"><b><?php echo  $labelPassword; ?></b>:</td><td><input type="password" name="passwd" id="pass" /></td></tr>
        <tr><td>&nbsp;</td><td>&nbsp;&nbsp;<input class="submit" type="submit" name="submit" value="Login" /></td></tr>
    </table>
</form>
</div>
<div id="copyRights">Copyright &copy; <a href='http://www.osticket.com' target="_blank">osTicket.com</a></div>
</body>
</html>
