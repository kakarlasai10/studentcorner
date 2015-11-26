<?php
include('include.php');
if(empty($_SESSION['id'])){
header('location:index.php');
}
$a=1;
$select="select * from `uploads` where category= 2 or category= 3";
$query=mysql_query($select);
?>
<html>
<head>
<style>
body {
background:url(../images/img27.jpg)no-repeat;
background-size:cover;
}
th{
padding:20px;
font-size:20px;
background:#333333;
color:#FFFFFF;
}
td {
padding:15px 100px 15px 10px;
font-size:15px;
background:#333333;
color:#FFFFFF;
}
a {
text-decoration:none;
color:white;
}
a:hover {
text-decoration:underline;
color:red;
font-size:25;
}
</style>
</head>
<body>
<table>
<tr>
<td>S.No</td>
<td>Title</td>
<td>Attachment</td>
<td>Uploaded Date</td>
</tr>
<?php while($fetch=mysql_fetch_array($query)){ ?>
<tr>
<td><?php echo $a++; ?></td>
<td><a href="../admin/files/<?php echo $fetch['attachment']; ?>"> <?php echo $fetch['title']; ?></a></td>
<td><?php echo $fetch['attachment']; ?></td>
<td><?php echo $fetch['upload_date']; ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>