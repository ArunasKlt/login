<?php
if(isset($_POST['submit'])) {
require 'db.inc.php';


 $username = mysqli_real_escape_string($con,$_POST['user']);
 $password = mysqli_real_escape_string($con,md5($_POST['password']));

 if(empty($password) ||empty($username)) {

 	header("Location: ../login.inc.php");
 	exit();
 }

 $result = mysqli_query($con, "SELECT * FROM login WHERE Username = '$username' AND Password = '$password'");

 if(mysqli_num_rows($result) == 1) {
 	echo "Successfully logged in";
 }

 else {
 	echo "Wrong password";
 }
}
?>