<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
<?php include_once 'header.php';?>
<div id="header">
        <fieldset>
        <br><br><br>
        <center><h2>Registration</h2></center>
        <br><br>
        </fieldset>
        
    </div>
    <div id="body">
        <fieldset>
        <br><br>
        <form action="../controllers/registrationCheck.php" method="POST">
        <table align="center">
            <tr>
                <td>
                <h4>First Name:</h4></td> 
                <td><input type="text" name="fname"  id="username" placeholder="Enter Your First Name" /></td>
            </tr>
            <tr>
                <td>
                <h4>Last Name:</h4></td> 
                <td><input type="text" name="lname" id="username" placeholder="Enter Your Last Name" /></td>
            </tr>
            <tr>
                <td>
                <h4>Password:</h4></td> 
                <td><input type="password" name="password" id="password" placeholder="Enter Your Password" /></td>
            </tr>
            <tr>
                <td>
                <h4>Confirm Password:</h4></td> 
                <td><input type="password" name="cpassword" id="password" placeholder="Confirm Your Password" /></td>
            </tr>
            <tr>
                <td>
                <h4>Email:</h4></td> 
                <td><input type="email" name="email" id="email" placeholder="Enter Your Email" /></td>
            </tr>
            <tr>
                <td>
                <h4>Phone Number:</h4></td> 
                <td><input type="text" name="phone" id="phone" placeholder="Enter Your Number" /></td>
            </tr>
            <tr>
                <td>
                <h4>Address:</h4></td> 
                <td><textarea name="address" id="" cols="30" rows="5" ></textarea></td>
            </tr>
           
            <tr>
                <td><input type="Submit" name="registration" value="Register"></td>
            </tr>
        </table>
        </form>
        </fieldset>

</body>
</html>