<?php include('verifyserver.php'); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>verify</title>
        
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
          <a class="nav-link" href="starter.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="verify.php#footer">Contact Us</a>
        </li>
        
      </ul>
    </div>
</nav>
        <br>        
    <div class="container">
        <form action="" method="post">
            <h1><b>Verification Form</b></h1><br>
            <label>Verification Code:</label><br>
            <input type="number" class="txt" name="code" placeholder="Enter Code Here" required><br>
            <br>
            
            <input type="submit" class="txt" name="verify" value="Verify" style="font-size: 20px;">
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

