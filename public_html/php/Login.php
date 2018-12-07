<?php
//username and password
$un = $_REQUEST["userName"]
$pas = $_REQUEST["pass"]

// create connection
$conn =  new mysqli($servename, $username, $password $dbname);

//// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//request
$sql = "Select Username, Password FROM User where Username = '".$un."' and Password = '".$pas"' ";
//select
$row = mysql_num_rows($sql);

//if row exists, echo enter. else no username and password
if ($row > 0){
  echo "enter";

} else{
  echo "sorry incorrect";
}

?>
