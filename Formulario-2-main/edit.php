<?php 
    include("conexion.php");

    if(isset($_GET['rut_usuario'])) {
        $id = $_GET['rut_usuario'];
        $query = "SELECT * FROM usuarios WHERE rut_usuario = $id";

        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            echo 'puedes editar';
        }


    }
?>
