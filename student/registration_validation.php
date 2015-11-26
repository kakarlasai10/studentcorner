<?php
include('include.php');
if(isset($_POST['submit'])){
$a=0;
$select='select * from student';
$query=mysql_query($select);
while($fetch=mysql_fetch_array($query)){
if($fetch['emailid']==$_POST['emailid']){
$a++;	
	}
}
if($a==1){
     echo "<h2 style='color:green;'>your <span style='color:red;'>selected email id already           exist...</span> <br>please try another email id...</h2>";
		  header("refresh:2;url=registration.php");	
}
else{
if($_POST['password']!=$_POST['ppassword']){
	echo "<h2 style='color:green;'>your <span style='color:red;'>password and conform password          </span> incorrect...<br>please enter same password...</h2>";
		  header("refresh:2;url=registration.php");
		  }
else{
$name=$_FILES ['stud_photo']['name'];
$file_tmp=$_FILES['stud_photo']['tmp_name'];
move_uploaded_file($file_tmp,"../student/images/".$name);
$insert='insert into `student`(rollno,stud_name,password,ppassword,current_sem,sec_id,section,stud_father_name,Address,gender,dept_id,course_id,emailid,parent_phone,stud_phone,dob,doj,stud_photo,status,regulation) values("'.$_POST['rollno'].'","'.$_POST['stud_name'].'","'.$_POST['password'].'","'.$_POST['ppassword'].'","'.$_POST['current_sem'].'","'.$_POST['sec_id'].'","'.$_POST['section'].'","'.$_POST['stud_father_name'].'","'.$_POST['Address'].'","'.$_POST['gender'].'","'.$_POST['dept_id'].'","'.$_POST['course_id'].'","'.$_POST['emailid'].'","'.$_POST['parent_phone'].'","'.$_POST['stud_phone'].'","'.$_POST['dob'].'","'.$_POST['doj'].'","'.$_FILES['stud_photo']['name'].'","'.$_POST['status'].'","'.$_POST['regulation'].'")';
if($query=mysql_query($insert)){
	echo "<h2 style='color:green;'>your details are <span style='color:red;'>succesfully inserted...</span></h2>";
    header("refresh:2;url=registration.php");
}
else{
	echo "<h2 style='color:green;'>your roll number details are already inserted...</h2>";
	header("refresh:2;url=registration.php");
}
}
}
}
?>