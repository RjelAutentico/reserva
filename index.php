<?php include("db.php") ?>

<?php include("includes/header.php")?>


<div class="container p-4">
    
    <div class="row">

        <div class="col-md-4">

        <div class="card card-body">
            <form action="save_task.php" method="POST">

                <div class="form-group">
                    <input type="text" name="rut_usuario" class="form-control" 
                    placeholder="Rut" autofocus>
                </div>
                
                <div class="form-group">
                    <textarea name="cod_rol" rows="2" class="form-control"
                    placeholder="Codigo de Rol  (1: Administrador 2: Conserje 3: Residente)"></textarea>

                </div>

                <div class="form-group">
                    <textarea name="nombre_per" rows="2" class="form-control"
                    placeholder="Nombre"></textarea>

                </div>

                <div class="form-group">
                    <textarea name="apellido_per" rows="2" class="form-control"
                    placeholder="Apellido"></textarea>

                </div>
                
                <div class="form-group">
                    <textarea name="telefono_per" rows="2" class="form-control"
                    placeholder="Telefono (Sin +56)"></textarea>

                </div>
                
                <div class="form-group">
                    <textarea name="num_domicilio" rows="2" class="form-control"
                    placeholder="Numero de Domicilio"></textarea>

                </div>
                
                <input type="submit" class="btn btn-success btn-block" 
                name="save_task" value="Guardar Usuario">


            </form>
        </div>

        </div>


        <div class="col-md-8">

         </div>

    </div>

</div>


<?php include("includes/footer.php")?>


