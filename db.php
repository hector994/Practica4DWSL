<?php
$enlace = mysqli_connect(
    "localhost",
    "root",
    "",
    "estudiante"
);

if ($enlace) {
    echo "Connection succes";
} else {
    echo "fail connection";
}

?>