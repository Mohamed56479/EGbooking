<?php 
include("connect.php"); 

if(isset($_POST['insert'])){
    $username=$_POST['username'];
    $email=$_POST['email'];
    $hotelname=$_POST['area'];
    $data=$_POST['data'];

    $query = "SELECT user_id FROM users WHERE userName='$username'";
    $id = mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($id);
    $res=$row["user_id"];

    $mySQL = "INSERT INTO complaints (user_name, user_id , email , hotel_name , details) VALUES ('$username' ,'$res', '$email' , '$hotelname','$data')";
    $query_run=mysqli_query($conn , $mySQL);

        $subject = "Complaint email";
        $body = "Hi, there...we have reicieved your complaint about hotel
        thank you for sending mail to us...";
        $sender = "From: egbooking2@gmail.com";

        if(mail( $email, $subject, $body, $sender)){
            echo "Email sent successfully to $email \n";
        }

        else{
            echo "Sorry, failed while sending mail!";
        }

    /*if($query_run){
        echo 'data was sent successfully';
    }
    else{
        echo 'there is error';
    }*/


}
  
?>