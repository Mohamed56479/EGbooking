<?php 
include("connect.php"); 

if(isset($_POST['insert'])){
    $username=$_POST['username'];
    $hotelname=$_POST['area'];
    $rate=$_POST['rate'];

    $query = "SELECT user_id FROM users WHERE userName='$username'";
    $id = mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($id);
    $res=$row["user_id"];

    $mySQL = "INSERT INTO rates ( user_id ,user_name, hotel_name , rate_value) VALUES ('$res','$username' , '$hotelname','$rate')";
    $query_run=mysqli_query($conn , $mySQL);

       

    if($query_run){
        echo 'Thank you for rating us';
    }
    else{
        echo 'there is an error';
    }


}
  
?>