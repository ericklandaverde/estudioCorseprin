<?php

include('../conexion.php');
$conexion=conectar();

session_start();
$clave= $_POST['clave'];

$nombre= $_POST['nombre'];
$ocupacion= $_POST['ocupacion'];
$tipo=$_POST['tipo'];
$tiempo=$_POST['tiempo'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$comentarios=$_POST['comentario'];

$nombre2=$_POST['nombre2'];
$ocupacion2=$_POST['ocupacion2'];
$tipo2=$_POST['tipo2'];
$tiempo2=$_POST['tiempo2'];
$direccion2=$_POST['direccion2'];
$telefono2=$_POST['telefono2'];
$comentario2=$_POST['comentario2'];

$nombre3=$_POST['nombre3'];
$ocupacion3=$_POST['ocupacion3'];
$tipo3=$_POST['tipo3'];
$tiempo3=$_POST['tiempo3'];
$direccion3=$_POST['direccion3'];
$telefono3=$_POST['telefono3'];
$comentario3=$_POST['comentario3'];

$sql="insert referencias(id_rfc, nombre, ocupacion, tipo, tiempo, direccion, telefono, comentario, 
                                 nombre2, ocupacion2, tipo2, tiempo2, direccion2, telefono2, comentario2,
                                 nombre3, ocupacion3, tipo3, tiempo3, direccion3, telefono3, comentario3) 
values('$clave','$nombre','$ocupacion','$tipo','$tiempo','$direccion','$telefono','$comentarios',
                '$nombre2','$ocupacion2','$tipo2','$tiempo2','$direccion2','$telefono2','$comentario2',
                '$nombre3','$ocupacion3','$tipo3','$tiempo3','$direccion3','$telefono3','$comentario3')";
$registro=mysqli_query($conexion,$sql);
if(!$registro)
{
    echo"
    <script language='javascript'>
    alert('ERROR AL GUARDAR DATOS')
    window.location='formularioReferencias.php'
    </script>";
    exit();
}
else
{
    echo"
    <script language='javascript'>
    alert('DATOS DE REFERENCIAS GUARDADOS CORRECTAMENTE')
    window.location='../formularioEconomico.php'
    </script>";
}
?>