<?php 
  include 'navbar.php';

?>



<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
  <style type="text/css">
    section {
      margin-top: -20px;
    }
  </style>
   
</head>
<body>


<section>
  <div class="log_img">
        <br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;"> &nbsp Library Management System</h1>
        <h1 style="text-align: center; font-size: 25px;">User Login Form</h1><br>
      <form name="Login" action="" method="">
        <div class="login">
          <input class="form-control" type="text" name="first" placeholder="Username" required=""> <br>
          <input class="form-control" type="password" name="password" placeholder="Password" required=""> <br>
          <input class="btn btn-default" type="text" type="submit" name="submit" value="Sign Up" style="color:black; width: 60px; height: 30px;" >
        </div>
        <p style="color: white; padding-left: 15px;">
            <br><br>
            <a style="color:white;" href="">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
            New to this website?<a style="color: white;" href="registration.php">Sign Up</a>
          </p>
      </form>
     
    </div>
  </div>
</section>
</body>
