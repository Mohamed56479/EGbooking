<?php include('Addinguserserver.php'); ?>
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
   <link rel="stylesheet" href="css/signup.css">
   <link rel="shortcut icon" type="image/png" href="img/icons8-hotel-64.png">
   <title>Sign Up</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #112B3C;">
    <a class="navbar-brand" href="AdminLandingPage.php"><img src="img/icons8-hotel-64.png" alt=""> EGbooking</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link " href="AdminLandingpage.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="AdminPortfolio.php">My Profile</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="users.php">Users</a>
       </li>
       <li class="nav-item ">
            <a class="nav-link" href="reports.php">Reports</a>
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
    <br>
<center>
   
   <div class="container" style="padding: 2px 16px;">
    <div class="card-group" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); width:75%; ">
      <div class="card" style="length:90%">
        <div class="card-body"style="length:90%">
       
          <h1>Add New User</h1>
          <form action="AddUser.php" method="post">
          
            <input name="Name" type="text" placeholder="Name" required />
            
            <input name="Email" type="email" placeholder="Email" required />
               <input name="password" type="password" placeholder="Password" required minlength="8" />
               <input name="password2" type="password" placeholder="Confirm" required minlength="8" />
               <input name="birth-date" type="date" placeholder="birth-date" required />
               <input name="PhoneNumber" type="tel" placeholder="Phone Number" required  pattern="[0-9]+" minlength="11" maxlength="11" />
            
               <fieldset>
                  <input type="radio" name="gender" value="male" id="male" required>
                  <label for="male">Male</label>
                  <input type="radio" name="gender" value="female" id="female" required>
                  <label for="female">Female</label>
              </fieldset>
              <fieldset>
                  <input type="radio" name="Type" value="1" id="Admin" required>
                  <label for="1">Admin</label>
                  <input type="radio" name="Type" value="0" id="User" required>
                  <label for="0">User</label>
              </fieldset>
              <fieldset>
                  <input type="radio" name="Isactive" value="1" id="Active" required>
                  <label for="1">Active</label>
                  <input type="radio" name="Isactive" value="0" id="Inactive" required>
                  <label for="0">Inactive</label>
              </fieldset>
              
            <button name="add" type="submit" style="margin-top: 7px;">Add</button>
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