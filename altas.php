<?php

include('conexion.php');
$conexion=conectar();

$clave=$_POST['clave'];
$puesto=$_POST['puesto'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$direccion=$_POST['direccion'];
$fecha=$_POST['fecha'];
$estadocivil=$_POST['estadocivil'];
$telefono=$_POST['telefono'];
$nivelacademico=$_POST['nivelacademico'];

/*$conexionsql=mssql_connect() or
  die("Error de conexión.");
mssql_select_db( 'examen') or
  die("Error de selección de base de datos.");
mssql_query("insert empleados(clave_emp, nombre, email, empresa, ciudad, salario_base) values('$clave','$nombre','$email','$empresa','$ciudad','$salario'") or
  die("Error SQL");
mssql_close($conexionsql);*/

$sql="insert identificacion(clave, puesto, nombre, email, direccion, fecha, estadocivil, telefono, nivelacademico) 
values('$clave','$puesto','$nombre','$email','$direccion','$fecha','$estadocivil','$telefono','$nivelacademico')";
$registro=mysql_query($sql,$conexion);
if(!$registro)
{
echo"
<script language='javascript'>
alert('ERROR AL GUARDAR DATOS, PROBABLE CLAVE REPETIDA')
window.location='altas.html'
</script>";
exit();
}
else
{
echo"
<script language='javascript'>
alert('DATOS GUARDADOS CORRECTAMENTE')
window.location='altas.html'
</script>";
}
?>