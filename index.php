<?php require_once("header.php"); ?>
<!doctype html>
<html lang = "en">
<body>
<h1 >Welcome to Amir's Homework 2!</h1>
<p >Please enter your Name and Email Address please!</p>
<br></br>
<p >
<h2 > POST - Function </h2>
<form action="handlepost.php" method="post">
<p > Name: <input type="text" name="name"></p><br>
<p > E-mail: <input type="text" name="email"></p><br>
<p "><input type="submit"></p>
<br></br>
<h2 > GET - Function </h2>
<form action="handleget.php" method="get">
<p > Name: <input type="text" name="name"></p><br>
<p > E-mail: <input type="text" name="email"></p><br>
<p ><input type="submit"></p>
<br></br>
</form>
</form>
</html>
</body>
