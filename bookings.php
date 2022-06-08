<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>user DashBoard</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css.map">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css.map">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <link rel="stylesheet" href="css/style.css"> 
    <link href="css/About Us.css" rel="stylesheet" type="text/css"/> 
    <link rel="shortcut icon" type="image/png" href="img/icons8-hotel-64.png">
    
    <link rel="stylesheet" href="css/bookings.css">
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
        
        <li class="nav-item active">
          <a class="nav-link" href="bookings.php">My Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="About Us.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php#footer">Contact Us</a>
        </li>
        <li class="nav-item ">
         <a class="nav-link" href="Portfolio.php">My Profile</a>
       </li>
       <li class="nav-item ">
         <a class="nav-link" href="feedback.php">Rates</a>
       </li>
       <li class="nav-item ">
         <a class="nav-link" href="Complaintform.php">Complaint</a>
       </li>
       <li class="nav-item">
        <a href="starter.php?logout='1'"><button class="btn btn-danger mb-3">Logout</button></a>
       </li>
      </ul>
    </div>
</nav>
<br>
<div class="describtion">
  <h2>Your Bookings List: </h2>
</div>

    <table class="table">
      <thead>
        <tr>
          <th>Hotel Name</th>
          <th>City</th>
          <th>Check-in date</th>
          <th>Check-out date</th>
        </tr>
      </thead>
      <body>
        <?php
         session_start();
         if( $_SESSION['username']){
           $user = $_SESSION['username'];
         }
         $conn = new mysqli("localhost", "root", "","booking");
          $query = "SELECT user_id FROM users WHERE userName='$user'";
          $id = mysqli_query($conn, $query);
          $row=mysqli_fetch_assoc($id);
          $res=$row["user_id"];

         
       
         //$name=mysqli_query($conn,"select * from users where userName='".$_POST['Name']."'");
         //$name= mysqli_real_escape_string($conn, $_POST['Name']);

         $sql="SELECT `hotels`.`hotel_name`, `hotels`.`city`, `bookings`.`checkin_date`, `bookings`.`checkout_date`
         FROM `bookings`
            JOIN `hotels` ON `hotels`.`hotel_name` = `bookings`.`hotel_name`
            JOIN `users` ON `users`.`user_id` = `bookings`.`user_id` And `bookings`.`user_id` = '$res';";
            
         $res = mysqli_query($conn, $sql);
        while($row=$res->fetch_assoc()){
            echo "<tr>
            <td>". $row["hotel_name"] ."</td>
            <td>". $row["city"] ."</td>
            <td>". $row["checkin_date"] ."</td>
            <td>". $row["checkout_date"] ."</td>
          </tr>";
        }

       
          if(isset($_GET['logout'])) {
            unset($_SESSION['username']);
            session_destroy();
            
            header("location:starter.html");
          }
        
        ?>
      </body>
     
    </table>
   
    <br>    
    <br>
    <br>
   <img src="img\add.jpg" width="50%" height="180px"/>
   
  </div>
    <div class="footer-basic">
      
    <hr class="mx-5">
      <footer class="mt-5" id="footer">
          <div class="social">
            <a href="#">
              <i class="icon ion-social-instagram"><img src="img/icons8-instagram-30.png"style="padding-bottom: 10px;" alt=""></i>
            </a>
            <a href="#">
              <i class="icon ion-social-snapchat"><img src="img/icons8-snapchat-50.png" style="padding-bottom: 10px;"  width="30" height="40" alt=""></i>
            </a>
            <a href="#">
              <i class="icon ion-social-twitter"><img src="img/icons8-twitter-30.png" style="padding-bottom: 10px;"  alt=""></i>
            </a>
            <a href="#">
              <i class="icon ion-social-facebook"><img src="img/icons8-facebook-30.png" style="padding-bottom: 10px;"  alt=""></i>
            </a>
          </div>
          <ul class="list-inline">
              <li class="list-inline-item"><a href="#">Home</a></li>
              <li class="list-inline-item"><a href="#">Services</a></li>
              <li class="list-inline-item"><a href="#">About</a></li>
              <li class="list-inline-item"><a href="#">Terms</a></li>
              <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
          </ul>
          <p class="copyright">EGbooking © 2022</p>
      </footer>
  </div>  
        
  </body>
</html>