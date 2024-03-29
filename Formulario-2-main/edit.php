<?php 
    include("conexion.php");

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $consult = "SELECT * FROM usuarios WHERE rut_usuario = '$id'";

        $result = mysqli_query($con, $consult);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $rut_usuario = $row['rut_usuario'];
            $nombre_per = $row['nombre_per'];
            $apellido_per = $row['apellido_per'];
            $telefono_per = $row['telefono_per'];
            $num_domicilio = $row['num_domicilio'];

        }




    }


    if(isset($_POST['update'])) {
        $rut_usuario = $_POST['rut_usuario'];
        $nombre_per = $_POST['nombre_per'];
        $apellido_per = $_POST['apellido_per'];
        $telefono_per = $_POST['telefono_per'];
        $num_domicilio = $_POST['num_domicilio'];

        $consult = "UPDATE usuarios set nombre_per = '$nombre_per', apellido_per = '$apellido_per', 
        telefono_per = '$telefono_per',  num_domicilio = '$num_domicilio' WHERE rut_usuario = '$rut_usuario'";
        $resultado = mysqli_query($con, $consult);

        $_SESSION['message'] = 'Se actualizo correctamente';
        $_SESSION['message_type'] = 'warning';
        header("Location: formulariousuario.php");
    }
?>





<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form class="FORM" action="edit.php" method="POST" >
                    <div class="form-group">
                        <input type="text" name="rut_usuario" disabled value="<?php echo $rut_usuario ?>"
                        class="form-control" placeholder="Actualizar Rut">
                    </div>
                   
                    <div class="form-group">
                        <input name="nombre_per" rows="2" class="form-control" placeholder="Actualizar Nombre" value="<?php echo $nombre_per ?>"></input>
                    </div>
                                       
                    <div class="form-group">
                        <input name="apellido_per" rows="2" class="form-control" placeholder="Actualizar Apellido" value="<?php echo $apellido_per ?>"></input>
                    </div>
                                       
                    <div class="form-group">
                        <input name="telefono_per" rows="2" class="form-control" placeholder="Actualizar Telefono" value="<?php echo $telefono_per ?>"></input>
                    </div>
                                       
                    <div class="form-group">
                        <input name="num_domicilio" rows="2" class="form-control" placeholder="Actualizar Domicilio" value="<?php echo $num_domicilio ?>"></input>
                    </div>
                    
                    <button type="submit" class="btn btn-success" name="update">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>