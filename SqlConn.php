<?php
$servername = "localhost";
$username = "root";
$password = "sajago99";
$dbname = "DB1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM User";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["ID"]. " - Username: " . $row["Username"]. " - Email: " . $row["Email"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
