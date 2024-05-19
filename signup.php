<?php
if(isset($_POST["sign"])){
    $username = trim($_POST["Uname"]);
    $password = trim($_POST["Pass"]);
    $email = trim($_POST["email"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <style>
        * {
            font-family: Arial, sans-serif;
            font-size: 18px;
        }
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #43cea2, #185a9d);
            color: white;
        }
        .container {
            width: 420px;
            margin: 50px auto 100px auto;
            padding: 40px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h1 {
            font-size: 25px;
            margin-top: 70px;
            text-align:center;
            color: black;
        }
        label {
            color: #555;
            font-size: 16px;
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: calc(100% - 16px);
            height: 40px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 0 8px;
            margin-bottom: 20px;
        }
        #sign {
            margin-top: 10px;
            width: 100%;
            height: 40px;
            border: none;
            border-radius: 5px;
            padding: 7px;
            color: #fff;
            background-color: #007bff;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        #sign:hover {
            background-color: #0056b3;
        }
        span {
            color: #555;
            font-size: 16px;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .login-btn {
            width: 100%;
            height: 40px;
            border: none;
            border-radius: 5px;
            padding: 7px;
            color: #fff;
            background-color: #28a745;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .login-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Signup Page</h1>
    <div class="container">
        <form id="signup" method="post" action="">
            <label for="Uname"><b>User Name</b></label>
            <input type="text" name="Uname" id="Uname" placeholder="Username" required>

            <label for="email"><b>Email</b></label>
            <input type="email" name="email" id="email" placeholder="Email" required>

            <label for="Pass"><b>Password</b></label>
            <input type="password" name="Pass" id="Pass" placeholder="Password" required>

            <input type="submit" name="sign" id="sign" value="Signup">
        </form>
        <br>
        <button class="login-btn" onclick="location.href='login.php';">Already have an account? Login</button>
    </div>
</body>
</html>
