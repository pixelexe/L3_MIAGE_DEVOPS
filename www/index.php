<?php
$servername = "miage-mariadb";
$username = "miage-user";
$password = "miage-pwd";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";