<? session_start(); ?>
<!DOCTYPE html>
<!-- Recipe -->
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
  <a href="LoginPage.php">Login</a>
  <a class="active" href="logout.php">Logout</a>
  <a href="Account.php">Account</a>
  <a href="About.php">About</a>
</div>
<!-- end Style-->
<div>
<?
session_start();
session_unset();
session_destroy();

echo "logged out";
?>
</div>
<? 
    include("footer.php");
?>
</html>