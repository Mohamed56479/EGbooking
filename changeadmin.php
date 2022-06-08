<?php 
require('users.php');
$query=mysqli_query($conn,"update users set type='".$_POST['val']."'where user_id='".$_POST['user_id']."'");
if($query){
$q=mysqli_query($conn,"Select * from users where user_id='".$_POST['user_id']."'");
$data=mysqli_fetch_assoc($query);
echo $data['$type'];
}


?>