<?php
include('include.php');
if(empty($_SESSION['id'])){
header('location:index.php');
}
$select="select * from `leavetbl` where empid='$_SESSION[id]'";
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
</style>
</head>
<body>

<div >


<table>
<tr>
<th>Leave From Date</th>
<th>Leave To Date</th>
<th>Leave Apply Date</th>
<th>No Of Days</th>
<th>Type Of Leave</th>
<th>Reason</th>
<th>Status</th>
</tr>
<?php while($fetch=mysql_fetch_array($query)){ ?>
<tr>
<td><?php echo $fetch['leave_from_date']; ?></td>
<td><?php echo $fetch['leave_to_date']; ?></td>
<td><?php echo $fetch['leave_apply_date']; ?></td>
<td><?php echo $fetch['no_of_days']; ?></td>
<td><?php echo $fetch['type_of_leave']; ?></td>
<td><?php echo $fetch['reason']; ?></td>
<td><?php echo $fetch['status']; ?></td>
</tr>
<?php }?>


</div>

</body>
</html>