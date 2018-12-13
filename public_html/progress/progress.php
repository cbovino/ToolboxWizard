<!DOCTYPE html>
<html>
<head>
  <title>Watch Progress</title>
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
    <th>videoID</th>
    <th>username</th>
    <th>subjectID</th>
    <th>status</th>
  </tr>
  <?php
  require "dbinfo.php";

  $sql = "SELECT videoID, username, subjectID, status from Progress";
  $result = $conn-> query($sql);

  if($result-> number_rows >0){
    while($row = $result-> fetch_acco()){
      echo "<tr><td>".$row["videoID"]."</td><td>".$row["username"]."</td><td>"..$row["subjectID"]."</td><td>".$row["status"]."</td></tr>";
    }
    echo"</table>";
  }
  else{
    echo "0 result";
  }

  $conn -> close();

  ?>
</table>
</body>
</html>
