<? 
	session_start();
	
?>
<!DOCTYPE html>
<!-- Recipe-->
<html>
<? 
	session_start();
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
<div>
<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
include 'connectvarsEECS.php'; 
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
	//echo "$username";
	//echo "$password";

	$query = "select * from USER where PASSWORD='$password' AND USERNAME='$username'";
	$result = mysqli_query($conn, $query);
	$row_count = $result->num_rows;
//set session if logged in
	if ($row_count > 0) {
		$_SESSION['login_user']=$username; // Initializing Session
		echo "logged in as:";
		echo("{$_SESSION['login_user']}"."<br />");
	} else {
		$error = "Username or Password is invalid";
	}
	mysql_close($conn); // Closing Connection
	}
}

?>
</div>