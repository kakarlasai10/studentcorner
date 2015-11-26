<?php
include('include.php');
if(empty($_SESSION['id'])){
header('location:index.php');
}
$select="select * from `marks` where mark_id='$_REQUEST[id]'";
$query=mysql_query($select);
$fetch=mysql_fetch_array($query);
?>
<html>
<head>
<style>
body {
background:url(../images/img24.jpg)no-repeat;
background-size:cover;
}
.second {
margin:50px 0px 0px 200px;
}
.third {
margin:50px 0px 0px 200px;
}
td {
padding:10px;
font-size:20px;
}
#td {
padding:10px;
font-size:20px;
border: 2px solid white;
}
th {
font-size:25px;
}
table {
border-collapse:collapse;
}
h2 {
color:blue;
}
</style>
</head>
<body>
<div class="second">
<h2>Marks</h2>
<table>
<form name="" action="marks_edit_validation.php" method="post">
<tr>
<td><?php echo $fetch['roll_no']; ?></td>
<td>
<input type="text" name="marks" value="<?php echo $fetch['sub_marks']; ?>" >
</td>
</tr>
<tr>
<td>
<input type="hidden" name="id" value="<?php echo $_REQUEST['id']; ?>" >
<input type="submit" name="submit" value="Submit" >
</td>
</tr>
</form>
</table>
</div>
</body>
</html>