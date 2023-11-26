<?php
include('../models/db.php');
session_start();
$username = $email = $password = "";
$errMsg = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $flag = false;

        if (empty($_REQUEST['username'])) {
            $errMsg = "{$errMsg} <br />Username is required!";
            $flag = true;
        } else {
            $username = $_REQUEST['username'];
        }

        if (empty($_REQUEST['email'])) {
            $errMsg = "{$errMsg} <br />Email is required!";
            $flag = true;
        } else {
            $email = $_REQUEST['email'];
        }

        if (empty($_REQUEST['password'])) {
            $errMsg = "{$errMsg} <br />Password is required!";
            $flag = true;
        } else {
            $password = $_REQUEST['password'];
        }

        if (!$flag) {
            include '../models/userModel.php';
            $result = login($username, $email, $password);

            if ($result) {
              header('location: ../views/home.php');
            } else {
              $errMsg = "Invalid credentials!";
            }
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
<?php include_once 'header.php';?>
    <div id="header">
        <fieldset>
        <br><br><br>
        <center><h2>Login</h2></center>
        <br><br>
        </fieldset>
        
    </div>
    <div id="body">
        <fieldset>
        <br><br><br><br><br>
        <p style="color: red"><?php echo $errMsg;?></p>
            <br />
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
        <table align="center">
            <tr>
                <td>
                <h4>User Name:</h4></td> 
                <td><input type="text" name="username" id="username" placeholder="Enter Your  Name" /></td>
            </tr>
            <tr>
                <td>
                <h4>Email:</h4></td> 
                <td><input type="email" name="email" id="email" placeholder="Enter Your Email" /></td>
            </tr>
            <tr>
                <td>
                <h4>Password:</h4></td> 
                <td><input type="password" name="password" id="password" placeholder="Enter Your Password" /></td>
            </tr>
           
            <tr>
                <td><input type="submit" name="submit" value="Login"></td>
            </tr>
        </table>
        </form>
        
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </fieldset>
        
    </div>
    <div id="footer">
        <fieldset>
        <br><br>
        <center><h5>Copyright</h5></div></center>
        <br><br><br>
        </fieldset>
</body>
</html>

