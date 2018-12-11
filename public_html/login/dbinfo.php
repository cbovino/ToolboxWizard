<?php
$servername = "localhost";
$dbUsername = "root2";
$dbPwd = "Yes";
$dbName = "Project";

$conn = mysqli_connect($servername, $dbUsername, $dbPwd, $dbName);

if(!$conn){
  die("Connection failed: ".mysqli_connect_error());
}

?>
