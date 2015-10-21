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

	$parentesco1=$_POST['parentesco1'];
	$nombre1=$_POST['nombre1'];
	$edad1=$_POST['edad1'];
	$ocupacion1=$_POST['ocupacion1'];
	$depende1=$_POST['depende1'];

	$parentesco2=$_POST['parentesco2'];
	$nombre2=$_POST['nombre2'];
	$edad2=$_POST['edad2'];
	$ocupacion2=$_POST['ocupacion2'];
	$depende2=$_POST['depende2'];

	$parentesco3=$_POST['parentesco3'];
	$nombre3=$_POST['nombre3'];
	$edad3=$_POST['edad3'];
	$ocupacion3=$_POST['ocupacion3'];
	$depende3=$_POST['depende3'];
		
	$sqlDatos="insert familiarDatos(id_rfc, parentesco, nombre, edad, ocupacion, depende, parentesco1, nombre1, edad1, ocupacion1, depende1, parentesco2, nombre2, edad2, ocupacion2, depende2, parentesco3, nombre3, edad3, ocupacion3, depende3) 
	values('$clave','$parentesco','$nombre','$edad','$ocupacion','$depende','$parentesco1','$nombre1','$edad1','$ocupacion1','$depende1','$parentesco2','$nombre2','$edad2','$ocupacion2','$depende2','$parentesco3','$nombre3','$edad3','$ocupacion3','$depende3')";
	
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
	$deporteDos=$_POST['deporte1'];
	$lugarDos=$_POST['lugar1'];
	$frecuenciaDos=$_POST['frecuencia1'];
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
		window.location='../formularioInvSocialFamiliar.php'
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

