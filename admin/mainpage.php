<!DOCTYPE html>
<html lang="en" >

<head>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <meta charset="UTF-8">
    <title>Feedback</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/custom.css">
    <style>
      a{
        color: #fff;
        text-decoration: none;
        padding: 0.5em 1em;
        margin: 0 0.5em;
        border-radius: 5px;
        background-color: #333;
      }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    table, th, td {
        border: 1px solid #ddd;
    }

    th, td {
        padding: 12px;
        text-align: left;
    }

    th {
        background-color: #333;
        color: #fff;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #ddd;
    }
    </style>
</head>
<body>
        <header>
            <center>
              <img id="headerImg" src="../images/bg2.jpg" alt="background"><br/>
            </center>
              <h1>online student feedback system</h1>
        </header>

        <?php
session_start();
require 'config.php';

if (isset($_SESSION['login_user'])) {
    $userLoggedIn = $_SESSION['login_user'];

    $query = "SELECT students.fullname, students.username, feedback.course, feedback.comments, feedback.satisfaction 
              FROM feedback
              INNER JOIN students ON feedback.id = students.id";

    $result = mysqli_query($con, $query);

    if (!$result) {
        // Display error message and exit if the query fails
        die("Error in SQL query: " . mysqli_error($con));
    }

    // Proceed with displaying the table
    echo "<table border='1'>
            <tr>
            <th>Student Name</th>
            <th>Username</th>
            <th>Course</th>
            <th>Comments</th>
            <th>Satisfaction</th>
            </tr>";

    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>" . $row['fullname'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['course'] . "</td>";
        echo "<td>" . $row['comments'] . "</td>";
        echo "<td>" . $row['satisfaction'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    //header("Location: index.php");
}
?>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
            <br/>
            <center>
            <a href="logout.php">Logout</a>
            </center>
            <br/>
      <footer>
        <a href="#">&COPY;Copyright All reserved by IVEI Project Students 2023</a>
    </footer>
</body>

</html>
