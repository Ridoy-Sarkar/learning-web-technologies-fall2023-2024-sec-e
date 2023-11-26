<?php
require_once 'db.php';

function insertData($fname, $lname, $password, $cpassword, $email, $phone, $address)
{
        $conn = getConnection();
        $query = "INSERT INTO doner (fname, lname, password, cpassword, email, phone, address) VALUES('$fname', '$lname', '$password', '$cpassword', '$email', '$phone', '$address')";
        $data = mysqli_query($conn, $query);

        if($data)
        {
            header('location: ../views/login.php');
        }
        else
        {
            echo "failed";
        }
}
?>