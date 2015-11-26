<?php
include('include.php');
if(empty($_SESSION['id'])){
header('location:index.php');
}
$select="select * from `attendence` where att_id='$_REQUEST[id]'";
$query=mysql_query($select);
$fetch=mysql_fetch_array($query);
?>
<html>
<head>
<style>
body {
background:url(../images/img24.jpg)no-repeat;
background-size:cover;
}
.first {
margin:50px 0px 0px 200px;
}
.second {
margin:50px 0px 0px 200px;
}
.third {
margin:50px 0px 0px 200px;
}
td {
padding:10px;
font-size:20px;
}
#td {
padding:10px;
font-size:20px;
border: 2px solid white;
}
th {
font-size:25px;
}
table {
border-collapse:collapse;
}
</style>
</head>
<body>
<div class="first">
<table>
<tr>
<td>Subject :</td>
<td><?php echo $fetch['subject']; ?></td>
</tr>
<tr>
<td>Department :</td>
<td><?php echo $fetch['department']; ?></td>
</tr>
<tr>
<td>Section :</td>
<td><?php echo $fetch['section']; ?></td>
</tr>
</table>
</div>
<div class="second">
<table>
<tr>
<th>Attendance</th>
</tr>
<form name="" action="attendance_edit_validation.php" method="post">
<tr>
<td><?php echo $fetch['stud_rollno']; ?></td>
<td>
<input type="checkbox" name="status[]" value="Present" >Present
</td>
<td>
<input type="checkbox" name="status[]" value="Absent" >Absent
</td>
</tr>
<tr>
<td>
<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>" >
<input type="submit" name="submit" value="Submit" >
</td>
</tr>
</form>
</table>
</div>
</body>
</html>