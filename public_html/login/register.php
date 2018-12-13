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
  $insertprogress = "INSERT INTO Progress (idProgress, videoID, username, subjectID, User_Username, Youtube_videoID, Subjects_subjectid, Status) VALUES ('2', 'onetwo', '$userNa', '1', '$userNa', 'onetwo', '1', 'Incomplete'), ('3', 'onethree', '$userNa', '1', '$userNa', 'onethree', '1', 'Incomplete'), ('4', 'twoone', '$userNa', '2', '$userNa', 'twoone', '2', 'Incomplete'), ('5', 'twotwo', '$userNa', '2', '$userNa', 'twotwo', '2', 'Incomplete'), ('6', 'twothree', '$userNa', '2', '$userNa', 'twothree', '2', 'Incomplete'), ('7', 'threeone', '$userNa', '3', '$userNa', 'threeone', '3', 'Incomplete'), ('8', 'threetwo', '$userNa', '3', '$userNa', 'threetwo', '3', 'Incomplete'), ('9', 'threethree', '$userNa', '3', '$userNa', 'threethree', '3', 'Incomplete'), ('10', 'fourone', '$userNa', '4', '$userNa', 'fourone', '4', 'Incomplete'), ('11', 'fourtwo', '$userNa', '4', '$userNa', 'fourtwo', '4', 'Incomplete'), ('12', 'fourthree', '$userNa', '4', '$userNa', 'fourthree', '4', 'Incomplete'), ('13', 'fiveone', '$userNa', '5', '$userNa', 'fiveone', '5', 'Incomplete'), ('14', 'fivetwo', '$userNa', '5', '$userNa', 'fivetwo', '5', 'Incomplete'), ('15', 'fivethree', '$userNa', '5', '$userNa', 'fivethree', '5', 'Incomplete'), ('16', 'sixone', '$userNa', '6', '$userNa', 'sixone', '6', 'Incomplete'), ('17', 'sixtwo', '$userNa', '6', '$userNa', 'sixtwo', '6', 'Incomplete'), ('18', 'sixthree', '$userNa', '6', '$userNa', 'sixthree', '6', 'Incomplete'), ('19', 'sevenone', '$userNa', '7', '$userNa', 'sevenone', '7', 'Incomplete'), ('20', 'seventwo', '$userNa', '7', '$userNa', 'seventwo', '7', 'Incomplete'), ('22', 'eightone', '$userNa', '8', '$userNa', 'eightone', '8', 'Incomplete'), ('23', 'eighttwo', '$userNa', '8', '$userNa', 'eighttwo', '8', 'Incomplete'),('24', 'eightthree', '$userNa', '8', '$userNa', 'eightthree', '8', 'Incomplete'), ('25', 'nineone', '$userNa', '9', '$userNa', 'nineone', '9', 'Incomplete'), ('26', 'ninetwo', '$userNa', '9', '$userNa', 'ninetwo', '9', 'Incomplete'), ('27', 'ninethree', '$userNa', '9', '$userNa', 'ninethree', '9', 'Incomplete'), ('21', 'seventhree', '$userNa', '7', '$userNa', 'seventhree', '7', 'Incomplete'), ('1', 'oneone', '$userNa', '1', '$userNa', 'oneone', '1', 'Incomplete')";

  mysqli_query($database, $insert);
  mysqli_query($database, $insertprogress);
  header("home.html");
}


?>
</body>
</html>
