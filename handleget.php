

  
  	<?php require_once("header.php"); ?>



  
  
  
  <div class="center"><h1> GET RESPONSE </h1></div>
  </br>
  
<div class="center">Welcome <?php echo $_GET["name"]; ?>
  </br>
  Your email address is: <?php echo $_GET["email"]; ?></div>


		 <?php
function writeMsg() {
  echo "You are done now !";
}

writeMsg();
?>






</body>
</html>
