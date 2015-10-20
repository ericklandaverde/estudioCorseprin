<?php
	include('../conexion.php');
	$conexion=conectar();
    
    //economicoEgresos
    session_start();
    $clave=$_POST['clave'];
	$parentesco=$_POST['parentesco'];
	$nombre=$_POST['nombre'];
	$edad=$_POST['edad'];
	$ocupacion=$_POST['ocupacion'];
	$depende=$_POST['depende'];
	$parentescoDos=$_POST['parentesco_1'];
	$nombreDos=$_POST['nombre_1'];
	$edadDos=$_POST['edad_1'];
	$ocupacionDos=$_POST['ocupacion_1'];
	$dependeDos=$_POST['depende_1'];
	$parentescoTres=$_POST['parentesco_2'];
	$nombreTres=$_POST['nombre_2'];
	$edadTres=$_POST['edad_2'];
	$ocupacionTres=$_POST['ocupacion_2'];
	$dependeTres=$_POST['depende_2'];
	$parentescoCuatro=$_POST['parentesco_3'];
	$nombreCuatro=$_POST['nombre_3'];
	$edadCuatro=$_POST['edad_3'];
	$ocupacionCuatro=$_POST['ocupacion_3'];
	$dependeCuatro=$_POST['depende_3'];
	
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
	$actividadA=$_POST['actividadA'];
    $frecuenciaA=$_POST['frecuenciaA'];
	$actividadB=$_POST['actividadB'];
    $frecuenciaB=$_POST['frecuenciaB'];
	$actividadC=$_POST['actividadC'];
	$frecuenciaC=$_POST['frecuenciaC'];
   
    $sqlActividades="insert familiarActividades(id_rfc, religion, sociales, comunitarios, museos, teatro, culturales, arqueologicas, deporte, lugar, frecuencia, deporteDos, lugarDos, frecuenciaDos, vacaciones, publicas, naturales, diversiones, cine, actividadA, frecuenciaA, actividadB, frecuenciaB, actividadC, frecuenciaC) 
	values('$clave','$religion','$sociales','$comunitarios','$museos','$teatro','$culturales','$arqueologicas','$deporte','$lugar','$frecuencia','$deporteDos','$lugarDos','$frecuenciaDos','$vacaciones','$publicas','$naturales','$diversiones','$cine','$actividadA','$frecuenciaA','$actividadB','$frecuenciaB','$actividadC','$frecuenciaC')";
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
		window.location='../index.html'
		</script>";
	}	
?>

