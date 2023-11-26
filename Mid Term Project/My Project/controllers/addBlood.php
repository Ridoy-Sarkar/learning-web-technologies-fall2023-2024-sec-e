<?php
    include_once '../models/db.php';

    $name=$_POST['name'];
    $bloodGroup=$_POST['bloodGroup'];
    $quantity=$_POST['quantity'];
    $mobileNumber = $_POST['mobileNumber'];

    $conn = getConnection();
    $sql = "insert into inventory (name, bloodGroup, quantity, mobileNumber) values ('{$name}', '{$bloodGroup}', '{$quantity}', '{$mobileNumber}')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo 'Blood added successfully!';
    }
    else {
        echo 'Failed to add blood!';
    }
?>