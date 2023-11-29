<?php
    function getConnection() {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "my_project";

        $conn = mysqli_connect($servername, $username, $password, $dbname);
        if($conn)
        {
            return $conn;
        }
        else
        {
            echo "connection faild".mysqli_connect_error();
        }
    }
?>