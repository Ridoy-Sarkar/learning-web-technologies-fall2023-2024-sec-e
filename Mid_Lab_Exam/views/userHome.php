<?php
include_once("../controls/viewUserCheck.php");
include_once("../controls/userData.php");

?>
<center>
	<h1>Welcome <?php echo $user['name'] ?>!</h1>
	<a href="profile.php">Profile</a>
	<br />
	<a href="changePassword.php">Change Password</a>
	<br />
	<a href="../controls/logout.php">Logout</a>
</center>