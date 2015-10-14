<?php
include('conexion.php');
$conexion=conectar();

    //economicoIngresos
$clave=$_POST['clave'];
$personaUno=$_POST['personaUno'];
$montoUno=$_POST['montoUno'];
$personaDos=$_POST['personaDos'];
$montoDos=$_POST['montoDos'];
$personaTres=$_POST['personaTres'];
$montoTres=$_POST['montoTres'];
$totalIngresos=$_POST['totalIngresos'];

$sqlI="insert economicoIngresos(id_rfc, personaUno, montoUno, personaDos, montoDos, personaTres, montoTres, totalIngresos) 
values('$clave','$personaUno','$montoUno','$personaDos','$montoDos','$personaTres','$montoTres','$totalIngresos')";
$registroI=mysqli_query($conexion,$sqlI);

    //economicoEgresos
$clave=$_POST['clave'];
$personaUnoE=$_POST['personaUnoE'];
$montoUnoE=$_POST['montoUnoE'];
$personaDosE=$_POST['personaDosE'];
$montoDosE=$_POST['montoDosE'];
$personaTresE=$_POST['personaTresE'];
$montoTresE=$_POST['montoTresE'];
$personaCuatroE=$_POST['personaCuatroE'];
$montoCuatroE=$_POST['montoCuatroE'];
$personaCincoE=$_POST['personaCincoE'];
$montoCincoE=$_POST['montoCincoE'];
$personaSeisE=$_POST['personaSeisE'];
$montoSeisE=$_POST['montoSeisE'];
$personaSieteE=$_POST['personaSieteE'];
$montoSieteE=$_POST['montoSieteE'];
$personaOchoE=$_POST['personaOchoE'];
$montoOchoE=$_POST['montoOchoE'];
$totalEgresos=$_POST['totalEgresos'];

$sqlE="insert economicoEgresos(id_rfc, personaUnoE, montoUnoE, personaDosE, montoDosE, personaTresE, montoTresE, personaCuatroE, montoCuatroE, personaCincoE, montoCincoE, personaSeisE, montoSeisE, personaSieteE, montoSieteE, personaOchoE, montoOchoE, totalEgresos) 
values('$clave','$personaUnoE','$montoUnoE','$personaDosE','$montoDosE','$personaTresE','$montoTresE','$personaCuatroE','$montoCuatroE','$personaCincoE','$montoCincoE','$personaSeisE','$montoSeisE','$personaSieteE','$montoSieteE','$personaOchoE','$montoOchoE','$totalEgresos')";
$registroE=mysqli_query($conexion,$sqlE);

	//economicoResumen
$clave=$_POST['clave'];
$totalViven=$_POST['totalViven'];
$totalDependen=$_POST['totalDependen'];

$sqlR="insert economicoResumen(id_rfc, totalViven, totalDependen) 
values('$clave','$totalViven','$totalDependen')";
$registroR=mysqli_query($conexion,$sqlR);

	//economicoCreditos
$clave=$_POST['clave'];
$concepto=$_POST['concepto'];
$mensualidad=$_POST['mensualidad'];
$plazo=$_POST['plazo'];
$saldo=$_POST['saldo'];
$conceptoDos=$_POST['conceptoDos'];
$mensualidadDos=$_POST['mensualidadDos'];
$plazoDos=$_POST['plazoDos'];
$saldoDos=$_POST['saldoDos'];

$sqlC="insert economicoCreditos(id_rfc, concepto, mensualidad, plazo, saldo, conceptoDos, mensualidadDos, plazoDos, saldoDos) 
values('$clave','$concepto','$mensualidad','$plazo','$saldo','$conceptoDos','$mensualidadDos','$plazoDos','$saldoDos')";
$registroC=mysqli_query($conexion,$sqlC);

    //economicoSeguro
$clave=$_POST['clave'];
$vida=$_POST['vida'];
$montoS=$_POST['montoS'];
$medicos=$_POST['medicos'];
$montoDosS=$_POST['montoDosS'];
$automovil=$_POST['automovil'];
$montoTresS=$_POST['montoTresS'];
$accidentes=$_POST['accidentes'];
$montoCuatroS=$_POST['montoCuatroS'];

$sqlS="insert economicoSeguro(id_rfc, vida, montoS, medicos, montoDosS, automovil, montoTresS, accidentes, montoCuatroS) 
values('$clave','$vida','$montoS','$medicos','$montoDosS','$automovil','$montoTres','$accidentes','$montoCuatroS')";
$registroS=mysqli_query($conexion,$sqlS);

	//economicoActivos
$clave=$_POST['clave'];
$tipoPropiedad=$_POST['tipoPropiedad'];
$ubicacion=$_POST['ubicacion'];
$valorEstimadoT=$_POST['valorEstimadoT'];
$tipo=$_POST['tipo'];
$modelo=$_POST['modelo'];
$valorestimadoA=$_POST['valorestimadoA'];

$sqlA="insert economicoActivos(id_rfc, tipoPropiedad, ubicacion, valorEstimadoT, tipo, modelo, valorestimadoA) 
values('$clave','$tipoPropiedad','$ubicacion','$valorEstimadoT','$tipo','$modelo','$valorestimadoA')";
$registroA=mysqli_query($conexion,$sqlA);

	//$registroI $registroE $registroR $registroC $registroS $registroA
if(!$registroI && !$registroE && !$registroR && !$registroC && !$registroS && !$registroA )
{
	echo"
	<script language='javascript'>
	alert('ERROR AL GUARDAR DATOS')
	window.location='formularioEconomico.php'
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

<!DOCTYPE html>
<html>
<head>
	<title>Estudio SocioEconomico</title>
	<meta charset="utf-8" />
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- css -->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
	<script src="js/modernizr.custom.js"></script>
</head>

<body>
	<div class="menu-area">
		<div id="dl-menu" class="dl-menuwrapper">
			<button class="dl-trigger">Open Menu</button>
			<ul class="dl-menu">
				<li>
					<a href="index.html">Principal</a>
				</li>
				<li><a href="formularioIdentificacion.php">Comenzar...</a></li>
			</ul>
		</div><!-- /dl-menuwrapper -->
	</div>	

	<!-- Altas -->
	<section id="contact" class="home-section bg-white">
		<div class="container">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
						<h2>ESTUDIO SOCIOECONOMICO</h2>
						<p><label>INVESTIGACION SOCIAL Y FAMILIAR</label></p>
						<p>CANDIDATO: <label><?php echo $clave; ?></label></p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-offset-1 col-md-10">
					<form action="formularioFinal.php" method="post" class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-md-offset-2 col-md-8">
								<label> a) Datos Familiares (Personas con las que vive) </label>
								 <input type="hidden" class="form-control" id="inputClave" placeholder="Clave" name="clave" required value="<?php echo $clave; ?>">
								<fieldset>
                                <legend>Familiar Uno</legend>
								<table>
									<tr>
										<td><label>Parentesco</label></td>
										<td><label>Nombre:</label></td>
									</tr>
									<tr>
										<td>
											<select type="text" class="form-control" id="inputClave" placeholder="Parentesco" name="parentesco" required>
												<option selected value="">Seleccione un parentesco</option>
												<option value="Hijo(a)">Hijo(a)</option>
												<option value="Esposo(a)">Esposa(a)</option>
												<option value="Padres">Padres</option>
												<option value="Hermanos">Padres</option>
											</select>
										</td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Nombre" name="nombre" required></td>
									</tr>
									<tr>
										<td><label>Edad: </label></td>
										<td><label>Ocupacion: </label></td>
										<td><label>Depende economicamente: </label></td>
									</tr>
									<tr>
										<td><input type="number" class="form-control" id="inputClave" placeholder="Edad" name="edad" required></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Ocupacion" name="ocupacion" required></td>
										<td>
											<input type="radio" name="depende" value="Si" placeholder="Selecciona una opcion" checked required>Si
											<input type="radio" name="depende" value="No" placeholder="Selecciona una opcion" required>No
										</td>
									</tr>
								</table>
								</fieldset>
								<fieldset>
                                <legend>Familiar Dos</legend>
								<table>
									<tr>
										<td><label>Parentesco</label></td>
										<td><label>Nombre:</label></td>
									</tr>
									<tr>
										<td>
											<select type="text" class="form-control" id="inputClave" placeholder="Parentesco" name="parentescoDos" required>
												<option selected value="">Seleccione un parentesco</option>
												<option value="Hijo(a)">Hijo(a)</option>
												<option value="Esposo(a)">Esposa(a)</option>
												<option value="Padres">Padres</option>
												<option value="Hermanos">Padres</option>
											</select>
										</td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Nombre" name="nombreDos" required></td>
									</tr>
									<tr>
										<td><label>Edad: </label></td>
										<td><label>Ocupacion: </label></td>
										<td><label>Depende economicamente: </label></td>
									</tr>
									<tr>
										<td><input type="number" class="form-control" id="inputClave" placeholder="Edad" name="edadDos" required></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Ocupacion" name="ocupacionDos" required></td>
										<td>
											<input type="radio" name="dependeDos" value="Si" placeholder="Selecciona una opcion" checked required>Si
											<input type="radio" name="dependeDos" value="No" placeholder="Selecciona una opcion" required>No
										</td>
									</tr>
								</table>
								</fieldset>
								<fieldset>
                                <legend>Familiar Tres</legend>
								<table>
									<tr>
										<td><label>Parentesco</label></td>
										<td><label>Nombre:</label></td>
									</tr>
									<tr>
										<td>
											<select type="text" class="form-control" id="inputClave" placeholder="Parentesco" name="parentescoTres" required>
												<option selected value="">Seleccione un parentesco</option>
												<option value="Hijo(a)">Hijo(a)</option>
												<option value="Esposo(a)">Esposa(a)</option>
												<option value="Padres">Padres</option>
												<option value="Hermanos">Padres</option>
											</select>
										</td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Nombre" name="nombreTres" required></td>
									</tr>
									<tr>
										<td><label>Edad: </label></td>
										<td><label>Ocupacion: </label></td>
										<td><label>Depende economicamente: </label></td>
									</tr>
									<tr>
										<td><input type="number" class="form-control" id="inputClave" placeholder="Edad" name="edadTres" required></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Ocupacion" name="ocupacionTres" required></td>
										<td>
											<input type="radio" name="dependeTres" value="Si" placeholder="Selecciona una opcion" checked required>Si
											<input type="radio" name="dependeTres" value="No" placeholder="Selecciona una opcion" required>No
										</td>
									</tr>
								</table>
								</fieldset>
								<fieldset>
                                <legend>Familiar Cuatro</legend>
							    <table>
									<tr>
										<td><label>Parentesco</label></td>
										<td><label>Nombre:</label></td>
									</tr>
									<tr>
										<td>
											<select type="text" class="form-control" id="inputClave" placeholder="Parentesco" name="parentescoCuatro" required>
												<option selected value="">Seleccione un parentesco</option>
												<option value="Hijo(a)">Hijo(a)</option>
												<option value="Esposo(a)">Esposa(a)</option>
												<option value="Padres">Padres</option>
												<option value="Hermanos">Padres</option>
											</select>
										</td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Nombre" name="nombreCuatro" required></td>
									</tr>
									<tr>
										<td><label>Edad: </label></td>
										<td><label>Ocupacion: </label></td>
										<td><label>Depende economicamente: </label></td>
									</tr>
									<tr>
										<td><input type="number" class="form-control" id="inputClave" placeholder="Edad" name="edadCuatro" required></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Ocupacion" name="ocupacionCuatro" required></td>
										<td>
											<input type="radio" name="dependeCuatro" value="Si" placeholder="Selecciona una opcion" checked required>Si
											<input type="radio" name="dependeCuatro" value="No" placeholder="Selecciona una opcion" required>No
										</td>
									</tr>
									</fieldset>
								</table>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-2 col-md-8">
								<label> b) Actividades Sociales: </label>
								<table>
									<tr><label>¿Que religion profesa?</label></tr>
									<tr>
										<select type="text" class="form-control" id="inputClave" placeholder="Religion" name="religion" required>
												<option selected value="">Seleccione una opcion</option>
												<option value="Creyente">Creyente</option>
												<option value="Ateo">Ateo</option>
												<option value="Catolico">Catolico</option>
												<option value="Cristiano">Cristiano</option>
												<option value="Testigo de Jehová">Testigo de Jehová</option>
												<option value="Otra Religion">Otra Religion</option>
										</select>
									</tr>
									<tr>
										<td><label>Actividades<label></td>
										<td><label>Frecuencia Anual</label></td>
									</tr>
									<tr>
										<td><label>Eventos sociales (Familiares o amigos)<label></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="sociales" required></td>
									</tr>
									<tr>
										<td><label>Eventos sociales (Familiares o amigos)<label></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="comunitarios" required></td>
									</tr>
								</table><br>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-2 col-md-8">
								<label> c) Actividades Culturales: </label>
								<table>
									<tr>
										<td><label>Actividades<label></td>
										<td><label>Frecuencia Anual</label></td>
									</tr>
									<tr>
										<td><label>Museos: <label></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="museos" required></td>
									</tr>
									<tr>
										<td><label>Teatro: <label></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="teatro" required></td>
									</tr>
									<tr>
										<td><label>Festivales Culturales: <label></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="culturales" required></td>
									</tr>
									<tr>
										<td><label>Zonas arqueologicas: <label></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="arqueologicas" required></td>
									</tr>
								</table>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-2 col-md-8">
								<label> c) Actividades Deportivas: </label>
								<table>
									<tr>
										<td><label>Deporte<label></td>
										<td><label>Lugar</label></td>
										<td><label>Frecuencia</label></td>
									</tr>
									<tr>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Deporte" name="deporte" required></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Lugar" name="lugar" required></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia" name="frecuencia" required></td>
									</tr>
									<tr>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Deporte" name="deporteDos" required></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Lugar" name="lugarDos" required></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia" name="frecuenciaDos" required></td>
									</tr>
								</table><br>
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-offset-2 col-md-8">
								<label> e) Actividades Recreativas: </label>
								<table>
									<tr>
										<td><label>Actividad<label></td>
										<td><label>Frecuencia anual</label></td>
									</tr>
									<tr>
										<td><label>Vacaciones</label></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="vacaciones" required></td>
									</tr>
									<tr>
										<td><label>Plazas publicas</label></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="publicas" required></td>
									</tr>
									<tr>
										<td><label>Parques naturales</label></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="naturales" required></td>
									</tr>
									<tr>
										<td><label>Parques de diversiones</label></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="diversiones" required></td>
									</tr>
									<tr>
										<td><label>Cine</label></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="cine" required></td>
									</tr>
								</table>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-offset-2 col-md-8">
								<label> f)	Pasatiempos : </label>
								<table>
									<tr>
										<td><label>Actividad<label></td>
										<td><label>Frecuencia anual</label></td>
									</tr>
									<tr>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="actividadA" required></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="frecuenciaA" required></td>
									</tr>
									<tr>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="actividadB" required></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="frecuenciaB" required></td>
									</tr>
									<tr>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="actividadC" required></td>
										<td><input type="text" class="form-control" id="inputClave" placeholder="Frecuencia anual" name="frecuenciaC" required></td>
									</tr>
								</table>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-offset-2 col-md-8">
								<input type="submit" id="insertar" value="SIGUIENTE..." name="guardar" class="btn btn-theme btn-lg btn-block">
								<input type="reset" id="cancelar" value="CANCELAR" name="cancelar" class="btn btn-theme btn-lg btn-block">
								<!--  <button type="button" onClick="window.location='formularioEconomico.html'" class="btn btn-theme btn-lg btn-block">Regresar</button> -->	
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row mar-top30 ">
				<div class="col-md-offset-2 col-md-8">
					<h5>Tienes dudas contactanos por nuestras redes sociales.</h5>
					<ul class="social-network">
						<li><a href="#">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span></a>
						</li>
						<li><a href="#">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
							</span></a>
						</li>
						<li><a href="#">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
							</span></a>
						</li>
						<li><a href="#">
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-pinterest fa-stack-1x fa-inverse"></i>
							</span></a>
						</li>
					</ul>
				</div>				
			</div>

		</div>
	</section>  

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Copyright &copy;2015 <a href="http://corseprin.com.mx/">Corseprin </a></p>
					<p>Copyright &copy;2015 <a href="Login-ajax/index.php">INGRESAR AL SISTEMA</a></p>
				</div>
			</div>		
		</div>	
	</footer>

	<!-- js -->
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>

	</html>