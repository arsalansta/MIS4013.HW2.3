<?php require_once("header.php"); ?>
<!doctype html>
<html lang = "en">
  
  <style>
.center {
  margin: auto;
  width: 60%;
  border: 3px solid #000000;
  padding: 10px;
}
</style>
  
    
    
<body>
<h1 class="center" >Welcome to Amir's Homework 2!</h1>
  

  

  </br>


<div class="center"> <p>Please enter your Name and Email Address please!</p> 
</div>

  </br>




<div class="center">
  <div class="row">
    <div class="col">
      
      
    
      
      <h2 > POST - Function </h2>
<form action="handlepost.php" method="post">
<p > Name: <input type="text" name="name"></p><br>
<p > E-mail: <input type="text" name="email"></p><br>
<p "><input type="submit">
                         </p>
    </div>
                         
                         
                         
                         
    <div class="col">
                    

                    
      <h2 > GET - Function </h2>
                         
<form action="handleget.php" method="get">
<p > Name: <input type="text" name="name"></p><br>
<p > E-mail: <input type="text" name="email"></p><br>
<p ><input type="submit"></p>
                        
             </form>  
      
      
  </form>
      
    </div>
    
  </div>

</div>







<p >
  

                         
<br></br>
           
<br></br>


</html>
</body>
