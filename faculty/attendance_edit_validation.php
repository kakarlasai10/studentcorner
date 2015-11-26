<?php
include('include.php');
if(isset($_POST['submit'])){
if(empty($_POST['status'])){
echo "<h3 style='color:red;'>No Option <span style='color:green'>Selected</span> Plese select any one...</h3>";
header("refresh:2;url=attendence.php");
}
else{
foreach($_POST['status'] as $status){
$update='update `attendence` set
`status`="'.$status.'" where att_id="'.$_POST['id'].'"';
if($query=mysql_query($update)){
echo "<h3 style='color:red;'>your details <span style='color:green'>successfully</span> updated...</h3>";
header("refresh:2;url=attendance.php");	
}
else{
echo "not succsess";
}
}
}
}
?>