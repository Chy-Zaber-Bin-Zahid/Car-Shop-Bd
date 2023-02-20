<?php
require_once('DBconnect.php');
session_start();
$email = $_SESSION['email'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Car Workshop BD | The Fastest Car Service Center</title>

    <!-- Home Css file connect -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profileUser.css" />

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

    <!-- section one code -->
    <section class="sec-1">
        <h1 style = "margin: .5em 0em;"><?php
        if ($email == "czaber47@gmail.com"){
          echo "Admin Profile";
        } else{
          echo "Your Profile";
        }
        ?></h1>
        <div class="box">

        <?php
            $sql_table = "SELECT f_name, l_name, email, password, gender, id, b_date, p_number from user where email = '$email'";
            $result_table = mysqli_query($conn, $sql_table);

            if(mysqli_num_rows($result_table) != 0){
            while($row = mysqli_fetch_assoc($result_table) ){


?>


            <div class= "box-left">
                <div><h5>Name: <span><?php echo $row['f_name'], " ",$row['l_name'];?></span></h5></div>
                <div><h5>Email: <span><?php echo $row['email'];?></span></h5></div>
                <div><h5>Password: <span><?php echo $row['password'];?></span></h5></div>
                <div><h5>Gender: <span><?php echo $row['gender'];?></span></h5></div>
            </div>
            <div class= "box-right">
                <div><h5>Id: <span><?php echo $row['id'];?></span></h5></div>
                <div><h5>Birth Date: <span><?php echo $row['b_date'];?></span></h5></div>
                <div><h5>Number: <span><?php echo '0', $row['p_number'];?></span></h5></div>
            </div>

<?php }}?>
        </div>
    </section>

</body>
</html>