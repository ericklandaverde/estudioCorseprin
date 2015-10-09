<?php
include ("conexion.php");
$conexion=Conectar();

$clave=$_POST[clave];

$sql="DELETE * FROM identificacion WHERE id_rfc='$clave'";
$registros = mysql_query($sql, $conexion);
if(!$registros)
{
echo "ERROR AL ELIMINAR";
exit();
}
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('CANDIDATO ELIMINADO')
window.location='consultas.php' 
</script>
";
?>