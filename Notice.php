 <?php include('navbar.php');?>
 <h2>Notice from admin</h2>



<?php
        
session_start();
    if(isset($_SESSION['postt'])){
        echo "<h3> The notice is:<br> ". $_SESSION['postt']. "</h3>"; 
    echo"<br>";
 
    }
      


        

 ?>
 <h5 class="card-title" title="General Instructions and policies of Online Classes (MS Teams) 'Effective from 20 March 2020'">General Instructions and policies of Online Classes (MS Teams) 'Effective from 20 March 2020' </h5>
   <style>
    body{
background: url(a1.png);
background-attachment: fixed;
background-size: cover;
}
  </style>
 