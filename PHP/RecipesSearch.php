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
  <a class="active" href="Home.php">Home</a>
  <a href="RecipesSearch.php">Recipe Search</a>
  <a href="Account.php">Account</a>
  <a href="About.php">About</a>
</div>

<div>
  <form action="SearchResults.php">
    <label for="lname">Search for</label>
    <input type="text" id="lname" name="lastname" placeholder="Item to search for...">

    <label for="country">Under</label>
	<select name "search for" id="search for">
	<option value = "0" selected = "selected">Recipe</option>
	<option value = "Recipe" >Recipes</option>
	<option value = "User" >Users</option>
	<option value = "Ingredient" >Ingredients</option>
	</select>
    

    
    <input type="submit" value="Submit">
  </form>
</div>


<!-- end Style-->
<? 
    include("footer.php");
?>
</html>