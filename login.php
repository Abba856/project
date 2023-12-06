<!-- login.html -->
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <link rel="stylesheet" href="./css/custom.css">

    <title>Login</title>
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
    <form action="loginconf.php" method="post">
        <label for="username">Username (reg no):</label>
        <input type="text" title="username or Reg. number" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
    <footer>
        <a href="#">&COPY;Copyright All reserved by IVEI Project Students 2023</a>
    </footer>
</body>
</html>