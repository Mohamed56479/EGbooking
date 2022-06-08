<?php include 'connect.php';?>
<?php
$select_qry1="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Baron resort';";
$result1=mysqli_query($conn,$select_qry1);
$category1=array();
while ($data1=mysqli_fetch_assoc($result1)){
$category1[]="['Baron resort' ,'".$data1['average']."'],";}



$select_qry2="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Cancun Resort & villas';";
$result2=mysqli_query($conn,$select_qry2);
$category2=array();
while ($data2=mysqli_fetch_assoc($result2)){
$category2[]="['Cancun Resort & villas' ,'".$data2['average']."'],";}



$select_qry3="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Caribbean house';";
$result3=mysqli_query($conn,$select_qry3);
$category3=array();
while ($data3=mysqli_fetch_assoc($result3)){
$category3[]="['Caribbean house' ,'".$data3['average']."'],";}



$select_qry4="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Coral hill resort ';";
$result4=mysqli_query($conn,$select_qry4);
$category4=array();
while ($data4=mysqli_fetch_assoc($result4)){
$category4[]="['Coral hill resort ' ,'".$data4['average']."'],";}



$select_qry5="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Fanar hotel';";
$result5=mysqli_query($conn,$select_qry5);
$category5=array();
while ($data5=mysqli_fetch_assoc($result5)){
$category5[]="['Fanar hotel' ,'".$data5['average']."'],";}



$select_qry6="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Four seasons resort';";
$result6=mysqli_query($conn,$select_qry6);
$category6=array();
while ($data6=mysqli_fetch_assoc($result6)){
$category6[]="['Four seasons resort' ,'".$data6['average']."'],";}



$select_qry7="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Gaddis Hotel';";
$result7=mysqli_query($conn,$select_qry7);
$category7=array();
while ($data7=mysqli_fetch_assoc($result7)){
$category7[]="['Gaddis Hotel' ,'".$data7['average']."'],";}



$select_qry8="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Heru pyramids view Hotel';";
$result8=mysqli_query($conn,$select_qry8);
$category8=array();
while ($data8=mysqli_fetch_assoc($result8)){
$category8[]="['Heru pyramids view Hotel' ,'".$data8['average']."'],";}



$select_qry9="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Hilton Alexandria Green plaza';";
$result9=mysqli_query($conn,$select_qry9);
$category9=array();
while ($data9=mysqli_fetch_assoc($result9)){
$category9[]="['Hilton Alexandria Green plaza' ,'".$data9['average']."'],";}



$select_qry10="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Iaru nub';";
$result10=mysqli_query($conn,$select_qry10);
$category10=array();
while ($data10=mysqli_fetch_assoc($result10)){
$category10[]="['Iaru nub' ,'".$data10['average']."'],";}



$select_qry11="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Kemet Hotel';";
$result11=mysqli_query($conn,$select_qry11);
$category11=array();
while ($data11=mysqli_fetch_assoc($result11)){
$category11[]="['Kemet Hotel' ,'".$data11['average']."'],";}



$select_qry12="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='La sirena Hotel & Resort';";
$result12=mysqli_query($conn,$select_qry12);
$category12=array();
while ($data12=mysqli_fetch_assoc($result12)){
$category12[]="['La sirena Hotel & Resort' ,'".$data12['average']."'],";}



$select_qry13="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Miramar Hotel';";
$result13=mysqli_query($conn,$select_qry13);
$category13=array();
while ($data13=mysqli_fetch_assoc($result13)){
$category13[]="['Miramar Hotel' ,'".$data13['average']."'],";}



$select_qry14="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Neptune Residence';";
$result14=mysqli_query($conn,$select_qry14);
$category14=array();
while ($data14=mysqli_fetch_assoc($result14)){
$category14[]="['Neptune Residence' ,'".$data14['average']."'],";}



$select_qry15="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Number One pyramids Hotel';";
$result15=mysqli_query($conn,$select_qry15);
$category15=array();
while ($data15=mysqli_fetch_assoc($result15)){
$category15[]="['Number One pyramids Hotel' ,'".$data15['average']."'],";}



$select_qry16="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Pharaoh Azur Resort';";
$result16=mysqli_query($conn,$select_qry16);
$category16=array();
while ($data16=mysqli_fetch_assoc($result16)){
$category16[]="['Pharaoh Azur Resort' ,'".$data16['average']."'],";}



$select_qry17="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Porto sokhna pyramids hotel';";
$result17=mysqli_query($conn,$select_qry17);
$category17=array();
while ($data17=mysqli_fetch_assoc($result17)){
$category17[]="['Porto sokhna pyramids hotel' ,'".$data17['average']."'],";}



$select_qry18="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Seagull beach resort';";
$result18=mysqli_query($conn,$select_qry18);
$category18=array();
while ($data18=mysqli_fetch_assoc($result18)){
$category18[]="['Seagull beach resort' ,'".$data18['average']."'],";}



$select_qry19="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Sunrise garden beach resort';";
$result19=mysqli_query($conn,$select_qry19);
$category19=array();
while ($data19=mysqli_fetch_assoc($result19)){
$category19[]="['Sunrise garden beach resort' ,'".$data19['average']."'],";}



$select_qry20="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Tanoak resort';";
$result20=mysqli_query($conn,$select_qry20);
$category20=array();
while ($data20=mysqli_fetch_assoc($result20)){
$category20[]="['Tanoak resort' ,'".$data20['average']."'],";}



$select_qry21="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Telal ain sokhna villa ';";
$result21=mysqli_query($conn,$select_qry21);
$category21=array();
while ($data21=mysqli_fetch_assoc($result21)){
$category21[]="['Telal ain sokhna villa ' ,'".$data21['average']."'],";}



$select_qry22="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Thebes Hotel';";
$result22=mysqli_query($conn,$select_qry22);
$category22=array();
while ($data22=mysqli_fetch_assoc($result22)){
$category22[]="['Thebes Hotel' ,'".$data22['average']."'],";}



$select_qry23="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Tolip Hotel Alexandria';";
$result23=mysqli_query($conn,$select_qry23);
$category23=array();
while ($data23=mysqli_fetch_assoc($result23)){
$category23[]="['Tolip Hotel Alexandria' ,'".$data23['average']."'],";}



$select_qry24="SELECT AVG(rate_value) as average
FROM rates
WHERE rates.hotel_name='Valencia hotel';";
$result24=mysqli_query($conn,$select_qry24);
$category24=array();
while ($data24=mysqli_fetch_assoc($result24)){
$category24[]="['Valencia hotel' ,'".$data24['average']."'],";




}
?>
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
    <title>Charts</title>

 
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #112B3C;">
    <a class="navbar-brand" href="AdminLandingPage.php"><img src="img/icons8-hotel-64.png" alt=""> EGbooking</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="AdminLandingPage.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
         <a class="nav-link" href="AdminPortfolio.php">My Profile</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="users.php">Users</a>
       </li>
       <li class="nav-item ">
            <a class="nav-link" href="newreports.php">Reports</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="Charts.php">Charts</a>
          </li>
      <li class="nav-item">
        <a href="Starter.php?logout='1'"><button class="btn btn-danger mb-3">Logout</button></a>
      </li>

      </ul>
    </div>
  </nav>
      <head>
      
      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['table']});
      google.charts.setOnLoadCallback(drawTable);

      function drawTable() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Hotel Name');
        data.addColumn('string', 'AVG Rating');
        
        data.addRows([
         

          <?php
          foreach($category1 as $category1){
              echo $category1;     
          }


          foreach($category2 as $category2){
            echo $category2;     
        }


        foreach($category3 as $category3){
            echo $category3;     
        }


        foreach($category4 as $category4){
            echo $category4;     
        }


        foreach($category5 as $category5){
            echo $category5;     
        }


        foreach($category6 as $category6){
            echo $category6;     
        }


        foreach($category7 as $category7){
            echo $category7;     
        }


        foreach($category8 as $category8){
            echo $category8;     
        }


        foreach($category9 as $category9){
            echo $category9;     
        }


        foreach($category10 as $category10){
            echo $category10;     
        }


        foreach($category11 as $category11){
            echo $category11;     
        }


        foreach($category12 as $category12){
            echo $category12;     
        }


        foreach($category13 as $category13){
            echo $category13;     
        }


        foreach($category14 as $category14){
            echo $category14;     
        }


        foreach($category15 as $category15){
            echo $category15;     
        }


        foreach($category16 as $category16){
            echo $category16;     
        }


        foreach($category17 as $category17){
            echo $category17;     
        }


        foreach($category18 as $category18){
            echo $category18;     
        }


        foreach($category19 as $category19){
            echo $category19;     
        }


        foreach($category20 as $category20){
            echo $category20;     
        }


        foreach($category21 as $category21){
            echo $category21;     
        }


        foreach($category22 as $category22){
            echo $category22;     
        }


        foreach($category23 as $category23){
            echo $category23;     
        }


        foreach($category24 as $category24){
            echo $category24;     
        }


        
          ?>
          
        ]);

        var table = new google.visualization.Table(document.getElementById('table_div'));

table.draw(data, {showRowNumber: true, width: '100%', height: '100%'});
}
    </script>

</head>


  <body>

  <div id="table_div"></div>

  </body>
</html>