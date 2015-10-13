<?php
	include('conexion.php');
	$conexion=conectar();
    
    //economicoEgresos
    $clave=$_POST['clave'];
	$parentesco=$_POST['parentesco'];
	$nombre=$_POST['nombre'];
	$edad=$_POST['edad'];
	$ocupacion=$_POST['ocupacion'];
	$depende=$_POST['depende'];
	$parentesco=$_POST['parentescoDos'];
	$nombre=$_POST['nombreDos'];
	$edad=$_POST['edadDos'];
	$ocupacion=$_POST['ocupacionDos'];
	$depende=$_POST['dependeDos'];
	$parentesco=$_POST['parentescoTres'];
	$nombre=$_POST['nombreTres'];
	$edad=$_POST['edadTres'];
	$ocupacion=$_POST['ocupacionTres'];
	$depende=$_POST['dependeTres'];
	$parentesco=$_POST['parentescoCuatro'];
	$nombre=$_POST['nombreCuatro'];
	$edad=$_POST['edadCuatro'];
	$ocupacion=$_POST['ocupacionCuatro'];
	$depende=$_POST['dependeCuatro'];
	
	$sqlDatos="insert economicoEgresos(id_rfc, parentesco, nombre, edad, ocupacion, depende, parentescoDos, nombreDos, edadDos, ocupacionDos, dependeDos, parentescoTres, nombreTres, edadTres, ocupacionTres, dependeTres, parentescoCuatro, nombreCuatro, edadCuatro, ocupacionCuatro, dependeCuatro) 
	values('$clave','$parentesco','$nombre','$edad','$ocupacion','$depende','$parentescoDos','$nombreDos','$edadDos','$ocupacionDos','$dependeDos','$parentescoTres','$nombreTres','$edadTres','$ocupacionTres','$dependeTres','$parentescoCuatro','$nombreCuatro','$edadCuatro','$ocupacionCuatro','$dependeCuatro')";
	$registroDatos=mysqli_query($conexion,$sqlDatos);
   
	
	//$registroI $registroE $registroR $registroC $registroS $registroA
	if(!$registroDatos && !$registroE)
	{
		echo"
		<script language='javascript'>
		alert('ERROR AL GUARDAR DATOS')
		window.location='formularioInvSocialFamiliar.php'
		</script>";
		exit();
		}
		else
		{
		echo"
		<script language='javascript'>
		alert('ESTUDIO FINALIZADO')window.location='index.php'
		</script>";
	}
?>

