<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<h2>Search Registry</h2>

<?php
// define variables and set to empty values
$country = $city = $serialnum = $partial = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $country = test_input($_POST["country"]);
   $city = test_input($_POST["city"]);
   $serialnum = test_input($_POST["serialnum"]);
   $partial = (isset($_POST['partial']) ? (int) $_POST['partial'] : 0);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   
   Country: <input type="text" name="country">
   <br><br>
   City: <input type="text" name="city">
   <br><br>
   S/N: <input type="text" name="serialnum"><input type="checkbox" name="partial" value=1> partial s/n <br>
   <br><br>
   <input type="submit" name="submit" value="Search"> 
</form>



<hr/>
<table>
    <thead>
	<tr>
		<th>Nickname</th>
		<th>Brand</th>
		<th>Model</th>
		<th>S/N</th>
		<th>State</th>
		<th>Image</th>
		<th>email address</th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td>myBike</td>
		<td>Specialized</td>
		<td>FSR StumpJumper</td>
		<td> 123456789 </td>
		<td>OK</td>
		<td> link to image </td>
		<td> joe.theft.victim@badtown.com</d>
	</tr>
</table>
<hr/>  
<a href="http://stackoverflow.com/questions/14057943/use-php-to-generate-html-table-with-static-cell-count-of-mysql-data"> How to create table with SQL and PHP </a>
<hr/> 	

<hr/>
<form method="get" action="./home.php">
    <button type="submit">Cancel</button>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $country;
echo "<br>";
echo $city;
echo "<br>";
echo $serialnum;
echo "<br>";
echo $partial;
echo "<br>";
?>


</body>
</html>