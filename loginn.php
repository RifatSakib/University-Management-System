



<?php include('navbar.php');?>

<html>  
<head>
<title>login</title>
<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="mobile.css">
<link rel="stylesheet" type="text/css" href="homepage.css">
<script src="log.js"></script>
</head>
<body>
    <style>
    body{
background: url(a1.png);
background-attachment: fixed;
background-size: cover;
}
  </style>
<!DOCTYPE HTML>
<HEAD>
<TITLE>JavaScript Required Fields Validation</TITLE>
<SCRIPT type="text/javascript">
function validateRequiredFields(this_form)
{
var username=this_form.usrname.value;
var password=this_form.usrpassword.value;
if(userid==null || username!="18-38215-2")
{
alert("Please enter your username");
this_form.usrname.focus();
return false;
}

if(password==null || password!="12345678")
{
alert("Please enter your password");
this_form.usrpassword.focus();
return false;
}

}
</SCRIPT>
</HEAD>
<BODY>
  <div class="esha">




<FORM action="home1.php" onsubmit="return validateRequiredFields(this)" method="Post">
   <p style="color: red;"><h2> *User name and password required</h2></p>
Username : <input type= "text" name="usrname"/><span style="color:red;">*</span><br/><br>
Password : <input type= "password" name="usrpassword"/><span style="color:red;">*</span><br/><br>
<INPUT type="submit" value="Login"/>
</FORM>

</div>

</BODY>
</HTML>
<a href="registration.php">Registration</a><br><br>
<button><a href="HomePage.php">Go To HomePage </button></a></button></body></html>
