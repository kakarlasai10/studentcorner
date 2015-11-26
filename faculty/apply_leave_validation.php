<?php 
include('include.php');
if(isset($_POST['submit'])){
$select="select * from `leavetbl` where empid='$_SESSION[id]'";
$a=0;
$query=mysql_query($select);
while($fetch=mysql_fetch_array($query)){
if(($fetch['leave_from_date']==$_POST['leave_from_date'])||($fetch['leave_to_date']==$_POST['leave_to_date'])||($fetch['leave_apply_date']==$_POST['leave_apply_date'])){
$a++;
}
}
if($a!=0){
echo "<h2 style='color:green;'>your <span style='color:red;'>Leave dates already           exist...</span> <br>please try another dates...</h2>";
		  header("refresh:2;url=leave_apply.php");	
}
else{
$insert='insert into `leavetbl`
(empid,dept,leave_from_date,leave_to_date,leave_apply_date,no_of_days,type_of_leave,reason)
values(
"'.$_POST['empid'].'",
"'.$_POST['dept'].'",
"'.$_POST['leave_from_date'].'",
"'.$_POST['leave_to_date'].'",
"'.$_POST['leave_apply_date'].'",
"'.$_POST['no_of_days'].'",
"'.$_POST['type_of_leave'].'",
"'.$_POST['reason'].'")';
if(mysql_query($insert)){
	echo "<h2 style='color:red;'>your details are <span style='color:red;'>succesfully inserted...</span></h2>";
  header("refresh:2;url=home.php");
}
else{
	echo "<h2 style='color:red;'>your details are already inserted...</h2>";
	header("refresh:2;url=home.php");
}
}
}
?>