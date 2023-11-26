<?php
    include_once 'db.php';

    function viewAllDonor() {
        $conn = getConnection();
        $query2 = "SELECT * FROM REQUEST";
        $data2 = mysqli_query($conn, $query2);

        $result = [];
        
        while($entry = mysqli_fetch_assoc($data2)){
            array_push($result, $entry);
        }

        return $result;
    }
?>