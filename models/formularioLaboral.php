<?php
	include('conexion.php');
	$conexion=conectar();

	$clave=$_POST['clave'];
	$nacimiento=$_POST['nacimiento'];
	$matrimonio=$_POST['matrimonio'];
	$documento=$_POST['documento'];
	$folio=$_POST['folio'];
	$vigencia=$_POST['vigencia'];
	$imss=$_POST['imss'];
	$rfc=$_POST['rfc'];
	$curp=$_POST['curp'];

	$sql="insert documentos(id_rfc, nacimiento, matrimonio, documento, folio, vigencia, imss, rfc, curp) 
	values('$clave','$nacimiento','$matrimonio','$documento','$folio','$vigencia','$imss','$rfc','$curp')";
	$registro=mysqli_query($conexion,$sql);
	if(!$registro)
	{
		echo"
		<script language='javascript'>
		alert('ERROR AL GUARDAR DATOS')
		window.location='formularioDocumentos.php'
		</script>";
		exit();
		}
		else
		{
		echo"
		<script language='javascript'>
		alert('DATOS GUARDADOS CORRECTAMENTE')
		</script>";
	}
?>