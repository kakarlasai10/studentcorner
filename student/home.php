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
<style>
body {
background:url(../images/img12.jpg)no-repeat;
background-size:cover;
}
.main {
margin:50px 0px 0px 250px ;
}
.sub {
font-size:25px;
float:left;
margin-right:50px;
margin-top:9px;
}
.sub_ul {
width:200px;
font-size:25px;
float:left;
margin-right:50px;
}
ul{
margin:0px;
padding:0px;
}
a {
color:white;
background:#666666;
text-decoration:none;
padding:5px;
border-radius:5px;
}
a:hover {
background:#FF0000;
}
li {
list-style-type:none;
margin-top:9px;
}
#display {
display:none;
}
#display1 {
display:none;
}
</style>
<script>
function list(){
document.getElementById("display").style.display="block";
document.getElementById("display1").style.display="block";
}
function list1(){
document.getElementById("display").style.display="none";
document.getElementById("display1").style.display="none";
}
</script>
</head>

<body>
<div class="main">
<div class="sub" ><a href="#" >HOME</a></div>
<div class="sub" ><a href="login.php" >Student INFO</a></div>
<div class="sub_ul">
<ul>
<li onmouseover="list()" onmouseout="list1()" id="leave"><a href="#">Suggession</li></a>
<li id="display" onmouseover="list()" onmouseout="list1()"><a href="send_suggession.php">Send Suggession</a></li>
<li id="display1" onmouseover="list()" onmouseout="list1()" ><a href="suggession_status.php">
Suggession Status</a></li>
</ul>
</div>
<div class="sub" ><a href="marks.php">Marks</a></div>
</div>
<div class="sub" ><a href="documents.php">Documents</a></div>
</div>
<div class="sub" ><a href="logout.php">Logout</a></div>
</div>
</body>
</html>