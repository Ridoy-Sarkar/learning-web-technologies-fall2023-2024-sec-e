<?php
    require_once('db.php');

    function login($username, $email, $password){
        $con = getConnection();
        $sql = "select * from staff where username='{$username}' and email='{$email}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);

        if($count == 1){
            $_SESSION['flag'] = "true";
            setcookie('flag', 'true', time() + 3600, '/');
            return true;
        }else{
            return false;
        }
    }