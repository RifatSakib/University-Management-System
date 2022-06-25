<?php
	if(isset($_POST['postt'])){
		$postt = $_POST['userp'];
		

		session_start();
		$_SESSION['postt'] = $postt;
		
		//echo "Hi ". $_SESSION['user'];
		header('location:Notice.php');// redirect to a page

	}
?>
 <?php include('adnav.php');?>
 <h1>Post here to give notice for the notice page</h1>
 <hr>
 
 <form method="post" style="margin-left:350px ;">
 	<input type="text" name="userp" placeholder="Your Post">
 	<input type="submit" name="postt" value="Post Now">
 </form>
 <style type="text/css">body{
background: url(a1.png);
background-attachment: fixed;
background-size: cover;
}
</style>

 
