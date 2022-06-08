<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css.map">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <title>update Profile</title>
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
          <a class="nav-link " href="AdminLandingPage.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
         <a class="nav-link" href="AdminPortfolio.php">My Profile</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="users.php">Users</a>
       </li>
       <li class="nav-item ">
            <a class="nav-link" href="newreports.php">Reports</a>
          </li>
          <li class="nav-item "> 
            <a class= "nav-link" href="Charts.php">charts</a>
          </li>
      <li class="nav-item">
        <a href="Starter.php?logout='1'"><button class="btn btn-danger mb-3">Logout</button></a>
      </li>

      </ul>
    </div>
</nav>
<br>
<br>
    <?php
      session_start();
      if( $_SESSION['username']){
        $user = $_SESSION['username'];
      }
      include("connect.php");
      $query = "SELECT user_id FROM users WHERE userName='$user'";
      $id = mysqli_query($conn, $query);
      $row=mysqli_fetch_assoc($id);
      $res=$row["user_id"];

    $query="SELECT * FROM users WHERE user_id='$res' ";
    $result=mysqli_query($conn,$query);
    if($result){
        while($row = mysqli_fetch_array($result)){
            ?>
            <div class="container">
                <div class="jumbotron">
                    <h2>Update Data</h2>
                    <hr>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">User Name</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $row['userName']?>" placeholder="Enter Your Username" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control" value="<?php echo $row['email']?>" placeholder="Enter Your Email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Phone Number</label>
                            <input name="PhoneNumber" type="tel" class="form-control" value="<?php echo $row['phone']?>" placeholder="Phone Number" required  pattern="[0-9]+" minlength="11" maxlength="11" />
                        </div>
                        <div class="form-group">
                            <label for="">Date Of Birth</label>
                            <input name="birthdate" type="date" class="form-control" value="<?php echo $row['birthdate']?>" placeholder="birth-date" required />
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <input name="gender" type="text" class="form-control" value="<?php echo $row['gender']?>" placeholder="Gender" required />
                        </div>
                        <br>
                        <button type="submit" name="update" class="btn btn-primary">Update Data</button>
                        <a href="Adminportfolio.php" class="btn btn-danger">Cancel</a>
                    </form>

                    <?php
                   if(isset($_POST['update'])){
                        $username=$_POST['username'];
                        $_SESSION['username']=  $username;
                        $email=$_POST['email'];
                        $phone=$_POST['PhoneNumber'];
                        $date=$_POST['birthdate'];
                        $gender=$_POST['gender'];

                        $sql="UPDATE users SET userName='$username',email='$email',phone='$phone',birthdate='$date',gender='$gender' WHERE user_id='$res' ";
                        $query_run=mysqli_query($conn, $sql);

                        if($query_run){
                            echo '<script>alert("Date Updated")</script>';
                            header("location:Adminportfolio.php");
                        }
                        else{
                            echo '<script>alert("Date error")</script>';
                        }
                    }
                    ?>
                </div>

            </div>
            <?php
        }
    }

    else{
        echo '<script>alert("No data found")</script>';
    }

    ?>
    
</body>
</html>