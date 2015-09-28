<?php
	include('conexion.php');
	$conexion=conectar();

	$clave=$_POST['clave'];
	$puesto=$_POST['puesto'];
	$nombre=$_POST['nombre'];
	$direccion=$_POST['direccion'];
	$fecha=$_POST['fecha'];
	$edad=$_POST['edad'];
	$estadocivil=$_POST['estadocivil'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	$nivelacademico=$_POST['nivelacademico'];

	/*$conexionsql=mssql_connect() or
	  die("Error de conexión.");
	mssql_select_db( 'examen') or
	  die("Error de selección de base de datos.");
	mssql_query("insert empleados(clave_emp, nombre, email, empresa, ciudad, salario_base) values('$clave','$nombre','$email','$empresa','$ciudad','$salario'") or
	  die("Error SQL");
	mssql_close($conexionsql);*/

	$sql="insert identificacion(clave, puesto, nombre, direccion, fecha, edad, estadocivil, telefono, email, nivelacademico) 
	values('$clave','$puesto','$nombre','$direccion','$fecha','$edad','$estadocivil','$telefono','email','$nivelacademico')";
	$registro=mysqli_query($conexion,$sql);
	if(!$registro)
	{
	echo"
	<script language='javascript'>
	alert('ERROR AL GUARDAR DATOS')
	window.location='formularioDocumentos.html'
	</script>";
	exit();
	}
	else
	{
	echo"
	<script language='javascript'>
	alert('DATOS GUARDADOS CORRECTAMENTE')
	window.location='formularioLaboral.html'
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
							<li><a href="formularioIdentificacion.html">Comenzar...</a></li>
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
					 <p><label>REVISION DE DOCUMENTOS</label></p>
					 <p>CANDIDATO: <?php echo $clave ?></p>
						 <p>Enlace rapido atras <a href="http://estudiocorseprin.pe.hu/formularioIdentificacion.html">Atras </a></p>
						 <p>Enlace rapido adelante <a href="http://estudiocorseprin.pe.hu/formularioLaboral.html">Adelante </a></p>
					</div>
				  </div>
			  </div>

	  		<div class="row">

	  			<div class="col-md-offset-1 col-md-10">
				<form action="formularioDocumentos.php" method="post" class="form-horizontal" role="form">

				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <label>Actas de registro civil: </label>
					  <label>Nacimiento:              </label>
					    <input type="text" class="form-control" id="inputClave" placeholder="Clave" name="clave" required value={'<?php echo $clave ?>'}>
					    <input type="radio" name="nacimiento" value="Si" placeholder="Selecciona una opcion" checked required>Si
					    <input type="radio" name="nacimiento" value="No" placeholder="Selecciona una opcion" required>No
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <label>Matrimonio:              </label>
					    <input type="radio" name="matrimonio" value="Si" placeholder="Selecciona una opcion" checked required>Si
                        <input type="radio" name="matrimonio" value="No" placeholder="Selecciona una opcion" required>No
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						<label>Identificacion peronal  </label>
					  <input type="text" class="form-control" id="inputClave" placeholder="Documento" name="documento" required>
					  <input type="text" class="form-control" id="inputClave" placeholder="Folio" name="folio" required>
					  <input type="text" class="form-control" id="inputClave" placeholder="Vigencia" name="vigencia" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						<label>Seguridad social  </label>
					  <input type="text" class="form-control" id="inputClave" placeholder="IMMS" name="imms" required>
					  <input type="text" class="form-control" id="inputClave" placeholder="R.F.C" name="clave" required>
					  <input type="text" class="form-control" id="inputClave" placeholder="CURP" name="curp" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					<input type="submit" id="insertar" value="SIGUIENTE..." name="guardar" class="btn btn-theme btn-lg btn-block">
                    <input type="reset" id="cancelar" value="CANCELAR" name="cancelar" class="btn btn-theme btn-lg btn-block">
                    <button type="button" onClick="window.location='formularioIdentificacion.html'" class="btn btn-theme btn-lg btn-block">Regresar</button>
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