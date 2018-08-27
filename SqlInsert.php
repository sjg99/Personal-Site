<?php
include 'SqlConn.php';

$sql = "INSERT INTO User (`Username`, `Email`, `Password`, `BirthDate`, `Position`, `Status`, `DocumentID`, `Cellphone`, `Address`) VALUES ('".$_POST["Username"]."','".$_POST["Email"]."','".$_POST["Password"]."','".$_POST["BirthDate"]."','".$_POST["Position"]."','Active','".$_POST["DocumentID"]."','".$_POST["Cellphone"]."','".$_POST["Address"]."')";

if ($conn->query($sql) === TRUE) {
    header("Refresh:0; url:Database.php");        
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

