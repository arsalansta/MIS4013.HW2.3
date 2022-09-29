<html>
<body>
  
  	<?php require_once("header.php"); ?>
<!doctype html>
<html lang = "en">
  

<form action="http://mis.hw2.6.amiresta.oucreate.com">
         <button type="submit">Main Page</button>
      </form>
  
  
  
  <div class="center"><h1> GET RESPONSE </h1></div>
  
<div class="center">Welcome <?php echo $_GET["name"]; ?><br>
  Your email address is: <?php echo $_GET["email"]; ?></div>
</body>
</html>
