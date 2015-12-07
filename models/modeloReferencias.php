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
$comentario=$_POST['comentario'];

$nombre1=$_POST['nombre1'];
$ocupacion1=$_POST['ocupacion1'];
$tipo1=$_POST['tipo1'];
$tiempo1=$_POST['tiempo1'];
$direccion1=$_POST['direccion1'];
$telefono1=$_POST['telefono1'];
$comentario1=$_POST['comentario1'];

$nombre2=$_POST['nombre2'];
$ocupacion2=$_POST['ocupacion2'];
$tipo2=$_POST['tipo2'];
$tiempo2=$_POST['tiempo2'];
$direccion2=$_POST['direccion2'];
$telefono2=$_POST['telefono2'];
$comentario2=$_POST['comentario2'];

$sql="insert referencias(id_rfc, nombre, ocupacion, tipo, tiempo, direccion, telefono, 
    nombre1, ocupacion1, tipo1, tiempo1, direccion1, telefono1, 
    nombre2, ocupacion2, tipo2, tiempo2, direccion2, telefono2,
    nombre3, ocupacion3, tipo3, tiempo3, direccion3, telefono3) 
values('$clave','$nombre','$ocupacion','$tipo','$tiempo','$direccion','$telefono',
    '$nombre1','$ocupacion1','$tipo1','$tiempo1','$direccion1','$telefono1',
    '$nombre2','$ocupacion2','$tipo2','$tiempo2','$direccion2','$telefono2',
    '$nombre3','$ocupacion3','$tipo3','$tiempo3','$direccion3','$telefono3')";

$registro=mysqli_query($conexion,$sql);
if(!$registro)
{
    echo"
    <script language='javascript'>
    alert('ERROR AL GUARDAR DATOS')
    window.location='../formularioReferencias.php'
    </script>";
    exit();
}
else
{
    echo"
    <script language='javascript'>
    alert('DATOS DE REFERENCIAS ENVIADOS CORRECTAMENTE')
    window.location='../formularioAcademico.php'
    </script>";
}
?>