<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - feedback system</title>
    <link rel="stylesheet" href="./css/custom.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1em 0;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 2em auto;
            padding: 1em;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #333;
        }

        h1{
            color: #fff;
        }

        p {
            line-height: 1.6;
        }

        form {
            margin-top: 1em;
        }

        label {
            display: block;
            margin-bottom: 0.5em;
        }

        input {
            width: 100%;
            padding: 0.5em;
            margin-bottom: 1em;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
<header>
    <center>
    <img id="headerImg" src="./images/bg2.jpg" alt="background"><br/>
    </center>
        <h1>online student feedback system</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="signup.php">Signup</a>
        <a href="login.php">Login</a>
        <a href="admin/index.php">Admin</a>
        <!-- Add more navigation links as needed -->
    </nav>
    <div class="container">
        <h2>Signup</h2>
        <p>Create an account to access</p>

        <form action="signup_process.php" method="post">
            <label for="fullname">Fullname:</label>
            <input type="text" id="fullname" name="fullname" required>

            <label for="username">Username (reg no):</label>
            <input type="text" title="username or reg. number" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <input type="submit" value="Signup">
        </form>
    </div>
    <footer>
        <a href="#">&COPY;Copyright All reserved by IVEI Project Students 2023</a>
    </footer>
</body>
</html>
