<!DOCTYPE html>
<html>
<head>

</head>
<body>
<?php
$username = $_POST["userName"];
$password = $_POST["pass"];
// connect to the sever
 $host="localhost";
 $user="root";
 $password="";
 $db="databasename";
 mysql_connect($host, $user, $password);
 mysql_select_db($db);

 $outcome = mysql_query("select * from User where Username='".$username."' AND Password='".$password."'")
                or die("Failed connect to query database" . mysql_error());
 $row = mysql_fetch_array($outcome);
 if($row["userName"] == $username && $row["userName"] == $password){
   echo "Login success"
 }else{
   echo "Failed to login";
 }



?>
</body>
</html>
