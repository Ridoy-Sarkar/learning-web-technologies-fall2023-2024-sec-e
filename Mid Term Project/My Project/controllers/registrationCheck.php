<?php
    include_once '../models/db.php';

    if(isset($_POST['registration']))
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address= $_POST['address'];
        $error = array();

        if (empty($fname)) {
            $error['fname'] = "First Name is required";
        }
        
        if (empty($lname)) {
            $error['lname'] = "Last Name is required";
        }
        
        if (empty($password)) {
            $error['password'] = "Password is required";
        }
        
        if (empty($cpassword)) {
            $error['cpassword'] = "Confirm Password is required";
        } elseif ($password !== $cpassword) {
            $error['cpassword'] = "Passwords do not match";
        }
        
        if (empty($email)) {
            $error['email'] = "Email is required";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error['email'] = "Invalid email format";
        }
        
        if (empty($phone)) {
            $error['phone'] = "Phone Number is required";
        }
        
        if (empty($address)) {
            $error['address'] = "Address is required";
        }
        
        if (empty($fname) && empty($lname) && empty($password) && empty($cpassword) && empty($email) && empty($phone) && empty($address)) {
            $error = array();  
            $error[] = "All fields are required";
        }
        
        if (!empty($error)) {
            foreach ($error as $errorMessage) {
                echo $errorMessage . "<br>";
            }
            return;
        }

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