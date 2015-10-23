<?php

include('../conexion.php');
$conexion=conectar();

session_start();
$clave= $_POST['clave'];

$nivel= $_POST['nivel'];
$ano= $_POST['ano'];
$documento=$_POST['documento'];

$nivel1= $_POST['nivel1'];
$ano1= $_POST['ano1'];
$documento1=$_POST['documento1'];

$nivel2= $_POST['nivel2'];
$ano2= $_POST['ano2'];
$documento2=$_POST['documento2'];

$nivel3= $_POST['nivel3'];
$ano3= $_POST['ano3'];
$documento3=$_POST['documento3'];


$sql="insert academicaEstudios(id_rfc, nivel, ano, documento, nivel1, ano1, documento1, nivel2, ano2, documento2, nivel3, ano3, documento3) 
values('$clave','$nivel','$ano','$documento','$nivel1','$ano1','$documento1','$nivel2','$ano2','$documento2','$nivel3','$ano3','$documento3')";

$registro=mysqli_query($conexion,$sql);

$curso=$_POST['curso'];
$duracion=$_POST['duracion'];
$resibido=$_POST['resibido'];

$curso1=$_POST['curso1'];
$duracion1=$_POST['duracion1'];
$resibido1=$_POST['resibido1'];

$curso2=$_POST['curso2'];
$duracion2=$_POST['duracion2'];
$resibido2=$_POST['resibido2'];

$curso3=$_POST['curso3'];
$duracion3=$_POST['duracion3'];
$resibido3=$_POST['resibido3'];

$sqlC="insert academicaCursos(id_rfc, curso, duracion, resibido, curso1, duracion1, resibido1, curso2, duracion2, resibido2, curso3, duracion3, resibido3) 
values('$clave','$curso','$duracion','$resibido','$curso1','$duracion1','$resibido1','$curso2','$duracion2','$resibido2','$curso3','$duracion3','$resibido3')";

$registroC=mysqli_query($conexion,$sqlC);

if(!$registro && !$registroC)
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
    alert('DATOS DE REFERENCIAS GUARDADOS CORRECTAMENTE')
    window.location='../formularioEconomico.php'
    </script>";
}
?>