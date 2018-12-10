<!DOCTYPE html>
<html>
<body>
<?php
require "dbinfo.php";

session_start();

$userNa = "";
$email = "";
$errors = array();

// receive input from the register form
$userNa = $_POST["username"];
$password = $_POST["creatingPass"];
$email = $_POST["email"];

// check to see if the username and email exit or not

$user_check_query = "SELECT * FROM User WHERE Username='$userNa' OR Email='$email' LIMIT 1";
$result = mysqli_query($conn, $user_check_query);
$user = mysqli_fetch_assoc($result);
if($user){
  if ($user["username"] === $userNa) {
    array_push($errors, "User name is existed");
  }
  if ($user["email"] === $email) {
    array_push($errors, "Email is existed");
  }
}

if(count($errors) == 0){
  $pass = md5($password);
  $insert = "INSERT INTO USER (Username, Password, Email)
  			  VALUES('$userNa', '$pass', '$email')";
  mysqli_query($conn, $insert);
  //echo mysqli_affected_rows($conn);
  header("location: ../home.html");
}
?>
</body>
</html>
