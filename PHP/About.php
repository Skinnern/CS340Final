<? session_start(); ?>
<html>
<? 
    include("header.php");
?>

<style>
<?php include 'index.css'; ?>
<!-- header -->
</style>
<div class="topnav">
  <a href="Home.php">Home</a>
  <a href="RecipesSearch.php">Recipe Search</a>
  <a href="AddRecipe.php">Add Recipe</a>
  <a href="AddIngredient.php">Add Ingredient</a>  
  <a href="About.php">About</a>
    
  <?php if(!isset($_SESSION['login_user'])){ ?>
  <a href="LoginPage.php">Login</a>
  <a href="Account.php">Create Account</a>
  <?php } ?>
</div>
<!-- end header -->
<div>
<?php
echo "<h1>About Us</h1>";
echo "<h2>Here at nickland, we want to provide a digital cookbook for those who want to share their recipes</h2>";
echo '<a href="FAQ.php">FAQ page</a>';
echo "\n";
echo '<a href="Contact.php">Contact us</a>';
?>
</div>
<? 
    include("footer.php");
?>
</html>
