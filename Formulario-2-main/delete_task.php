<?php
    include("conexion.php");

    // if(isset($_GET['rut_usuario'])) {
    //     $id = $_GET['rut_usuario'];
    //     $query = "DELETE FROM usuarios WHERE rut_usuario = '$id'";
    //     $result = mysqli_query($conn, $query);
    //     if (!$result)
    //     {
    //         die("Fallo en eliminar");
    //     }

    //     $_SESSION['message'] = 'Se removio con exito al usuario';
    //     $_SESSION['message_type'] = 'danger';
    //     header('Location: ../formulariousuario.php');
    // }

    $id_rut=$_GET['id'];

    $consulta = mysqli_query ($con, "DELETE FROM usuarios where rut_usuario = '$id_rut'");

    if($consulta==1){ ?>
    <script type="text/javascript">
        alert("Usuario Eliminado");
        window.location.href="formulariousuario.php?rut=<?php echo $id_rut ?>";
    </script>'; <?php

    }else{
        ?>        
 
 <script type="text/javascript">
        alert("No se pudo eliminar usuario");
        window.location.href="formulariousuario.php?rut=<?php echo $id_rut ?>";
    </script>'; <?php
    }

?>