<?php
    include_once 'db.php';

    function viewAllDonor() {
        $conn = getConnection();
        $query1 = "SELECT * FROM STAFF LIMIT 1";
        $data1 = mysqli_query($conn, $query1);

        $result = [];
        
        while($entry = mysqli_fetch_assoc($data1)){
            array_push($result, $entry);
        }

        return $result;
    }
?>