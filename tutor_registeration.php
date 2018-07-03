<?php
require "config/dbconnect.php";

$msg = "";

if(isset($_POST['submit'])){
  $first_name = $_POST['first_name'];
  $second_name = $_POST['second_name'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $area = $_POST['area'];
  $mobile_no = $_POST['mobile_no'];
  $avatar = $_POST['avatar'];
  $pin_code = $_POST['pincode'];
  $age = $_POST['age'];
  $gender = $_POST['gender'];
  $experience = $_POST['experience'];
  $expertise = $_POST['expertise'];
  $qualification = $_POST['qualification'];
  $resume= $_POST['resume'];
// echo "<pre>";
// print_r($_POST); die();

    if(!empty($first_name) || !empty($second_name) || !empty($username) || !empty($password) || !empty($email) ||
        !empty($monile_no) || !empty($area) ||  !empty($pin_code) || !empty($avatar) || !empty($age) || !empty($experience)
      || !empty($expertise) ||  !empty($qualification) || !empty($gender) || !empty($resume)   ){

      $sql = "INSERT INTO tutor_reg (first_name, second_name, username, password, email, mobile_no, area,pin_code ,avatar ,age ,experience,expertise ,qualification ,gender ,resume)
      VALUES('$first_name','$second_name','$username','$password','$email','$mobile_no','$area','$pin_code','$avatar','$age','$experience','$expertise','$qualification','$gender','$resume') ";

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
    <title>Tutor Registeration</title>
    <link rel="stylesheet" href="asset/css/custom.css">
</head>


  <body class="reg">
    <div class="register_form">
    <form class="" action="" method="post">
      <h1>TUTOR REGISTERATION</h1>

      <fieldset>
        <legend>Login Detials</legend>
        <table>
          <tr>
          <th>  Username </th>
          <td><input type="text" name="username" placeholder="Enter Usernamet Name" required></td>
          </tr>
          <tr>
          <th>password</th>
          <td><input type="password" name="password" placeholder="Enter Password Name" required></td>
          </tr>
        </table>
      </fieldset>
      <br>
      <fieldset>
        <legend>Personal Details</legend>
      <table>
        <tr>
        <th> First Name</th>
        <td><input type="text" name="first_name" placeholder="Enter First Name" required></td>
        </tr>
        <tr>
        <th>Second Name</th>
        <td><input type="text" name="second_name" placeholder="Enter Second Name" required></td>
        </tr>

        <tr>
        <th>Email</th>
        <td><input type="text" name="email" placeholder="Enter Email Name" required></td>
        </tr>
        <tr>
        <th>mobile_No</th>
        <td><input type="text" name="mobile_no" placeholder="Enter mobileNo" pattern="[789][0-9]{9}" required></td>
        </tr>
        <tr>
        <th>Area</th>
        <td><input type="text" name="area" placeholder="Enter Area" required></td>
        </tr>
        <tr>
        <th>Pincode</th>
        <td><input type="text" name="pincode" placeholder="Enter Pincode" required></td>
        </tr>
        <tr>
        <th>Image</th>
        <td><input type="text" name="avatar" placeholder="Upload Image" required></td>
        </tr>
        <tr>
        <th>Age</th>
        <td><input type="text" name="age" placeholder="Enter Age " required></td>
        </tr>
        <tr>
        <th>Experience</th>
        <td><input type="text" name="experience" placeholder="Enter Experience" required></td>
        </tr>
        <tr>
        <th>Expertise</th>
        <td><input type="text" name="expertise" placeholder="Enter Expertise" required></td>
        </tr>
        <tr>
        <th>Qualification</th>
        <td><input type="text" name="qualification" placeholder="Enter Qualification" required></td>
        </tr>
        <tr>
        <th>Gender</th>
        <td><input type="radio" name="gender" value"male" placeholder="Enter Gender" required>male
          <input type="radio" name="gender" value"female" placeholder="Enter Gender" required>female
        </td>
        </tr>
        <tr>
        <th>Resume</th>
        <td><input type="text" name="resume" placeholder="upload File " required></td>
        </tr>

      </table>
    </fieldset><br>

       <?php echo $msg; ?>
        <input type="submit" name="submit" value="submit">

    </form>


    </div>
  </body>
</html>
