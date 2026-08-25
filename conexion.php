<?php

$conexion = mysqli_connect(
    "localhost",
    "root",
    "",
    "the_clothes_club"
);

if (!$conexion) {
    die("Error de conexión");
}

?>
