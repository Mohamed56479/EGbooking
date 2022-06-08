<?php 
include("connect.php"); 
if(isset($_POST['add'])) {
    $name= mysqli_real_escape_string($conn, $_POST['Name']);
    $email= mysqli_real_escape_string($conn, $_POST['Email']);
    $pass= mysqli_real_escape_string($conn, $_POST['password']);
    $pass2= mysqli_real_escape_string($conn, $_POST['password2']);
    $birth= mysqli_real_escape_string($conn, $_POST['birth-date']);
    $gender= mysqli_real_escape_string($conn, $_POST['gender']);
    $phone= mysqli_real_escape_string($conn, $_POST['PhoneNumber']);
    $Isadmin=mysqli_real_escape_string($conn, $_POST['Type']);
    $Isactive=mysqli_real_escape_string($conn, $_POST['Isactive']);
    //$result = mysqli_query($conn, $query);
    if(empty($name)){
        array_push($error, "Name is required");
    } elseif(empty($email)){
        array_push($error, "Email is required");
    }
    elseif(empty($pass)){
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
    
    //if(count($error) == 0) {
        //$user_data = mysqli_fetch_assoc($result);
        $mySQL = "INSERT INTO users (userName , email , password, birthdate,phone,gender,type,Isactive) VALUES ('$name' , '$email' , '$pass','$birth','$phone','$gender','$Isadmin','$Isactive')";
        mysqli_query($conn , $mySQL);
        header("Location: users.php");
        
       
    //}
}

  
?>