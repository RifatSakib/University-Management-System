<?php include('nav02.php');?>
<?php include('cedit.php'); ?>


<!DOCTYPE HTML>
<html>
<head>
<link rel="stylesheet" type="text/css" media="screen and (max-width: 600px)" href="mobile.css">
<title>Edit Profile</title>
<script src="../js/edit.js"></script>
</head>
<body>




<h1 align='center'>প্রোফাইল সম্পাদনা </h1>

<form action="" method="post">
   

            নাম পরিবর্তন :<input type="text" name="name" placeholder="পুরো নাম" >
        <?php echo $validateName?><br><br>
       
            ইমেইল পরিবর্তন::::<input type="text" name="email" placeholder="পুরো ইমেইল" >
        <?php echo $validateEmail?><br><br>
  


    <br>
    

        জন্ম তারিখ পরিবর্তন::::   
            <input type="date" id="birthday" name="birthday"><?php echo $validateDateOfBirth?>

            <br><br>
            
                ফোন নং পরিবর্তন:::::<input type="text" name="phonenumber" placeholder="মোবাইল নং" >
            <?php echo $validatePhonenumber?> <br><br>
            
              পিন কোড<input type="text" name="otp" placeholder="পিন কোড" ><br><br>
        
         
                বর্তমান ঠিকানা::::<textarea name="বরতমান ঠিকানা" placeholder="বর্তমান ঠিকানা" rows="4"cols="30" ></textarea><?php echo $validatePresentAddress?> <br><br>
        স্থায়ী ঠিকানা:<textarea type="text" name="permanentAddress" placeholder="স্থায়ী ঠিকানা " rows="4"cols="30"></textarea>><?php echo $validatePermanentAddress ?> <br><br>
      
        
        
    

            <input name="submit" type="submit" value="পরিবর্তন">
        </form><br>
 
<a href="home1.php"> মূল পেজ এ যান </a>
</body>

</html>
