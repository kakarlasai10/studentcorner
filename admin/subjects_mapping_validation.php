<?php 
include('include.php');
if(isset($_POST['submit'])){
$a=0;
$select="select * from `subjectmapping`";
$query=mysql_query($select);
while($fetch=mysql_fetch_array($query)){
	if(($_POST['depart']==$fetch['depart']) and ($_POST['section']==$fetch['section']) and 
	   ($_POST['subjects']==$fetch['subjects'])){
		$a++;   
	   }
	   }
	   if($a==1){
	echo "<h2 style='color:red;'>This Fields are <span style='color:red;'>Already Allocated...          </span></h2>";
	     header("refresh:2;url=subjects_mapping.php");	
		}
else{
$insert='insert into `subjectmapping`(employee,depart,section,subjects)
values(
"'.$_POST['employee'].'",
"'.$_POST['depart'].'",
"'.$_POST['section'].'",
"'.$_POST['subjects'].'"
)';
if(mysql_query($insert)){
	echo "<h2 style='color:red;'>your Subjects <span style='color:red;'>succesfully Allocated...</span></h2>";
    header("refresh:2;url=subjects_mapping.php");
}
else{
	echo "<h2 style='color:red;'>your Subjects not inserted...</h2>";
	header("refresh:2;url=subjects_mapping.php");
}
}
}
?>