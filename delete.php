<?php
    require_once('DBconnect.php');
    session_start();
    $email = $_SESSION['email'];

    if(isset($_POST['row']) && isset($_POST['id'])){
      $r = $_POST['row'];
      $idd = $_POST['id'];

      $sql = "DELETE FROM appointment WHERE row = $r";
      mysqli_query($conn, $sql);

      $query=mysqli_query($conn,"select * from appointment");
      $number=1;
      while($row=mysqli_fetch_array($query)){
        $id=$row['row'];//PLEASE CHANGE ACCORDING TO YOUR DATABASE AUTO-INCREAMENT ID
        $sql = "UPDATE appointment SET row=$number WHERE row=$id";
        if($conn->query($sql) == TRUE){
            echo "Record RESET succesfully<br>";
        }
        $number++;
    }
    //Alter the increment to the latest number(bigger number)
     $sql = "ALTER TABLE appointment AUTO_INCREMENT =1"; //CHANGE TABLE NAME
    if($conn->query($sql) == TRUE){
        echo "Record ALTER succesfully";
    }else{
        echo"Error ALTER record: " . $conn->error;
    } 
    }

    $sql_add = "UPDATE mechanic set available = available + 1 where id = '$idd'";

          mysqli_query($conn, $sql_add);

    header("Location: historyAdmin.php");
?>