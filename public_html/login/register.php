<!DOCTYPE html>
<html>
<body>
<?php
$userNa = "";
$email = "";
$password = "";

$database = mysqli_connect('localhost', 'root', 'mysql', 'Project' );

// receive input from the register form
$userNa = mysqli_real_escape_string($database, $_POST['newusername']);
$password = mysqli_real_escape_string($database, $_POST['creatingPass']);
$email = mysqli_real_escape_string($database, $_POST['email']);

// check to see if the username and email exit or not

$sql = "SELECT * FROM USER WHERE Username='$userNa'";
$result = mysqli_query($database, $sql);
if (mysqli_num_rows($result) > 0 ) {
  echo "<h2> Sorry, User name already exists! Please enter a difference user name
   by click Return to go back to register page!</h2>";
  echo "<a href ='index.php'><button>Return</button></a><br><br>";
} else {
  $insert = "INSERT INTO USER (Username, Password, Email)
  			  VALUES('$userNa', '$password', '$email')";
  mysqli_query($database, $insert);
  header("location: ../login/home.html");
}


?>
</body>
</html>
