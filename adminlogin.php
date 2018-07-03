<?php
require "config/dbconnect.php";

$msg = "";

if(isset($_POST['submit'])){
  $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,"SELECT * FROM admin");
    $array = mysqli_fetch_array($query);
    $dbusername = $array['username'];
    $dbpassword= $array['password'];

    if($username == $dbusername && $password==$dbpassword){
      header("location: admin");
    }else{
      $msg = " Incorrect Username or Password";
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
       <div class="login">Admin Login</div>
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
       <form class="" action="" method="post">

       <div class="form">
         <?php echo $msg; ?>
         <br>
         <label for="username">Username</label>
         <input type="text"  name="username">
         <label for="password">Password</label>
         <input type="password"  name="password">
         <input type="submit" name="submit" value="Submit">
       </div>

     </form>
     </div>
   </div>
 </div>

 <script src="asset/js/login.js" charset="utf-8"></script>
   </body>
 </html>
