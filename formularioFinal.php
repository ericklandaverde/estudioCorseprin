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
	
	$sqlDatos="insert familiarDatos(id_rfc, parentesco, nombre, edad, ocupacion, depende, parentescoDos, nombreDos, edadDos, ocupacionDos, dependeDos, parentescoTres, nombreTres, edadTres, ocupacionTres, dependeTres, parentescoCuatro, nombreCuatro, edadCuatro, ocupacionCuatro, dependeCuatro) 
	values('$clave','$parentesco','$nombre','$edad','$ocupacion','$depende','$parentescoDos','$nombreDos','$edadDos','$ocupacionDos','$dependeDos','$parentescoTres','$nombreTres','$edadTres','$ocupacionTres','$dependeTres','$parentescoCuatro','$nombreCuatro','$edadCuatro','$ocupacionCuatro','$dependeCuatro')";
	$registroDatos=mysqli_query($conexion,$sqlDatos);

	$clave=$_POST['clave'];
	$religion=$_POST['religion'];
	$sociales=$_POST['sociales'];
	$comunitarios=$_POST['comunitarios'];
	$museos=$_POST['museos'];
	$teatro=$_POST['teatro'];
	$culturales=$_POST['culturales'];
	$arqueologicas=$_POST['arqueologicas'];
	$deporte=$_POST['deporte'];
	$lugar=$_POST['lugar'];
	$frecuencia=$_POST['frecuencia'];
	$deporteDos=$_POST['deporteDos'];
	$lugarDos=$_POST['lugarDos'];
	$frecuenciaDos=$_POST['frecuenciaDos'];
	$vacaciones=$_POST['vacaciones'];
	$publicas=$_POST['publicas'];
	$naturales=$_POST['naturales'];
	$diversiones=$_POST['diversiones'];
	$cine=$_POST['cine'];
   
    $sqlActividades="insert economicoEgresos(id_rfc, religion, sociales, comunitarios, museos, teatro, culturales, arqueologicas, deporte, lugar, frecuencia, deporteDos, lugarDos, frecuenciaDos, vacaciones, publicas, naturales, diversiones, cine) 
	values('$clave','$religion','$sociales','$comunitarios','$museos','$teatro','$culturales','$arqueologicas','$deporte','$lugar','$frecuencia','$deporteDos','$lugarDos','$frecuenciaDos','$vacaciones','$publicas','$naturales','$diversiones','$cine')";
	$registroActividades=mysqli_query($conexion,$sqlActividades);

	if(!$registroDatos && !$registroActividades)
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
		alert('ESTUDIO FINALIZADO')
		window.location='index.html'
		</script>";
	}
?>

