<?php
// MySQL database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "realtor";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if it doesn't exist
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully\n";
} else {
    echo "Error creating database: " . $conn->error . "\n";
}

// Select the created database
$conn->select_db($dbname);

// SQL query to create customers table
$users = "
    CREATE TABLE IF NOT EXISTS users (
        id INT AUTO_INCREMENT PRIMARY KEY,
        names VARCHAR(100),
        image TEXT NULL,
        email VARCHAR(255),
        passwords VARCHAR(255),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )
";

if ($conn->query($users) === TRUE) {
    //echo "Table Users created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
?>