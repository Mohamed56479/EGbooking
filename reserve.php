<?php include('reservationserver.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
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
   <link rel="stylesheet" href="css/style.css">
   
   <link rel="shortcut icon" type="image/png" href="img/icons8-hotel-64.png">
   <title>EGbooking</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>charts</title>

    <html>
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
        <li class="nav-item">
         <a class="nav-link" href="bookings.php">My Bookings</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="About Us.php">About Us</a>
       </li>
       <li class="nav-item ">
       <a class="nav-link" href="index.php#footer">Contact Us</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="portfolio.php">My Account</a>
          </li>
      <li class="nav-item">
        <a href="Starter.php?logout='1'"><button class="btn btn-danger mb-3">Logout</button></a>
      </li>

      </ul>
    </div>
</nav>
    <br>
    <br>
<center>
   
   <div class="container" style="padding: 2px 16px;">
    <div class="card-group" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width:75%; ">
      <div class="card" style="length:90%">
        <div class="card-body"style="length:90%">
          <h1>Reserve Your Room Now!</h1>
          <form action="reserve.php" method="post">
          <span style="color: grey;" >Enter Username</span>
          <br>
            <input name="UName" type="text" placeholder="Username" required />
            <br> 
            <span style="color: grey;" >Choose Hotel</span>
            <br>
            <select id="area" name="area" >
              <option value="Tolip Hotel Alexandria">Tolip Hotel Alexandria </option>
              <option value="Hilton Alexandria Green plaza">Hilton Alexandria Green plaza</option>
              <option value="Miramar Hotel">Miramar Hotel</option>
              <option value="Porto sokhna pyramids hotel">Porto sokhna pyramids hotel</option>
              <option value="Telal ain sokhna villa ">Telal ain sokhna villa</option>
              <option value="Tanoak resort">Tanoak resort</option>
              <option value="Valencia hotel">Valencia hotel</option>
              <option value="Heru pyramids view Hotel">Heru pyramids view Hotel</option>
              <option value="Number One pyramids Hotel">Number One pyramids Hotel</option>
              <option value="Coral hill resort ">Coral hill resort</option>
              <option value="Baron resort">Baron resort</option>
              <option value="Four seasons resort">Four seasons resort</option>
              <option value="Pharaoh Azur Resort">Pharaoh Azur Resort</option>
              <option value="Seagull beach resort">Seagull beach resort</option>
              <option value="Sunrise garden beach resort">Sunrise garden beach resort</option>
              <option value="Caribbean house">Caribbean house</option>
              <option value="Neptune Residence">Neptune Residence</option>
              <option value="Iaru nub">Iaru nub</option>
              <option value="Cancun Resort & villas">Cancun Resort & villas</option>
              <option value="La sirena Hotel & Resort">La sirena Hotel & Resort</option>
              <option value="Fanar hotel">Fanar hotel</option>
              <option value="Thebes Hotel">Thebes HotelThebes Hotel </option>
              <option value="Kemet Hotel">Kemet Hotel</option>
              <option value="Gaddis Hotel">Gaddis Hotel</option>

            </select>
        <br>
        <span style="color: grey;" >Enter Check-in Date</span>
        <br>
        <input name="CheckInDate" type="date" placeholder="Check-in Date" required />
        <br>
        <span style="color: grey;" >Enter Check-out Date</span>
        <br>
               <input name="CheckOutDate" type="date" placeholder="Check-out Date" required />
               <br>
               <button name="reserve" type="submit" style="margin-top: 7px;">Reserve</button>

         </form>
        </div>
      </div>
     </div>
   </div>
</center>
   
  
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
   <!--JS-->
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
   <script src="js/bootstrap.bundle.js"></script>
   <script src="js/bootstrap.bundle.js.map"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/bootstrap.bundle.min.js.map"></script>
   <script src="js/bootstrap.js"></script>
   <script src="js/bootstrap.js.map"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/bootstrap.min.js.map"></script>
</body>
</html>