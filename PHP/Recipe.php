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
  <a class="active" href="Home.php">Home</a>
  <a href="RecipesSearch.php">Recipe Search</a>
  <a href="Account.php">Account</a>
  <a href="About.php">About</a>
</div>
<!-- end Style-->
<div>
<?php
	//recipe steps
	include 'connectvarsEECS.php'; 
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
	$query = "select S.STEP_DESC, I.INGREDIENT_NAME, S.INGREDIENT_AMOUNT from RECIPE R, STEP S, INGREDIENT I where R.RECIPE_ID=S.RECIPE_ID and S.INGREDIENT_ID = I.INGREDIENT_ID and R.RECIPE_NAME like '%burger%';";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query to show fields from table failed");
	}
	$fields_num = mysqli_num_fields($result);
	echo "<h1>Steps: $table </h1>";
	echo "<table id='t01' border='1'><tr>";

	echo "<th><b>Step Description</b></th>";
	echo "<th><b>Ingredient Used</b></th>";
	echo "<th><b>Amount(In ounces)</b></th>";
	
	echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {	
		echo "<tr>";	
		// $row is array... foreach( .. ) puts every element
		// of $row to $cell variable	
		foreach($row as $cell)		
			echo "<td>$cell</td>";	
		echo "</tr>\n";
	}
	
	//Comments
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
	$query = "Select U.USERNAME, C.COMMENT from COMMENT C, RECIPE R, USER U where C.RECIPE_ID = R.RECIPE_ID and C.USER_ID = U.USER_ID and R.RECIPE_NAME like '%burger%';";
	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query to show fields from table failed");
	}
	$fields_num = mysqli_num_fields($result);
	//echo "<h1>Comments: $table </h1>";
	echo "<table id='t01' border='1'><tr>";
	//table headers
	//for($i=0; $i<$fields_num; $i++) {	
	//	$field = mysqli_fetch_field($result);	
	//	echo "<th><b>$field->name</b></th>";
	//}
	
	echo "<th><b>User</b></th>";
	echo "<th><h>Comment</b></th>";
	echo "</tr>\n";
	while($row = mysqli_fetch_row($result)) {	
		echo "<tr>";	
		// $row is array... foreach( .. ) puts every element
		// of $row to $cell variable	
		foreach($row as $cell)		
			echo "<td>$cell</td>";	
		echo "</tr>\n";
	}
	

	mysqli_free_result($result);
	mysqli_close($conn);
?>
</div>
<? 
    include("footer.php");
?>
</html>

	
