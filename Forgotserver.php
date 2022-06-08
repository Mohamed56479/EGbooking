<?php 

include("connect.php"); 

if(isset($_POST['Forgot'])) {
    $email= mysqli_real_escape_string($conn, $_POST['email']);
    $query = "SELECT password FROM users WHERE email='$email'";
    $pass = mysqli_query($conn, $query);

    $sql = "SELECT * FROM users WHERE email='$email'";
    $res = mysqli_query($conn, $sql);

    if(empty($email)){
        echo "Email is required";
    }
    if(mysqli_num_rows($res) == 0){
        echo "Enter Valid Email!";
    }
    else{
       $row=mysqli_fetch_assoc($pass);
       $res=$row["password"];
        $subject = "About forgotpassword";
        $body = "your account password is:  $res 
        http://localhost/HOTEL%20BOOKING/signup.php";
        $sender = "From: egbooking2@gmail.com";
        if(mail( $email, $subject, $body, $sender)){
            echo "Email sent successfully to $email";
        }

        else{
            echo "Sorry, failed while sending mail!";
        }
    }
    
}
?>