<?php

include('conexion.php');
$conexion=conectar();

session_start();
$clave= $_POST['clave'];

$nombre= $_POST['nombre'];
$ocupacion= $_POST['ocupacion'];
$tipo=$_POST['tipo'];
$tiempo=$_POST['tiempo'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$comentarios=$_POST['comentarios'];

$nombreDos=$_POST['nombre_2'];
$ocupacionDos=$_POST['ocupacion_2'];
$tipoDos=$_POST['tipo_2'];
$tiempoDos=$_POST['tiempo_2'];
$direccionDos=$_POST['direccion_2'];
$telefonoDos=$_POST['telefono_2'];
$comentariosDos=$_POST['comentarios_2'];

$sql="insert referencias(id_rfc, nombre, ocupacion, tipo, tiempo, direccion, telefono, comentarios, nombreDos, ocupacionDos, tipoDos, tiempoDos, direccionDos, telefonoDos, comentariosDos) 
values('$clave','$nombre','$ocupacion','$tipo','$tiempo','$direccion','$telefono','$comentarios','$nombreDos','$ocupacionDos','$tipoDos','$tiempoDos','$direccionDos','$telefonoDos','$comentariosDos')";
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
    alert('DATOS GUARDADOS CORRECTAMENTE')
    </script>";
}
?>