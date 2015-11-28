<?php
session_start();
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("students",$conn);
if(isset($_POST['change']))
{
$sql='select * from registrationform where emailid="'.$_POST['emailid'].'" and studentphone="'.$_POST['studentphone'].'"';
$query=mysql_query($sql);

$count=mysql_num_rows($query);
if($count==1)
{
	$rows=mysql_fetch_array($query);
	$_SESSION['id']=$rows['id'];
     echo "sucess";
	header( "refresh:5; url=newpassword.php");
	
}
else
{
	echo "not sucess";
}
}
?>	



