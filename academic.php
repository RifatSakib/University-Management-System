
<?php include('navbar.php');?>
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
  
  $("#flip1").click(function(){
    $("#panel1").slideToggle("slow");
  });
});
</script>
<style> 
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #2d8659;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 50px;
  display: none;
}




#panel1, #flip1 {
  padding: 5px;
  text-align: center;
  background-color: #2d8659;
  border: solid 1px #c3c3c3;
}

#panel1 {
  padding: 50px;
  display: none;
}
</style>
</head>
<body>
 
<div id="flip">Bachelor of Science</div>
<div id="panel"><a href="cse.php">CSE</a><br>
               <a href="eee.php"> EEE</a><br>
               <a href="arci.php"> Architecture</a>

</div>

<div id="flip1">Others</div>
<div id="panel1"><a href="bba.php">BBA</a><br>
               <a href="llb.php"> LLB</a>
                 
</div>

</body>
</html>
