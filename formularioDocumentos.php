<?php

include('conexion.php');
$conexion=conectar();

$nacimiento=$_POST['nacimiento'];
$matrimonio=$_POST['matrimonio'];
$documento=$_POST['documento'];
$folio=$_POST['folio'];
$vigencia=$_POST['vigencia'];
$imms=$_POST['imms'];
$rfc=$_POST['rfc'];
$curp=$_POST['curp'];

/*$conexionsql=mssql_connect() or
  die("Error de conexión.");
mssql_select_db( 'examen') or
  die("Error de selección de base de datos.");
mssql_query("insert empleados(clave_emp, nombre, email, empresa, ciudad, salario_base) values('$clave','$nombre','$email','$empresa','$ciudad','$salario'") or
  die("Error SQL");
mssql_close($conexionsql);*/

$sql="insert documentos(nacimiento, matrimonio, documento, folio, vigencia, imms, rfc, curp) 
values('$nacimiento','$matrimonio','$documento','$folio','$vigencia','$imms','$rfc','$curp')";
$registro=mysqli_query($conexion,$sql);
if(!$registro)
{
echo"
<script language='javascript'>
alert('ERROR AL GUARDAR DATOS, PROBABLE CLAVE REPETIDA')
window.location='formularioDocumentos.html'
</script>";
exit();
}
else
{
echo"
<script language='javascript'>
alert('DATOS GUARDADOS CORRECTAMENTE')
window.location='index.html'
</script>";
}
?>