<? session_start(); ?>
<!DOCTYPE html>
<!-- new account -->
<html>
<? 
    include("header.php");
?>

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
<h2>Add Ingredient</h2>
<?php
	$numstepsagain = $_GET["numstepsagain"];
// change the value of $dbuser and $dbpass to your username and password
	include 'connectvarsEECS.php'; 
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (!$conn) {
		die('Could not connect: ' . mysql_error());
	}

	
	
	
// Escape user inputs for security
	$Rname = mysqli_real_escape_string($conn, $_POST['Rname']);
	echo $Rname;
	//oh boy, if loop, we need to use the numstepsagain to get the values we want for here
	if($numstepsagain >= 1){
		$Step1 = mysqli_real_escape_string($conn, $_POST['Step1']);
		$IName1 = mysqli_real_escape_string($conn, $_POST['Iname1']);
		$ingredamount1 = mysqli_real_escape_string($conn, $_POST['ingredamount1']);
		//echo $Step1;
		//echo $IName1;
		//echo $ingredamount1;
	}
	if($numstepsagain >= 2){
		$Step2 = mysqli_real_escape_string($conn, $_POST['Step2']);
		$IName2 = mysqli_real_escape_string($conn, $_POST['Iname2']);
		$ingredamount2 = mysqli_real_escape_string($conn, $_POST['ingredamount2']);
		//echo $Step2;
		//echo $IName2;
		//echo $ingredamount2;
	}
	if($numstepsagain >= 3){
		$Step3 = mysqli_real_escape_string($conn, $_POST['Step3']);
		$IName3 = mysqli_real_escape_string($conn, $_POST['Iname3']);
		$ingredamount3 = mysqli_real_escape_string($conn, $_POST['ingredamount3']);
		//echo $Step3;
		//echo $IName3;
		//echo $ingredamount3;
	}
	if($numstepsagain >= 4){
		$Step4 = mysqli_real_escape_string($conn, $_POST['Step4']);
		$IName4 = mysqli_real_escape_string($conn, $_POST['Iname4']);
		$ingredamount4 = mysqli_real_escape_string($conn, $_POST['ingredamount4']);
		//echo $Step4;
		//echo $IName4;
		//echo $ingredamount4;
	}
	if($numstepsagain >= 5){
		$Step5 = mysqli_real_escape_string($conn, $_POST['Step5']);
		$IName5 = mysqli_real_escape_string($conn, $_POST['Iname5']);
		$ingredamount5 = mysqli_real_escape_string($conn, $_POST['ingredamount5']);
		//echo $Step5;
		//echo $IName5;
		//echo $ingredamount5;
	}
	if($numstepsagain >= 6){
		$Step6 = mysqli_real_escape_string($conn, $_POST['Step6']);
		$IName6 = mysqli_real_escape_string($conn, $_POST['Iname6']);
		$ingredamount6 = mysqli_real_escape_string($conn, $_POST['ingredamount6']);
		//echo $Step6;
		//echo $IName6;
		//echo $ingredamount6;
	}
	if($numstepsagain >= 7){
		$Step7 = mysqli_real_escape_string($conn, $_POST['Step7']);
		$IName7 = mysqli_real_escape_string($conn, $_POST['Iname7']);
		$ingredamount7 = mysqli_real_escape_string($conn, $_POST['ingredamount7']);
		//echo $Step7;
		//echo $IName7;
		//echo $ingredamount7;
	}
	if($numstepsagain >= 8){
		$Step8 = mysqli_real_escape_string($conn, $_POST['Step8']);
		$IName8 = mysqli_real_escape_string($conn, $_POST['Iname8']);
		$ingredamount8 = mysqli_real_escape_string($conn, $_POST['ingredamount8']);
		//echo $Step8;
		//echo $IName8;
		//echo $ingredamount8;
	}
	if($numstepsagain >= 9){
		$Step9 = mysqli_real_escape_string($conn, $_POST['Step9']);
		$IName9 = mysqli_real_escape_string($conn, $_POST['Iname9']);
		$ingredamount9 = mysqli_real_escape_string($conn, $_POST['ingredamount9']);
		//echo $Step9;
		//echo $IName9;
		//echo $ingredamount9;
	}
	if($numstepsagain >= 10){
		$Step10 = mysqli_real_escape_string($conn, $_POST['Step10']);
		$IName10 = mysqli_real_escape_string($conn, $_POST['Iname10']);
		$ingredamount10 = mysqli_real_escape_string($conn, $_POST['ingredamount10']);
		//echo $Step10;
		//echo $IName10;
		//echo $ingredamount10;
	}
	
	//end age	
	
//check for unique Ingredient
	$numberOfErrors = 0;
	$queryUnique = "select recipe_name from RECIPE where recipe_name = '$Rname'";
	//check not empty
	if(empty($Rname) == true){
		echo "
		please enter a Name for the recipe\n";
		$numberOfErrors++;
	}
	//echo "$IName1";
	//echo "$ingredamount1";
	echo "<br />";
	if($IName1 != '0' && $ingredamount1 <= 0 && $numstepsagain >= 1){
		echo "Please enter an amount of ingredient 1";
		$numberOfErrors++;
	}
		if($IName2 != '0' && $ingredamount2 <= 0 && $numstepsagain >= 2){
		echo "Please enter an amount of ingredient 2";
		$numberOfErrors++;
	}
		if($IName3 != '0' && $ingredamount3 <= 0 && $numstepsagain >= 3){
		echo "Please enter an amount of ingredient 3";
		$numberOfErrors++;
	}
		if($IName4 != '0' && $ingredamount4 <= 0 && $numstepsagain >= 4){
		echo "Please enter an amount of ingredient 4";
		$numberOfErrors++;
	}
		if($IName5 != '0' && $ingredamount5 <= 0 && $numstepsagain >= 5){
		echo "Please enter an amount of ingredient 5";
		$numberOfErrors++;
	}
		if($IName6 != '0' && $ingredamount6 <= 0 && $numstepsagain >= 6){
		echo "Please enter an amount of ingredient 6";
		$numberOfErrors++;
	}
		if($IName7 != '0' && $ingredamount7 <= 0 && $numstepsagain >= 7){
		echo "Please enter an amount of ingredient 7";
		$numberOfErrors++;
	}
		if($IName8 != '0' && $ingredamount8 <= 0 && $numstepsagain >= 8){
		echo "Please enter an amount of ingredient 8";
		$numberOfErrors++;
	}
		if($IName9 != '0' && $ingredamount9 <= 0 && $numstepsagain >= 9){
		echo "Please enter an amount of ingredient 9";
		$numberOfErrors++;
	}
		if($IName10 != '0' && $ingredamount10 <= 0 && $numstepsagain >= 10){
		echo "Please enter an amount of ingredient 10";
		$numberOfErrors++;
	}
	
	
	
	 //if(empty($cost) == true){
	//	echo "
		//please enter a cost per ounce\n";
		//$numberOfErrors++;
	//}

	
	//if we have errors, do not let the user proceed
	if($numberOfErrors > 0) {
		if(mysqli_query($conn, $queryUnique)){
			//echo "Connected.";
			//fbsql_affected_rows
			$result = mysqli_query($conn, $queryUnique);
			
			//testing rows retrieved
			if (mysqli_num_rows($result) > 0) {
				echo "
				Error: ingredient already exists in database";
				mysqli_close($conn);		
			} else{
				// attempt insert query 
				$query = "INSERT INTO INGREDIENT (Ingredient_name, Ingredient_cost) VALUES ('$IName', $cost)";
				if(mysqli_query($conn, $query)){
					echo "New Ingredient added successfully!";
				} else{
					echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
				}
			}
			
		} else{
			echo "ERROR: Could not able to execute $queryUnique. " . mysqli_error($conn);
		}
	}
// close connection
mysqli_close($conn);


?>
<div>
<? 
    include("footer.php");
?>
</html>

	
