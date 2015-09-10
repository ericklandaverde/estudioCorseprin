<?php
include ("conexion.php");
$conexion=Conectar();
$clave=$_POST['clave'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$empresa=$_POST['empresa'];
$ciudad=$_POST['ciudad'];
$salario=$_POST['salario'];

$SQL="UPDATE empleados set clave_emp='$clave', nombre='$nombre', email='$email', empresa='$empresa', ciudad='$ciudad', salario_base='$salario' WHERE clave_emp='$clave' ";
$registros = mysql_query($SQL, $conexion);
if(!$registros)
{
echo "ERROR AL CAMBIAR LOS DATOS";
exit();
}
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('LOS DATOS HAN SIDO MODIFICADOS')
window.location='cambios.html' 
</script>
";
?>
