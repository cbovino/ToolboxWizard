<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Toolbox Wizard</title>
  <style>
  table{
    border-collapse: collapse;
    width: 40%;
    background-color: #fff;
    font-family: Helvetica;
    font-size: 16px;
    text-align: left;
  }
  th {
    background-color: #706ba5;
    padding: 10px 0px 10px 0px;
    color: white;
  }
  td{
    padding: 5px;
  }
  tr:nth-child(even){background-color: #f2f2f2}
  </style>

  <link rel="stylesheet" type="text/css" href="../css/index.css">
  <body>
    <ul class="nav">
      <div class="logo">
        <img class="logo-image" src="../img/wizard.jpg">
      </div>
      <div class="title">
        <a href="home.html">TOOLBOX WIZARD</a>
      </div>
      <li><a href="home.html">Home</a></li>
      <li><div class="dropdown">
        <button class="dropbtn">Subjects</button>
        <div class="dropdown-content">
          <a href="../videos/VideosPage.html#anchorbusiness">Business</a>
          <a href="../videos/VideosPage.html#anchorphysics">Physics & Science</a>
          <a href="../videos/VideosPage.html#anchorsoftware">Software & Web</a>
          <a href="../videos/VideosPage.html#anchoradobe">Adobe</a>
          <a href="../videos/VideosPage.html#anchormusic">Music Production</a>
          <a href="../videos/VideosPage.html#anchorvideo">Video & Photography</a>
          <a href="../videos/VideosPage.html#anchorart">Art & Design</a>
          <a href="../videos/VideosPage.html#anchorengineer">Engineering</a>
          <a href="../videos/VideosPage.html#anchorhistory">History</a>
        </div>
      </div></li>
      <li><a href="../progress/progress.html">Progress</a></li>
      <li><a href="../login/index.php">Sign Out</a></li>
    </ul>
    <div class="banner">
      <img class="banner-image" src="../img/banner2.png">
    </div>
    <br>
    <br>
    <br>
    <table id="hi">
      <tr>
      <th>Username</th>
      <th>Video</th>
      <th>Status</th>
    </tr>
  </body>

  <?php
  require "../login/dbinfo.php";
  session_start();
  $un = $_SESSION['userName'];

  $sql = "SELECT Username, videoID, Status FROM Progress WHERE User_Username = '$un'";
  // select columns to be displayed to user
  $result = mysqli_query($conn, $sql);

  if($result-> num_rows > 0){
    while($row = $result-> fetch_assoc()){
      echo "<tr><td>". $row["Username"]. "</td><td>". $row["videoID"]. "</td><td>". $row["Status"]. "</td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 result";
  }
  mysqli_close($conn);
  ?>
</head>
</html>
