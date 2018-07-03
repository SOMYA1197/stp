<?php

session_start();
require('../config/dbconnect.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tutor_reg WHERE id = '$id'");
$array = mysqli_fetch_array($query);


 ?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../asset/css/custom.css">
    <style>


    img {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 5px;
        width: 200px;
        height: 200px;
    }

    img:hover {
        box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
    }
    </style>


  </head>
  <body >

<img src="../images/author.jpg" alt="dummy" style="width:200px">
<div class="text">
name of tutor: <?php echo $array['first_name']." ".$array['second_name']; ?><br>
email: <?php echo $array['email']; ?><br>
mobile: <?php echo $array['mobile_no']; ?><br>
area: <?php echo $array['area']; ?><br>
pincode: <?php echo $array['pin_code']; ?><br>
age: <?php echo $array['age']; ?><br>
experience: <?php echo $array['experience']; ?><br>
expertise: <?php echo $array['expertise']; ?><br>
qualification: <?php echo $array['qualification']; ?><br>
gender: <?php echo $array['gender']; ?><br>
resume: <?php echo $array['resume']; ?><br>
<input type="submit" name="submit" value="Read More">';
<?php
while ($a = mysqli_fetch_array($query)) {

  echo "<a href='tutor_profile.php?id=".$a['id']."'>  ";

  echo '<input type="submit" name="submit" value="Read More">';
  echo "</div></li></a>";
}

 ?>
</div>
  </body>
</html>
