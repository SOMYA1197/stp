<?php

session_start();
require('../config/dbconnect.php');
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM tutor_reg WHERE id = '$id'");
$array = mysqli_fetch_array($query);


 ?>


name of tutor: <?php echo $array['first_name']." ".$array['second_name']; ?>
