<?php
include('includes/handlers/register-handler.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to spotify</title>
</head>
<body>
    <div id="inputContainer">
    <!-- login form -->
    <form action="register.php" id="loginForm" method="POST">
            <h2> Login to spotify </h2>
            <p>
                <label
    $password=sanitizeFormPassword($_POST['password']); for='loginUsername'>Username</label>
                <input id='loginUsername' name='loginUsername' placeholder="e.g nishh" required type="text">
            </p>
            <p>
                <label for='loginPassword'>Password</label>
                <input id='loginPassword' name='loginPassword' required type="password">
            </p>
            <button type='submit' name='loginButton'>Login</button>
        </form>
        <!--Registration form -->

        <form action="register.php" id="registrationForm" method="POST">
            <h2> Create your free account </h2>
            <p>
                <label for='username'>Username</label>
                <input id='username' name='username' placeholder="e.g nishh" required type="text">
            </p>
            <p>
                <label for='firstName'>First name</label>
                <input id='firstName' name='firstName' placeholder="e.g Nishant" required type="text">
            </p>
            <p>
                <label for='lastName'>Last name</label>
                <input id='lastName' name='lastName' placeholder="e.g Pandey" required type="text">
            </p>
            <p>
                <label for='email'>Email</label>
                <input id='email' name='email' placeholder="e.g abc@gmail.com" required type="email">
            </p>
            <p>
                <label for='email2'>Confirm Email</label>
                <input id='email2' name='email2' placeholder="e.g abc@gmail.com" required type="email">
            </p>
            <p>
                <label for='password'>Password</label>
                <input id='password' name='password' required type="password">
            </p>
            <p>
                <label for='password2'>Confirm Password</label>
                <input id='password2' name='password2' required type="password">
            </p>
            <button type='submit' name='registerButton'>Register</button>
        </form>
    </div>
</body>
</html>