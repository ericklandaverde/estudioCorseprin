<?php
	include('conexion.php');
	$conexion=conectar();

	$clave=$_POST['clave'];
	$nacimiento=$_POST['nacimiento'];
	$matrimonio=$_POST['matrimonio'];
	$documento=$_POST['documento'];
	$folio=$_POST['folio'];
	$vigencia=$_POST['vigencia'];
	$imms=$_POST['imms'];
	$rfc=$_POST['rfc'];
	$curp=$_POST['curp'];

	$sql="insert identificacion(id_rfc, nacimiento, matrimonio, documento, folio, vigencia, imms, rfc, curp) 
	values('$clave','$nacimiento','$matrimonio','$documento','$folio','$vigencia','$imms','$rfc','$curp')";
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
					 <p><label>HISTORIAL LABORAL</label></p>
					 <p>CANDIDATO: <label><?php echo $clave; ?></label></p>
					 	 <p>Enlace rapido atras <a href="http://estudiocorseprin.pe.hu/formularioDocumentos.php">Atras </a></p>
						 <p>Enlace rapido adelante <a href="http://estudiocorseprin.pe.hu/formularioReferencias.php">Adelante </a></p>
					</div>
				  </div>
			  </div>

	  		<div class="row">
                <div class="col-md-offset-1 col-md-10">

				<form action="formularioReferencias.php" method="post" class="form-horizontal" role="form">
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="text" class="form-control" id="inputClave" placeholder="Clave" name="clave" required>	
					  <input type="text" class="form-control" id="inputClave" placeholder="Ultimo empleo" name="ultimo" required>
					  <input type="text" class="form-control" id="inputClave" placeholder="Giro" name="giro" required>
					  <input type="tel" class="form-control" id="inputClave" placeholder="Telefono" name="telefono" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="text" class="form-control" id="inputClave" placeholder="Puesto desempeñado" name="puesto" required>
					  <input type="date" class="form-control" id="inputClave" placeholder="Fecha de Ingreso" name="fechaIngreso" required>
					  <input type="date" class="form-control" id="inputClave" placeholder="Fecha de Baja" name="fechaBaja" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="text" class="form-control" id="inputClave" placeholder="Antiguedad" name="puesto" required>
					  <input type="number" class="form-control" id="inputClave" placeholder="Sueldo Inicial" name="fechaIngreso" required>
					  <input type="number" class="form-control" id="inputClave" placeholder="Sueldo Final" name="fechaBaja" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="text" class="form-control" id="inputClave" placeholder="Jefe Inmediato" name="jefe" required>
					  <input type="text" class="form-control" id="inputClave" placeholder="Puesto" name="puestoJefe" required>
					  <input type="text" class="form-control" id="inputClave" placeholder="Motivo de separacion" name="motivo" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					<input type="submit" id="insertar" value="SIGUIENTE..." name="guardar" class="btn btn-theme btn-lg btn-block">
                    <input type="reset" id="cancelar" value="CANCELAR" name="cancelar" class="btn btn-theme btn-lg btn-block">
                    <button type="button" onClick="window.location='formularioDocumentos.html'" class="btn btn-theme btn-lg btn-block">Regresar</button>
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