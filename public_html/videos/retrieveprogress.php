<?php
//get database and specific user information information
require "dbinfo.php";
session_start();

$username = $_SESSION['usern'];

$sqlstatement = "Select videoID, subjectID, Status From Progress Where User_Username = '$username'";
$result = mysqli_query($conn, $sqlstatement);

$rows = array();

while ($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
    }
$test = json_encode($rows);

echo $test;


?>
