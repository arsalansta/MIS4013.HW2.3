<?php require_once("header.php"); ?>
<!doctype html>
<html lang = "en">
  

    
    
<body>
<h1 class="center" >Welcome to Amir's Homework 2!</h1>
  

    <li class="nav-item">
        <a class="nav-link" href="course-section.php">course-section</a>
      </li>
		
	<li class="nav-item">
        <a class="nav-link" href="courses.php">Courses</a>
      </li>
	
	<li class="nav-item">
        <a class="nav-link" href="instructor-cards.php">instructor cards</a>
      </li>
		
	<li class="nav-item">
        <a class="nav-link" href="instructor-section.php">instructor-section</a>
      </li>
		
		
	<li class="nav-item">
        <a class="nav-link" href="instructors.php">instructors</a>
      </li>
		
		
	<li class="nav-item">
        <a class="nav-link" href="sections.php">sections</a>
      </li>

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
               </form>            
                         
                         
                         
    <div class="col">
                    

                    
      <h2 > GET - Function </h2>
                         
<form action="handleget.php" method="get">
<p > Name: <input type="text" name="name"></p><br>
<p > E-mail: <input type="text" name="email"></p><br>
<p ><input type="submit"></p>
                        
             </form>  
      
      

      
    </div>
    
  </div>

</div>







<p >
  

                         
<br></br>
           
<br></br>


</html>
</body>
