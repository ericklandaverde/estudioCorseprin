<?php
include ("conexion.php");
$conexion=Conectar();

$clave=$_POST[clave];

$SQL="delete from empleados where clave_emp='$clave'";
$registros = mysql_query($SQL, $conexion);
if(!$registros)
{
echo "ERROR AL ELIMINAR";
exit();
}
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('REGISTRO ELIMINADO')
window.location='bajas.html' 
</script>
";
?>