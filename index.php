<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Book</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #43cea2, #185a9d);
            color: white;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            text-align: center;
            background: rgba(0, 0, 0, 0.5);
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        h1 {
            margin-bottom: 1rem;
        }
        p {
            margin-bottom: 1.5rem;
        }
        a {
            display: inline-block;
            margin: 0.5rem;
            padding: 0.75rem 1.5rem;
            color: white;
            text-decoration: none;
            border: 2px solid white;
            border-radius: 5px;
            transition: background 0.3s, color 0.3s;
        }
        a:hover {
            background: white;
            color: #185a9d;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Contact Book</h1>
        <p>Please login or register to continue.</p>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
    </div>
</body>
</html>
