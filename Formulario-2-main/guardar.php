<?php 
    include("../conexion.php");

    $espac = $_POST['espacio'];
    $fechaini = $_POST['Fecha_inicio'];
    $fechater = $_POST['Fecha_Termino'];

        if($espac==0 || !$fechaini || !$fechater){
            die("debe llenar los campos");

        }

        /* separar fecha*/    
        $f=explode('T',$fechaini);
        $y=$f[0]."-".$f[1];
        $fi=explode('-',$y);
        $fii=$fi[2]."-".$fi[1]."-".$fi[0]."-".$fi[3];
        $fiii=explode(':',$fii);
        $fiiii=$fiii[0]."-".$fiii[1];
        $fa=explode('-',$fiiii);
           /* separar fecha*/ 
        $s=explode('T',$fechater);
        $t=$s[0]."-".$s[1];
        $ff=explode('-',$t);
        $fff=$ff[2]."-".$ff[1]."-".$ff[0]."-".$ff[3];
        $ffff=explode(':',$fff);
        $fffff=$ffff[0]."-".$ffff[1];
        $fb=explode('-',$fffff);

        if($fa[0]>$fb[0]){
            if($fa[1]==$fb[1]){
                die("el dia de inicio debe ser menor o igual a el dia de termino");
                }
            }else{
                  if($fa[1]>$fb[1]){
                        die("el mes de inicio debe ser menor o igual a el dia de termino");
                        }
                else{
                        if($fa[0]==$fb[0]){
                         if($fa[3]>$fb[3]){
                         die("la hora de inicio debe ser menor a la hora de termino");
                       }
                }
            }}
        



        
    
    
 
    $insertar="INSERT INTO reserva(cod_espacioC,Fecha_inicio,Fecha_fin)VALUES('$espac','$fechaini','$fechater')";

    


    
    
    
        if (mysqli_query($con,$insertar)) {

            $_SESSION['mensaje']= 'Reserva guardada';
                header('Location:../homepagereservas.php');
            } else {
              echo "Error: " . $insertar . "<br>" . mysqli_error($con);
          }
    
          mysqli_close($con); 
    
    
?>