<?php
include_once("../controls/adminHomeCheck.php");
include_once("../controls/userData.php");
?>
<center>
	<h1>Welcome <?php echo $user['name'] ?>!</h1>
	<a href="profile.php">Profile</a>
	<br />
	<a href="changePassword.html">Change Password</a>
	<br />
	<a href="viewUsers.php">View Users</a>
	<br />
	<a href="logout.php">Logout</a>
</center>