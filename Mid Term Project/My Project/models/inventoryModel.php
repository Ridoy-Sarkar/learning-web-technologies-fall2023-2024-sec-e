<?php
    require_once('db.php');

    function viewInventory() {
        $conn = getConnection();
        $query = "SELECT * FROM inventory";
        $data = mysqli_query($conn, $query);

        $result = [];

        while($entry = mysqli_fetch_assoc($data)){
            array_push($result, $entry);
        }

        return $result;
    }

    function bloodQuantity($bloodGroup) {
        $conn = getConnection();
        $query = "SELECT SUM(quantity) FROM inventory WHERE bloodGroup = '$bloodGroup';";
        $run = mysqli_query($conn, $query);

        $quantity = [];
        
        while($request = mysqli_fetch_assoc($run)){
            array_push($quantity, $request);
        }
        
        return $quantity;
    }
?>