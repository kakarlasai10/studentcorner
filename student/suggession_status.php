<?php
include('include.php');
if(empty($_SESSION['id'])){
header('location:index.php');
}
$select="select * from `suggessiontbl` where rollno_no='$_SESSION[roll]'";
$query=mysql_query($select);
?>
<html>
<head>
<style>
body {
background:url(../images/img27.jpg)no-repeat;
background-size:cover;
}
#td {
width:100px;
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
table {
width:800px;
}
</style>
</head>
<body>

<div >


<table>
<tr>
<th>Message</th>
<th>Reply</th>
<th>Send Date</th>
</tr>
<?php while($fetch=mysql_fetch_array($query)){ ?>
<tr>
<td><?php echo $fetch['message']; ?></td>
<td><?php echo $fetch['reply']; ?></td>
<td id="td"><?php echo $fetch['sugg_date']; ?></td>
</tr>
<?php }?>


</div>

</body>
</html>