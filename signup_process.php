<?php
// signup_process.php
session_start();
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve user input from the form
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];


    // Perform basic validation (you can enhance this based on your requirements)
    if (empty($fullname) ||empty($username) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo '<script>alert("All fields are required. Please fill out the form completely"); location.replace(document.referrer);</script>';
        exit();
    }

    // Check if the passwords match
    if ($password !== $confirmPassword) {
        echo '<script>alert("Password and Confirm Password do not match."); location.replace(document.referrer);</script>';
        exit();
    }

    // Your database connection settings
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPass = '';
    $dbName = 'feedback_db'; // Replace with your actual database name

    // Create a database connection
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    // Check for a connection error
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the username or email already exists in the database
    $checkExistingUserQuery = "SELECT * FROM students WHERE username = ? OR email = ?";
    $stmt = $conn->prepare($checkExistingUserQuery);
    $stmt->bind_param("ss", $username, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    if ($result->num_rows > 0) {
        echo '<script>alert("Username or email already exists. Please choose a different one."); location.replace(document.referrer);</script>';
        exit();
    }

    // Insert the user data into the database
    $insertUserQuery = "INSERT INTO students (fullname, username, email, `password`) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($insertUserQuery);
    $stmt->bind_param("ssss", $fullname, $username, $email, $password);

    if ($stmt->execute()) {
        echo '<script>alert("Signup successful. You can now login"); location.replace(document.referrer);</script>';
        header("Location: login.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    // Redirect to the signup page if the form is not submitted
    header("Location: signup.php");
    exit();
}
?>
