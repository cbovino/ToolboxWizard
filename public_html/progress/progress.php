<?php
require "../login/dbinfo.php";

$sql2 = "SELECT subjectID, status from Progress where username = 'cbovino'";
$results = $conn-> query($sql2);
$rows = array();
while ($r = mysqli_fetch_assoc($results)) {
    $rows[] = $r;
    }
$tests = json_encode($rows);
echo $tests;

$conn -> close();

?>
