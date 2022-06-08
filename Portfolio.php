<?php 
session_start();
if( $_SESSION['username']){
  $user = $_SESSION['username'];
}
include("connect.php");

$query = "SELECT user_id FROM users WHERE userName='$user'";
$id = mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($id);
$res=$row["user_id"];

$conn=mysqli_connect("localhost","root","","booking");
$query="SELECT * FROM `users` WHERE users.user_id='$res'"; 
$result = mysqli_query($conn, $query);
$row=mysqli_fetch_assoc($result);

if(isset($_GET['update'])) {
  unset($_SESSION['username']);
  session_destroy();
  
  header("location:portfolio.php");
}
?> 



<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <!-- Meta -->
      <link rel="shortcut icon" type="image/png" href="img/icons8-hotel-64.png">
      <title>EGbooking</title>
      <meta charset="UTF-8">
      <!-- Styles -->
      
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <link href="vendor/animate/animate.css" rel="stylesheet" type="text/css"/>
      <link href="css/About Us.css" rel="stylesheet" type="text/css"/>
      <link href="css/profile.css" rel="stylesheet" type="text/css"/>
   </head>
   <body>
   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #112B3C;">
    <a class="navbar-brand" href="index.php"><img src="img/icons8-hotel-64.png" alt=""> EGbooking</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        
        <li class="nav-item ">
          <a class="nav-link" href="bookings.php">My Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About Us.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#footer">Contact Us</a>
        </li>
        <li class="nav-item active">
         <a class="nav-link" href="Portfolio.php">My Profile</a>
       </li>
       
       <li class="nav-item">
        <a href="starter.php?logout='1'"><button class="btn btn-danger mb-3">Logout</button></a>
       </li>
      </ul>
    </div>
</nav>
   

    <p style="font-size:3vw">Personal Details</p>
    <div class="user-img">
      <img id="thePFP" src="img/avatar.jpg">
      <div class="profile-pic-div">
        <label for="file">change</label>
        <input type="file" id="file" accept="image/*" style="cursor: pointer">
        <i class="fa fa-camera"></i>
      </div>
    </div>
    <pre></pre>
    <pre></pre>
    <pre></pre>
    <table >
    <tr>
        <td>User Name</td>
        <td><?php echo $row['userName']; ?></td>
        
      </tr>
      <tr>
        <td>Email Address</td>
        <td><?php echo $row['email']; ?></td>
     
      </tr>
      <tr>
        <td>Phone Number</td>
        <td><?php echo $row['phone']; ?></td>
      </tr>
      <tr>
        <td>Date of birth</td>
        <td><?php echo $row['birthdate']; ?></td>
      </tr>
      <tr>
        <td> Gender</td>
        <td><?php echo $row['gender']; ?></td>
      </tr>
    
    </table>
    <br>
    <br>
    <br>
    <form action="update.php" method="post">
        <input type="submit" class="btn btn-primary" name="insert" value="Update Profile Data" style="font-size: 20px; margin-left:580px;">
    </form>

<script>
const imgDiv = document.querySelector('.profile-pic-div');
const img = document.querySelector('#thePFP');
const file = document.querySelector('#file');

file.addEventListener('change', function(){
  // this refers to the file
  const choosedFile = this.files[0];

if (choosedFile) {
  const reader = new FileReader();

  reader.addEventListener('load', function(){
    img.setAttribute('src', reader.result);
  });

  reader.readAsDataURL(choosedFile);
}
    

});
</script>  
    

</body>  
 </html>
