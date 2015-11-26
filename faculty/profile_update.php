<?php
session_start();
if(empty($_SESSION['id'])){
header('location:index.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background:#3FF;">
<form name="image1" action="update.php" method="post" enctype="multipart/form-data">
<table style="margin-bottom:20px;">
<tr><td><input type="file" name="img" /></td></tr></table>
<table>
<tr><td style="padding-right:30px;"><input type="submit" name="profile" value="upload" /></td>
<td><input type="submit" name="back" value="back to Editpage" /></td></tr>
</table>
</form>
</body>
</html>