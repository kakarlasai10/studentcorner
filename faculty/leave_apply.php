<?php
session_start();
if(empty($_SESSION['id'])){
header("location:index.php");
}
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("zoom4web_stud_details",$con);
$sql="select * from faculty where fac_id = '$_SESSION[id]'";
$query=mysql_query($sql);
$fetch=mysql_fetch_array($query);
?>
<html>
<head>
<style>
body {
background:url(../images/img25.jpg)no-repeat;
background-size:cover;
}
h1 {
color:blue;
}
.div {
margin-left:150px;
}
.inner {
margin:20px 0px 0px 197px;
}
td {
padding:15px;
color:#339;
font-size:20px;
}
#submit {
background:#333;
color:#FFF;
padding:5px;
border-radius:10px;
font-size:20px;
}
#submit:hover {
background:#CC0000;
}
#input {
width:340px;
height:60px;
border-radius:10px;
border:none;
font-size:16px;
padding:20px;
}
#text {
width:340px;
height:250px;
border-radius:10px;
border:none;
font-size:16px;
padding:20px;
}
</style>
</head>
<body>
<div class="div">
<h1>Apply Leave</h1>
<form name="" method="post" action="apply_leave_validation.php">
<table>


<tr>
<td>Employee Id</td>
<td><input type="text" name="empid" value="<?php echo $fetch['fac_id']; ?>" id="input" 
required ></td>
</tr>

<tr>
<td>Department</td>
<td><input type="text" name="dept" value="<?php echo $fetch['dept']; ?>" id="input" required ></td>
</tr>

<tr>
<td>Leave From Date</td>
<td><input type="date" name="leave_from_date" value="" id="input" required ></td>
</tr>

<tr>
<td>Leave To Date</td>
<td><input type="date" name="leave_to_date" value="" id="input" required ></td>
</tr>

<tr>
<td>Leave Apply Date</td>
<td><input type="date" name="leave_apply_date" value="" id="input" required > </td>
</tr>

<tr>
<td>No Of Days</td>
<td><input type="text" name="no_of_days" value="" id="input" required > </td>
</tr>

<tr>
<td>Type Of Leave</td>
<td>
<select name="type_of_leave" id="input"  >
<option value="Casual Leave">Casual Leave</option>
<option value="Privilege Leave">Privilege Leave</option>
<option value="Medical Leave">Medical Leave</option>
<option value="Maternity Leave">Maternity Leave</option>
<option value="Quarantine Leave">Quarantine Leave</option>
</select>
</td>
</tr>

<tr>
<td>Reason</td>
<td>
<textarea name="reason" rows="6"  id="text" required >
</textarea>
</td>
</tr>

</table>
<div class="inner">
<input type="submit" name="submit" value="submit" id="submit" >
</div>
</form>
</div>
</body>
</html>