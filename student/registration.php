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
#letter{
padding:0px 10px;
color:red;
font-size:15px;
}
#father{
padding:0px 10px;
color:red;
font-size:15px;
}
#email{
padding:0px 10px;
color:red;
font-size:15px;
}
#phone1{
padding:0px 10px;
color:red;
font-size:15px;
}
#phone2{
padding:0px 10px;
color:red;
font-size:15px;
}
</style>
<script>
function studentname(inputtxt,minlength){
	var v=document.forms["studentform"]["stud_name"].value;
	var le=/^[A-Za-z]+$/;
	var mn=3;
	var field=inputtxt.value;
	if(v==null || v==""){
    var x=document.getElementById("letter").innerHTML="*Name must be filled";
	return false;
	}
	else if(field.length<mn){
	var x=document.getElementById("letter").innerHTML="*min length must be 3";	
		}
	else if(inputtxt.value.match(le)){
	return true;
	}
	else {
	var x=document.getElementById("letter").innerHTML="*must contains letters only";
	return false;
		}	
	}
</script>

<script>
function fathername(inputtxt,minlength){
	var v=document.forms["studentform"]["stud_father_name"].value;
	var le=/^[A-Za-z]+$/;
	var mn=3;
	var field=inputtxt.value;
	if(v==null || v==""){
    var x=document.getElementById("father").innerHTML="*Name must be filled";
	return false;
	}
	else if(field.length<mn){
	var x=document.getElementById("father").innerHTML="*min length must be 3";	
		}
	else if(inputtxt.value.match(le)){
	return true;
	}
	else {
	var x=document.getElementById("father").innerHTML="*must contains letters only";
	return false;
		}
	}
</script>

<script>
function email(inputtxt,minlength){
	var v=document.forms["studentform"]["emailid"].value;
	var le=/.@/;
	var mn=6;
	var field=inputtxt.value;
	if(v==null || v==""){
    var v=document.getElementById("email").innerHTML="*email must be filled";
	return false;
	}
	else if(field.length<mn){
	var x=document.getElementById("email").innerHTML="*min length must be 6";	
		}
	else if(inputtxt.value.match(le)){
	return true;
	}
	else {
	var v=document.getElementById("email").innerHTML="*must contains '.' and '@' ";
	return false;
		}	
	}
</script>

<script>
function parent(inputtxt,minlength){
	var v=document.forms["studentform"]["parent_phone"].value;
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
		else{
			}
}
</script>

<script>
function student_phone(inputtxt,minlength){
	var v=document.forms["studentform"]["stud_phone"].value;
	var nu=/^[0-9]+$/;
	var mn=10;
	var field=inputtxt.value;
    if(v==null || v==""){
    var v=document.getElementById("phone2").innerHTML="*phone number must be filled";
	return false;
	}
	else if(!field.match(nu)){
		var v=document.getElementById("phone2").innerHTML="*phone must contains numbers only";
		return false;	
			}
	else if(field.length<mn){
	   var x=document.getElementById("phone2").innerHTML="*min length must be 10";	
		}
		else{
			}
}
</script>
</head>

<body>

<div class="header">
<h1><i>zoom<span>4</span>web</i> student registration</h1>
</div>

<div>
<div class="content">
<div class="inner">

<form name="studentform" method="post" action="registration_validation.php" enctype="multipart/form-data">
<table>

<tr>
<td>Roll number</td>
<td><input type="text" name="rollno" required="required"  /></td>
</tr>

<tr>
<td>Student name</td>
<td><input type="text" name="stud_name" required="required" /></td>
</tr>

<tr>
<td></td>
<td id="letter"></td>
</tr>

<tr>
<td>Create password</td>
<td><input type="password" name="password" required="required" onclick="studentname(document.studentform.stud_name)" /></td>
</tr>

<tr>
<td>Conform password</td>
<td><input type="password" name="ppassword" required="required" /></td>
</tr>

<tr>
<td>Current sem</td>
<td><select name="current_sem" id="sem">
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
<td>Section id</td>
<td><select name="sec_id" id="sem">
<option value="11KK">11KK</option>
<option value="12KK">12KK</option>
<option value="13KK">13KK</option>
<option value="14KK">14KK</option>
<option value="15KK">15KK</option>
</select></td>
</tr>

<tr>
<td>Section</td>
<td><select name="section" id="sem">
<option value="A">A</option>
<option value="B">B</option>
<option value="C">C</option>
<option value="D">D</option>
</select></td>
</tr>

<tr>
<td>Student father name</td>
<td><input type="text" name="stud_father_name" required="required" /></td>
</tr>

<tr>
<td></td>
<td id="father"></td>
</tr>

<tr>
<td>Address</td>
<td><textarea name="Address" rows="5" cols="22" onclick="fathername(document.studentform.stud_father_name)">
  </textarea></td>
</tr>

<tr>
<td>Gender</td>
<td><input type="radio" name="gender" value="male" checked="checked" />male
<input type="radio" name="gender" value="female"  />female</td>
</tr>

<tr>
<td>Department id</td>
<td><select name="dept_id" id="sem">
<option value="EC">EC</option>
<option value="EE">EE</option>
<option value="CSE">CSE</option>
<option value="MEC">MEC</option>
<option value="CIV">CIV</option>
</select></td>
</tr>

<tr>
<td>Course id</td>
<td><select name="course_id" id="sem">
<option value="KK4">KK4</option>
<option value="KK5">KK5</option>
<option value="KK6">KK6</option>
<option value="KK7">KK7</option>
<option value="KK8">KK8</option>
</select></td>
</tr>

<tr>
<td>Email id</td>
<td><input type="email" name="emailid" placeholder="example@gmail.com" required="required" />
</td>
</tr>

<tr>
<td></td>
<td id="email"></td>
</tr>

<tr>
<td>Parent phone number</td>
<td><input type="text" name="parent_phone" required="required" onclick="email(document.studentform.emailid)" /></td>
</tr>

<tr>
<td></td>
<td id="phone1"></td>
</tr>

<tr>
<td>Student phone number</td>
<td><input type="text" name="stud_phone" required="required" onclick="parent(document.studentform.parent_phone)" /></td>
</tr>

<tr>
<td></td>
<td id="phone2"></td>
</tr>

<tr>
<td>Status</td>
<td><textarea name="status" rows="5" cols="22" onclick="student_phone(document.studentform.stud_phone)">
</textarea></td>
</tr>

<tr>
<td>Date of birth</td>
<td><input type="date" name="dob" id="date" required="required" /></td>
</tr>

<tr>
<td>Date of join</td>
<td><input type="date" name="doj" id="date" required="required" /></td>
</tr>

<tr>
<td>Student photo</td>
<td><input type="file" name="stud_photo" required="required" /></td>
</tr>

<tr>
<td>Regulation</td>
<td><select name="regulation" id="sem">
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
<td><input type="submit" name="submit" value="submit" id="form" /></td>
</tr>
</table>


</form>


</div>
</div>
</div>
</body>
</html>