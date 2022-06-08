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
  <h2> Number of bookings: </h2>
  <br>
</div>

    <table class="table">
      <thead>
        <tr>
       
          <th>Hotel Name</th>
          <th>City</th>
          <th>Number of bookings</th>
            
        </tr>
      </thead>
      <body>
      
        
     
        <?php

         $conn = new mysqli("localhost", "root", "","booking");
         
         $select_qry1="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
          WHERE bookings.hotel_name='Baron resort';";
          $result1=mysqli_query($conn,$select_qry1);
          
          while($row=$result1->fetch_assoc()){
            echo "<tr>
            <td>Baron resort </td>
            <td>Sharm El sheikh</td>
            <td>". $row["NumberOfbookings"] ."</td>
            
          </tr>";
        }







          $select_qry2="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
          WHERE bookings.hotel_name='Cancun Resort & villas';";
          $result2=mysqli_query($conn,$select_qry2);
          
          while($row=$result2->fetch_assoc()){
            echo "<tr>
            
            <td>Cancun Resort & villas</td>
            <td>RasSudr</td>
            <td>". $row["NumberOfbookings"] ."</td>
            
          </tr>";
        }


          $select_qry3="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
          WHERE bookings.hotel_name='Four seasons resort';";
          $result3=mysqli_query($conn,$select_qry3);
          
          while($row=$result3->fetch_assoc()){
            echo "<tr>
            
            <td>Four seasons resort</td>
            <td>Sharm El sheikh</td>
            <td>". $row["NumberOfbookings"] ."</td>
            
          </tr>";
        }

         
         
         $select_qry4="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
          WHERE bookings.hotel_name='Caribbean house';";
          $result4=mysqli_query($conn,$select_qry4);
          
          while($row=$result4->fetch_assoc()){
            echo "<tr>
         
            <td>Caribbean house</td>
            <td>Dahab</td>
            <td>". $row["NumberOfbookings"] ."</td>
            
          </tr>";
        }




        $select_qry5="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
        WHERE bookings.hotel_name='Coral hill resort';";
        $result5=mysqli_query($conn,$select_qry5);
        
        while($row=$result5->fetch_assoc()){
          echo "<tr>
          <td>Coral hill resort </td>
          <td>Sharm El sheikh</td>
          <td>". $row["NumberOfbookings"] ."</td>
          
        </tr>";
      }




      $select_qry6="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
      WHERE bookings.hotel_name='Fanar hotel';";
      $result6=mysqli_query($conn,$select_qry6);
      
      while($row=$result6->fetch_assoc()){
        echo "<tr>
        <td>Fanar hotel</td>
        <td>RasSudr</td>
        <td>". $row["NumberOfbookings"] ."</td>
        
      </tr>";
    }




    $select_qry7="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Gaddis Hotel';";
    $result7=mysqli_query($conn,$select_qry7);
    
    while($row=$result7->fetch_assoc()){
      echo "<tr>
      <td>Gaddis Hotel</td>
      <td>Luxor</td>
      <td>". $row["NumberOfbookings"] ."</td>
      
    </tr>";
  }




    $select_qry8="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Heru pyramids view Hotel';";
    $result8=mysqli_query($conn,$select_qry8);
    
    while($row=$result8->fetch_assoc()){
        echo "<tr>
        <td>Heru pyramids view Hotel</td>
        <td>Cairo</td>
        <td>". $row["NumberOfbookings"] ."</td>
        
    </tr>";
    }




    $select_qry9="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Hilton Alexandria Green plaza';";
    $result9=mysqli_query($conn,$select_qry9);

    while($row=$result9->fetch_assoc()){
    echo "<tr>
    <td>Hilton Alexandria Green plaza</td>
    <td>Alexandria</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
    </tr>";
    }




    $select_qry10="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Iaru nub';";
    $result10=mysqli_query($conn,$select_qry10);

    while($row=$result10->fetch_assoc()){
    echo "<tr>
    <td>Iaru nub</td>
    <td>Dahab</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
    </tr>";
    }




    $select_qry11="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Kemet Hotel';";
    $result11=mysqli_query($conn,$select_qry11);

    while($row=$result11->fetch_assoc()){
    echo "<tr>
    <td>Kemet Hotel</td>
    <td>Luxor</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
    </tr>";
    }




    $select_qry12="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='La sirena Hotel & Resort';";
    $result12=mysqli_query($conn,$select_qry12);

    while($row=$result12->fetch_assoc()){
    echo "<tr>
    <td>La sirena Hotel & Resort</td>
    <td>RasSudr</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
    </tr>";
    }




    $select_qry13="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Miramar Hotel';";
    $result13=mysqli_query($conn,$select_qry13);

    while($row=$result13->fetch_assoc()){
    echo "<tr>
    <td>Miramar Hotel</td>
    <td>Alexandria</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
    </tr>";
    }




    $select_qry14="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Neptune Residence';";
    $result14=mysqli_query($conn,$select_qry14);

    while($row=$result14->fetch_assoc()){
    echo "<tr>
    <td>Neptune Residence</td>
    <td>Dahab</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
    </tr>";
    }




    $select_qry15="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Number One pyramids Hotel';";
    $result15=mysqli_query($conn,$select_qry15);

    while($row=$result15->fetch_assoc()){
    echo "<tr>
    <td>Number One pyramids Hotel</td>
    <td>Cairo</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
    </tr>";
    }




    $select_qry16="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Pharaoh Azur Resort';";
    $result16=mysqli_query($conn,$select_qry16);

    while($row=$result16->fetch_assoc()){
    echo "<tr>
    <td>Pharaoh Azur Resort</td>
    <td>Hurghada</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
    </tr>";
    }




    $select_qry17="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Porto sokhna pyramids hotel';";
    $result17=mysqli_query($conn,$select_qry17);

    while($row=$result17->fetch_assoc()){
    echo "<tr>
    <td>Porto sokhna pyramids hotel</td>
    <td>Ain Sokhna</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
    </tr>";
    }




    $select_qry18="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Seagull beach resort';";
    $result18=mysqli_query($conn,$select_qry18);

    while($row=$result18->fetch_assoc()){
    echo "<tr>
    <td>Seagull beach resort</td>
    <td>Hurghada</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
    </tr>";
    }




    $select_qry19="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Sunrise garden beach resort';";
    $result19=mysqli_query($conn,$select_qry19);

    while($row=$result19->fetch_assoc()){
    echo "<tr>
    <td>Sunrise garden beach resort</td>
    <td>Hurghada</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
    </tr>";
    }




    $select_qry20="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Tanoak resort';";
    $result20=mysqli_query($conn,$select_qry20);

    while($row=$result20->fetch_assoc()){
    echo "<tr>
    <td>Tanoak resort</td>
    <td>Ain Sokhna</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
    </tr>";
    }




    $select_qry21="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Telal ain sokhna villa';";
    $result21=mysqli_query($conn,$select_qry21);

    while($row=$result21->fetch_assoc()){
    echo "<tr>
    <td>Telal ain sokhna villa</td>
    <td>Ain Sokhna</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
    </tr>";
    }




    $select_qry22="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Thebes Hotel';";
    $result22=mysqli_query($conn,$select_qry22);

    while($row=$result22->fetch_assoc()){
    echo "<tr>
    <td>Thebes Hotel</td>
    <td>Luxor</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
    </tr>";
    }




    $select_qry23="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Tolip Hotel Alexandria';";
    $result23=mysqli_query($conn,$select_qry23);

    while($row=$result23->fetch_assoc()){
    echo "<tr>
    <td>Tolip Hotel Alexandria</td>
    <td>Alexandria</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
    </tr>";
    }




    $select_qry24="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
    WHERE bookings.hotel_name='Valencia hotel';";
    $result24=mysqli_query($conn,$select_qry24);

    while($row=$result24->fetch_assoc()){
    echo "<tr>
    <td>Valencia hotel</td>
    <td>Cairo</td>
    <td>". $row["NumberOfbookings"] ."</td>
    
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