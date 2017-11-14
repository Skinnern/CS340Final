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
<!-- end Style-->
<?php
echo "<h1>About Us</h1>";
echo "<h2>Here at nickland, we want to provide a digital cookbook for those who want to share their recipes</h2>";
echo '<a href="FAQ.php">FAQ page</a>';
echo "\n";
echo '<a href="Contact.php">Contact us</a>';
?>
<? 
    include("footer.php");
?>
</html>
