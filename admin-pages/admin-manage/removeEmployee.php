<?php
   
    include('../connection.php');

    $id = $_GET['delete'];
    $sql = "DELETE FROM `employee` WHERE id = '$id'";
    $query = mysqli_query($conn, $sql);

    if($query){
        echo 'Nice';
        header("location: ./manage.php");
    }else {
        echo 'not';
    }

    

?>