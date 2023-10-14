<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];
    $retypeNewPassword = $_POST["retype_new_password"];

    if ($newPassword == $retypeNewPassword && $newPassword != $currentPassword && strlen($newPassword) >= 8) {
        echo "Password changed successfully!";
    } else {
        echo "Password change failed. Please check your inputs.";
    }
}
?>
