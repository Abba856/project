<?php
// login.php
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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    //$dbUsername = "example_user";
    //$dbPassword = "example_password";

    // Check if the username 
    $checkExistingUserQuery = "SELECT * FROM students WHERE username = ?";
    $stmt = $conn->prepare($checkExistingUserQuery);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    $query = "SELECT * FROM `students` WHERE username = '$username' AND passsword = '$password'";
    $result_query = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    $count_query = mysqli_num_rows($result);

if ($count_query != 0) 
	{

	$sessionemail = $row['username'];
	$_SESSION['login_user']= $sessionemail;
    header("Location: home.php");
	exit();
	} 
else {
		    echo '<script>alert("Incorrect Credentials Entered"); location.replace(document.referrer);</script>';
	}
}
?>
