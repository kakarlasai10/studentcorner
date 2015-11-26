<?php
include('../include.php');
if(isset($_POST['update'])){
$update='update faculty set 
`faculty_name`="'.$_POST['faculty_name'].'",
`father_name`="'.$_POST['father_name'].'",
`password`="'.$_POST['password'].'",
`ppassword`="'.$_POST['password'].'",
`dob`="'.$_POST['dob'].'",
`phone`="'.$_POST['phone'].'",
`emailid`="'.$_POST['emailid'].'",
`username`="'.$_POST['username'].'",
`dept`="'.$_POST['dept'].'",
`designation`="'.$_POST['designation'].'",
`high_qualification`="'.$_POST['high_qualification'].'",
`doj`="'.$_POST['doj'].'",
`pay_scale`="'.$_POST['pay_scale'].'",
`exp`="'.$_POST['exp'].'",
`Address`="'.$_POST['Address'].'" where `fac_id`="'.$_SESSION['faculty_id'].'"';
if(mysql_query($update))
{
echo "<h3 style='color:red;'>your details <span style='color:green'>successfully</span> updated...</h3>";
header("refresh:2;url=../basic_table.php");
	}
else{
echo "<h3 style='color:red;'>your <span style='color:green'>details</span> not updated...<br>please re-check your process...</h3>";
header("refresh:2;url=../basic_table.php");
}
}
if(isset($_POST['profile'])){
if(!empty($_FILES['img']['name'])==true){
$name=$_FILES ['img']['name'];
$file_tmp=$_FILES['img']['tmp_name'];
move_uploaded_file($file_tmp,"../../faculty/images/".$name);
$update1='update `faculty` set
`fac_photo` = "'.$_FILES['img']['name'].'" where `fac_id`="'.$_SESSION['faculty_id'].'"';
if(mysql_query($update1))
{
echo "<h3 style='color:red;'>your photo <span style='color:green'>successfully</span> updated...</h3>";
header("refresh:2;url=../basic_table.php");
	}
else{
echo "<h3 style='color:red;'>your <span style='color:green'>photo</span> not updated...<br>please re-check your process...</h3>";
header("refresh:2;url=../basic_table.php");
}
}
}
if(isset($_POST['cancel'])){
header('location:../basic_table.php');
}
if(isset($_POST['back1'])){
header('location:../basic_table.php');
}
?>