<?php
include('include.php');
if(empty($_SESSION['id'])){
header('location:index.php');
}
$sql="select faculty.*, subjectmapping.* from faculty INNER JOIN subjectmapping ON faculty.faculty_name=subjectmapping.employee where fac_id='$_SESSION[id]'";
$quer=mysql_query($sql);
$fetc=mysql_fetch_array($quer);
$select="select * from `student`";
$query=mysql_query($select);
$i=1;
$sel='select * from `marks` where sub1="'.$fetc['subjects'].'"';
$que=mysql_query($sel);
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
td {
padding:10px;
}
th {
padding:10px;
}
#td{
padding:10px;
border:2px solid white;
}
table {
border-collapse:collapse;
}
</style>
</head>

<body>
<div class="div">
<h2>Enter Student Marks</h2>
<table>
<tr>
<th>Student List</th>
<th>Marks</th>
</tr>
<form name="" action="marks_validation.php" method="post">
<?php while($fetch=mysql_fetch_array($query)){ ?>
<tr>
<td><?php echo $fetch['rollno']; ?></td>
<td>
<input type="hidden" name="roll<?php echo $i;?>" value="<?php echo $fetch['rollno'] ?>"  />
<input type="hidden" name="sem<?php echo $i;?>" value="<?php echo $fetch['current_sem'] ?>"  />
<input type="hidden" name="faculty<?php echo $i;?>" value="<?php echo $fetc['employee'] ?>"  />
<input type="hidden" name="subject<?php echo $i;?>" value="<?php echo $fetc['subjects'] ?>"  />
<input type="text" name="mark<?php echo $i;?>" required="required" /></td>
</tr>
<?php $i++; } ?>
<tr>
<td></td>
<td><input type="submit" name="submit" value="Submit" /></td>
</tr>
</form>
</table>
</div>
<div class="div">
<table>
<tr>
<th id="td">Roll No</th>
<th id="td">Semester</th>
<th id="td">Marks</th>
</tr>
<?php while($fet=mysql_fetch_array($que)){ ?>
<tr>
<td id="td"><?php echo $fet['roll_no']; ?></td>
<td id="td"><?php echo $fet['mark_sem']; ?></td>
<td id="td"><?php echo $fet['sub_marks']; ?></td>
<td><a href="marks_edit.php?roll=<?php echo $fet['roll_no']; ?>&id=<?php echo $fet['mark_id']; ?>"><input type="submit" name="edit" value="Edit" ></a></td>
</tr>
<?php } ?>
</table>
</div>
</body>
</html>