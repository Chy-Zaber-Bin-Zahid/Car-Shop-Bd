<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Workshop BD | The Fastest Car Service Center</title>

    <!-- Home Css file connect -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/available_user.css">

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

    <!-- section one table -->
    <section class="sec-1">
        <div class="whole-table">
            <div class="title">
                <h1>Available Mechanic</h1>
            </div>
            <div class="table main-td">
                <div class="td-element"><h5>Id</h5></div>
                <div class="td-element"><h5>Mechanic Name</h5></div>
                <div class="td-element"><h5>Available</h5></div>
            </div>

            <?php
            require_once('DBconnect.php');
            session_start();
            $email = $_SESSION['email'];
            $sql_table = "SELECT * from mechanic";
            $result_table = mysqli_query($conn, $sql_table);

            if(mysqli_num_rows($result_table) != 0){
            while($row = mysqli_fetch_assoc($result_table) ){


?>
            <div class="table">
                <div class="td-element-sub"><h5><?php echo $row['id'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['mecName'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['available'];?></h5></div>

            </div>

<?php }} ?>
            

        </div>
    </section>

 </body>
</html>