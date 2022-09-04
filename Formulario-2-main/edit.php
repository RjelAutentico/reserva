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
?>


<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="">
                    <div class="form-group">
                        <input type="text" name="Rut Usuario" value="<?php echo $rut_usuario; ?>"
                        class="form-control" placeholder="Actualizar Rut">
                    </div>
                    <div class="form-group">
                        <textarea name="Nombre" rows="2" class="form-control" placeholder="Actualizar Nombre"><?php echo $nombre_per; ?></textarea>
                    </div>
                    <button class="btn-success" name="update">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include("includes/footer.php") ?>