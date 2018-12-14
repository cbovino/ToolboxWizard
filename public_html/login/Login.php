<?php
//username and password
require "dbinfo.php";
session_start();
$un = $_POST['userName'];
$pas = $_POST['pass'];

$_SESSION["username"] = $un;

//query for select results
$sql = "SELECT Username, Password FROM User WHERE Username ='$un' AND Password ='$pas'";
$result = mysqli_query($conn, $sql);

//if row exists, echo enter. else no username and password
if (mysqli_num_rows($result) > 0){
  header("location: home.html");
} else{
  $message ="Incorrect, Please Try Again";
  echo "<script type='text/javascript'>alert('$message');</script>";
}

?>
