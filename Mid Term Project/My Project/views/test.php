<?php
    require_once '../models/db.php';

    $conn = getConnection();
        $query = "SELECT SUM(quantity) FROM inventory WHERE bloodGroup = 'B+';";
        $run = mysqli_query($conn, $query);

        $quantity = [];
        
        while($request = mysqli_fetch_assoc($run)){
            array_push($quantity, $request);
        }
        
        return $quantity;
?>