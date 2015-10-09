<?php
include ("conexion.php");
$conexion=Conectar();

$clave=$_POST['clave'];

$sql="DELETE FROM identificacion WHERE id_rfc='$clave'";
$registros = mysqli_query($conexion,$sql);

$sqlD="DELETE FROM documentos WHERE id_rfc='$clave'";
$registrosD = mysqli_query($conexion,$sqlD);

$sqlR="DELETE FROM referencias WHERE id_rfc='$clave'";
$registrosR = mysqli_query($conexion,$sqlR);

// $sql="DELETE FROM identificacion WHERE id_rfc='$clave'";
// $registros = mysqli_query($conexion,$sql);

// $sql="DELETE FROM identificacion WHERE id_rfc='$clave'";
// $registros = mysqli_query($conexion,$sql);

// $sql="DELETE FROM identificacion WHERE id_rfc='$clave'";
// $registros = mysqli_query($conexion,$sql);
 
if(!$registros)
{
echo "<script language='JavaScript' type='text/JavaScript'>
alert('ERROR AL ELIMINAR CANDIDATO')
window.location='consultas.php' 
</script>
";
exit();
}
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('CANDIDATO ELIMINADO')
window.location='consultas.php' 
</script>
";
?>