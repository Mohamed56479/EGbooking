<?php 
include_once('connect.php'); 
$query="select * from users where type='0'"; 

$result = mysqli_query($conn, $query);
?> 
<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <!-- Meta -->
      <link rel="shortcut icon" type="image/png" href="img/icons8-hotel-64.png">
      <title>EGbooking</title>
      <meta charset="UTF-8">
      <!-- Styles -->
      
      <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
      <link href="vendor/animate/animate.css" rel="stylesheet" type="text/css"/>
      <link href="css/About Us.css" rel="stylesheet" type="text/css"/>
      <link href="css/users.css" rel="stylesheet" type="text/css"/>
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
       <li class="nav-item active">
         <a class="nav-link" href="users.php">Users</a>
       </li>
       <li class="nav-item ">
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

    <div class="board">
        <table width="100%">
           
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Birthdate</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Suspend/Unsuspend</th>
                    <th>User type</th>
                    <th>Upgrade User</th>
                    <th></th>
                </tr>
                    <tr>
                    <?php 
                    while($row=mysqli_fetch_assoc($result)){
                    ?>
                    <tr> <td><?php echo $row['userName']; ?></td> 
                        <td><?php echo $row['email']; ?></td> 
                        <td><?php echo $row['birthdate']; ?></td> 
                        <td><?php echo $row['phone']; ?></td> 
                        <td><?php 
                        if( $row['Isactive']==1){echo"<p id=str ".$row['user_id'].">Active</p>";}
                        else{echo"<p id=str ".$row['user_id'].">Inactive</p>";}
                        ?></td> 
                        <td>
                            <select onchange="Active_Inactive(this.value,<?php echo $row['user_id'];?>)" style="background: transparent;border: 3px solid #eee;">
                            <option > </option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option> 
                            </td>
                            <td>
                            <?php 
                                if( $row['type']==1){echo"<p id=strr ".$row['user_id'].">Admin</p>";}
                                else{echo"<p id=strr ".$row['user_id'].">User</p>";}
                                ?>
                            </td> 
                            <td>
                                <select onchange="admin_user(this.value,<?php echo $row['user_id'];?>)"style="background: transparent;border: 3px solid #eee;">
                                <option > </option>
                                <option value="1">Admin</option>
                                <option value="0">User</option>
                                <td>
                            </td>
                                
                                <?php 
                                    }    
                                    ?> 


                            </td>
                    
                </tr>
            

        </table>

      
    </div>
    <div class="button" style="position:relative;left:88.75%;right:88.75%;bottom:5%;top:60%;"><a href="AddUser.php"><button name="add" id="action" type="button">Add User</button></a></div>
    
    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/active.js"></script>
    <script src="js/admin.js"> </script>
    </html>