<?php 
include("../models/db.php"); 
$id =  $_GET['id'];

$conn = getConnection();
$query = "SELECT * FROM DONER where id = '$id'";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);

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
                <h4>First Name:</h4></td> 
                <td><input type="text" name="fname"  value="<?php echo $result['fname']; ?>" placeholder="Enter Your First Name" required/></td>
            </tr>
            <tr>
                <td>
                <h4>Last Name:</h4></td> 
                <td><input type="text" name="lname" value="<?php echo $result['lname']; ?>" placeholder="Enter Your Last Name" required/></td>
            </tr>
            <tr>
                <td>
                <h4>Password:</h4></td> 
                <td><input type="password" name="password" value="<?php echo $result['password']; ?>" placeholder="Enter Your Password" required/></td>
            </tr>
            <tr>
                <td>
                <h4>Confirm Password:</h4></td> 
                <td><input type="password" name="cpassword" value="<?php echo $result['cpassword']; ?>" placeholder="Confirm Your Password" required/></td>
            </tr>
            <tr>
                <td>
                <h4>Email:</h4></td> 
                <td><input type="email" name="email" value="<?php echo $result['email']; ?>" placeholder="Enter Your Email" required/></td>
            </tr>
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
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address= $_POST['address'];

        $query = "UPDATE doner set fname='$fname', lname='$lname', password='$password', cpassword='$cpassword', email='$email', phone='$phone', address='$address' WHERE id='$id'";
        $data = mysqli_query($conn, $query);

        if($data)
        {
            
            header('location: display.php');
        }
        else
        {
            echo "Not";
        }
    }

?> 