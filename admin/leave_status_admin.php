<?php
include('include.php');
$acc="Accepted";
$notacc="Not Accepted";
if(isset($_POST['accept'])){
$update='update `leavetbl` set
`status` = "'.$acc.'" where id="'.$_SESSION['leave_id'].'"';
if(mysql_query($update)){
echo "<h1>updated successfully</h1>";
header("refresh:2;url=basic_table.php");
}
else{
echo "<h1>not success</h1>";
header("refresh:2;url=basic_table.php");
}
}
if(isset($_POST['decline'])){
$update='update `leavetbl` set
`status` = "'.$notacc.'" where id="'.$_SESSION['leave_id'].'"';
if(mysql_query($update)){
echo "<h1>updated successfully</h1>";
header("refresh:2;url=basic_table.php");
}
else{
echo "<h1>not success</h1>";
header("refresh:2;url=basic_table.php");
}
}
?>