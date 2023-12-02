<?php
    session_start();
    if(!isset($_COOKIE['flag'])) {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="../assets/js/script.js"></script>
</head>
<body>
    <?php include_once 'header.php';?>

    <section>
            <table align="center">
              
              <tr>
                  <td>
                  <h4>Employee Name:</h4></td> 
                  <td><input type="text" name="name" id="name" value="" placeholder="Enter Name"/></td>
              </tr>

                  <td>
                  <h4>Employee Username:</h4></td> 
                  <td><input type="text" name="username" id="username" placeholder="Enter Username" /></td>
              </tr>
              <tr>
                <td>
                <input type="submit" name="submit" value="Search" onclick="searchEmployee()" />
                  <br />
                </td>

              </tr>
            </table>
    </section>
</body>
</html>