<?php

session_start();
if( $_SESSION['code']){
    $verify = $_SESSION['code'];
  }

if( $_SESSION['Name']){
    $user = $_SESSION['Name'];
  }

if( $_SESSION['Email']){
    $email = $_SESSION['Email'];
  } 
include("connect.php"); 


//$code= mysqli_real_escape_string($conn, $_POST['code']);

$query="UPDATE `users` SET `Isactive` = '1' WHERE `users`.`userName` = '$user' ";
$result=mysqli_query($conn,$query);
if( $result){
     $subject = "Email verification";
     $body = "Congratulation you have been verified successfully and here is a link to log in
     http://localhost/HOTEL%20BOOKING/signup.php";
     $sender = "From: egbooking2@gmail.com";
     if(mail( $email, $subject, $body, $sender)){
         echo "Email sent successfully to $email";
     }

     else{
         echo "Sorry, failed while sending mail!";
     }
}
?>