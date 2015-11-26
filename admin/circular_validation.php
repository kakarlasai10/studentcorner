<?php
include('include.php');
if(isset($_POST['upload'])){
if($_POST['whom']=="student"){
$cat=1;
}
if($_POST['whom']=="faculty"){
$cat=2;
}
if($_POST['whom']=="All"){
$cat=3;
}
$a=1;
$name=$_FILES ['file']['name'];
$file_tmp=$_FILES['file']['tmp_name'];
move_uploaded_file($file_tmp,"files/".$name);
$insert='insert into `uploads`
(title,attachment,whom,category,type)
values("'.$_POST['title'].'",
       "'.$_FILES['file']['name'].'",
	   "'.$_POST['whom'].'",
	   "'.$cat.'",    
	   "'.$a.'"
	   )';
if($query=mysql_query($insert)){
	echo "<h2 style='color:red;'>your File <span style='color:red;'>succesfully Send...</span></h2>";
    header("refresh:2;url=circular.php");
}
else{
	echo "<h2 style='color:red;'>your File not inserted...</h2>";
	header("refresh:2;url=circular.php");
}
}
?>