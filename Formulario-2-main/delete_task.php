<?php
    include("conexion.php");

    if(isset($_GET['rut_usuario'])) {
        $id = $_GET['rut_usuario'];
        $query = "DELETE FROM usuarios WHERE rut_usuario = $id";
        $result = mysqli_query($conn, $query);

    }
?>