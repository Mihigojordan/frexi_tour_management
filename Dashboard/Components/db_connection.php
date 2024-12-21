<?php
// Database credentials
$servername = "localhost"; // Your server name
$dbname = "frexiltd"; // Your database name
$dbuser = "root"; // Your database username
$dbpass = ""; // Your database password

// Create a global connection
$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
