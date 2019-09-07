<?php
   require_once("includes/db.php");
   $email = $_POST["email"];
   $password = $_POST["password"];
   $user_name = $_POST["user_name"];
$phone_number = $_POST["phone_number"];
$randomNumber = $_POST['random_number'];
   if($_POST["otp_number"] == $_POST["random_number"]){
      $query = "INSERT INTO user(user_name,user_password,phone,email) VALUES ('$user_name','$password','$phone_number','$email')";
      mysqli_query($connection,$query);
      header("Location: home-login.php");
   }else{
       echo"Dided";
       echo "Random Number is".$randomNumber;
   }
?>