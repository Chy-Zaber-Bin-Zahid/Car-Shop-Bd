<?php
require_once('DBconnect.php');
session_start();

$email = $_SESSION['email'];

if(isset($_POST['modify']) == 'Modify'){
  if(isset($_POST['rowName']) && isset($_POST['mecName']) && isset($_POST['appointment']) && isset($_POST['mecId'])){
      $rowName = $_POST['rowName'];
      $mecName = $_POST['mecName'];
      $appointment = $_POST['appointment'];
      $mecId = $_POST['mecId'];


      $sql_add = "UPDATE appointment set mecName = '$mecName', date = '$appointment', mecId = '$mecId' where row = '$rowName'";

          mysqli_query($conn, $sql_add);
          header("Location: historyAdmin.php");
  }
}

?>