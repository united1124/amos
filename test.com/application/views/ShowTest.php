<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<table width="477" height="206" border="1">
  <tr>
    <td>Usernae</td>
    <td>Password</td>
    <td>Code</td>
    <td>Name</td>
    <td>Lastname</td>
    <td>Address</td>
    <td>Tel</td>
    <td>Status</td>
    <td>Edit</td>
    <td>Delete</td>
  </tr>
   <?php foreach($showall as $YY){?>
  <tr>
    <td><?php echo $YY['adminUsername'] ?></td>
    <td><?php echo $YY['adminPassword'] ?></td>
    <td><?php echo $YY['adminCode'] ?></td>
    <td><?php echo $YY['adminName'] ?></td>
    <td><?php echo $YY['adminLastname'] ?></td>
    <td><?php echo $YY['adminAddress'] ?></td>
    <td><?php echo $YY['adminTel'] ?></td>
    <td><?php echo $YY['adminStatus'] ?></td>
    <td>แก้ไขด่วน</td>
    <td>ลบออกไปซะ</td>
  </tr>
  <?php } ?>
   
</table>
</body>
</html>