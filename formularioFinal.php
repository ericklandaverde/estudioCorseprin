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
	$parentescoDos=$_POST['parentescoDos'];
	$nombreDos=$_POST['nombreDos'];
	$edadDos=$_POST['edadDos'];
	$ocupacionDos=$_POST['ocupacionDos'];
	$dependeDos=$_POST['dependeDos'];
	$parentescoTres=$_POST['parentescoTres'];
	$nombreTres=$_POST['nombreTres'];
	$edadTres=$_POST['edadTres'];
	$ocupacionTres=$_POST['ocupacionTres'];
	$dependeTres=$_POST['dependeTres'];
	$parentescoCuatro=$_POST['parentescoCuatro'];
	$nombreCuatro=$_POST['nombreCuatro'];
	$edadCuatro=$_POST['edadCuatro'];
	$ocupacionCuatro=$_POST['ocupacionCuatro'];
	$dependeCuatro=$_POST['dependeCuatro'];
	
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
		window.location='index.html'
		</script>";
	}
?>

