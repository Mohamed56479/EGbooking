<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="shortcut icon" type="image/png" href="img/icons8-hotel-64.png">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
  <link rel="stylesheet" href="css/newreports.css">
  <title>Ctarts</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark pb-5" style="background-color:#112B3C;">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img src="img/icons8-hotel-64.png" alt=""> EGbooking</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="AdminLandingPage.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="AdminPortfolio.php">My Profile</a>
          </li>
          <li class="nav-item ">
         <a class="nav-link" href="users.php">Users</a>
       </li>
       <li class="nav-item ">
            <a class="nav-link" href="newreports.php">Reports</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="Charts.php">Charts</a>
          </li>
          <li class="nav-item">
            <a href="starter.php?logout='1'"><button class="btn btn-danger mb-3">Logout</button></a>
           </li>
        </ul>
      </div>
    </div>
  </nav>
  <!------------------------------------------------------------------------------>
  <div class="container mt-5 mb-5">

    <div class="d-flex justify-content-center row">
      <strong style="font-size: 25px; margin: 15px;">Charts Dashboard</strong>
                    
      <div class="col-md-10">
        <div class="row p-2 bg-white border rounded">
          
          <div class="col-md-6 mt-1">
            <h5 style="color: rgb(85, 85, 85);">AVG Chart</h5>
            <h6 style="color: rgb(85, 85, 85);">Pie Chart</h6>

            <div class="mt-1 mb-1 spec-1"><strong style="color: black;">View the average hotels prices</strong></div>
        
          </div>
            
            <div class="d-flex flex-row align-items-center">
              
            </div>
            
            <div class="d-flex flex-column mt-4">
              <a href="firstchart.php"><button class="button-36" type="button">Go to Chart</button></a>
            </div>
        </div>
        <br>
       
        <!---->
        <div class="row p-2 bg-white border rounded">
          
          <div class="col-md-6 mt-1">
            <h5 style="color: rgb(85, 85, 85);">City Hotels Chart</h5>
            <h6 style="color: rgb(85, 85, 85);">Bar Chart</h6>


            <div class="mt-1 mb-1 spec-1"><strong style="color: black;">View the lowest and the highest hotel prices on each city</strong></div>
        
          </div>
            
            <div class="d-flex flex-row align-items-center">
              
            </div>
            
            <div class="d-flex flex-column mt-4">
              <a href="secondchart.php"><button class="button-36" type="button">Go to Chart</button></a>
            </div>
        </div>
        <br>
      <!---->
      <div class="row p-2 bg-white border rounded">
          
          <div class="col-md-6 mt-1">
            <h5 style="color: rgb(85, 85, 85);">Hotels Rating</h5>
            <h6 style="color: rgb(85, 85, 85);">Table Chart</h6>


            <div class="mt-1 mb-1 spec-1"><strong style="color: black;">View the average rating of each hotel</strong></div>
        
          </div>
            
            <div class="d-flex flex-row align-items-center">
              
            </div>
            
            <div class="d-flex flex-column mt-4">
              <a href="thirdchart.php"><button class="button-36" type="button">Go to Chart</button></a>
            </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <!------------------------------------------------------------------------------>
  <div class="footer-basic">

    <hr class="mx-5">
    <footer class="mt-5" id="footer">
      <div class="social">
        <a href="#">
          <i class="icon ion-social-instagram"><img src="img/icons8-instagram-30.png" style="padding-bottom: 10px;"
              alt=""></i>
        </a>
        <a href="#">
          <i class="icon ion-social-snapchat"><img src="img/icons8-snapchat-50.png" style="padding-bottom: 10px;"
              width="30" height="40" alt=""></i>
        </a>
        <a href="#">
          <i class="icon ion-social-twitter"><img src="img/icons8-twitter-30.png" style="padding-bottom: 10px;"
              alt=""></i>
        </a>
        <a href="#">
          <i class="icon ion-social-facebook"><img src="img/icons8-facebook-30.png" style="padding-bottom: 10px;"
              alt=""></i>
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
  <div style="background-color: rgba(255, 255, 255, 0);" >
    <center>
    <img src="img\add.jpg" width="45%" />
    </center>
  </div>
</body>

</html>