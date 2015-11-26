<?php
include('include.php');
if(empty($_SESSION['id'])){
header('location:index.php');
}
$select="select faculty.*,subjectmapping.* from faculty INNER JOIN subjectmapping ON          faculty.faculty_name=subjectmapping.employee where fac_id='$_SESSION[id]'";
$query=mysql_query($select);
$fetch=mysql_fetch_array($query);
$sel="select * from `student` where dept_id='$fetch[depart]' and section='$fetch[section]' ";
$que=mysql_query($sel);
$i=1;
$sql="select * from `attendence` where subject='$fetch[subjects]' and department='$fetch[depart]' and section='$fetch[section]'";
$q=mysql_query($sql);
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
<td><?php echo $fetch['subjects']; ?></td>
</tr>
<tr>
<td>Department :</td>
<td><?php echo $fetch['depart']; ?></td>
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
<form name="" action="faculty_attendance_validation.php" method="post">
<?php while($fet=mysql_fetch_array($que)){ ?>
<tr>
<td><?php echo $fet['rollno']; ?></td>
<input type="hidden" name="rollno<?php echo $i;?>" value="<?php echo $fet['rollno']; ?>" >
<td>
<input type="checkbox" name="atten<?php echo $i;?>[]" value="Present" >Present
</td>
<td>
<input type="checkbox" name="atten<?php echo $i;?>[]" value="Absent" >Absent
</td>
</tr>
<?php $i++; } ?>
<tr>
<td>
<input type="hidden" name="subjects" value="<?php echo $fetch['subjects']; ?>" >
<input type="hidden" name="depart" value="<?php echo $fetch['depart']; ?>" >
<input type="hidden" name="section" value="<?php echo $fetch['section']; ?>" >
<input type="submit" name="submit" value="Submit" >
</td>
</tr>
</form>
</table>
</div>
<div class="third">
<table>
<tr>
<th id="td">Roll No</th>
<th id="td">Date</th>
<th id="td">Status</th>
</tr>
<?php while($f=mysql_fetch_array($q)){ ?>
<tr>
<td id="td"><?php echo $f['stud_rollno']; ?></td>
<td id="td"><?php echo $f['date']; ?></td>
<td id="td"><?php echo $f['status']; ?></td>
<td><a href="attendance_edit.php?id=<?php echo $f['att_id']; ?>&
roll=<?php echo $f['stud_rollno']; ?>" ><input type="submit" name="edit" value="Edit" ></a></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>