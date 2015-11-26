<?php
include('../include.php');
if(empty($_SESSION['id'])){
header('location:../index.php');
}
$sql=" select * from `faculty` where fac_id ='$_POST[id]'";
$_SESSION['id1']=$_POST['id'];
$query=mysql_query($sql);
$fetch=mysql_fetch_array($query);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body {
background:url(../../images/img12.jpg)no-repeat;
background-size:cover;
color:#609;
margin:0px;
}
span {
color:red;	
}
.header {
background:url(../../images/img3.jpg)no-repeat;
background-size:cover;
}
.header h1 {
color:#00F;
margin:0px;
padding:10px;
}
td {
padding:10px;
font-size:20px;  
}
#form {
margin:18px 0px 0px 200px;
padding:7px;
background:#0FF;;
border-radius:7px;
font-size:20px;
}
#form:hover {
background:#FF6600;
}
#back {
padding:7px;
background:#0FF;;
border-radius:7px;
font-size:20px;
}
#back:hover {
background:#FF6600;
}
#sem {
width:173px;
height:22px;
}
#date {
width:168px;
height:18px;
}
.content {
width:820px;
overflow:hidden;
background:url(../../images/img1.jpg)no-repeat;
background-size:cover;
float:left;
}
.inner {
margin:0px auto;
width:463px;
margin-top:15px;
}
.profile {
width:528px;
height:500px;
float:left;
background:#CCC;
}
img {
width:100%;
height:100%;
}
</style>
</head>

<body>

<div class="header">
<h1><i>zoom<span>4</span>web</i> Faculty details</h1>
</div>

<div>
<div class="content">
<div class="inner">

<form name="studentform" method="post" action="update.php" enctype="multipart/form-data">
<table>

<tr>
<td>Faculty Name</td>
<td><input type="text" name="faculty_name" value= "<?php echo $fetch['faculty_name']; ?>" required="required" /></td>
</tr>

<tr>
<td>Father’s Name</td>
<td><input type="text" name="father_name" value= "<?php echo $fetch['father_name']; ?>" required="required" /></td>
</tr>

<tr>
<td>Date Of Birth</td>
<td><input type="date" name="dob" value= "<?php echo $fetch['dob']; ?>" required="required" /></td>
</tr>

<tr>
<td>Phone Number</td>
<td><input type="text" name="phone" value= "<?php echo $fetch['phone']; ?>" required="required" /></td>
</tr>

<tr>
<td>E-mail Id</td>
<td><input type="email" name="emailid" placeholder="example@gmail.com" required="required" 
value= "<?php echo $fetch['emailid']; ?>" /></td>
</tr>

<tr>
<td>Username</td>
<td><input type="text" name="username" value= "<?php echo $fetch['username']; ?>" required="required" /></td>
</tr>

<tr>
<td>Password</td>
<td><input type="password" name="password" value= "<?php echo $fetch['password']; ?>" required="required" /></td>
</tr>

<tr>
<td>Department</td>
<td><select name="dept" id="sem">
<option value= "<?php echo $fetch['dept']; ?>" > <?php echo $fetch['dept']; ?>
</option>
<option value="EC">EC</option>
<option value="EE">EE</option>
<option value="CSE">CSE</option>
<option value="MEC">MEC</option>
<option value="CIV">CIV</option>
</select></td>
</tr>

<tr>
<td>Designation</td>
<td><select name="designation" id="sem">
<option value="<?php echo $fetch['designation']; ?>" > <?php echo $fetch['designation']; ?>
</option>
<option value="Associate Professor">Associate Professor</option>
<option value="Assistant Professor">Assistant Professor</option>
<option value="Professor">Professor</option>
<option value="HOD">HOD</option>
</select></td>
</tr>

<tr>
<td>Highest Qualification</td>
<td><input type="text" name="high_qualification" value= "<?php echo $fetch['high_qualification']; ?>" required="required" /></td>
</tr>

<tr>
<td>Date Of Join</td>
<td><input type="date" name="doj" value= "<?php echo $fetch['doj']; ?>" required="required" /></td>
</tr>

<tr>
<td>Pay scale</td>
<td><input type="text" name="pay_scale" value= "<?php echo $fetch['pay_scale']; ?>" required="required" /></td>
</tr>

<tr>
<td>Experience</td>
<td><select name="exp" id="sem">
<option value="<?php echo $fetch['exp']; ?>" > <?php echo $fetch['exp']; ?>
</option>
<option value="None">None</option>
<option value="1 year">1 year</option>
<option value="2 years">2 years</option>
<option value="3 years">3 years</option>
<option value="4 years">4 years</option>
<option value="5 years">5 years</option>
<option value="above 5 years">above 5 years</option>
</select></td>
</tr>

<tr>
<td>Address</td>
<td><textarea name="Address" rows="5" cols="22" ><?php echo $fetch['Address']; ?>
  </textarea></td>
</tr>

</table>


<table>
<tr>
<td><input type="submit" name="update" value="update" id="form" /></td>
</tr>
</table>


</form>


</div>
</div>

<a href="profile_update.php"><div class="profile"><img src="../../faculty/images/<?php echo $fetch['fac_photo']; ?>" alt="upload image" /></div></a>
<div>

<table>
<tr>
<td>
<form name="" method="post" action="update.php">
<input type="submit" name="back1" value="back to Home" id="back" />
</form>
</td>
</tr>
</table>

</div>
</div>
</body>
</html>