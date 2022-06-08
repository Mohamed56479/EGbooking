<?php 
//session_start();
include("connect.php"); 
if(isset($_POST['Confirm'])) {
    $name= mysqli_real_escape_string($conn, $_POST['Name']);
    $_SESSION['Name']=$name;
    $email= mysqli_real_escape_string($conn, $_POST['Email']);
    $_SESSION['Email']=$email;
    $pass= mysqli_real_escape_string($conn, $_POST['password']);
    $pass2= mysqli_real_escape_string($conn, $_POST['password2']);
    $birth= mysqli_real_escape_string($conn, $_POST['birth-date']);
    $gender= mysqli_real_escape_string($conn, $_POST['gender']);
    $phone= mysqli_real_escape_string($conn, $_POST['PhoneNumber']);

    $sql2 = "SELECT * FROM users WHERE userName='$name'";
    $result = mysqli_query($conn, $sql2);

    $sql = "SELECT * FROM users WHERE email='$email'";
    $res = mysqli_query($conn, $sql);

    if(empty($name)){
        array_push($error, "Name is required");
    } elseif(empty($email)){
        array_push($error, "Email is required");
    } elseif(empty($pass)){
        array_push($error, "Password is required");
    } elseif(empty($pass2)){
        array_push($error, "Please confirm password");
    } elseif($pass!=$pass2){
        array_push($error, "Passwords don't match");
    }elseif(empty($birth)){
        array_push($error, "Birthdate is required");
    }elseif(empty($gender)){
        array_push($error, "Gender is required");
    }elseif(empty($phone)){
        array_push($error, "Phone number is required");
    }

    if(mysqli_num_rows($result) > 0){
        array_push($error,"Sorry Username already taken");}

    if(mysqli_num_rows($res) > 0){
        array_push($error,"Sorry email already taken");}
if(count($error) == 0) {
    $user_data = mysqli_fetch_assoc($res);
    $mySQL = "INSERT INTO users (userName , email , password, birthdate,phone,gender) VALUES ('$name' , '$email' , '$pass','$birth','$phone','$gender')";
    mysqli_query($conn , $mySQL);

    $code=rand(99999,11111);
    $_SESSION['code']=$code;

    $subject = "Email to verify your signup";
    $body = "Hi, there...You've signed up. now kindly take this code to verify your login: $code .\n";
    $sender = "From: egbooking2@gmail.com";
    if(mail( $email, $subject, $body, $sender)){
        echo "Email sent successfully to $email";
    }

    else{
        echo "Sorry, failed while sending mail!";
    }

    header('REFRESH:3;URL=verify.php');
   
    /*if($user_data['type']==1){
        header("Location: AdminLandingPage.php");
    }
    else{
        header("Location: signup.php");
    }*/
}

}if(isset($_GET['logout'])) {
    unset($_SESSION['email']);
    session_destroy();
    header("location:starter.html");
}
?>