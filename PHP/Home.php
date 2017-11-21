<? 
    session_start();
	//$_SESSION['login_user'] == 'Nick';
	//include('session.php');
	
 ?>

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
  <a class="active" href="Home.php">Home</a>
  <a href="RecipesSearch.php">Recipe Search</a>
  <a href="AddRecipe.php">Add Recipe</a>
  <a href="AddIngredient.php">Add Ingredient</a>
  <a href="LoginPage.php">Login</a>
  <a href="logout.php">Logout</a>
  <a href="Account.php">Account</a>
  <a href="About.php">About</a>
</div>
<!-- end Style-->
<div>
<?php
if(isset($_SESSION['login_user'])){
echo 'Welcome, '.$_SESSION['login_user'];
}
	include 'connectvarsEECS.php'; 
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
	
	//query to execute
	$query = "select U.USERNAME, r.RECIPE_NAME, r.RECIPE_COST from RECIPE r, USER U where r.USER_ID = U.USER_ID LIMIT 0,10";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query to show fields from table failed");
	}
	
	//number of fields
	$fields_num = mysqli_num_fields($result);
	echo "<h1>Popular Recipes: $table </h1>";
	echo "<table id='t01' border='1'><tr>";
	
	//table headers
	echo "<th><b>User</b></th>";	
	echo "<th><b>Recipe Name</b></th>";
	echo "<th><b>Total Cost</b></th>";
	echo "</tr>\n";
	
	//table content
	while($row = mysqli_fetch_row($result)) {	
		echo "<tr>";	
		// $row is array... foreach( .. ) puts every element
		foreach($row as $cell)		
			echo "<td>$cell</td>";	
		echo "</tr>\n";
	}

	mysqli_free_result($result);
	mysqli_close($conn);
?>
</div>
<? 
    include("footer.php");
?>
</html>

	
