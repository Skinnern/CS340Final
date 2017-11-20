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
  <a class="active" href="Home.php">Home</a>
  <a href="RecipesSearch.php">Recipe Search</a>
  <a href="Account.php">Account</a>
  <a href="About.php">About</a>
</div>
<!-- end Style-->
<?php
	include 'connectvarsEECS.php'; 
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}
	$Searchitem = mysqli_real_escape_string($conn, $_POST['Searchitem']);
	$Locationof = $_POST['Locationof'];

	//$Location = mysqli_real_escape_string($conn, $_POST['Location']);
	//query to execute
	echo $Searchitem;
	echo $Locationof;
	if ($Locationof == 'User'){
	$query = "select Username from USER where Username like '%$Searchitem%' LIMIT 0,20";
	}
	if ($Locationof == 'User'){
	$query = "select Recipe_name from RECIPE where Recipe_name like '%$Searchitem%' LIMIT 0,20";	
	}
	if ($Locationof == 'Ingredient'){
	$query = "select Ingredient_name from Ingredient where Ingredient_name = '%$Searchitem%' LIMIT 0,20";	
	}
	
	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Query to show fields from table failed");
	}
	
	//number of fields
	$fields_num = mysqli_num_fields($result);
	echo "<h1>Search Results: $table </h1>";
	echo "<table id='t01' border='1'><tr>";
	
	//table headers
	echo "<td><b>User</b></td>";	
	echo "<td><b>Recipe Name</b></td>";
	echo "<td><b>Total Cost</b></td>";
	echo "</tr>\n";
	
	//table content
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
<? 
    include("footer.php");
?>
</html>

	
