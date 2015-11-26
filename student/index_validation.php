<?php
include('include.php');
if(isset($_POST['submit'])){
$sql="select * from student where rollno='$_POST[rollno]' and password='$_POST[password]'";
$query=mysql_query($sql);
$count=mysql_num_rows($query);
if($count==1){
$fetch=mysql_fetch_array($query);
$_SESSION['id']=$fetch['stud_id'];
$_SESSION['roll']=$fetch['rollno'];
header('location:home.php');
	}
else{
echo "<h2 style='color:green;'>your <span style='color:red;'>Roll no and password</span>               incorrect...<br>please check your email and password...</h2>";
     header("refresh:2;url=index.php");
	}	
	}
?>