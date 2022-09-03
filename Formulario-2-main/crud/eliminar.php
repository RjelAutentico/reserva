
<?php
include("../conexion.php");

$id_r=$_GET['id'];

$rut_g=$_GET['rut'];

$consulta = mysqli_query ($con, "DELETE FROM reserva where Id='$id_r'");

if($consulta==1){
	header("location:../vreserva.php?rut=$rut_g");
}
?>

