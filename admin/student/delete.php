<?php
include('../include.php');
if(isset($_POST['submit'])){
$del="delete from student where stud_id='$_POST[id]'";
if($query=mysql_query($del)){
echo "<h3 style='color:red;'>your details <span style='color:green'>successfully</span> deleted...</h3>";
header("refresh:2;url=../basic_table.php");
	}
else{
echo "<h3 style='color:red;'>your <span style='color:green'>details</span> not deleted...<br>please re-check your process...</h3>";
header("refresh:2;url=../basic_table.php");	
	}
	}
?>