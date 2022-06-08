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
          google.charts.load("current", { packages: ["corechart"] });
          google.charts.setOnLoadCallback(drawChart);
          function drawChart() {
            var data = google.visualization.arrayToDataTable([
              ["Cities", "Average Hotels prices"],
              ["Alexandria", 2841],
              ["Ain Sokhna", 5331],
              ["Cairo", 1049],
              ["Sharm El-Sheikh", 4807],
              ["Hurghada", 7034],
              ["Dahab", 2220],
              ["Ras Suhdr", 2748],
              ["Luxor", 696],
            ]);

            var options = {
              title: "Average Hotels Prices",
              is3D: true,
            };

            var chart = new google.visualization.PieChart(
              document.getElementById("piechart_3d")
            );
            chart.draw(data, options);
          }
        </script>

</head>


  <body>

  <div id="piechart_3d" style="width: 900px; height: 600px"></div>

  </body>
</html>
