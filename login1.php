<?php
require "config/dbconnect.php";

session_start();

$msg = "";

if(isset($_POST['submit'])){
  $username = $_POST['username'];
    $password = $_POST['password'];
      $catagory = $_POST['catagory'];
      if($catagory=="student"){
            $query = mysqli_query($conn,"SELECT * FROM student_reg WHERE username='$username' && password='$password' ");
            $array = mysqli_fetch_array($query);
            $studentusername = $array['username'];
            $studentpassword= $array['password'];
            $studentemail = $array['email'];
            if($username == $studentusername && $password==$studentpassword){
              header("location: student");

            }else{
              $msg = " Incorrect Username or Password";
            }

  }
  else{
            $query = mysqli_query($conn,"SELECT * FROM tutor_reg WHERE username='$username' && password='$password'");
            $array = mysqli_fetch_array($query);
            $tutorusername = $array['username'];
            $tutorpassword= $array['password'];
            if($username == $tutorusername && $password==$tutorpassword){
              header("location: tutor");
            }else{
              $msg = " Incorrect Username or Password";
            }
  }

}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="asset/css/custom.css">
  </head>
  <body>

    <style media="screen">
    body{
      margin: 0px;
       background: #ccc url("images/slider_background.jpg")!important;
    }

    /* .form{
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      margin-top: 40px;
      border-radius: 20px;
      box-shadow: 0px 0px 20px 0px #ccc;
      background-color: #cccccc;
    }




  input{

        padding: 8px;
      border-radius: 5px;
      outline: 0px;
      border: 0;
  } */

    </style>


    <!--
    <form class="" action="" method="post">
      <h1>Login</h1>
      <input type="text" name="username" placeholder="enter username" required><br><br>
      <input type="password" name="password" placeholder="enter password" required><br><br>
      <label for="">Login By</label><br>
      <input type="radio" name="catagory" value="student" required>Student
      <input type="radio" name="catagory" value="tutor" required>Tutor<br><br>
      <input type="submit" name="submit" value="submit">
      <br><br>
      <?php // echo $msg;  ?>
    </form>
  -->


<div class="page">
  <div class="container">

      <div class="form">
        <form class="" method="post">

          <h1 style=" text-align: center">LOGIN</h1><br><br>

        <label for="email">Email</label>
        <input type="text" name="username" placeholder="Enter First Name" required><br><br>
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Enter your password"><br><br>
          <label for="">Login By</label><br>

        <input type="radio" name="catagory" value="student" required>Student
        <input type="radio" name="catagory" value="tutor" required>Tutor<br><br>

        <input type="submit" name="submit" id="submit" value="Submit">

        <?php echo $msg; ?>

      </form>
      </div>
    </div>
  </div>

<script src="asset/js/login.js" charset="utf-8"></script>
  </body>
</html>
