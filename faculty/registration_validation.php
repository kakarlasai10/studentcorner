<?php
include('include.php');
if(isset($_POST['submit'])){
$a=0;
$select='select * from faculty';
$query=mysql_query($select);
while($fetch=mysql_fetch_array($query)){
if($fetch['username']==$_POST['username']){
$a++;	
	}
}
if($a==1){
     echo "<h2 style='color:green;'>your <span style='color:red;'>selected Username already           exist...</span> <br>please try another Username...</h2>";
		  header("refresh:2;url=registration.php");	
}
else{
if($_POST['password']!=$_POST['ppassword']){
	echo "<h2 style='color:green;'>your <span style='color:red;'>password and conform password          </span> incorrect...<br>please enter same password...</h2>";
		  header("refresh:2;url=registration.php");
		  }
else{
$name=$_FILES ['fac_photo']['name'];
$file_tmp=$_FILES['fac_photo']['tmp_name'];
move_uploaded_file($file_tmp,"../faculty/images/".$name);
$insert='insert into `faculty`
(faculty_name,father_name,dob,phone,emailid,username,password,ppassword,gender,dept,designation,high_qualification,doj,pay_scale,exp,fac_photo,Address) 
values(
"'.$_POST['faculty_name'].'",
"'.$_POST['father_name'].'",
"'.$_POST['dob'].'",
"'.$_POST['phone'].'",
"'.$_POST['emailid'].'",
"'.$_POST['username'].'",
"'.$_POST['password'].'",
"'.$_POST['ppassword'].'",
"'.$_POST['gender'].'",
"'.$_POST['dept'].'",
"'.$_POST['designation'].'",
"'.$_POST['high_qualification'].'",
"'.$_POST['doj'].'",
"'.$_POST['pay_scale'].'",
"'.$_POST['exp'].'",
"'.$_FILES['fac_photo']['name'].'",
"'.$_POST['Address'].'")';
if($query=mysql_query($insert)){
	echo "<h2 style='color:red;'>your details are <span style='color:red;'>succesfully inserted...</span></h2>";
    header("refresh:2;url=registration.php");
}
else{
	echo "<h2 style='color:red;'>your details are already inserted...</h2>";
	header("refresh:2;url=registration.php");
}
}
}
}
?>