<?php
include('include.php');
$sql="create table if not exists `registration1` (`id` int(100) not null primary key auto_increment, `first` varchar(100) not null, `last` varchar(100) not null,
  `email` varchar(100) not null,`password` varchar(100) not null, `conform` varchar(100) not null, `gender` varchar(100) not null, `phone` varchar(100) not null, `email_1` varchar(100) not null, `country` varchar(100) not null) ";
$query=mysql_query($sql);
if(isset($_POST['submit'])){
if($_POST['password']==($_POST['conform'])){
$insert="insert into registration1(first,last,email,password,conform,gender,phone,email_1,country)values('$_POST[first]','$_POST[last]','$_POST[email]','$_POST[password]','$_POST[conform]','$_POST[gender]','$_POST[phone]','$_POST[email_1]','$_POST[country]')";
if((mysql_query($insert))){
	echo "success";
}
else{
	echo "not inserted";
}
}
else{
	echo "your password and conform password not equal...";
	echo "please enter same password...";
	header("refresh:5;url=table.php");
	}
}
?>