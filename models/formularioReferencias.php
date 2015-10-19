<?php
	include('conexion.php');
	$conexion=conectar();

	$clave=$_POST['clave'];
	$ultimoEmpleo=$_POST['ultimoEmpleo'];
	$giro=$_POST['giro'];
	$telefono=$_POST['telefono'];
	$puesto=$_POST['puesto'];
	$fechaIngreso=$_POST['fechaIngreso'];
	$fechaBaja=$_POST['fechaBaja'];
	$antiguedad=$_POST['antiguedad'];
	$sueldoInicial=$_POST['sueldoInicial'];
	$sueldoFinal=$_POST['sueldoFinal'];
	$jefe=$_POST['jefe'];
	$puestoJefe=$_POST['puestoJefe'];
	$motivo=$_POST['motivo'];

	$sql="insert laboral(id_rfc, ultimoEmpleo, giro, telefono, puesto, fechaIngreso, fechaBaja, antiguedad, sueldoInicial, sueldoFinal, jefe, puestoJefe, motivo) 
    values('$clave','$ultimoEmpleo','$giro','$telefono','$puesto','$fechaIngreso','$fechaBaja','$antiguedad','$sueldoInicial','$sueldoFinal','$jefe','$puestoJefe','$motivo')";
	$registro=mysqli_query($conexion,$sql);
	if(!$registro)
	{
		echo"
		<script language='javascript'>
		alert('ERROR AL GUARDAR DATOS')
		window.location='formularioLaboral.php'
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