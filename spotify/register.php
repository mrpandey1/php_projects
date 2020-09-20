<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to spotify</title>
</head>
<body>
    <div id="inputContainer">
        <form action="register.php" id="loginForm">
            <h2> Login to spotify </h2>
            <p>
                <label for='loginUsername'>Username</label>
                <input id='loginUsername' name='loginUsername' placeholder="e.g nishh" required type="text">
            </p>
            <p>
                <label for='loginPassword'>Password</label>
                <input id='loginPassword' name='loginPassword' required type="password">
            </p>
            <button type='submit' name='loginButton'>Login</button>
        </form>
    </div>
</body>
</html>