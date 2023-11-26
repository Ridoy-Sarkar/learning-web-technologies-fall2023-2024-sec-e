<?php
    include_once 'db.php';

    function viewAllDonor() {
        $conn = getConnection();
        $query = "SELECT * FROM DONER";
        $data = mysqli_query($conn, $query);

        $result = [];
        
        while($entry = mysqli_fetch_assoc($data)){
            array_push($result, $entry);
        }

        return $result;
    }
?>