<?php
include('include.php');
if(isset($_POST['submit'])){	
$select="select * from `student`";
$query=mysql_query($select);
$i=1;
while($fetch=mysql_fetch_array($query)){
$insert='insert into `marks` (faculty,roll_no,mark_sem,sub1,sub_marks)
values(
"'.$_POST['faculty'.$i].'",
"'.$_POST['roll'.$i].'",
"'.$_POST['sem'.$i].'",
"'.$_POST['subject'.$i].'",
"'.$_POST['mark'.$i].'"
)';
$i++;
if(mysql_query($insert)){
echo " <h1 style='color:red;'> Successfully Inserted </h1> ";
header("refresh:2;url=home.php");
	}
else {
echo " <h1 style='color:red;'>Already Inserted </h1> ";
header("refresh:2;url=home.php");
}
}
}
?>