<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"];
    $gender = isset($_POST["gender"]) ? $_POST["gender"] : "";
    $dob = $_POST["dob"];
 
    if ($password !== $confirmPassword) {
        echo "Passwords do not match. Please try again.";
        exit();
    }

    if ($gender === "") {
        echo "Please select a gender.";
        exit();
    }
}
?>
