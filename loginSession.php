<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM alumno WHERE nombre = '$username' AND DUE = '$password'";
    $result = $enlace->query($sql);
    if (mysqli_num_rows($result)>0) {
         while($row = $result->fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["nombre"]. "DUE" . $row["DUE"]. "<br>";
        }
        // echo "<prev>";
        //     print_r($result);
        // echo "</prev>";
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
    <form action="loginSession.php" method="POST">
        <label for="username">Usuario</label><br>
        <input type="text" name="username" id=""><br>
        <label for="username">Password</label><br>
        <input type="password" name="password" id=""><br>
        <button type="submit">Ingresar</button>
    </form>
</body>
</html>