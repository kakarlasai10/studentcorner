<?php
include('../include.php');
if(empty($_SESSION['id'])){
header('location:../index.php');
}
$sql='select * from `student` where stud_id = "'.$_POST['id'].'"';
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
color:#609;
margin:0px;
background:url(../../images/img12.jpg)no-repeat;
background-size:cover;
}
h1 {
text-align:center;
color:#00F;
margin:0px;
padding:10px;
}
span {
color:#F00;
}
.header {
margin:0px auto;
width:1000px;
background:url(../../images/img3.jpg)no-repeat;
background-size:cover;
overflow:hidden;
}
img {
width:100%;
height:100%;
}
.content {
margin:0px auto;
width:730px;
background:url(../../images/img1.jpg)no-repeat;
background-size:cover;
margin-top:30px;
overflow:hidden;
}
.inner {
width:150px;
height:150px;
background:#C9C;
float:left;
}
#table1 {
margin:40px 0px 0px 35px;
border:2px solid white;
border-collapse:collapse;
width:665px;
}
#td1 {
border:none;
}
#th {
border:none;
font-size:28px;	
}
td {
padding:20px 45px 15px 12px;
font-size:20px;
border:2px solid white;
}
.name {
float:left;
margin:60px 0px 0px 25px;	
}
.edit {
float:left;
margin-left:198px;
margin-top:
}
.table {
width:702px;
margin-top:180px;
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
#td {
width:230px;
}
</style>
</head>

<body>
<div class="header">
<h1><i>zoom<span>4</span>web</i> student info</h1>
<div class="content">

<div class="inner">
<img src="../../student/images/<?php echo $fetch['stud_photo']; ?>" alt="upload image" />
</div>

<div class="name">
<table>
<tr>
<th id="th">
<?php echo $fetch['stud_name']; ?>
</th>
</tr>
</table>

</div>

<div class="table">
<table id="table1">

<tr>
<td id="td" >Roll no</td>
<td> <?php echo $fetch['rollno']; ?> </td>
</tr>

<tr>
<td>Student name</td>
<td> <?php echo $fetch['stud_name']; ?> </td>
</tr>

<tr>
<td>Current sem</td>
<td> <?php echo $fetch['current_sem']; ?> </td>
</tr>

<tr>
<td>Section id</td>
<td> <?php echo $fetch['sec_id']; ?> </td>
</tr>

<tr>
<td>Section</td>
<td> <?php echo $fetch['section']; ?> </td>
</tr>

<tr>
<td>Student father name</td>
<td> <?php echo $fetch['stud_father_name']; ?> </td>
</tr>

<tr>
<td>Address</td>
<td> <?php echo $fetch['Address']; ?> </td>
</tr>

<tr>
<td>Gender</td>
<td> <?php echo $fetch['gender']; ?> </td>
</tr>

<tr>
<td>Department Id</td>
<td> <?php echo $fetch['dept_id']; ?> </td>
</tr>

<tr>
<td>Course Id</td>
<td> <?php echo $fetch['course_id']; ?> </td>
</tr>

<tr>
<td>Regulation</td>
<td> <?php echo $fetch['regulation']; ?> </td>
</tr>

<tr>
<td>Email id</td>
<td> <?php echo $fetch['emailid']; ?> </td>
</tr>

<tr>
<td>Student phone</td>
<td> <?php echo $fetch['stud_phone']; ?> </td>
</tr>

<tr>
<td>Parent phone</td>
<td> <?php echo $fetch['parent_phone']; ?> </td>
</tr>

<tr>
<td>Date of birth</td>
<td> <?php echo $fetch['dob']; ?> </td>
</tr>

<tr>
<td>Date of join</td>
<td> <?php echo $fetch['doj']; ?> </td>
</tr>

<tr>
<td>Status</td>
<td> <?php echo $fetch['status']; ?> </td>
</tr>

</table>
</div>
</div>
</div>
</body>
</html>