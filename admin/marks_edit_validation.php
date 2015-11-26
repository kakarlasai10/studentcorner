<?php
include('include.php');
if(isset($_POST['submit'])){
$update='update `marks` set
`sub_marks`="'.$_POST['marks'].'" where mark_id="'.$_POST['id'].'"';
if($query=mysql_query($update)){
echo "<h3 style='color:red;'>your details <span style='color:green'>successfully</span> updated...</h3>";
header("refresh:2;url=marks.php");	
}
else{
echo "not succsess";
}
}
?>