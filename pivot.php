<?php include('connect.php'); ?>
<?php

$select_qry1="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Baron resort';";
$result1=mysqli_query($conn,$select_qry1);
$category1=array();
$data1=mysqli_fetch_assoc($result1);
$category1[]="['".$data1['hotel_name']."',".$data1['NumberOfbookings']."],";



$select_qry2="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Cancun Resort & villas';";
$result2=mysqli_query($conn,$select_qry2);
$category2=array();
$data2=mysqli_fetch_assoc($result2);
$category2[]="['".$data2['hotel_name']."',".$data2['NumberOfbookings']."],";



$select_qry3="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Four seasons resort';";
$result3=mysqli_query($conn,$select_qry3);
$category3=array();
$data3=mysqli_fetch_assoc($result3);
$category3[]="['".$data3['hotel_name']."',".$data3['NumberOfbookings']."],";

/*
          

$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";



$select_qry="SELECT bookings.hotel_name , COUNT(book_id) AS NumberOfbookings FROM bookings
WHERE bookings.hotel_name='Heru pyramids view Hotel';";
$result=mysqli_query($conn,$select_qry);
$category=array();
$data=mysqli_fetch_assoc($result);
$category[]="['".$data['hotel_name']."',".$data['NumberOfbookings']."],";

*/


?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {
        var data = new google.visualization.arrayToDataTable([
          ['Opening Move', 'Percentage'],
          <?php
            echo $category1;
            echo $category2;
            echo $category3;
            /*echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;
            echo $category;*/
          
          ?>

        ]);

        var options = {
          title: 'Chess opening moves',
          width: 900,
          legend: { position: 'none' },
          chart: { title: 'Chess opening moves',
                   subtitle: 'popularity by percentage' },
          
          bar: { groupWidth: "90%" }
        };

        var chart = new google.charts.Bar(document.getElementById('top_x_div'));
        chart.draw(data, options);
      };
    </script>
  </head>
  <body>
    <div id="top_x_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>