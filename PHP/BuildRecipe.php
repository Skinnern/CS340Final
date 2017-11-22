<?php session_start(); ?>
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
  <a href="Home.php">Home</a>
  <a href="RecipesSearch.php">Recipe Search</a>
  <a class="active" href="AddRecipe.php">Add Recipe</a>
  <a href="AddIngredient.php">Add Ingredient</a>
  <a href="LoginPage.php">Login</a>
  <a href="logout.php">Logout</a>
  <a href="Account.php">Account</a>
  <a href="About.php">About</a>
</div>
<div>
<?php

$error=''; // Variable To Store Error Message
include 'connectvarsEECS.php'; 
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if (!$conn) {
			die('Could not connect: ' . mysql_error());
		}
		$query = "select Ingredient_name from INGREDIENT";
		$result = mysqli_query($conn, $query);
		if (!$result) {
			die("Query to show fields from table failed");
		}

$Stepnum=$_POST['Stepnum'];
if ($Stepnum == 0) {
echo "please retry with a valid number of steps.";
} else{
?>
<form action="SubmitRecipe.php" method="post">
	<!-- Step 1 -->
	<?php if($Stepnum >= 1) {?>
		<label for="Step1">Step 1:</label>
		<p>
			</p>
			<input type="text" id="Step1" name="Step1" placeholder="Enter Step Instructions...">
		<!-- Dropdown -->
		<label for="Locationof">Ingredient (optional)</label>
		
		<!-- fix this so that it displays all ingredients, then apply to all steps -->
			<select name="Locationof" id="Locationof">
				<option value = "0" selected = "selected">Select...</option>
				<?php
				while ($row = mysql_fetch_array($result)){
					echo $row['Ingredient_name'];
				echo "<option>" . $row['Ingredient_name'] . "</option>";
				}
				?>
			</select>
	
	<?php } ?>
	<!-- Step 2 -->
	<?php if($Stepnum >= 2) {?>
    <label for="Step2">Step 2:</label>
	<p>
			</p>
    <input type="text" id="Step2" name="Step2" placeholder="Enter Step Instructions...">
	<?php } ?>
	<!-- Step 3 -->
	<?php if($Stepnum >= 3) {?>
    <label for="Step3">Step 3:</label>
	<p>
			</p>
    <input type="text" id="Step3" name="Step3" placeholder="Enter Step Instructions...">
	<?php } ?>
	<!-- Step 4 -->
	<?php if($Stepnum >= 4) {?>
    <label for="Step4">Step 4:</label>
	<p>
			</p>
    <input type="text" id="Step4" name="Step4" placeholder="Enter Step Instructions...">
	<?php } ?>
	<!-- Step 5 -->
	<?php if($Stepnum >= 5) {?>
    <label for="Step5">Step 5:</label>
	<p>
			</p>
    <input type="text" id="Step5" name="Step5" placeholder="Enter Step Instructions...">
	<?php } ?>
	<!-- Step 6 -->
	<?php if($Stepnum >= 6) {?>
    <label for="Step6">Step 6:</label>
	<p>
			</p>
    <input type="text" id="Step6" name="Step6" placeholder="Enter Step Instructions...">
	<?php } ?>
	<!-- Step 7 -->
	<?php if($Stepnum >= 7) {?>
    <label for="Step7">Step 7:</label>
	<p>
			</p>
    <input type="text" id="Step7" name="Step7" placeholder="Enter Step Instructions...">
	<?php } ?>
	<!-- Step 8 -->
	<?php if($Stepnum >= 8) {?>
    <label for="Step8">Step 8:</label>
	<p>
			</p>
    <input type="text" id="Step8" name="Step8" placeholder="Enter Step Instructions...">
	<?php } ?>
	<!-- Step 9 -->
	<?php if($Stepnum >= 9) {?>
    <label for="Step9">Step 9:</label>
	<p>
			</p>
    <input type="text" id="Step9" name="Step9" placeholder="Enter Step Instructions...">
	<?php } ?>
	<!-- Step 10 -->
	<?php if($Stepnum >= 10) {?>
    <label for="Step10">Step 10:</label>
	<p>
			</p>
    <input type="text" id="Step10" name="Step10" placeholder="Enter Step Instructions...">
	<?php } ?>
	<input type="submit" value="Submit">

</form>
<?php
}
?>
</div>
</html>