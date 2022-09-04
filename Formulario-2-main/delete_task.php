<?php
    include("conexion.php");

    if(isset($_GET['rut_usuario'])) {
        $id = $_GET['rut_usuario'];
        $query = "DELETE FROM usuarios WHERE rut_usuario = $id";
        $result = mysqli_query($conn, $query);
        if (!$result)
        {
            die("Fallo en eliminar")
        }

        $_SESSION['message'] = 'Se removio con exito al usuario'
        $_SESSION['message_type'] = 'danger';
        header("Location: formulariousuario.php")
    }
?>