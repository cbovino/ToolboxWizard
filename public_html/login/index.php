<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="../css/LoginAndSignup.css">
  <title>Toolbox Wizard - login and register </title>
  <script>
  function validateForm(){
    var x = document.forms["login"]["userName"].value;
    var y = document.forms["login"]["pass"].value;
    if(x == "" || y == ""){
      alert("Please enter your user name or password");
      return false;
    }
  }
  function validateForm1(){
    var a = document.forms["register"]["userName"].value;
    var b = document.forms["register"]["email"].value;
    var c = document.forms["register"]["creatingPass"].value;
    var d = document.forms["register"]["confirmPass"].value;
    if(a == "" || b == "" || c == "" || d == ""){
      alert("Information is required");
      return false;
    } else if (c != d) {
      alert("It isn't the same with the password. Please try again");
    }
  }
  function hidePassOrNot(){
    var x = document.getElementById("inputPass");
    if(x.type === "password"){
      x.type = "text";
    } else {
      x.type = "password";
    }
  }
</script>
</head>
<body>
  <div id="headerBlock">
    <h1>Toolbox Wizard</h1>
  </div>
  <form align="center" name="login" action="Login.php" onsubmit="return validateForm()" method = "POST">

    <p><b>Login</b></p>
    User name: <input type="text" name="userName"> <br><br>
    Password: <input type="password" name="pass" id="inputPass"> <br><br>
    <input type="checkbox" onclick="hidePassOrNot()">Show Password <br><br>
    <input type="submit" value="Login"> <br><br><br><br>
  </form>

  <form align="center" name="register" action="register.php" onsubmit="return validateForm1()" method = "POST">
    <fieldset>
      <p><b>Sign Up</b></p>
      Username: <input type="text" name="lastName"> <br><br>
      Email: <input type="text" name="email"> <br><br>
      Password: <input type="password" name="creatingPass"> <br><br>
      Confirm Password: <input type="password" name="confirmPass"> <br><br>
      <input type="submit" value="Submit"><br><br>

    </fieldset>

  </form>
</body>
</html>
