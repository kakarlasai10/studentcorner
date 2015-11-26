<?php
include('include.php');
if(empty($_SESSION['id'])){
header('location:index.php');
}
$sql="select * from `student` where stud_id='$_SESSION[id]'";
$query=mysql_query($sql);
$fetch=mysql_fetch_array($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body {
background:url(../images/img27.jpg)no-repeat;
background-size:cover;
}
.header {
margin-left:150px;
margin-top:50px;
}
.inner {
margin:35px 0px 0px 785px;
}
td {
padding:15px;
color:#339;
font-size:20px;
}
h1 {
color:blue;
}
#submit {
background:#333;
color:#FFF;
padding:5px;
border-radius:10px;
font-size:20px;
}
#submit:hover {
background:#CC0000;
}
#input {
width:340px;
height:20px;
border-radius:10px;
border:none;
font-size:16px;
padding:20px;
}
#text {
width:600px;
height:250px;
border-radius:10px;
border:none;
font-size:16px;
padding:20px;
}
</style>
</head>

<body>
<div class="header">
<h1>Suggessions</h1>
<form name="sugg" method="post" action="send_suggession_validation.php">
<div >
<table>
<tr>
<td>Roll Number</td>
<td><input type="text" name="rollno_no" value="<?php echo $fetch['rollno']; ?>" id="input" /></td>
</tr>
<tr>
<td>Enter Suggession</td>
<td>
<textarea name="message" rows="15" cols="30" id="text" required="required" >
</textarea>
</td>
</tr>
</table>
</div>
<div class="inner">
<input type="submit" name="send" value="Send" id="submit" />
</div>
</form>
</div>
</body>
</html>