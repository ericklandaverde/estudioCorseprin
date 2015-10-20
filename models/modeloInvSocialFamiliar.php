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

	$parentesco4=$_POST['parentesco4'];
	$nombre4=$_POST['nombre4'];
	$edad4=$_POST['edad4'];
	$ocupacion4=$_POST['ocupacion4'];
	$depende4=$_POST['depende4'];

	$parentesco5=$_POST['parentesco5'];
	$nombre5=$_POST['nombre5'];
	$edad5=$_POST['edad5'];
	$ocupacion5=$_POST['ocupacion5'];
	$depende5=$_POST['depende5'];

	$parentesco6=$_POST['parentesco6'];
	$nombre6=$_POST['nombre6'];
	$edad6=$_POST['edad6'];
	$ocupacion6=$_POST['ocupacion6'];
	$depende6=$_POST['depende6'];

	$parentesco7=$_POST['parentesco7'];
	$nombre7=$_POST['nombre7'];
	$edad7=$_POST['edad7'];
	$ocupacion7=$_POST['ocupacion7'];
	$depende7=$_POST['depende7'];

	$parentesco8=$_POST['parentesco8'];
	$nombre8=$_POST['nombre8'];
	$edad8=$_POST['edad8'];
	$ocupacion8=$_POST['ocupacion8'];
	$depende8=$_POST['depende8'];

	$parentesco9=$_POST['parentesco9'];
	$nombre9=$_POST['nombre9'];
	$edad9=$_POST['edad9'];
	$ocupacion9=$_POST['ocupacion9'];
	$depende9=$_POST['depende9'];

		
	$sqlDatos="insert familiarDatos(id_rfc, parentesco, nombre, edad, ocupacion, depende, 
		                                    parentesco1, nombre1, edad1, ocupacion1, depende1, 
		                                    parentesco2, nombre2, edad2, ocupacion2, depende2, 
		                                    parentesco3, nombre3, edad3, ocupacion3, depende3,
		                                    parentesco4, nombre4, edad4, ocupacion4, depende4,
		                                    parentesco5, nombre5, edad5, ocupacion5, depende5,
		                                    parentesco6, nombre6, edad6, ocupacion6, depende6,
		                                    parentesco7, nombre7, edad7, ocupacion7, depende7,
		                                    parentesco8, nombre8, edad8, ocupacion8, depende8,
		                                    parentesco9, nombre9, edad9, ocupacion9, depende9) 
	values('$clave','$parentesco','$nombre','$edad','$ocupacion','$depende',
		            '$parentesco1','$nombre1','$edad1','$ocupacion1','$depende1',
		            '$parentesco2','$nombre2','$edad2','$ocupacion2','$depende2',
		            '$parentesco3','$nombre3','$edad3','$ocupacion3','$depende3',
		            '$parentesco4','$nombre4','$edad4','$ocupacion4','$depende4',
		            '$parentesco5','$nombre5','$edad5','$ocupacion5','$depende5',
		            '$parentesco6','$nombre6','$edad6','$ocupacion6','$depende6',
		            '$parentesco7','$nombre7','$edad7','$ocupacion7','$depende7',
		            '$parentesco8','$nombre8','$edad8','$ocupacion8','$depende8',
		            '$parentesco9','$nombre9','$edad9','$ocupacion9','$depende9')";
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

