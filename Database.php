<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database Manager</title>
</head>

<body>
    <?php
    include 'SqlConn.php';
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
    <form action="SqlInsert.php" method="post">
    <p>
        <label>Username:</label>
        <input type="text" name="Username">
    </p>
    <p>
        <label>Email:</label>
        <input type="email" name="Email">
    </p>
    <p>
        <label>Password:</label>
        <input type="password" name="Password">
    </p>
    <p>
        <label>Birth Date:</label>
        <input type="date" name="BirthDate">
    </p>
    <p>
        <label>Position:</label>
        <input type="text" name="Position">
    </p>    
    <p>
        <label>Document ID:</label>
        <input type="text" name="DocumentID">
    </p>
    <p>
        <label>Cellphone:</label>
        <input type="number" name="Cellphone">
    </p>
    <p>
        <label>Address:</label>
        <input type="text" name="Address">
    </p>
    <button type="submit">Insert</button>
</form>
</body>

</html>