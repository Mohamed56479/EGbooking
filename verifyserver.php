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

if(isset($_POST['verify'])) {
    $code= mysqli_real_escape_string($conn, $_POST['code']);

    if(empty($code)){
        echo "Name is required";
    }

    elseif($code!=$verify){
        echo '<script>alert("Code does not match")</script>';
    }
    
    else{
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
         header('REFRESH:2;URL=signup.php');
    }
}
    
}
?>