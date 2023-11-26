<?php 
include("../models/db.php"); 
$id =  $_GET['id'];

$conn = getConnection();
$query2 = "SELECT * FROM REQUEST where id = '$id'";
$data2 = mysqli_query($conn, $query2);
$result1 = mysqli_fetch_assoc($data2);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>
<body>
<?php include_once 'header.php';?>
<div id="header">
        <fieldset>
        <br><br><br>
        <center><h2>Blood Request</h2></center>
        <br><br>
        </fieldset>
        
    </div>
    <div id="body">
        <fieldset>
        <br><br>
        <form action="" method="POST">
        <table align="center">
            <tr>
                <td>
                <h4>Name:</h4></td> 
                <td><input type="text" name="name"  value="<?php echo $result['name']; ?>" /></td>
            </tr>
            <tr>
                <td>
                <h4>Phone Number:</h4></td> 
                <td><input type="text" name="phone" value="<?php echo $result['phone']; ?>" /></td>
            </tr>
            <tr>
                <td>
                <h4>Blood Request:</h4></td> 
                <td><input type="text" name="brequest" value="<?php echo $result['brequest']; ?>" /></td>
            </tr>
            <tr>
                <td>
                <h4>Blood Unit:</h4></td> 
                <td><input type="text" name="bunit" value="<?php echo $result['bunit']; ?>" /></td>
            </tr>
            <tr>
            <tr>
                <td>
                <h4>Reason:</h4></td> 
                <td><input type="text" name="reason" value="<?php echo $result['reson']; ?>" /></td>
            </tr>

           
            <tr>
                <td><input type="Submit" name="submit" value="Submit"></td>
            </tr>
        </table>
        </form>
        </fieldset>

</body>
</html>

<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $brequest = $_POST['brequest'];
        $bunit= $_POST['bunit'];
        $reason = $_POST['reason'];

        $query2 = "UPDATE REQUEST set name='$name', phone='$phone', brequest='$brequest',   bunit='$bunit', reason='$reaqson' WHERE id='$id'";
        $data2 = mysqli_query($conn, $query2);

        if($data1)
        {
            
            header('location: displayRequest.php');
        }
        else
        {
            echo "Not";
        }
    }

?> 