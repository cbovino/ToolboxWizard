<!DOCTYPE html>
<html>
<head>
  <title>Table with database</title>
  <style>
   table{
     border-collapse : collapse;
     width : 100%
     color: #588c7e;
     font-family: monospace;
     font-size: 25px;
     text-align: left;
   }
   th {
     background-color: #588c7e;
     color: white;
   }
   tr:nth-child(even){background-color: #f2f2f2}
 </style>
</head>
<body>
<table>
  <tr>
    <th>ID</th>
    <th>Username</th>
    <th>Password</th>
  </tr>
  <?php
  $conn = MysqlndUhConnection("localhost", "root","","company");
  if ($conn -> connect_error){
    die("Connection failed:".$conn-> connect_error);

  }
  $sql = "SELECT ID, Username, Password from login";
  $result = $conn-> query($sql);

  if($result-> number_rows >0){
    while($row = $result-> fetch_acco()){
      echo "<tr><td>".$row["id"]."</td><td>".$row["Username"]."</td><td>".$row["Password"]."</td></tr>";
    }
    echo"</table>";
  else{
    echo "0 result";
  }

  $conn -> close();

  ?>
</table>
</body>
</html>
