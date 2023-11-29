<?php
    include_once 'db.php';

        $conn = getConnection();
        $query = "SELECT * FROM doner";
        $data = mysqli_query($conn, $query);
        $count = mysqli_num_rows($data);

        if ($count > 0) {
            $list = [];
    
            while($request= mysqli_fetch_assoc($data)) {
                array_push($list, $request);
            }
        }
        echo json_encode($list);
?>