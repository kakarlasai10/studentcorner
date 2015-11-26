<?php
session_start();
if(empty($_SESSION['id1'])){
header('location:index.php');
}
?>
<html>
<head>
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
<form name="login" method="post" action="password_success.php">
<table>
<tr></tr>
<tr>
<td>enter your new password</td>
</tr>
<tr>
<td><input type="password" name="password1" ></td>
</tr>
<tr>
<td id="td"><input type="submit" name="submit1" value="submit"/></td>
</tr>
</table>
</form>
</body>
</html>