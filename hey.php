<?php 

session_start();

$UserID="18-38215-2";
$password="12345678";

if (isset($_POST['uname']))


 {
  if ($_POST['uname']==$UserID && $_POST['pass']==$password) {
    $_SESSION['uname'] = $UserID;
    header("location:dashboard.php");
  }
  else{
    $msg="UserID or password invalid";
    // echo "<script>alert('uname or pass incorrect!')</script>";
  }

}

 ?>
<html>
<body>
<script type="text/javascript">
function validate(){
var name=document.f1.name.value;
var passwordlength=document.f1.password.value.length;
var status=false;
if(name==""){
document.getElementById("namelocation").innerHTML=
" <img src='http://www.javatpoint.com/javascriptpages/images/unchecked.gif'/> Please enter your name";
status=false;
}else{
document.getElementById("namelocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";
status=true;
}

if(passwordlength<6){
document.getElementById("passwordlocation").innerHTML=
" <img src='http://www.javatpoint.com/javascriptpages/images/unchecked.gif'/> Password must be greater than 6";
status=false;
}else{
document.getElementById("passwordlocation").innerHTML=" <img src='http://www.javatpoint.com/javascriptpages/images/checked.gif'/>";
}

return status;
}
</script>
<form name="f1" action="home1.php" onsubmit="return validate()">
<table>
<tr><td>Name:</td><td><input type="text" name="name"/>
<span id="namelocation" style="color:red"></span></td></tr>
<tr><td>Password:</td><td><input type="password" name="password"/>
<span id="passwordlocation" style="color:red"></span></td></tr>
<tr><td colspan="2"><input type="submit" value="log in"/> </td></tr>
</table>
</form>
</body>
</html>