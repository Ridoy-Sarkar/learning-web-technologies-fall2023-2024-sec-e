<?php
    require_once '../controllers/sessionCheck.php';
    include_once '../models/inventoryModel.php';
    
    $Apos = bloodQuantity('A+');
    $Bpos = bloodQuantity('B+');
    $Opos = bloodQuantity('O+');
    $ABpos = bloodQuantity('AB+');
    $Aneg = bloodQuantity('A-');
    $Bneg = bloodQuantity('B-');
    $Oneg = bloodQuantity('O-');
    $ABneg = bloodQuantity('AB-');

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inventory</title>
  </head>
  <body>
  <?php include_once 'header.php';?>
  <h3 align="center">Inventory</h3>
<center>  <table border= "1" cellspacing= "7" width="85%" >
    <tr>
        <th>Blood Group</th>
        <th>Quantity</th>
    </tr>

    <tr>
        <td>A+</td>
        <td><?=$Apos[0]['SUM(quantity)']?></td>
    </tr>

    <tr>
        <td>A-</td>
        <td><?=$Aneg[0]['SUM(quantity)']?></td>
    </tr>

    <tr>
        <td>B+</td>
        <td><?=$Bpos[0]['SUM(quantity)']?></td>
    </tr>

    <tr>
        <td>B-</td>
        <td><?=$Bneg[0]['SUM(quantity)']?></td>
    </tr>

    <tr>
        <td>O+</td>
        <td><?=$Opos[0]['SUM(quantity)']?></td>
    </tr>

    <tr>
        <td>O-</td>
        <td><?=$Oneg[0]['SUM(quantity)']?></td>
    </tr>

    <tr>
        <td>AB+</td>
        <td><?=$ABpos[0]['SUM(quantity)']?></td>
    </tr>

    <tr>
        <td>AB-</td>
        <td><?=$ABneg[0]['SUM(quantity)']?></td>
    </tr>

    </table>
</center>
</html>
