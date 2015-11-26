<?php
session_start();
if(!empty($_SESSION['id'])){
header('location:login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body {
background:url(../images/img8.jpg)no-repeat;
background-size:cover;
color:#609;
margin:0px;
}
#table{
margin-left:102px;	
}
#submit {
background:#3CF;
padding:6px;
font-size:18px;
border-radius:7px;
} 
#submit:hover {	
background:#F60;
}
h1 {
text-align:right;
color:#00F;
margin:0px;
padding:10px;
}
h3 {
color:#FF3366;;
}
td {
padding:12px;
font-size:20px;  
}
.content {
width:320px;
background:#d8e3e7;
float:right;
margin:50px 22px 0px 0px;
border-radius:10px;
}
span {
color:red;	
}
#forgot {
font-size:18px;
text-decoration:none;
}
</style>
</head>

<body>

<div>
<h1><i>zoom<span>4</span>web</i> Faculty login</h1>
</div>

<div class="content">
<form name="studentloginform" method="post" action="index_validation.php" enctype="multipart/form-data">
<table>

<tr>
<td><h3>login : </h3></td>
</tr>

<tr>
<td>Username</td>
<td><input type="text" name="username" required="required" /></td>
</tr>

<tr>
<td>password</td>
<td><input type="password" name="password" required="required" /></td>
</tr>

</table>

<table id="table">

<tr>
<td><a href="forgot.php" id="forgot">forgot password?</a></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="submit" id="submit" /></td>
</tr>

</table>
</form>

</div>
</body>
</html>