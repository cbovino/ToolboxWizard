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

//query for select results
$sql = "Select Username, Password FROM User where Username ='$un' and Password ='$pas'";
$result = mysqli_query($conn, $sql);


//if row exists, echo enter. else no username and password
if (mysqli_num_rows($result) = 1){
  echo "string";
} else{
  $message ="Incorrect Please Try Again";
  echo "<script type='text/javascript'>alert('$message');</script>";
}

?>
