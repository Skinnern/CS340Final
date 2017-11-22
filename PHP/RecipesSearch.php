<? session_start(); ?>
<!DOCTYPE html>
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
  <a class="active" href="RecipesSearch.php">Recipe Search</a>
  <a href="AddRecipe.php">Add Recipe</a>
  <a href="AddIngredient.php">Add Ingredient</a>
  <a href="LoginPage.php">Login</a>
  <a href="logout.php">Logout</a>
  <a href="Account.php">Account</a>
  <a href="About.php">About</a>
</div>

<div>
  <form action="SearchResults.php" method="post">
    <label for="Searchitem">Search for</label>
	<p>
	</p>
    <input type="text" id="Searchitem" name="Searchitem" placeholder="Item to search for...">
	<p>
	</p>
	<br />
    <label for="Locationof">Under</label>
	<p>
	</p>
	<select name="Locationof" id="Locationof">
		<option value = "0" selected = "selected">Select...</option>
		<option value = "1" >Recipes</option>
		<option value = "2" >Users</option>
		<option value = "3" >Ingredients</option>
	</select>
	<? 
    $Locationof = $_POST['Locationof'];
	echo $Locationof;
	?>
    

    
    <input type="submit" value="Submit">
  </form>
</div>


<!-- end Style-->
<? 
    include("footer.php");
?>
</html>