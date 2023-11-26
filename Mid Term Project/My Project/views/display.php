<?php
include_once '../models/donorModel.php';
require_once '../controllers/sessionCheck.php';

$result = viewAllDonor();
?>
<?php include_once 'header.php';?>
<h3 align="center"> Display Information</h3>
<center>  <table border= "1" cellspacing= "7" width="72%" >
    <tr width="0">
        <td colspan="6" width="80%">&nbsp;</td>
        <td style="text-align: center;">
        <a href="registration.php">Add Donor</a>
        </td>
    </tr>
    <tr>
        <th width="5%">ID</th>
        <th width="12%">First Name</th>
        <th width="12%">Last Name</th>
        <th width="11%">Email</th>
        <th width="10%">Phone</th>  
        <th width="15%">Address</th>
        <th width="7%">Operations</th>
    </tr>

<?php
    for($i = 0; $i < count($result); $i++) {
    {
        echo " <tr>
                <td>".$result[$i]['id']."</td>
                <td>".$result[$i]['fname']."</td>
                <td>".$result[$i]['lname']."</td>
                <td>".$result[$i]['email']."</td>
                <td>".$result[$i]['phone']."</td>
                <td>".$result[$i]['address']."</td>

                <td><a href='update.php?id=".$result[$i]['id']."'> <input type='submit' value = 'Update'</a> 
                <a href='../controllers/deleteController.php?id=".$result[$i]['id']."'> <input type='submit' value = 'Delete'</a> </td>
                
            </tr>";
    }
}
?>
</table>
</center>