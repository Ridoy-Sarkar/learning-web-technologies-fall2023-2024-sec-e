<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <script src="../assets/js/script.js"></script>
  </head>
  <body>
    <?php include_once 'header.php';?>

    <section>
    <table align="center">
            <tr>
                <td>
                  <p id="msg" style="color: red;"></p>
                </td>
            </tr>      
            <tr>
                <td>
                <h4>Username:</h4></td> 
                <td><input type="text" name="username" id="username" value="" placeholder="Enter Your Username"/></td>
            </tr>

                <td>
                <h4>Password:</h4></td> 
                <td><input type="password" name="password" id="password" placeholder="Enter Your Password" /></td>
            </tr>
            <tr>
              <td>
              <input type="submit" name="submit" value="Login" onclick="login()" />
                <p>Don't have an account? <a href="registration.php">Register Now</a></p>
                <br />
              </td>

            </tr>
      </table>
    </section>
  </body>
</html>
