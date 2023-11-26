<?php 
include("../models/db.php"); 
$id =  $_GET['id'];

$conn = getConnection();
$query1 = "SELECT * FROM STAFF where id = '$id'";
$data1 = mysqli_query($conn, $query1);
$result = mysqli_fetch_assoc($data1);

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
        <center><h2>Update Doner Information</h2></center>
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
                <td><input type="text" name="userName"  value="<?php echo $result['userName']; ?>" placeholder="Enter Your First Name" required/></td>
            </tr>
            <tr>
                <td>
                <h4>Email:</h4></td> 
                <td><input type="email" name="email" value="<?php echo $result['email']; ?>" placeholder="Enter Your Email" required/></td>
            </tr>
            <tr>
                <td>
                <h4>Password:</h4></td> 
                <td><input type="password" name="password" value="<?php echo $result['password']; ?>" placeholder="Enter Your Password" required/></td>
            </tr>
            <tr>
            <tr>
                <td>
                <h4>Phone Number:</h4></td> 
                <td><input type="text" name="phone" value="<?php echo $result['phone']; ?>" placeholder="Enter Your Number" required/></td>
            </tr>
            <tr>
                <td>
                <h4>Address:</h4></td> 
                <td><textarea name="address"  cols="30" rows="5" required> <?php echo $result['address']; ?></textarea></td>
            </tr>
           
            <tr>
                <td><input type="Submit" name="update" value="Update"></td>
            </tr>
        </table>
        </form>
        </fieldset>

</body>
</html>

<?php
    if(isset($_POST['update']))
    {
        $uname = $_POST['userName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $phone = $_POST['phone'];
        $address= $_POST['address'];

        $query1 = "UPDATE STAFF set userName='$uname', email='$email', password='$password',   phone='$phone', address='$address' WHERE id='$id'";
        $data1 = mysqli_query($conn, $query1);

        if($data1)
        {
            
            header('location: displayStaff.php');
        }
        else
        {
            echo "Not";
        }
    }

?> 