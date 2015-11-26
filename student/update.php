<?php
include('include.php');
if(isset($_POST['update'])){
$update='update student set 
`rollno`="'.$_POST['rollno'].'",
`stud_name`="'.$_POST['stud_name'].'",
`password`="'.$_POST['password'].'",
`ppassword`="'.$_POST['password'].'",
`current_sem`="'.$_POST['current_sem'].'",
`sec_id`="'.$_POST['sec_id'].'",
`section`="'.$_POST['section'].'",
`stud_father_name`="'.$_POST['stud_father_name'].'",
`Address`="'.$_POST['Address'].'",
`dept_id`="'.$_POST['dept_id'].'",
`course_id`="'.$_POST['course_id'].'",
`emailid`="'.$_POST['emailid'].'",
`parent_phone`="'.$_POST['parent_phone'].'",
`stud_phone`="'.$_POST['stud_phone'].'",
`dob`="'.$_POST['dob'].'",
`doj`="'.$_POST['doj'].'",
`status`="'.$_POST['status'].'",
`regulation`="'.$_POST['regulation'].'" where `stud_id`="'.$_SESSION['id'].'"';
if(mysql_query($update))
{
echo "<h3 style='color:red;'>your details <span style='color:green'>successfully</span> updated...</h3>";
header("refresh:2;url=login.php");
	}
else{
echo "<h3 style='color:red;'>your <span style='color:green'>details</span> not updated...<br>please re-check your process...</h3>";
header("refresh:2;url=edit.php");
}
}
if(isset($_POST['profile'])){
if(!empty($_FILES['img']['name'])==true){
$name=$_FILES ['img']['name'];
$file_tmp=$_FILES['img']['tmp_name'];
move_uploaded_file($file_tmp,"../student/images/".$name);
$update1='update `student` set
`stud_photo` = "'.$_FILES['img']['name'].'" where `stud_id`="'.$_SESSION['id'].'"';
if(mysql_query($update1))
{
echo "<h3 style='color:red;'>your photo <span style='color:green'>successfully</span> updated...</h3>";
header("refresh:2;url=login.php");
	}
else{
echo "<h3 style='color:red;'>your <span style='color:green'>photo</span> not updated...<br>please re-check your process...</h3>";
header("refresh:2;url=edit.php");
}
}
}
if(isset($_POST['back'])){
header('location:edit.php');
}
if(isset($_POST['back1'])){
header('location:home.php');
}
?>