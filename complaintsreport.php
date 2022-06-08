<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <!-- Meta -->
      <link rel="shortcut icon" type="image/png" href="img/icons8-hotel-64.png">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>EGbooking</title>
      <meta charset="UTF-8">
      <!-- Styles -->
      
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <link href="vendor/animate/animate.css" rel="stylesheet" type="text/css"/>
      <link href="css/About Us.css" rel="stylesheet" type="text/css"/>
      <link href="css/adminprofile.css" rel="stylesheet" type="text/css"/>
      <link href="css/reports.css" rel="stylesheet" type="text/css"/>
      <link rel="stylesheet" href="css/starter.css">
   </head>
   <body>
   <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #112B3C;">
    <a class="navbar-brand" href="AdminLandingPage"><img src="img/icons8-hotel-64.png" alt=""> EGbooking</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link " href="AdminLandingPage.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="AdminPortfolio.php">My Profile</a>
       </li>
       <li class="nav-item ">
         <a class="nav-link" href="users.php">Users</a>
       </li>
       <li class="nav-item active">
            <a class="nav-link" href="newreports.php">Reports</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="Charts.php">Charts</a>
          </li>
      <li class="nav-item">
        <a href="Starter.php?logout='1'"><button class="btn btn-danger mb-3">Logout</button></a>
      </li>

      </ul>
    </div>
</nav>

    
    <br>
<div class="describtion">
  <h2> Complaints: </h2>
  <br>
</div>

    <table class="table">
      <thead>
        <tr>
       
          <th>Complaint ID</th>
          <th>User Name</th>
          <th>Hotel Name</th>
          <th>Complaint Details</th>
        </tr>
      </thead>
      <body>
        <?php

         $conn = new mysqli("localhost", "root", "","booking");
       
         $sql="SELECT * from complaints;";
            
         $res = mysqli_query($conn, $sql);
        while($row=$res->fetch_assoc()){
            echo "<tr>
            <td>". $row["complaint_id"] ."</td>
            <td>". $row["user_name"] ."</td>
            <td>". $row["hotel_name"] ."</td>
            <td>". $row["details"] ."</td>
          </tr>";
        }
        
        ?>
      </body>
     
    </table>
   
    <br>    
    <br>
 























    
    <img class="ads" src="img/add.jpg" width="60%" height="130px"/>

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