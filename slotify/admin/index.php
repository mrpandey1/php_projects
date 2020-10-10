<?php
	include("../includes/config.php");
    include("class/Account.php");
    include("../includes/classes/Constants.php");
    include("../includes/classes/User.php");
	$admin  = new Admin($con);
	include("handlers/login-handler.php");
		function getInputValue($name) {
			if(isset($_POST[$name])) {
				echo $_POST[$name];
			}
		}
?>

<html>
<head>
	<title>Welcome to V-music!</title>

	<link rel="stylesheet" type="text/css" href="assets/register.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div id="background">

		<div id="loginContainer">

			<div id="inputContainer">
				<form id="loginForm" action="index.php" method="POST">
					<h2>Login to your account</h2>
					<p>
						<label for="loginUsername">Username</label>
						<input id="loginUsername" name="loginUsername" type="text" placeholder="e.g. nishant" value="<?php getInputValue('loginUsername') ?>" required>
					</p>
					<p>
						<label for="loginPassword">Password</label>
						<input id="loginPassword" name="loginPassword" type="password" placeholder="Your password" required>
					</p>

					<button type="submit" name="loginButton">LOG IN</button>
					
				</form>
			</div>

			<div id="loginText">
				<h1>Get great music, right now</h1>
				<h2>Listen to loads of songs for free</h2>
				<ul>
					<li>Discover music you'll fall in love with</li>
					<li>Create your own playlists</li>
					<li>Follow artists to keep up to date</li>
				</ul>
			</div>

		</div>
	</div>
</body>
</html>