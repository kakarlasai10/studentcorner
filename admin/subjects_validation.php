<?php 
include('include.php');
if(isset($_POST['submit'])){
$insert='insert into `subjects` (sub1,sub2,sub3,sub4,sub5,sub6)
values(
"'.$_POST['sub1'].'",
"'.$_POST['sub2'].'",
"'.$_POST['sub3'].'",
"'.$_POST['sub4'].'",
"'.$_POST['sub5'].'",
"'.$_POST['sub6'].'"
)';
if($query=mysql_query($insert)){
	echo "<h2 style='color:red;'>your Subjects <span style='color:red;'>succesfully Stored...</span></h2>";
    header("refresh:2;url=subjects.php");
}
else{
	echo "<h2 style='color:red;'>your Subjects not inserted...</h2>";
	header("refresh:2;url=subjects.php");
}
}
?>