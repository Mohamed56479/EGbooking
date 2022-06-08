<?php include('loginserver.php'); ?>
<?php include('signupserver.php'); ?>
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
      <div class="container">
         <a class="navbar-brand" href="AdminStarter.php"><img src="img/icons8-hotel-64.png" alt=""> EGBooking</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="Starter.php">Home </a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
    <br>
    <br>
    <!---->
<center>
   <h1>Sign in or create new account</h1>
   <br>
   <div class="bigcontainer" id="bigcontainer">
      <div class="form-container sign-up-container">
      <?php
                   // if(count($error)>0){
                       // echo("<div style='color:red; padding-top:20px;'>");
                            //foreach($error as $errori) {
                              //  echo($errori);
                               // echo("<br>");
                           // }
                       // echo("</div>");
                   // }
                ?>
         <form action="signup.php" method="post">
            <h1>Create Account</h1>
            <input name="Name" type="text" placeholder="Name" required />
            <input name="Email" type="email" placeholder="Email" required />
               <span style="color: grey;">You can use letters, numbers & periods </span>
               <input name="password" type="password" placeholder="Password" required minlength="8" />
               <input name="password2" type="password" placeholder="Confirm" required minlength="8" />
               <span style="color: grey;" >Use 8 or more characters with a mix of letters, numbers & symbols</span>
               <input name="birth-date" type="date" placeholder="birth-date" required />
               <span style="color: grey;" >enter your birth-date</span>
               <input name="PhoneNumber" type="tel" placeholder="Phone Number" required  pattern="[0-9]+" minlength="11" maxlength="11" />
               <span style="color: grey;" >the requested format is numbers</span>
               <fieldset>
                  <input type="radio" name="gender" value="male" id="male" required>
                  <label for="male">Male</label>
                  <input type="radio" name="gender" value="female" id="female" required>
                  <label for="female">Female</label>
              </fieldset>
            
            
            
            <button name="Confirm" type="submit" style="margin-top: 7px;">Sign Up</button>
         </form>
      </div>
      <div class="form-container sign-in-container">
      <?php
                    if(count($error)>0){
                        echo("<div style='color:red; padding-top:20px;'>");
                            foreach($error as $errori) {
                                echo($errori);
                                echo("<br>");
                            }
                        echo("</div>");
                    }
                ?>
         <form action="signup.php" method="post">
            <h1>Sign in</h1>

            <input name="username" type="username" placeholder="username" required/>
            <input name="password" type="password" placeholder="Password" required/>
            <a class="a-link"href="ForgotPassword.php">Forgot your password?</a>
            <button name="login" type="submit">Sign In</button>
         </form>
      </div>
      <div class="overlay-container">
         <div class="overlay">
            <div class="overlay-panel overlay-left">
               <h1>Welcome Back!</h1>
               <p>To keep connected with us please login with your personal info</p>
               <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
               <h1>Hello, Friend!</h1>
               <p>Enter your personal details and start journey with us</p>
               <button class="ghost" id="signUp">Sign Up</button>
            </div>
         </div>
      </div>
   </div>
</center>
<script>const signUpButton = document.getElementById('signUp');
   const signInButton = document.getElementById('signIn');
   const container = document.getElementById('bigcontainer');
   
   signUpButton.addEventListener('click', () => {
      container.classList.add("right-panel-active");
   });
   
   signInButton.addEventListener('click', () => {
      container.classList.remove("right-panel-active");
   });</script>
    <br><br>
    <!---->
    <script>
    function myFunction() {
      document.getElementById("myDropdown").classList.toggle("show");
    }
    
    // Close the dropdown menu if the user clicks outside of it
    window.onclick = function(event) {
      if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
          var openDropdown = dropdowns[i];
          if (openDropdown.classList.contains('show')) {
            openDropdown.classList.remove('show');
          }
        }
      }
    }
   </script>
   
    <!---->
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
   
<!---->


<!---->
</body>
</html>