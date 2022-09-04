<?php 
    include("conexion.php");

    if(isset($_GET['rut_usuario'])) {
        $id = $_GET['rut_usuario'];
        $query = "SELECT * FROM usuarios WHERE rut_usuario = $id";

        $result = mysqli_query($conn, $query);
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
        $rut_usuario = $_GET['rut_usuario'];
        $nombre_per = $_POST['nombre_per'];
        $apellido_per = $_POST['apellido_per'];
        $telefono_per = $_POST['telefono_per'];
        $num_domicilio = $_POST['num_domicilio'];

        $query = "UPDATE usuarios set rut_usuario = '$rut_usuario', nombre_per = '$nombre_per', apellido_per = '$apellido_per', telefono_per = '$telefono_per',  num_domicilio = '$num_domicilio' WHERE rut_usuario = $rut_usuario";
        mysqli_query($conn, $query);
        header("Location: formulariousuario.php")
    }
?>


<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="edit.php?id=<?php echo $_GET['rut_usuario']; ?>" method="POST" >
                    <div class="form-group">
                        <input type="text" name="Rut Usuario" value="<?php echo $rut_usuario; ?>"
                        class="form-control" placeholder="Actualizar Rut">
                    </div>
                   
                    <div class="form-group">
                        <textarea name="Nombre" rows="2" class="form-control" placeholder="Actualizar Nombre"><?php echo $nombre_per; ?></textarea>
                    </div>
                                       
                    <div class="form-group">
                        <textarea name="Apellido" rows="2" class="form-control" placeholder="Actualizar Apellido"><?php echo $apellido_per; ?></textarea>
                    </div>
                                       
                    <div class="form-group">
                        <textarea name="Telefono" rows="2" class="form-control" placeholder="Actualizar Telefono"><?php echo $telefono_per; ?></textarea>
                    </div>
                                       
                    <div class="form-group">
                        <textarea name="Domicilio" rows="2" class="form-control" placeholder="Actualizar Domicilio"><?php echo $num_domicilio; ?></textarea>
                    </div>
                    
                    <button class="btn btn-success" name="update">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>