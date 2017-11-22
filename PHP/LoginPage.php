<? session_start(); ?>
<!DOCTYPE html>
<!-- Recipe-->
<html>
<? 
    include("header.php");
?>
<!-- Style -->
<style>
<?php include 'index.css'; ?>
</style>
<div class="topnav">
  <a href="Home.php">Home</a>
  <a href="RecipesSearch.php">Recipe Search</a>
  <a href="AddRecipe.php">Add Recipe</a>
  <a href="AddIngredient.php">Add Ingredient</a>
  <a class="active" href="LoginPage.php">Login</a>
  <a href="logout.php">Logout</a>
  <a href="Account.php">Account</a>
  <a href="About.php">About</a>
</div>
<?php
include('loginUser.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: Home.php");
}
?>
<head>
<title>Login Form</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div>
	<h1>Login </h1>
	<div id="LoginUser">
		<h2>Login Form</h2>
		<form action="LoginUser.php" method="post">
			<label>UserName :</label>
			<input id="name" name="username" placeholder="username" type="text">
			<label>Password :</label>
			<input id="password" name="password" placeholder="**********" type="password">
			<input name="submit" type="submit" value="LoginUser">
			<span><?php echo $error; ?></span>
		</form>
	</div>
</div>
</body>
</html>