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

<!-- Select dropdown -->
<body>
<select name "search for" id="search for">
<option value = "0" selected = "selected">What to search for</option>
<option value = "Recipe" >Recipes</option>
<option value = "User" >Users</option>
<option value = "Ingredient" >Ingredients</option>
</select>
<!-- end dropdown -->

<!-- Begin Text Entry -->
<textarea rows="1" cols="50">
Water
</textarea>
<!-- end text entry -->


<!-- end Style-->
<? 
    include("footer.php");
?>
</html>