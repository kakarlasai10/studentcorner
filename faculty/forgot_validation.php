<?php
include('include.php');
if(isset($_POST['submit'])){
$select="select * from faculty where username='$_POST[username]' and phone='$_POST[phone]'";
$query=mysql_query($select);
$count=mysql_num_rows($query);
    if($count==1){
$fetch=mysql_fetch_array($query);
$_SESSION['id1']=$fetch['fac_id'];
header('location:createnewpass.php');
}
else{
echo "<h3 style='color:red;'>your <span style='color:green'>username and phone number</span> incorrect...<br>please check your username and phone number...</h3>";	
header("refresh:2;url=forgot.php");
}
}
?>