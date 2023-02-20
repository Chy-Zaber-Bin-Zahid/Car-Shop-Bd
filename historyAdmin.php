<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Workshop BD | The Fastest Car Service Center</title>

    <!-- css file link -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/history_admin.css">

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
                <h1><?php
                require_once('DBconnect.php');
                session_start();
                $email = $_SESSION['email'];
                if ($email === "czaber47@gmail.com") {
                  echo "All User Appointment History";
                }else{
                  echo "Your History";
                }
                ?></h1>
            </div>
            <div class="table main-td">
            <div class="td-element"><h5>Row Number</h5></div>
                <div class="td-element"><h5>Name</h5></div>
                <div class="td-element"><h5>Phone</h5></div>
                <div class="td-element"><h5>Car Color</h5></div>
                <div class="td-element"><h5>License Number</h5></div>
                <div class="td-element"><h5>Engine Number</h5></div>
                <div class="td-element"><h5>Appointment Date</h5></div>
                <div class="td-element"><h5>Email</h5></div>
                <div class="td-element"><h5>Mechanic Id</h5></div>
                <div class="td-element"><h5>Mechanic Name</h5></div>
            </div>

            <?php
            // require_once('DBconnect.php');
            // session_start();
            // $email = $_SESSION['email'];
            if ($email === "czaber47@gmail.com") {
              $sql_table = "SELECT * from appointment";
            }else{
              $sql_table = "SELECT * from appointment where email = '$email'";
            }
            
            $result_table = mysqli_query($conn, $sql_table);

            if(mysqli_num_rows($result_table) != 0){
            while($row = mysqli_fetch_assoc($result_table) ){


?>
            <div class="table">
            <div class="td-element-sub"><h5><?php echo $row['row'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['client'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['phone'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['color'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['liNum'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['enNum'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['date'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['email'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['mecId'];?></h5></div>
                <div class="td-element-sub"><h5><?php echo $row['mecName'];?></h5></div>
            </div>

<?php }} ?>
            

        </div>

        <div class="bottom-part">
          <h1>Delete Appointment</h1>
          <form action="delete.php" method="post" class="bottom-inside">
            <input required name="row" placeholder="Enter Row Number" type="number" class="bottom-input">
            <input required name="id" placeholder="Enter Mechanic Id" type="number" class="bottom-input">
            <input class="bottom-btn" type="submit" value="Submit">
          </form>
        </div>

        <form action="adminChange.php" method="post" class="edit-part">
          <div class="each">
          <label for="">Row Number</label>
          <input required placeholder = "Enter Row Number" name="rowName" type="number">
          </div>
          <div class="each">
          <label for="">Mechanic Name</label>
          <input required placeholder = "Enter Mechanic Name" name = "mecName" type="text">
          </div>
          <div class="each">
          <label for="">Appointment Date</label>
          <input required name="appointment" type="date">
          </div>
          <div class="each">
          <label for="">Mechanic Id</label>
          <input required name="mecId" type="number" placeholder="Enter Mechanic Id">
          </div>
          <div class="btn-part">
          <input class="btn btn-warning" type="submit" name = "modify" value = "Modify">
          </div>
        </form>
    </section>

 </body>
</html>