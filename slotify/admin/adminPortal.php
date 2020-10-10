<?php
include('../includes/config.php');
include('../includes/classes/User.php');
if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn=new User($con,$_SESSION['userLoggedIn']);
	$username=$userLoggedIn->getUsername();
	echo "<script>userLoggedIn = '$username';</script>";
}
else {
	header("Location: index.php");
}
?>

<h2>Add artist</h2>

<form action="" method="post">
	<input type="text" name='artist'>
	<input type="submit">
</form>