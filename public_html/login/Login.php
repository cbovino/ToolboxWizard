<?php
//username and password
require "dbinfo.php";

$un = $_POST['userName'];
$pas = $_POST['pass'];

//query for select results
$sql = "Select Username, Password FROM User where Username ='$un' and Password ='$pas'";
$result = mysqli_query($conn, $sql);

//if row exists, echo enter. else no username and password
if (mysqli_num_rows($result) > 0){
  header("location: home.html");
} else{
  $message ="Incorrect Please Try Again";
  echo "<script type='text/javascript'>alert('$message');</script>";
}

?>
