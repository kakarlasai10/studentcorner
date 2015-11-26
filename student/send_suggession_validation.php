<?php
include('include.php');
if(isset($_POST['send'])){
$insert='insert into `suggessiontbl` (rollno_no,message)
values(
"'.$_POST['rollno_no'].'",
"'.$_POST['message'].'"   )';
if(mysql_query($insert)){
	echo "<h1>Sending Success...</h1>";
	header("refresh:2;url=home.php");
}
else{
echo "<h1>Sending Failed...</h1>";
header("refresh:2;url=home.php");
}
}
?>