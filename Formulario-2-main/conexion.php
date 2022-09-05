<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "reservas";

$con = mysqli_connect($server, $user, $pass, $db);

if (!$con) {
    die("Error en la conexion: " . mysqli_connect_error());
}
