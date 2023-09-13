<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO alumno (nombre, DUE) VALUES ('$username','$password')";

    if ($enlace->query($sql)) {
        echo "new record created successfully";
    }else {
        echo "Error: ".$sql."<br>".$conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="POST">
        <label for="username">Usuario</label><br>
        <input type="text" name="username" id=""><br>
        <label for="username">Password</label><br>
        <input type="password" name="password" id=""><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>