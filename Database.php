<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/main.css">
    <link href="https://fonts.googleapis.com/css?family=Do+Hyeon|Fjalla+One|Metal+Mania" rel="stylesheet">
    <title>Database Manager</title>
</head>

<body>
    <Section class="TSel">
        <h1>SQL Select</h1>
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
    </section>
    <section class="FIns">
    <h1>SQL Insert</h1>
    <form action="SqlInsert.php" method="post">
    <p>       
        <input type="text" name="Username" placeholder="Username">
    </p>
    <p>
       
        <input type="email" name="Email" placeholder="Email">
    </p>
    <p>
        
        <input type="password" name="Password" placeholder="Password">
    </p>
    <p>
        
        <input type="date" name="BirthDate" placeholder="BirthDate">
    </p>
    <p>
        
        <input type="text" name="Position" placeholder="Position">
    </p>    
    <p>
        
        <input type="text" name="DocumentID" placeholder="DocumentID">
    </p>
    <p>
        
        <input type="number" name="Cellphone" placeholder="Cellphone">
    </p>
    <p>
        
        <input type="text" name="Address" placeholder="Address">
    </p>
    <button type="submit">Insert</button>    
</form>
</section>
<section class="Links">
        <a class="ND" href="index.html">Go Back</a>
    </section>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>