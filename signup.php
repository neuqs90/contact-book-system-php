<?php

if isset($_POST["sign"]){

    $username = trim($_POST["Uname"])
    $password = trim($_POST["Pass"])
    $email = trim($_POST["email"])

    


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="STYLES/signup.css">
</head>

<body>
    <h1>Signup Page</h1>
    <div class="signup">
        <form id="signup" method="get" action="login.php">
            <label for="Uname"><b>User Name</b></label>
            <input type="text" name="Uname" id="Uname" placeholder="Username" required>

            <label for="emai"><b>Email</b></label>
            <input type="email" name="email" id="email" placeholder="email" required>

            <label for="Pass"><b>Password</b></label>
            <input type="password" name="Pass" id="Pass" placeholder="Password" required>

            <input type="button" name="sign" id="sign" value="Signup">
            
        </form><br>
        <button class="login-btn" onclick="location.href='';">Already have an account? Login</button>
    </div>
</body>

</html>