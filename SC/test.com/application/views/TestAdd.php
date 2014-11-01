<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form action="<?php echo base_url(); ?>index.php/test/add" method="post">
<center>
<table width="200" border="1">
  <tr>
    <td width="40">Username</td>
    <td width="144"><input type="text" name="adminUsername" id="adminUsername" /></td>
  </tr>
  <tr>
    <td>Password</td>
    <td><input type="text" name="adminPassword" id="adminPassword" /></td>
  </tr>
  <tr>
    <td>Code</td>
    <td><input type="text" name="adminCode" id="adminCode" /></td>
  </tr>
  <tr>
    <td>Name</td>
    <td><input type="text" name="adminName" id="adminName" /></td>
  </tr>
  <tr>
    <td>Lastname</td>
    <td><input type="text" name="adminLastname" id="adminLastname" /></td>
  </tr>
  <tr>
    <td>Address</td>
    <td><input type="text" name="adminAddress" id="adminAddress" /></td>
  </tr>
  <tr>
    <td>Tel</td>
    <td><input type="text" name="adminTel" id="adminTel" /></td>
  </tr>
  <tr>
    <td>Status</td>
    <td><input type="text" name="adminStatus" id="adminStatus" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="button" id="button" value="OK" /></td>
  </tr>
</table>
</center>
</form>
</body>
</html>