<?php
include('include.php');
if(empty($_SESSION['id'])){
header('location:index.php');
}
$select="select * from `student` where stud_id='$_SESSION[id]'";
$quer=mysql_query($select);
$fetc=mysql_fetch_array($quer);
$sql="select * from `marks` where roll_no='$fetc[rollno]'";
$query=mysql_query($sql);
$total=0;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body {
background:url(../images/img24.jpg)no-repeat;
background-size:cover;
}
.div {
margin:50px 0px 0px 150px;
}
h2 {
color:#0000FF;
}
h3 {
color:red;
}
table {
border-collapse:collapse;
}
td {
padding:10px;
border:2px solid white;
}
th {
padding:10px;
border:2px solid white;
}
</style>
</head>

<body>
<div class="div">
<h2>Student Marks</h2>
<h3>Roll No : <?php echo $fetc['rollno']; ?></h3>
<h3>Semester : <?php echo $fetc['current_sem']; ?></h3>
<table>
<tr>
<th>Subjects</th>
<th>Marks</th>
<th>Status</th>
</tr>
<?php while($fetch=mysql_fetch_array($query)){ ?>
<tr>
<td><?php echo $fetch['sub1']; ?></td>
<td><?php echo $fetch['sub_marks']; ?></td>
<?php $total=$total+$fetch['sub_marks'];
if($fetch['sub_marks']<35){ ?>
<td>FAIL</td>
<?php } 
 else { ?>
<td>PASS</td>
<?php } ?>
</tr>
<?php } ?>
</table>
<h3>Total = <?php echo $total; ?></h3>
<h3>Average = <?php echo ($total/600)*100; ?></h3>
</div>
</body>
</html>