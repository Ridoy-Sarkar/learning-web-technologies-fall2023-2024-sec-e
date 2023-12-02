<?php
    function getConnection(){   
        $dbhost = 'localhost';
        $dbname = 'my_project';
        $dbuser = 'root';
        $dbpass = '';

        $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        return $con;
    }
?>