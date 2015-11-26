<?php
include('include.php');
if(isset($_POST['send'])){
$update='update `suggessiontbl` set
`reply` = "'.$_POST['reply'].'" where sugg_id="'.$_SESSION['suggg_id'].'"';
if(mysql_query($update)){
echo "<h1>Sending successfully...</h1>";
header("refresh:2;url=basic_table.php");
}
else{
echo "<h1>Sending Failed...</h1>";
header("refresh:2;url=basic_table.php");
}
}
?>