<?php
    include("conexion.php");


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