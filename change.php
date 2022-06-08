<?php 
require('users.php');
echo $_POST['val'];
$query=mysqli_query($conn,"update users set Isactive='".$_POST['val']."'where user_id='".$_POST['user_id']."'");
echo $_POST['val'];
if($query){
    $q=mysqli_query($conn,"select * from users where user_id='".$_POST['user_id']."'");
    $q2=mysqli_query($conn,"select email from users where user_id='".$_POST['user_id']."'");
    $data=mysqli_fetch_assoc($query);
    $row=mysqli_fetch_assoc($q2);
    $res=$row["email"];
    echo $data['Isactive'];
    if($_POST['val']==1){
    $subject = "Account Status";
        $body = "You've Been Activated:  $res 
        http://localhost/HOTEL%20BOOKING/signup.php";
        $sender = "From: egbooking2@gmail.com";
        if(mail( $res, $subject, $body, $sender)){
            echo "Email sent successfully to $res";
        }
            
        else{
            echo "Sorry, failed while sending mail!";
        }
    }
    else{
        $subject = "Account Status";
        $body = "You've Been Deactivated:  $res 
        http://localhost/HOTEL%20BOOKING/signup.php";
        $sender = "From: egbooking2@gmail.com";
        if(mail( $res, $subject, $body, $sender)){
            echo "Email sent successfully to $res";
        }
            
        else{
            echo "Sorry, failed while sending mail!";
        }
    }
}


?>
