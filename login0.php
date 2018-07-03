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
    <link rel="stylesheet" href="asset/css/login.css">
  </head>
  <body>
    <!-- <form class="" action="" method="post">
      <h1>Login</h1>
      <input type="text" name="username" placeholder="enter username" required><br><br>
      <input type="password" name="password" placeholder="enter password" required><br><br>
      <label for="">Login By</label><br>
      <input type="radio" name="catagory" value="student" required>Student
      <input type="radio" name="catagory" value="tutor" required>Tutor<br><br>
      <input type="submit" name="submit" value="submit">
      <br><br>
      <?php // echo $msg;  ?>
    </form> -->


    <div class="page">
  <div class="container">
    <div class="left">
      <div class="login">Login</div>
      <div class="eula">By logging in you agree to the ridiculously long terms that you didn't bother to read</div>
    </div>
    <div class="right">
      <svg viewBox="0 0 320 300">
        <defs>
          <linearGradient
                          inkscape:collect="always"
                          id="linearGradient"
                          x1="13"
                          y1="193.49992"
                          x2="307"
                          y2="193.49992"
                          gradientUnits="userSpaceOnUse">
            <stop
                  style="stop-color:#ff00ff;"
                  offset="0"
                  id="stop876" />
            <stop
                  style="stop-color:#ff0000;"
                  offset="1"
                  id="stop878" />
          </linearGradient>
        </defs>
        <path d="m 40,120.00016 239.99984,-3.2e-4 c 0,0 24.99263,0.79932 25.00016,35.00016 0.008,34.20084 -25.00016,35 -25.00016,35 h -239.99984 c 0,-0.0205 -25,4.01348 -25,38.5 0,34.48652 25,38.5 25,38.5 h 215 c 0,0 20,-0.99604 20,-25 0,-24.00396 -20,-25 -20,-25 h -190 c 0,0 -20,1.71033 -20,25 0,24.00396 20,25 20,25 h 168.57143" />
      </svg>
      <div class="form">
        <form class="" method="post">

        <label for="email">Email</label>
        <input type="text" name="username" id="email">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        
        <input type="radio" name="catagory" value="student" required>Student
        <input type="radio" name="catagory" value="tutor" required>Tutor<br><br>

        <input type="submit" name="submit" id="submit" value="Submit">

        <?php echo $msg; ?>

      </form>
      </div>
    </div>
  </div>
</div>

<script src="asset/js/login.js" charset="utf-8"></script>
  </body>
</html>
