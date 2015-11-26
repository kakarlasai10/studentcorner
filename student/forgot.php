<?php 
session_start();
if(!empty($_SESSION['id1'])){
header('location:createnewpass.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body {
background:url(../images/img18.jpg)no-repeat;
background-size:cover;
}
#td {
padding-top:15px;
}
</style>
</head>

<body>
<form name="login" method="post" action="forgot_validation.php">
<table>
<tr></tr>
<tr>
<td>enter your Roll No</td>
</tr>
<tr>
<td><input type="text" name="username"/></td>
</tr>
<tr>
<td>enter your phone number</td>
</tr>
<tr>
<td><input type="text" name="phone"/></td>
</tr>
<tr>
<td id="td"><input type="submit" name="submit" value="submit"/></td>
</tr>
</table>
</form>
</body>
</html>