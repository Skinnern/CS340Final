﻿<!DOCTYPE html>
<!-- Add Student to Table User -->
<html>
<? 
    include("header.php");
?>
<style>
<?php include 'index.css'; ?>
</style>
<div class="topnav">
  <a class="active" href="Home.php">Home</a>
  <a href="RecipesSearch.php">Recipe Search</a>
  <a href="Account.php">Account</a>
  <a href="About.php">About</a>
</div>

<div>
<h2> Add new User</h2>
<form action="insertUser.php" method="post">
    <p>
        <label for="username">username:</label>
        <input type="text" name="username" id="username"  placeholder="Username...">
    </p>
	   <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email"  placeholder="Email...">
    </p>
	    <p>
        <label for="password">Password:</label>
        <input type="text" name="password" id="password"  placeholder="Password...">
    </p>
    <input type="submit" value="Submit">
</div>
</form>
</body>
</html>
