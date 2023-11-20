<?php
    function getConnection(){   
        $dbhost = 'localhost';
        $dbname = 'finallab';
        $dbuser = 'root';
        $dbpass = '';

        $con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        return $con;
    }
?>