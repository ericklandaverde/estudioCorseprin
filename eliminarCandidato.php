<?php
include ("conexion.php");
$conexion=Conectar();

$clave=$_POST['clave'];

$sql="DELETE FROM identificacion WHERE id_rfc='$clave'";
$registros = mysqli_query($conexion,$sql);

$sqlD="DELETE FROM documentos WHERE id_rfc='$clave'";
$registrosD = mysqli_query($conexion,$sqlD);

$sqlL="DELETE FROM laboral WHERE id_rfc='$clave'";
$registrosL = mysqli_query($conexion,$sqlL);

$sqlR="DELETE FROM referencias WHERE id_rfc='$clave'";
$registrosR = mysqli_query($conexion,$sqlR);

$sqlEstudios="DELETE FROM academicaEstudios WHERE id_rfc='$clave'";
$registrosEstudios = mysqli_query($conexion,$sqlEstudios);

$sqlCursos="DELETE FROM academicaCursos WHERE id_rfc='$clave'";
$registrosCursos = mysqli_query($conexion,$sqlCursos);

	$sqlIng="DELETE FROM economicoIngresos WHERE id_rfc='$clave'";
	$registrosIng = mysqli_query($conexion,$sqlIng);
	$sqlEgr="DELETE FROM economicoEgresos WHERE id_rfc='$clave'";
	$registrosEgr = mysqli_query($conexion,$sqlEgr);
	$sqlRes="DELETE FROM economicoResumen WHERE id_rfc='$clave'";
	$registrosRes = mysqli_query($conexion,$sqlRes);
	$sqlCre="DELETE FROM economicoCreditos WHERE id_rfc='$clave'";
	$registrosCre = mysqli_query($conexion,$sqlCre);
	$sqlSeg="DELETE FROM economicoSeguro WHERE id_rfc='$clave'";
	$registrosSeg = mysqli_query($conexion,$sqlSeg);
	$sqlAct="DELETE FROM economicoActivos WHERE id_rfc='$clave'";
	$registrosAct = mysqli_query($conexion,$sqlAct);

$sqlDatos="DELETE FROM familiarDatos WHERE id_rfc='$clave'";
$registrosDatos = mysqli_query($conexion,$sqlDatos);

$sqlActividades="DELETE FROM familiarActividades WHERE id_rfc='$clave'";
$registrosActividades = mysqli_query($conexion,$sqlActividades);
 
if(!$registros && $registrosD && $registrosL && $sqlR)
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