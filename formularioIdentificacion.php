<?php

include('conexion.php');
$conexion=conectar();

$clave=$_POST['clave'];
$puesto=$_POST['puesto'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$fecha=$_POST['fecha'];
$edad=$_POST['edad'];
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

$sql="insert identificacion(clave, puesto, nombre, direccion, fecha, edad, estadocivil, telefono, nivelacademico) 
values('$clave', '$puesto','$nombre','$direccion','$fecha','$edad','$estadocivil','$telefono','$nivelacademico')";
$registro=mysqli_query($conexion,$sql);
if(!$registro)
{
echo"
<script language='javascript'>
alert('ERROR AL GUARDAR DATOS, REVISA TUS DATOS')
window.location='formularioIdentificacion.html'
</script>";
exit();
}
else
{
echo"
<script language='javascript'>
alert('DATOS GUARDADOS CORRECTAMENTE')
window.location='formularioDocumentos.html'
</script>";
}
?>