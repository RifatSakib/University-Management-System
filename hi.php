<?php include('navbar.php');?>
<!DOCTYPE HTML>
<HEAD>
<TITLE>JavaScript Required Fields Validation</TITLE>
<SCRIPT type="text/javascript">
function validateRequiredFields(this_form)
{
var username=this_form.usrname.value;
var password=this_form.usrpassword.value;
if(username==null || username!="mridul")
{
alert("Please enter your username");
this_form.usrname.focus();
return false;
}

if(password==null || password!="123456")
{
alert("Please enter your password");
this_form.usrpassword.focus();
return false;
}

}
</SCRIPT>
</HEAD>
<BODY>



<FORM action="home1.php" onsubmit="return validateRequiredFields(this)" method="Post">
Username: <input type= "text" name="usrname"/><span style="color:red;">*</span><br/>
Password: <input type= "password" name="usrpassword"/><span style="color:red;">*</span><br/>
<INPUT type="submit" value="Login"/>
</FORM>



</BODY>
</HTML>