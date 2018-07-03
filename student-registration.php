<?php
require "config/dbconnect.php";

$msg = "";

if(isset($_POST['submit'])){
  $first_name = $_POST['first_name'];
   $second_name = $_POST['second_name'];
      $username = $_POST['username'];
        $email = $_POST['email'];
          $area = $_POST['area'];
            $mobile = $_POST['mobile'];
          $avatar = $_POST['avatar'];
            $pincode = $_POST['pincode'];
          $class = $_POST['class'];
            $password = $_POST['password'];
              $gender = $_POST['gender'];


    if(!empty($first_name) || !empty($second_name) || !empty($username) || !empty($email) ||
    !empty($area) || !empty($avatar) || !empty($class) || !empty($password) || !empty($gender)   ){

      $sql = "INSERT INTO student_reg (first_name, second_name, username, password, email, mobile, area, pincode , avatar , class,gender) VALUES('$first_name','$second_name','$username','$password','$email','$mobile','$area','$pincode','$avatar','$class','$gender') ";

        $query = mysqli_query($conn,$sql);
        if ($query ) {
          // $msg = "succesfully registered";
          echo "<script> alert('SUCCEFULLY REGISTERED'); </script>";
        }
        else {
        echo "<script> alert('REGISTERATION FAILED'); </script>";
      }

    }else{
      $msg = "some field is empty";
    }


}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>student register</title>
      <link rel="stylesheet" href="asset/css/custom.css">
  </head>
  <body class="reg2">
    <div class="register_form">
    <form class="" action="" method="post">
      <h1>STUDENT REGISTERATION</h1>

      <table>

         <tr>
         <th> First Name</th>
         <td><input type="text" name="first_name" placeholder="Enter First Name" required></td>
         </tr>
         <tr>
         <th> Second Name</th>
         <td><input type="text" name="second_name" placeholder="Enter Second Name" required></td>
         </tr>
         <tr>
         <th> Username</th>
         <td><input type="text" name="username" placeholder="Enter Username Name" required></td>
         </tr>
         <tr>
         <th> Password</th>
         <td><input type="password" name="password" placeholder="Enter Password" required></td>
         </tr>
         <tr>
         <th> Email</th>
         <td><input type="email" name="email" placeholder="Enter Email" required></td>
         </tr>
         <tr>
         <th>Mobile </th>
         <td><input type="text" name="mobile" placeholder="Enter number" pattern="[789][0-9]{9}" required></td>
         </tr>
         <tr>
         <th> Area</th>
         <td><input type="text" name="area" placeholder="Enter Area" required></td>
         </tr>
         <tr>
         <th>Image</th>
         <td><input type="text" name="avatar" placeholder="Upload Image" required></td>
         </tr>
         <tr>
         <th> Pincode</th>
         <td><input type="text" name="pincode" placeholder="Pincode" required></td>
         </tr>
         <tr>
         <th> Image</th>
         <td><input type="file" name="image" placeholder="Upload Image" required></td>
         </tr>
         <tr>
         <th> Class</th>
         <td><input type="text" name="class" placeholder="Enter Class" required></td>
         </tr>
         <tr>
         <th> Gender</th>
         <td><input type="radio" name="gender" value"male" placeholder="Enter Gender" required>male
           <input type="radio" name="gender" value"female" placeholder="Enter Gender" required>female
         </td>
         <tr>
         <td><input type="submit" name="submit" value="submit"></td>
       </tr>
         </tr>


       <?php echo $msg; ?>
</form>
</div>
  </body>
</html>
