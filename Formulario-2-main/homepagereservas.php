<?php 
    include("conexion.php");
    date_default_timezone_set("America/Santiago");
    $date=date("Y-m-d H:i");
    if(isset($_GET['rut'])){ 
    $rut_u=$_GET['rut'];
    }
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Formulario de Reserva</title>
  <link rel="stylesheet" href="estilo.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/b36d8c9019.js" crossorigin="anonymous"></script>
</head>
<body>

    <header>
        <nav>
            <a href="homepage.php"  class="btn btn-info">Inicio</a>
            <a href="vreserva.php?rut=<?php echo  $rut_u?>"  class="btn btn-info">Mis reservas</a>
            
        </nav>
    </header>
    <br>
  <?php if(isset($_SESSION['mensaje'])){?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    <?php echo $_SESSION['mensaje'] ?>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php session_unset();}?>

  <form class="form-reserva" action="crud/guardar.php?rut=<?php echo  $rut_u?>" method="POST">
    <h4>Hacer Reserva</h4>
    <select class="controls" name="espacio">
                        <option disabled selected="">Seleccione un espacio común</option>
                        <option value="11">Piscina</option>
                        <option value="12">Quincho</option>
                        <option value="13">Gimnasio</option>
                        <option value="14">Sala de juegos</option>

</select>
    <p> Ingrese fecha y hora de inicio de la reserva:</p>
    <input class="controls" type="datetime-local" min="<?php echo $date?>" name="Fecha_inicio" >
    <p> Ingrese fecha y hora de termino de la reserva:</p> 
    <input class="controls" type="datetime-local" min="<?php echo $date?>" name="Fecha_Termino">

    <input  type="submit" class="boton" name="save" value="Enviar">

</form>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>