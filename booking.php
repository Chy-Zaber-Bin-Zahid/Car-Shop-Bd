<?php
require_once('DBconnect.php');
session_start();

$email = $_SESSION['email'];

if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['color']) && isset($_POST['mecId']) && isset($_POST['liNum']) && isset($_POST['enNum']) && $_POST['date'] && $_POST['mecName']){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $color = $_POST['color'];
    $mecId = $_POST['mecId'];
    $liNum = $_POST['liNum'];
    $enNum = $_POST['enNum'];
    $date = $_POST['date'];
    $mecName = $_POST['mecName'];

    $sql_check = "SELECT available from mechanic WHERE id = '$mecId' AND mecName = '$mecName'";

    $result_check = mysqli_query($conn, $sql_check);

    if (mysqli_num_rows($result_check) != 0) {
        while($row_check = mysqli_fetch_assoc($result_check) ){
            $available = $row_check['available']-1;
        }
      }
    if (isset($available)) {
      if ($available < 0) {
        header("Location: dashboardUser.php");
      } else{
        $sql_available = "UPDATE mechanic set available = $available where id = '$mecId'";
  
        mysqli_query($conn, $sql_available);

        $sql = "SELECT COUNT(*) as count FROM appointment";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        $total = $row["count"] + 1;
  
        $sql_history = "INSERT INTO appointment VALUES ('$name', '$phone', '$color', '$mecId', '$liNum', '$enNum', '$date', '$mecName', '$email', '$total')";
  
        mysqli_query($conn, $sql_history);
      }
    } else{
      header("Location: dashboardUser.php");
    }


}  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Workshop BD | The Fastest Car Service Center</title>
    <!-- Sign In Css file connect -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/booking.css" />

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

    <!-- section one -->
    <section class="sec-1">
      <form class="form" action="">
        <div class="border">
          <h1 class= "ticket-up">Appointment</h1>
          <div class= "ticket-bottom">
            <div class = "ticket-left">
              <h5 class="ticket-both">Client Name: <span><?php echo $name?></span> </h5>
              
              <h5 class="ticket-both">Phone Number: <span><?php echo $phone?></span></h5>
              <h5 class="ticket-both">Car Color: <span><?php echo $color?></span></h5>
              <h5 class="ticket-both">Appointment Date: <span><?php echo $date?></span></h5>
          </div>
            <div class = "ticket-right">
              <h5 class="ticket-both">Car License Number: <span><?php echo $liNum?></span></h5>
              <h5 class="ticket-both">Car Engine Number: <span><?php echo $enNum?></span></h5>
              <h5 class="ticket-both">Mechanic Name: <span><?php echo $mecName?></span></h5>
              <h5 class="ticket-both">Mechanic Id: <span><?php echo $mecId?></span></h5>
          </div>
          </div>
          <input onclick="window.print()" class="btn btn-dark ticket-btn" type="submit" value = "Print">
          
        </div>
      </form>
    </section>

    </body>
    </html>


