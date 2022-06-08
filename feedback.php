<?php include('rateserver.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Rates Form</title>
        
          <!-- Bootstrap CSS -->
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
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
          <link rel="stylesheet" href="css/form.css">
         
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
        <li class="nav-item ">
         <a class="nav-link" href="Portfolio.php">My Profile</a>
       </li>
       <li class="nav-item active">
         <a class="nav-link" href="feedback.php">Rates</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="Complaintform.php">Complaint</a>
       </li>
       <li class="nav-item">
        <a href="starter.php?logout='1'"><button class="btn btn-danger mb-3">Logout</button></a>
       </li>
      </ul>
    </div>
</nav>
        <br>        
    <div class="container">
        <form action="" method="post">
            <h1><b>Rates Form</b></h1><br>

            <label>User Name:</label><br>
            <input type="text" class="txt" name="username" placeholder="Enter your name" required><br>
            <br>

            <label>Hotel Name:</label><br>
            <select id="area" name="area" >
              <option value="Tolip Hotel Alexandria">Tolip Hotel Alexandria </option>
              <option value="Hilton Alexandria Green plaza">Hilton Alexandria Green plaza  </option>
              <option value="Miramar Hotel">Miramar Hotel </option>
              <option value="Porto sokhna pyramids hotel">Porto sokhna pyramids hotel </option>
              <option value="Telal ain sokhna villa ">Telal ain sokhna villa</option>
              <option value="Tanoak resort">Tanoak resort </option>
              <option value="Valencia hotel">Valencia hotel</option>
              <option value="Heru pyramids view Hotel">Heru pyramids view Hotel</option>
              <option value="Number One pyramids Hotel">Number One pyramids Hotel</option>
              <option value="Coral hill resort ">Coral hill resort</option>
              <option value="Baron resort">Baron resort</option>
              <option value="Four seasons resort">Four seasons resort</option>
              <option value="Pharaoh Azur Resort">Pharaoh Azur Resort</option>
              <option value="Seagull beach resort">Seagull beach resort</option>
              <option value="Sunrise garden beach resort">Sunrise garden beach resort </option>
              <option value="Caribbean house">Caribbean house</option>
              <option value="Neptune Residence">Neptune Residence</option>
              <option value="Iaru nub">Iaru nub</option>
              <option value="Cancun Resort & villas">Cancun Resort & villas</option>
              <option value="La sirena Hotel & Resort">La sirena Hotel & Resort</option>
              <option value="Fanar hotel">Fanar hotel</option>
              <option value="Thebes Hotel">Thebes HotelThebes Hotel </option>
              <option value="Kemet Hotel">Kemet Hotel </option>
              <option value="Gaddis Hotel">Gaddis Hotel </option>

            </select><br>
            <br>
            <br>
            <label for="subject"><b>Rate number(1 to 10)</b></label><br>
            <select id="rate" name="rate" >
              <option value="1">1 </option>
              <option value="2">2</option>
              <option value="3">3 </option>
              <option value="4">4 </option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
              <option value="10">10</option>
             

            </select><br>
            <br>
            
            <input type="submit" class="txt" name="insert" value="Submit" style="font-size: 20px;">
        </form>
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

