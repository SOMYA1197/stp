<?php

session_start();
require('../config/dbconnect.php');

$query = mysqli_query($conn, "SELECT * FROM student_reg");



 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../asset/css/custom.css">
    <?php
    // require("bootstrap.php"); ?>

   <style media="screen">
   body{
     margin: -20px;
     padding:0px;
   }
   .box{
     width: 200px;
     padding: 5px;
     height: 250px;

   }
   .division{
     list-style-type: none;
   }
   .division li{
     /* display: inline-block; */
     margin: 20px 20px;
   }
   .box img{
     height: 150px;
     border-radius: 200px;
   }

   .moving-left{
     float: left;
   }

.division{
  text-align: center;
}
.division li{
  display: inline-block;
}
   </style>
  </head>
  <body class="profile">
    <div class="header">
      <div class="prof">
          <img src="../images/dummy-image2.jpg" alt="Profile Pic" width="50" height="50">
      </div>
        <h1 style="text-align:center">welcome to the student profile</h1>
     <a style="float:right;"href="../logout.php">Logout</a>
    </div>


      <div class="dropdown">
        <label for="gender">gender</label>
        <select>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
  <label for="class">area</label>
      <select>
        <option value="primary">mansarover</option>
          <option value="secoundary">pratap nagar</option>
            <option value="seniour">vaishali</option>
        </select>
        <label for="class">Class</label>
            <select>
              <option value="primary">primary</option>
                <option value="secoundary">primary</option>
                  <option value="seniour">seniour</option>
              </select>
              <label for="class">Duration</label>
                  <select>
                    <option value="1hour">1 hour</option>
                      <option value="2 hour">2 hour</option>
                        <option value="3 hour">optional</option>
                    </select>

              


<div class="coloum">


    <ul class="division">



    <?php
    while ($a = mysqli_fetch_array($query)) {

      echo "<a href='student_profile.php?id=".$a['id']."'>
      <li><div class='box'>
            <img src='../tutor/image/dummy.jpg'><br>
      ";
      echo $a['first_name']." ".$a['second_name']."<br>";
      echo $a['mobile']."<br>";
      echo $a['email']."<br><br>";
      echo '<input type="submit" name="submit" value="Read More">';
      echo "</div></li></a>";
    }

     ?>
    </ul>
</div>
  </body>
</html>
