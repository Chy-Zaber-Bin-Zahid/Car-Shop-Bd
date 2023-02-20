<?php
require_once('DBconnect.php');
session_start();

$email = $_SESSION['email'];

if (isset($_POST['add']) == 'Add') {
    if(isset($_POST['id']) && isset($_POST['mecName']) && isset($_POST['available'])){
        $id = $_POST['id'];
        $mecName = $_POST['mecName'];
        $available = $_POST['available'];

            $sql_add = "INSERT INTO mechanic VALUES ('$id', '$mecName', '$available')";

            mysqli_query($conn, $sql_add);
            header("Location: available_admin.php");
        
    
}


    } elseif(isset($_POST['modify']) == 'Modify'){
    if(isset($_POST['id']) && isset($_POST['mecName']) && isset($_POST['available'])){
        $id = $_POST['id'];
        $mecName = $_POST['mecName'];
        $available = $_POST['available'];


        $sql_add = "UPDATE mechanic set id = '$id', mecName = '$mecName', available = '$available' where id = '$id'";

            mysqli_query($conn, $sql_add);
            header("Location: available_admin.php");
    }
}else {
    if(isset($_POST['id']) && isset($_POST['mecName']) && isset($_POST['available'])){
        $id = $_POST['id'];
        $mecName = $_POST['mecName'];
        $available = $_POST['available'];
    }

        $sql_add = "DELETE from mechanic where id = '$id'";

            mysqli_query($conn, $sql_add);
            header("Location: available_admin.php");

}
?>