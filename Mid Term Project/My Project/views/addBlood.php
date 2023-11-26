<?php
    require_once '../controllers/sessionCheck.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blood</title>
</head>
<body>
<?php include_once 'header.php';?>
    <div id="body">
        <fieldset>
        <br><br><br><br><br>
        <form action="../controllers/addBlood.php" method="POST">
        <table align="center">
            <tr>
                <td>
                <h4>Name:</h4></td> 
                <td><input type="text" name="name" id="name" placeholder="Enter Donator's Name" required /></td>
            </tr>
            <tr>
                <td>
                <h4>Blood Group:</h4></td> 
                <td>
                    <select name="bloodGroup" id="bloodGroup" value="" required >
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                <h4>Quntity:</h4></td> 
                <td><input type="text" name="quantity" id="quantity" placeholder="Enter Quantity" required /></td>
            </tr>

            <tr>
                <td>
                <h4>Mobile Number:</h4></td> 
                <td><input type="text" name="mobileNumber" id="mobileNumber" placeholder="Enter Donator's Mobile Number" /></td>
            </tr>
           
            <tr>
                <td><input type="Submit" name="submit" value="Add Blood"></td>
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