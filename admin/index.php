<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Admin Login Form </title>
  <link rel="stylesheet" href="../css/custom.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../css/index.css">
</head>

<body>
<header>
    <center>
    <img id="headerImg" src="../images/bg2.jpg" alt="background"><br/>
    </center>
        <h1>online student feedback system</h1>
    </header>

    <nav>
        <a href="../index.php">Home</a>
        <a href="../signup.php">Signup</a>
        <a href="../login.php">Login</a>
        <a href="#">Admin</a>
        <!-- Add more navigation links as needed -->
    </nav>
  <div class="container">
  <h2>Admin Login</h2>
  <form action="checklogin.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" title="email" placeholder="username" name="email" />
    
    <label for="password">Password:</label>
    <input type="password" title="username" placeholder="password" name="password" />

    <input type="submit" name="login" value="Login">
  </form>
  </div>
  <footer>
        <a href="#">&COPY;Copyright All reserved by IVEI Project Students 2023</a>
    </footer>
</body>

</html>
