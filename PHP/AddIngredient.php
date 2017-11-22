<? session_start(); ?>
<!DOCTYPE html>
<!-- Add Student to Table User -->
<html>
<? 
    include("header.php");
?>
<style>
<?php include 'index.css'; ?>
</style>
<div class="topnav">
  <a href="Home.php">Home</a>
  <a href="RecipesSearch.php">Recipe Search</a>
  <a href="AddRecipe.php">Add Recipe</a>
  <a class="active" href="AddIngredient.php">Add Ingredient</a>
  <a href="LoginPage.php">Login</a>
  <a href="logout.php">Logout</a>
  <a href="Account.php">Account</a>
  <a href="About.php">About</a>
</div>

<div>
<h2> Add new Ingredient</h2>
<form action="insertIngredient.php" method="post">
    <p>
        <label for="IName">Ingredient Name:</label>
		<p>
			</p>
        <input type="text" name="IName" id="IName"  placeholder="Ingredient Name...">
    </p>
	<p>
        <label for="cost">Cost:</label>
		<p>
			</p>
        <input type="text" name="cost" id="cost"  placeholder="Ingredient Cost...">
    </p>
    <input type="submit" value="Submit">
</form>
</div>
</body>
</html>
