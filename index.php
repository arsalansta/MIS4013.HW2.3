<?php require_once("header.php"); ?>
<!doctype html>
<html lang = "en">
  

  
    
    
<body>
<h1 >Welcome to Amir's Homework 2!</h1>
  
  <style>
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #73AD21;
  padding: 10px;
}
</style>
  
  
  </br>
    </br>
  </br>
  </br>





<div > <p>Please enter your Name and Email Address please!</p> 
</div>


<br></br>



<div class="container text-center">
  <div class="row">
    <div class="col">
      Get function
    </div>
    <div class="col">
      post fuction
    </div>
    
  </div>
</div>







<p >
  
<h2 > POST - Function </h2>
<form action="handlepost.php" method="post">
<p > Name: <input type="text" name="name"></p><br>
<p > E-mail: <input type="text" name="email"></p><br>
<p "><input type="submit">
                         </p>
  </form>
                         
<br></br>
<h2 > GET - Function </h2>
                         
<form action="handleget.php" method="get">
<p > Name: <input type="text" name="name"></p><br>
<p > E-mail: <input type="text" name="email"></p><br>
<p ><input type="submit"></p>
                        
             </form>             
<br></br>


</html>
</body>
