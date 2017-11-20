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
  <a href="Account.php">Account</a>
  <a class="active" href="About.php">About</a>
</div>
<!-- end Style-->
<?php
echo "<h1>Frequently Asked Questions</h1>";
echo "<h2>Here is where We would place the Questions we were frequently asked, if we had any.</h2>";

echo '<a href="About.php">About Us</a>';
echo "\n";
echo '<a href="Contact.php">Contact us</a>';
?>
<? 
    include("footer.php");
?>
</html>
