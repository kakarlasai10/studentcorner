<?php 
include('include.php');
if(isset($_POST['submit'])){
	$i=1;
$sel="select * from `student` where dept_id='$_POST[depart]' and section='$_POST[section]'";
$query=mysql_query($sel);
while($fetch=mysql_fetch_array($query)){
foreach($_POST['atten'.$i] as $roll){
$insert='insert into `attendence` (department,section,subject,stud_rollno,status)
values(
"'.$_POST['depart'].'",
"'.$_POST['section'].'",
"'.$_POST['subjects'].'",
"'.$_POST['rollno'.$i].'",
"'.$roll.'"
)';
$i++;
if(mysql_query($insert)){	
 echo "<h2 style='color:red;'>your attendence Successfully inserted...</h2>";  
}
}
}
header("refresh:2;url=attendance.php");
}
?>