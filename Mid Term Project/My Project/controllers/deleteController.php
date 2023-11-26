<?php 
    include("../models/db.php"); 
    $id =  $_GET['id'];
    $conn = getConnection();
    $query = "DELETE FROM DONER where id = '$id'";
    $data = mysqli_query($conn, $query);
    if($data)
    {
        echo "Deleted";
        header('location: ../views/display.php');
    }
    else
    {
        echo "Not";
    }
?>