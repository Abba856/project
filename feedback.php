<?php
// Database connection settings
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'feedback_db'; // The name of the database you created

// Create a database connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

// Check for a connection error
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process the form data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $satisfaction = $_POST['view'];
    $comments = $_POST['comments'];
    $course = $_POST['course'];

    // Insert data into the database
    $sql = "INSERT INTO feedback (satisfaction, comments, course) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $satisfaction, $comments, $course);

    if ($stmt->execute()) {
        echo '<script>alert("Feedback submitted successfully."); location.replace(document.referrer);</script>';
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}

// Close the database connection
$conn->close();
?>
