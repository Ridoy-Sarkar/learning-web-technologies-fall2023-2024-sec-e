<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $usernamePattern = '/^[a-zA-Z0-9._-]{2,}$/';
    $passwordPattern = '/^(?=.*[@#$%])(.{8,})$/';

    if (preg_match($usernamePattern, $username) && preg_match($passwordPattern, $password)) {
        echo "Login successful!";
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>
