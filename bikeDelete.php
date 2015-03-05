<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
// define variables and set to empty values
$bikeDelete = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $bikeDelete = test_input($_POST["bikeDelete"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>Delete Bike</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 
	<p>
	Which Bike?
	<select name="bikeDelete">
	  <option value="">Select...</option>
	  <option value="23456789"> 23456789 mybike</option>
	  <option value="33377799"> 33377799 herbike</option>
	</select>
	</p>   
   
   <br><br>
   <input type="submit" name="Delete Bike" value="Submit">
</form>

<form method="get" action="./home.php">
    <button type="submit">Cancel</button>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $bikeDelete;
echo "<br>";

?>
<a href="http://stackoverflow.com/questions/5189662/populate-a-drop-down-box-from-a-mysql-table-in-php"> How to get SQL data in a pulldown menu </a>
</body>
</html>