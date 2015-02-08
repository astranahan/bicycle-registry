<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
// define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $name = test_input($_POST["name"]);
   $email = test_input($_POST["email"]);
   $website = test_input($_POST["website"]);
   $comment = test_input($_POST["comment"]);
   $gender = test_input($_POST["gender"]);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>Home Page</h2>
<hr/>
<h3>Registered Bikes</h3>
<table>
    <thead>
	<tr>
		<th>Nickname</th>
		<th>Brand</th>
		<th>Model</th>
		<th>S/N</th>
		<th>State</th>
		<th>Image</th>
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
	</tr>
</table>
<hr/>  
<a href="http://stackoverflow.com/questions/14057943/use-php-to-generate-html-table-with-static-cell-count-of-mysql-data"> How to create table with SQL and PHP </a>
<hr/> 	

<table>
<tr>
<td>
<form method="get" action="./bikeAdd.php">
    <button type="submit">Add Entry</button>
</form>
</td>
<td>
<form method="get" action="./bikeDelete.php">
    <button type="submit">Delete Entry</button>
</form>
</td>
</table>
<br>
<form method="get" action="./bikeSearch.php">
    <button type="submit">Search Registry</button>
</form><form method="get" action="./editProfile.php">
    <button type="submit">Edit Profile</button>
</form>


</body>
</html>