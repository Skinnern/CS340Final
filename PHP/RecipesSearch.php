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
  <form action="SearchResults.php" method="post">
    <label for="Searchitem">Search for</label>
    <input type="text" id="Searchitem" name="Searchitem" placeholder="Item to search for...">

    <label for="Locationof">Under</label>
	<select name "Locationof" id="Locationof">
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