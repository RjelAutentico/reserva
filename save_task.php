<?php

include("db.php"); 

if (isset($_POST['save_task'])){
    $rut_usuario = $_POST['rut_usuario'];
    $cod_rol = 3;
    $nombre_per = $_POST['nombre_per'];
    $apellido_per = $_POST['apellido_per'];
    $telefono_per = $_POST['telefono_per'];
    $num_domicilio = $_POST['num_domicilio'];

    


    $query = "INSERT INTO usuario(rut_usuario, cod_rol, nombre_per, apellido_per, telefono_per, num_domicilio) 
    VALUES ('$rut_usuario', '$cod_rol', '$nombre_per', '$apellido_per', '$telefono_per', '$num_domicilio')";
    
    /*$result = mysqli_query($conn, $query);*/

    if (!$rut_usuario || !$nombre_per || !$apellido_per || !$telefono_per || !$num_domicilio) {
        die("Query Failed");
    }



    $_SESSION['message'] = 'Usuario Guardado Correctamente';
    $_SESSION['message_type'] = 'success';

    header("Location: index.php");


}

?>