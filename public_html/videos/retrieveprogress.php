<?php
//get database and specific user information information
require "../login/dbinfo.php";
session_start();

$username = $_SESSION['usern'];

$sqlstatement = "SELECT videoID, subjectID, Status FROM Progress WHERE User_Username = 'cbovino'";
$result = mysqli_query($conn, $sqlstatement);

$rows = array();

while ($r = mysqli_fetch_assoc($result)) {
    $rows[] = $r;
    }
$test = json_encode($rows);

echo $test;


?>
