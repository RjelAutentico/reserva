<?php

include("conexion.php"); 

if (isset($_POST['save_task'])){
    $rut_usuario = $_POST['rut_usuario'];
    /*$cod_rol = 3;*/
    $nombre_per = $_POST['nombre_per'];
    $apellido_per = $_POST['apellido_per'];
    $telefono_per = $_POST['telefono_per'];
    $num_domicilio = $_POST['num_domicilio'];

    if (!$rut_usuario || !$nombre_per || !$apellido_per || !$telefono_per || !$num_domicilio) { ?>
        <script type="text/javascript">
            alert("Complete todos los campos");
            window.location.href="formulariousuario.php?rut=<?php echo $rut_usuario ?>";
        </script>'; <?php    }
    else{
        $cod_rol = 3;
        $query = "INSERT INTO usuarios(rut_usuario, cod_rol, nombre_per, apellido_per, telefono_per, num_domicilio) 
        VALUES ('$rut_usuario', '$cod_rol', '$nombre_per', '$apellido_per', '$telefono_per', '$num_domicilio')";
    
        $result = mysqli_query($con, $query);

    }



    if($result==1){ ?>
        <script type="text/javascript">
            alert("Usuario Registrado");
            window.location.href="formulariousuario.php?rut=<?php echo $rut_usuario ?>";
        </script>'; <?php
    

}
/**//**/

}
?>

