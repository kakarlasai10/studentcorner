<?php 
include('include.php');
if(isset($_POST['submit1'])){
$update='update student SET
        `password`= "'.$_POST['password1'].'",
		`ppassword`= "'.$_POST['password1'].'"
		 where `stud_id`= "'.$_SESSION['id1'].'"';
if(mysql_query($update))
{
echo "<h3 style='color:red;'>your password <span style='color:green'>successfully</span> updated...<br>please <span style='color:green'>login</span> your account...</h3>";
header("refresh:2;url=index.php");
	}
else{
echo "<h3 style='color:red;'>your <span style='color:green'>password</span> not updated...<br>please re-check your process...</h3>";
header("refresh:2;url=index.php");
	}
}
session_destroy();
?>