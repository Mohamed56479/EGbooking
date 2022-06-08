<?php 
session_start();
if( $_SESSION['username']){
    $user = $_SESSION['username'];
  }
include("connect.php"); 
if(isset($_POST['reserve'])) {
    $name= mysqli_real_escape_string($conn, $_POST['UName']);
    $area= mysqli_real_escape_string($conn, $_POST['area']);
    $cid= mysqli_real_escape_string($conn, $_POST['CheckInDate']);
    $cod= mysqli_real_escape_string($conn, $_POST['CheckOutDate']);

    $query = "SELECT user_id FROM users WHERE userName='$user'";
    $id = mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($id);
    $res=$row["user_id"];

    //$result = mysqli_query($conn, $query);
    if(empty($name)){
        array_push($error, "UserName is required");
    } elseif(empty($area)){
        array_push($error, "Area is required");
    }
    elseif(empty($cid)){
        array_push($error, "Check-in Date is required");
    } elseif(empty($cod)){
        array_push($error, "Check-out Date is required");
    }
    
    //if(count($error) == 0) {
      //  $user_data = mysqli_fetch_assoc($result);
        $mySQL = "INSERT INTO bookings (user_id ,user_name , hotel_name , checkin_date, checkout_date) VALUES ('$res' , '$name' , '$area','$cid','$cod')";
        $result=mysqli_query($conn , $mySQL);
       // header("Location: reserve.php");

        if($result){
            echo 'Reservation completed';
        }
        else{
            echo 'there is an error';
        }

       
        
       
   // }
}

  
?>