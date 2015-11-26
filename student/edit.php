<?php
include('include.php');
if(empty($_SESSION['id'])){
header('location:index.php');
}
$sql='select * from `student` where stud_id = "'.$_SESSION['id'].'"';
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
background:url(../images/img12.jpg)no-repeat;
background-size:cover;
color:#609;
margin:0px;
}
span {
color:red;	
}
.header {
background:url(../images/img3.jpg)no-repeat;
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
background:url(../images/img1.jpg)no-repeat;
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
<h1><i>zoom<span>4</span>web</i> student details</h1>
</div>

<div>
<div class="content">
<div class="inner">

<form name="studentform" method="post" action="update.php" enctype="multipart/form-data">
<table>

<tr>
<td>roll number</td>
<td><input type="text" name="rollno" value= "<?php echo $fetch['rollno']; ?>" required="required" /></td>
</tr>

<tr>
<td>student name</td>
<td><input type="text" name="stud_name" value= "<?php echo $fetch['stud_name']; ?>" required="required" /></td>
</tr>

<tr>
<td>password</td>
<td><input type="password" name="password" value= "<?php echo $fetch['password']; ?>" required="required" /></td>
</tr>

<tr>
<td>current sem</td>
<td><select name="current_sem" id="sem">
<option value="<?php echo $fetch['current_sem']; ?>"><?php echo $fetch['current_sem']; ?>
</option>
<option value="1 year - 1 sem">1 year - 1 sem</option>
<option value="1 year - 2 sem">1 year - 2 sem</option>
<option value="2 year - 1 sem">2 year - 1 sem</option>
<option value="2 year - 2 sem">2 year - 2 sem</option>
<option value="3 year - 1 sem">3 year - 1 sem</option>
<option value="3 year - 2 sem">3 year - 2 sem</option>
<option value="4 year - 1 sem">4 year - 1 sem</option>
<option value="4 year - 2 sem">4 year - 2 sem</option>
</select></td>
</tr>

<tr>
<td>section id</td>
<td><select name="sec_id" id="sem">
<option value="<?php echo $fetch['sec_id']; ?>"><?php echo $fetch['sec_id']; ?>
</option>
<option value="11KK">11KK</option>
<option value="12KK">12KK</option>
<option value="13KK">13KK</option>
<option value="14KK">14KK</option>
<option value="15KK">15KK</option>
</select></td>
</tr>

<tr>
<td>section</td>
<td><select name="section" id="sem">
<option value="<?php echo $fetch['section']; ?>"><?php echo $fetch['section']; ?>
</option>
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
</select></td>
</tr>

<tr>
<td>student father name</td>
<td><input type="text" name="stud_father_name" value= "<?php echo $fetch['stud_father_name']; ?>" required="required" /></td>
</tr>

<tr>
<td>Address</td>
<td><textarea name="Address" rows="5" cols="22" ><?php echo $fetch['Address']; ?>
  </textarea></td>
</tr>

<tr>
<td>department id</td>
<td><select name="dept_id" id="sem">
<option value="<?php echo $fetch['dept_id']; ?>"><?php echo $fetch['dept_id']; ?>
</option>
<option value="EC">EC</option>
<option value="EE">EE</option>
<option value="CSE">CSE</option>
<option value="MEC">MEC</option>
<option value="CIV">CIV</option>
</select></td>
</tr>

<tr>
<td>course id</td>
<td><select name="course_id" id="sem">
<option value="<?php echo $fetch['course_id']; ?>"><?php echo $fetch['course_id']; ?>
</option>
<option value="KK4">KK4</option>
<option value="KK5">KK5</option>
<option value="KK6">KK6</option>
<option value="KK7">KK7</option>
<option value="KK8">KK8</option>
</select></td>
</tr>

<tr>
<td>email id</td>
<td><input type="email" name="emailid" placeholder="example@gmail.com" required="required" 
value= "<?php echo $fetch['emailid']; ?>" /></td>
</tr>

<tr>
<td>parent phone number</td>
<td><input type="text" name="parent_phone" value= "<?php echo $fetch['parent_phone']; ?>" required="required" /></td>
</tr>

<tr>
<td>student phone number</td>
<td><input type="text" name="stud_phone" value= "<?php echo $fetch['stud_phone']; ?>" required="required" /></td>
</tr>

<tr>
<td>date of birth</td>
<td><input type="date" name="dob" id="date" value= "<?php echo $fetch['dob']; ?>" required="required" /></td>
</tr>

<tr>
<td>date of join</td>
<td><input type="date" name="doj" id="date" value= "<?php echo $fetch['doj']; ?>" required="required" /></td>
</tr>

<tr>
<td>status</td>
<td><textarea name="status" rows="5" cols="22" >
 <?php echo $fetch['status']; ?> </textarea></td>
</tr>

<tr>
<td>regulation</td>
<td><select name="regulation" id="sem">
<option value="<?php echo $fetch['regulation']; ?>"><?php echo $fetch['regulation']; ?>
</option>
<option value="R07">R07</option>
<option value="R08">R08</option>
<option value="R09">R09</option>
<option value="R10">R10</option>
<option value="R11">R11</option>
</select></td>
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

<a href="profile_update.php"><div class="profile"><img src="images/<?php echo $fetch['stud_photo']; ?>" alt="upload image" /></div></a>
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