<?php
include_once '../models/requestModel.php';
require_once '../controllers/sessionCheck.php';

$result1 = viewAllDonor();
?>
<?php include_once 'header.php';?>
<h3 align="center"> Display Information</h3>
<center>  <table border= "1" cellspacing= "7" width="72%" >

    <tr>
        <th width="5%">ID</th>
        <th width="12%">Name</th>
        <th width="11%">Phone</th>
        <th width="10%">Blood Request</th>  
        <th width="15%">Blood Unit</th>
        <th width="15%">Reason</th>
        <th width="7%">Operations</th>
    </tr>

<?php
    for($i = 0; $i < count($result1); $i++) {
    {
        echo " <tr>
                <td>".$result1[$i]['id']."</td>
                <td>".$result1[$i]['name']."</td>
                <td>".$result1[$i]['phone']."</td>
                <td>".$result1[$i]['brequest']."</td>
                <td>".$result1[$i]['bunit']."</td>
                <td>".$result1[$i]['reason']."</td>

                //<td><a href='requestApproval.php?id=".$result[$i]['id']."'> <input type='submit' value = 'Approve'</a> 
                //<td><a href='requestApproval.php?id=".$result[$i]['id']."'> <input type='submit' value = 'Deny'</a> 
                <td>
                <form action="displayRequest.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $result1['id']; ?>"/>
                <input type="submit" name="approve" value="approve"> &nbsp &nbsp <br>
                 <input type="submit" name="delete" value="delete"> 
                </form>
           </td>
            </tr>";

    }
}

</table>
</center>


if(isset($_POST['approve'])){

	$id = $_POST['id'];
	$query2 = "UPDATE REQUEST SET status = 'approved' WHERE id = '$id' ";
	$resut1 = mysqli_query($conn,$query2);
	header("location:displayRequest.php");
}


if(isset($_POST['delete'])){

	$id = $_POST['id'];
	$query2 = "DELETE  FROM Request  WHERE id = '$id' ";
	$resut1 = mysqli_query($conn,$query2);
	header("location:displayRequest.php");
}
?>