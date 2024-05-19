<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        * {
            font-family: Arial, sans-serif;
            font-size: 18px;
        }
        body {
            background: linear-gradient(to right, #43cea2, #185a9d);
            color: white;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
        }
        .login {
            width: 420px;
            margin: 50px auto 100px auto;
            padding: 40px;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 25px;
            margin-top: 70px;
            text-align: center;
            color:black;
        }
        label {
            color: #555;
            font-size: 16px;
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 16px);
            height: 40px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 0 8px;
            margin-bottom: 20px;
        }
        #log {
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
        #log:hover {
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
        .signup-btn {
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
        .signup-btn:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <h1>Login Page</h1>
    <div class="login">
        <form id="login" method="post" action="login.php">
            <label for="Uname"><b>User Name</b></label>
            <input type="text" name="Uname" id="Uname" placeholder="Username" required>

            <label for="Pass"><b>Password</b></label>
            <input type="password" name="Pass" id="Pass" placeholder="Password" required>

            <input type="checkbox" id="check">
            <span>Remember me</span>

            <input type="submit" name="log" id="log" value="Login">
            
            <br><br>
            <a href="#">Forgot Password</a>
        </form>
        <br>
        <button class="signup-btn" onclick="location.href='signup.php';">Don't have an account? Sign Up</button>
    </div>
</body>
</html>
