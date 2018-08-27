<?php
$servername = "sql206.hostlibre.ml";
$username = "teolo_22018124";
$password = "sajago99";
$dbname = "teolo_22018124_DB1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
