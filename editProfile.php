<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<?php
// define variables and set to empty values
$nickname = $pass1 = $pass2 = $email = $country = $city = $emailvisible = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $nickname = test_input($_POST["nickname"]);
   $pass1 = test_input($_POST["pass1"]);
   $pass2 = test_input($_POST["pass2"]);
   $email = test_input($_POST["email"]);
   $country = test_input($_POST["country"]);
   $city = test_input($_POST["city"]);
   $emailvisible = (isset($_POST['emailvisible']) ? (int) $_POST['emailvisible'] : 0);
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<h2>Edit Profile</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<table>
 <tr>
   <td>Nickname: </td>
   <td><input type="text" name="nickname"></td>
   <td>* Visible to public </td>
   <td> Country: </td> 
   <td> <input type="text" name="country"></td>
 </tr>
  
  <tr>
   <td>Password: </td>
   <td><input type="password" name="pass1"></td>
   <td><input type="password" name="pass2"></td>
   <td> City: </td> 
   <td> <input type="text" name="city"></td>
 </tr>
  
  <tr>
   <td>email: </td>
   <td><input type="text" name="email"></td>
   <td><input type="checkbox" name="emailvisible" value=1></td>
   <td></td> 
   <td></td>
 </tr>
  <tr>
   <td><input type="submit" name="submit" value="Save"></td>
   <td>
       <form method="get" action="./home.php">
       <button type="submit">Cancel</button>
       </form>
   </td>
   <td></td>
   <td></td> 
   <td></td>
 </tr>
</table>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $nickname;
echo "<br>";
echo $pass1;
echo "<br>";
echo $pass2;
echo "<br>";
echo $email;
echo "<br>";
echo $country;
echo "<br>";
echo $city;
echo "<br>";
echo $emailvisible;
?>

</body>
</html>