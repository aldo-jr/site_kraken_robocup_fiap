<?php
$servername = "db";
$username = "root";
$password = "root";

// Create connection
$conn = new mysqli($servername, $username, $password, 'site_kraken');

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
