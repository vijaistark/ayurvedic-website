<?php
// Database connection settings
$servername = "localhost";   // Your database server (usually 'localhost')
$username = "root";          // Your database username
$password = "";              // Your database password (if any, otherwise leave it empty)
$dbname = "ayurvedic_db";    // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
