<?php
//username and password
$un = $_POST['userName'];
$pas = $_POST['pass'];

//important names
$servername = "localhost";
$username = "root";
$password = "Yes";


// create connection
$conn =  new mysqli($servername, $root, $password, "Project");

//// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected";

//query for
$sql = "Select Username, Password FROM User where Username ='$un' and Password ='$pas'";
//select results
$results = $conn->query($sql);


//if row exists, echo enter. else no username and password
if ($result->num_rows > 0){
  echo "enter";

} else{
  echo "sorry incorrect";
}

?>
