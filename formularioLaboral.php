<?php 
session_start();
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
					 <p>CANDIDATO: <label><?php echo $_SESSION["clave"]; ?></label></p>
<!-- 					 	 <p>Enlace rapido atras <a href="http://estudiocorseprin.pe.hu/formularioDocumentos.php">Atras </a></p>
						 <p>Enlace rapido adelante <a href="http://estudiocorseprin.pe.hu/formularioReferencias.php">Adelante </a></p> -->
					</div>
				  </div>
			  </div>

	  		<div class="row">
                <div class="col-md-offset-1 col-md-10">

				<form action="models/formularioReferencias.php" method="post" class="form-horizontal" role="form">
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="hidden" class="form-control" id="inputClave" placeholder="Clave" name="clave" required value="<?php echo $_SESSION["clave"]; ?>">
					  <label>Ultimo empleo</label>	
					  <input type="text" class="form-control" id="inputClave" placeholder="Ultimo empleo" name="ultimoEmpleo" required>
					  <label>Giro</label>
					  <input type="text" class="form-control" id="inputClave" placeholder="Giro" name="giro" required>
					  <label>Telefono:</label>
					  <input type="tel" class="form-control" id="inputClave" placeholder="Telefono" name="telefono" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <label>Puesto desempeñado:</label>
					  <input type="text" class="form-control" id="inputClave" placeholder="Puesto desempeñado" name="puesto" required>
					  <label>Fecha de Ingreso:</label>
					  <input type="date" class="form-control" id="inputClave" placeholder="Fecha de Ingreso" name="fechaIngreso" min="1960-12-31" max="2015-12-31" required>
					  <label>Fecha de baja:</label>
					  <input type="date" class="form-control" id="inputClave" placeholder="Fecha de Baja" name="fechaBaja" min="1960-12-31" max="2015-12-31" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <label>Antiguedad</label>
					  <input type="text" class="form-control" id="inputClave" placeholder="Antiguedad" name="antiguedad" required>
					  <label>Sueldo Inicial</label>
					  <input type="number" class="form-control" id="inputClave" placeholder="Sueldo Inicial" name="sueldoInicial" required>
					  <label>Sueldo Final</label>
					  <input type="number" class="form-control" id="inputClave" placeholder="Sueldo Final" name="sueldoFinal" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <label>Jefe Inmediato</label>
					  <input type="text" class="form-control" id="inputClave" placeholder="Jefe Inmediato" name="jefe" required>
					  <label>Puesto del jefe</label>
					  <input type="text" class="form-control" id="inputClave" placeholder="Puesto del jefe" name="puestoJefe" required>
					  <label>Motivo de separacion</label>
					  <input type="text" class="form-control" id="inputClave" placeholder="Motivo de separacion" name="motivo" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					<input type="submit" id="insertar" value="SIGUIENTE..." name="guardar" class="btn btn-theme btn-lg btn-block">
                    <input type="reset" id="cancelar" value="CANCELAR" name="cancelar" class="btn btn-theme btn-lg btn-block">
                    <button type="button" onClick="window.location='formularioDocumentos.php'" class="btn btn-theme btn-lg btn-block">Regresar</button>
					</div>
				  </div>
				</form>
	        </div>
			
				
	  		</div>
			<div class="row mar-top30 ">
				<div class="col-md-offset-2 col-md-8">
					<h5>Tienes dudas contactanos por nuestras redes sociales.</h5>
					<ul class="social-network">
						<li><a href="https://www.facebook.com/CorseprinSeguridadRH">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="http://corseprin.com.mx/">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
						</span></a>
						</li>
						<li><a href="https://twitter.com/corseprin">
						<span class="fa-stack fa-2x">
							<i class="fa fa-circle fa-stack-2x"></i>
							<i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
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