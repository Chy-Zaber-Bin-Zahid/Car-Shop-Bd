<?php
require_once('DBconnect.php');
session_start();

$email = $_SESSION['email'];
// $pass = $_SESSION['pass'];
$_SESSION['email'] = $email;


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- css file link -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/dashboardU.css">
 

  <title>Car Workshop BD | The Fastest Car Service Center</title>
</head>
<body>
<header class="header">
    <nav>
      <div>
        <a class="nav-car-title" href="home.php">CAR WORKSHOP BD</a>
      </div>
      <div class="nav-left-box">
        <a class="nav-left" href="home.php">Sign Out</a>
      </div>
    </nav>
  </header>

  <section class="grid section-user">
    <div class="user-left">
      <div class="profile">
        <a class="profile-name" href="profile.php"><img class="profile-image" src="images/profile.png" alt="profile picture"><p><?php
            $sql2 = "SELECT DISTINCT f_name, l_name FROM `user` where email = '$email'";
            $result2 =  mysqli_query($conn, $sql2);
            $row2 = mysqli_num_rows($result2);

            if($row2>0){
              while($rowProfile = mysqli_fetch_assoc($result2) ){?>

                <?php echo $rowProfile['f_name'], " ",$rowProfile['l_name'];?></p><?php }}?></a>
      </div>
      <div class="profile-bellow-main">
      <a class="profile-bellow" href="available_user.php">Available Mechanic</a>
      </div>
      <div class="profile-bellow-main">
      <a class="profile-bellow" href="historyUser.php">Appointment History</a>
      </div>
    </div>
    <form action="booking.php" method="post" class="user-right">
      <h1 class="user-right-title">Appointment</h1>
      <div class="user-right-main">
        <div class="main-right common">
          <label for="">Name</label>
          <input required name="name" placeholder="Name" type="text">
          <label for="">Phone Number</label>
          <input required name="phone" placeholder="Phone" type="tel">
          <label for="">Car Color</label>
          <input required name="color" placeholder="Color" type="text">
          <label for="">Mechanic Id</label>
          <select name="mecId" class="mechanic" id="cars" name="cars">
          <?php
            $sql1 = "SELECT DISTINCT id FROM mechanic";
            $result1 = mysqli_query($conn, $sql1);
            $rows = mysqli_num_rows($result1);
            if($rows>0){
              while($row = mysqli_fetch_assoc($result1) ){
            ?>
              
              <option name="from" value="<?php echo $row['id'] ?>"><?php echo $row['id'] ?></option>
              
              <?php } } 
          
          ?>
        </select>
          <input class="btn" type="submit" value="Submit">
        </div>
        <div class="main-left common">
        <label for="">Car License Number</label>
          <input required name="liNum" placeholder="License Number" type="text">
        <label for="">Car Engine Number</label>
          <input required name="enNum" placeholder="Engine Number" type="text">
          <label for="">Appointment Date</label>
          <input required name="date" type="date">
          <label for="">Mechanic Name</label>
          <select class="mechanic" id="cars" name="mecName">
          <?php
            $sql1 = "SELECT DISTINCT mecName FROM mechanic";
            $result1 = mysqli_query($conn, $sql1);
            $rows = mysqli_num_rows($result1);
            if($rows>0){
              while($row = mysqli_fetch_assoc($result1) ){
            ?>
              
              <option name="from" value="<?php echo $row['mecName'] ?>"><?php echo $row['mecName'] ?></option>
              
              <?php } } 
          
          ?>
        </select>
        </div>
      </div>

    </form>
  </section>
</body>
</html>