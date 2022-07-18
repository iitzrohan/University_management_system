<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>DELHI TECHNOLOGICAL UNIVERSITY</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'><link rel="stylesheet" href="LoginCSS/AdminLogin.css">
</head>
<body>
<!-- partial:index.partial.html -->
<p class="tip"></p>
<div class="cont">
  <div class="form sign-in">
      <form method="post" id="admin_login" action="lecturer_login.php">
        <h2>Lecturer Login </h2>
        <label>
        <span>Email</span>
          <input type="email" name="email" id="admin_signin_email" placeholder="johndoe@dtu.ac.in" required pattern="(.+@dtu.ac.in)|(.+@gmail.com)"
          title="Please enter an email with Medipol extension"><br>
      </label>
      <label>
          <span>Password</span>
          <input type="password" name="password" id="admin_signin_password" pattern=".{5,15}" required title="5 to 15 characters" placeholder="**********" > <br>
      </label>
    <button class="submit" name="login_lecturer">Sign In</button>
    </form>
    <a href = "login.php"><button class="fb-btn"><span>Continue as student</span></button></a>
  </div>
</div>

<a class="icon-link">
  <img src="https://upload.wikimedia.org/wikipedia/en/thumb/b/b5/DTU%2C_Delhi_official_logo.png/200px-DTU%2C_Delhi_official_logo.png">
</a>
<!-- partial -->
  

</body>
</html>
