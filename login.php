<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="STYLES/login.css">
</head>

<body>
    <h1>Login Page</h1>
    <div class="login">
        <form id="login" method="get" action="login.php">
            <label for="Uname"><b>User Name</b></label>
            <input type="text" name="Uname" id="Uname" placeholder="Username">

            <label for="Pass"><b>Password</b></label>
            <input type="password" name="Pass" id="Pass" placeholder="Password">

            <input type="checkbox" id="check">
            <span>Remember me</span>

            <input type="button" name="log" id="log" value="Login">
            

            <br><br>
            <a href="#">Forgot Password</a>
        </form><br>
        <button class="signup-btn" onclick="location.href='#';">Don't have an account? Sign Up</button>
    </div>
</body>

</html>
