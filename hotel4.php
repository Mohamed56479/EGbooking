<!DOCTYPE html>
<html>
    <head>
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
        <link rel="stylesheet" href="css/hotel.css">
        <link href="css/About Us.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" type="image/png" href="img/icons8-hotel-64.png">
        <title>Caribbean house</title>
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
         <li class="nav-item">
          <a href="starter.php?logout='1'"><button class="btn btn-danger mb-3">Logout</button></a>
         </li>
        
        </ul>
      </div>
  </nav>
<!---->
<center style="margin-top: 30px;"> 
  <div class="ratings mr-2" style="font-size: 25px;">
    <strong>Caribbean house </strong><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>         <a href="reserve.php"><button class="button-36" type="button"> Reserve</button></a>
  </div> 

  </center>


<center style="margin-top: 20px;">
<div class="image-container">
  <div class="image" ><img src="img/dahab1.jpg"/><img src="img/dahab1.jpg"/></div>
  <div class="image" ><img src="img/dahab2.jpg"/><img src="img/dahab2.jpg"/></div>
  <div class="image" ><img src="img/dahab3.jpg"/><img src="img/dahab3.jpg"/></div>
  <div class="image" ><img src="img/dahab4.jpg"/><img src="img/dahab4.jpg"/></div>
  <div class="image" ><img src="img/dahab5.jpg"/><img src="img/dahab5.jpg"/></div>
  <div class="image" ><img src="img/dahab6.jpg"/><img src="img/dahab6.jpg"/></div>
</div>

</center>


<div class="container" style="margin-top: 35px;">
    <p style="font-size: 15px;">
      This property is 1 minute walk from the beach. Set in Dahab, within 700 m of Dive Urge - Dive Centre and less than 1 km of Reef 2000 Dive Club, Caribbean house offers accommodation with free WiFi, air conditioning and a terrace. It is located less than 1 km from Eel Garden - dive site entry and offers a concierge service.
      <br></br>
      Offering a balcony and sea views, the apartment includes 2 bedrooms, a living room, flat-screen TV, an equipped kitchenette, and 1 bathroom with a bidet and a bath or shower.
      <br></br>
      Hiking can be enjoyed nearby.
      <br></br>
      Popular points of interest near the apartment include Fantasea Divers, Blue Beach Dive Club and Mirage Village Divers - Dive Centre. The nearest airport is Sharm el-Sheikh International Airport, 61 km from Caribbean house.
   </p>
  <strong style="font-size: 19px;">Caribbean house has been welcoming Booking.com guests since 24 Oct 2021.
</strong>
<br>
<p style="font-size: 15px;"></p>
Distance in property description is calculated using © OpenStreetMap
</p>
</div>
<!---->

  <div id="booking" class="section" style="margin-top: 100px; ">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="booking-form">
            <form>
              <div class="row no-margin">
                <div class="col-md-0">
                  <div class="form-group">
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="row no-margin">
                    <div class="col-md-5">
                      <div class="form-group">
                        <span class="form-label">Check In</span>
                        <input class="form-control" type="date" required>
                      </div>
                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <span class="form-label">Check out</span>
                        <input class="form-control" type="date" required>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <div class="form-group">
                        <span class="form-label">Guests</span>
                        <select class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                        </select>
                        <span class="select-arrow"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-btn">
                    <a href="hotel4.php"><button class="submit-btn">Search</button></a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!---->
      
</div>
    <div class="footer-basic" style="margin-top: 50px;">
      
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
                <li class="list-inline-item"><a href="About Us.php">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">EGbooking © 2022</p>
        </footer>
    </div>  

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