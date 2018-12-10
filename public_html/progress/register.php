<!DOCTYPE html>
<html>
<body>
<?php
session_start();

$userNa = "";
$email = "";
$errors = array();

$database = mysqli_connect("localhost", "root", "", "databasename" );

// receive input from the register form
$userNa = mysqli_real_escape_string($database, $_POST["username"]);
$email = mysqli_real_escape_string($database, $_POST["email"]);
$password = mysqli_real_escape_string($database, $_POST["creatingPass"]);

// check to see if the username and email exit or not
$user_check_query = "SELECT * FROM User WHERE Username='$userNa' OR email='$email' LIMIT 1";
$result = mysqli_query($database, $user_check_query);
$user = mysqli_fetch_assoc($result);
if ($user["username"] == $userNa) {
  array_push($errors, "User name already exists");
}
if ($user["email"] == $email) {
  array_push($errors, "email already exists");
}

if(count($errors) == 0){
  $pass = md5($password);
  $insert = "INSERT INTO USER (Username, Email, Password)
  			  VALUES('$userNa', '$email', '$pass')";
  mysqli_query($database, $insert);
  $_SESSION["username"] = $userNa;
  $_SESSION["successMeg"] = "Registration is successfull";
}

?>
</body>
</html>
