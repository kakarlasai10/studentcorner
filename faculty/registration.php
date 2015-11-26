<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
body {
background:url(../images/img18.jpg)no-repeat;
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
text-align:center;
color:#00F;
margin:0px;
padding:10px;
}
td {
padding:10px;
font-size:20px;  
}
#form {
margin:18px 0px 0px 205px;
padding:7px;
background:#0FF;;
border-radius:7px;
font-size:20px;
}
#form:hover {
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
margin:0px auto;
width:820px;
overflow:hidden;
background:url(../images/img1.jpg)no-repeat;
background-size:cover;
}
.inner {
margin:0px auto;
width:470px;
margin-top:15px;
}
#fac{
padding:0px 10px;
color:red;
font-size:15px;
}
#father1 {
padding:0px 10px;
color:red;
font-size:15px;
}
#phone1 {
padding:0px 10px;
color:red;
font-size:15px;
}
#email1 {
padding:0px 10px;
color:red;
font-size:15px;
}
</style>
<script language="javascript" type="text/javascript">
function facultyform1(inputtxt,minlength){
	var v=document.forms["facultyform"]["faculty_name"].value;
	var le=/^[A-Za-z]+$/;
	var mn=3;
	var field=inputtxt.value;
	if(v==null || v==""){
    var x=document.getElementById("fac").innerHTML="*Name must be filled";
	return false;
	}
	else if(!field.match(le)){
	var x=document.getElementById("fac").innerHTML="*must contains letters only";
	return false;
		}
	else if(field.length<mn){
	var x=document.getElementById("fac").innerHTML="*min length must be 3";	
		}
	}
</script>
<script language="javascript" type="text/javascript">
function fathername1(inputtxt,minlength){
	var v=document.forms["facultyform"]["father_name"].value;
	var le=/^[A-Za-z]+$/;
	var mn=3;
	var field=inputtxt.value;
	if(v==null || v==""){
    var x=document.getElementById("father1").innerHTML = "*Name must be filled";
	return false;
	}
	else if(!field.match(le)){
	var x=document.getElementById("father1").innerHTML = "*must contains letters only";
	return false;
		}
	else if(field.length<mn){
	var x=document.getElementById("father1").innerHTML="*min length must be 3";	
		}
	}
</script>
<script>
function phone12(inputtxt,minlength){
	var v=document.forms["facultyform"]["phone"].value;
	var nu=/^[0-9]+$/;
	var mn=10;
	var field=inputtxt.value;
    if(v==null || v==""){
    var v=document.getElementById("phone1").innerHTML="*phone number must be filled";
	return false;
	}
	else if(!field.match(nu)){
		var v=document.getElementById("phone1").innerHTML="*phone must contains numbers only";
		return false;	
			}
		else if(field.length<mn){
	    var x=document.getElementById("phone1").innerHTML="*min length must be 10";	
		}
}
</script>

<script>
function email(inputtxt,minlength){
	var v=document.forms["facultyform"]["emailid"].value;
	var le=/.@/;
	var mn=6;
	var field=inputtxt.value;
	if(v==null || v==""){
    var v=document.getElementById("email1").innerHTML="*email must be filled";
	return false;
	}
	else if(inputtxt.value.match(le)){
	return true;
	}
	else if(field.length<mn){
	var x=document.getElementById("email1").innerHTML="*min length must be 6";	
		}
	else {
	var v=document.getElementById("email1").innerHTML="*must contains '.' and '@' ";
	return false;
		}	
	}
</script>
</head>

<body>

<div class="header">
<h1><i>zoom<span>4</span>web</i> Faculty details</h1>
</div>

<div>
<div class="content">
<div class="inner">

<form name="facultyform" method="post" action="registration_validation.php" enctype="multipart/form-data">
<table>

<tr>
<td>Name of the Faculty</td>
<td><input type="text" name="faculty_name" required="required" /></td>
</tr>

<tr>
<td></td>
<td id="fac"></td>
</tr>

<tr>
<td>Father’s Name</td>
<td><input type="text" name="father_name" required="required" onclick="facultyform1(document.facultyform.faculty_name)" /></td>
</tr>

<tr>
<td></td>
<td id="father1"></td>
</tr>

<tr>
<td>Date of birth</td>
<td><input type="date" name="dob" id="date" required="required" onclick="fathername1(document.facultyform.father_name)" /></td>
</tr>

<tr>
<td>Phone number</td>
<td><input type="text" name="phone" required="required" /></td>
</tr>

<tr>
<td></td>
<td id="phone1"></td>
</tr>

<tr>
<td>E-mail id</td>
<td><input type="email" name="emailid" placeholder="example@gmail.com" required="required"   onclick="phone12(document.facultyform.phone)" /></td>
</tr>

<tr>
<td></td>
<td id="email1"></td>
</tr>

<tr>
<td>Username</td>
<td><input type="text" name="username" required="required" onclick="email(document.facultyform.emailid)"/></td>
</tr>

<tr>
<td>Create password</td>
<td><input type="password" name="password" required="required" /></td>
</tr>

<tr>
<td>Conform password</td>
<td><input type="password" name="ppassword" required="required" /></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="male" checked="checked" />male
<input type="radio" name="gender" value="female"  />female</td>
</tr>

<tr>
<td>Department</td>
<td><select name="dept" id="sem">
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
<option value="Associate Professor">Associate Professor</option>
<option value="Assistant Professor">Assistant Professor</option>
<option value="Professor">Professor</option>
<option value="HOD">HOD</option>
</select></td>
</tr>

<tr>
<td>Highest Qualification</td>
<td><input type="text" name="high_qualification" required="required" /></td>
</tr>

<tr>
<td>Date of joining</td>
<td><input type="date" name="doj" id="date" required="required" /></td>
</tr>

<tr>
<td>Pay Scale (AICTE VI Pay scale)</td>
<td><input type="text" name="pay_scale" required="required" /></td>
</tr>

<tr>
<td>Experience</td>
<td><select name="exp" id="sem">
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
<td>Faculty photo</td>
<td><input type="file" name="fac_photo" required="required" /></td>
</tr>

<tr>
<td>Address</td>
<td><textarea name="Address" rows="5" cols="22" >
  </textarea></td>
</tr>

</table>


<table>
<tr>
<td><input type="submit" name="submit" value="submit" id="form" /></td>
</tr>
</table>


</form>


</div>
</div>
</div>
</body>
</html>