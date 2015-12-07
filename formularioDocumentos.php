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
					 <p><label>REVISION DE DOCUMENTOS</label></p>
					 <p>CANDIDATO: <label><?php echo $_SESSION["clave"]; ?></label></p>
						 <!-- <p>Enlace rapido atras <a href="http://estudiocorseprin.pe.hu/formularioIdentificacion.php">Atras </a></p>
						 <p>Enlace rapido adelante <a href="http://estudiocorseprin.pe.hu/formularioLaboral.php">Adelante </a></p> -->
					</div>
				  </div>
			</div>

	  		<div class="row">
               <div class="col-md-offset-1 col-md-10">
				<form action="models/modeloDocumentos.php" method="post" class="form-horizontal" role="form">
				  <label>Actas de registro civil: </label>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					    <input type="hidden" class="form-control" id="inputClave" placeholder="Clave" name="clave" required value="<?php echo $_SESSION["clave"]; ?>">
					    <div class="alert alert-info">
					    <label>Cuenta con documento de Nacimiento: </label>
					    <input type="radio" name="nacimiento" value="SI Cuenta con documento de nacimiento" placeholder="Selecciona una opcion" checked required>Si
					    <input type="radio" name="nacimiento" value="NO Cuenta con documento de nacimiento" placeholder="Selecciona una opcion" required>No
					    </div>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						<div class="alert alert-info">
					    <label>Cuenta con documento de Matrimonio: </label>
					    <input type="radio" name="matrimonio" value="SI Cuenta con documento de matrimonio" placeholder="Selecciona una opcion" checked required>Si
                        <input type="radio" name="matrimonio" value="No Cuenta con documento de matrimonio" placeholder="Selecciona una opcion" required>No
						</div>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <label>Identificacion peronal </label><br>
					  <div class="alert alert-info">
					  	<label>Cuenta con Credencial de elector:</label>
					  	    Si: <input type="radio" name="elector" onclick="elector.disabled=false"/>
							No: <input type="radio" name="elector" onclick="elector.disabled=true" checked/>
					  </div>
					  <div class="input-group">
							<span class="input-group-addon"><label>Credencial  de elector: </label></span>
							<input type="text" class="form-control" id="elector" placeholder="Documento (18 Digitos)" name="documento" maxlength="11" required>
					  </div><br>
                      <div class="alert alert-info">
                      	<label>Cuenta con Cartilla Militar</label>
					  	    Si: <input type="radio" name="militar" onclick="militar.disabled=false"/>
							No: <input type="radio" name="militar" onclick="militar.disabled=true" checked/>
                      </div>
					  <div class="input-group">
							<span class="input-group-addon"><label>Cartilla Militar: </label></span>
							<input type="text" class="form-control" id="militar" placeholder="Folio" name="folio" required>
					  </div><br>
                      <div class="alert alert-info">
                      	<label>Cuenta con Licencia de conducir</label>
					  	    Si: <input type="radio" name="conducir" onclick="licencia.disabled=false"/>
							No: <input type="radio" name="conducir" onclick="licencia.disabled=true" checked/>
                      </div>
					  <div class="input-group">
							<span class="input-group-addon"><label>Licencia de conducir: </label></span>
							<input type="text" class="form-control" id="licencia" placeholder="Vigencia" name="vigencia" required>
					  </div>			  			  
					</div>
				  </div>
				  
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						<label>Seguridad social </label>
						<div class="input-group">
							<span class="input-group-addon"><label>IMSS: </label></span>
							<input type="text" class="form-control" id="inputClave" placeholder="IMSS (11 Digitos)" name="imss" maxlength="11" required>
					    </div>
<!-- 					    <div class="input-group">
							<span class="input-group-addon"><label>RFC: </label></span> -->
							<input type="hidden" class="form-control" id="inputClave" placeholder="R.F.C" name="rfc" value="<?php echo $_SESSION["clave"]; ?>">
<!-- 					    </div> -->
					    <div class="input-group">
							<span class="input-group-addon"><label>CURP: </label></span>
							<input type="text" class="form-control" id="inputClave" placeholder="CURP (18 Digitos)" name="curp" maxlength="18" required>
					    </div>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					<input type="submit" id="insertar" value="SIGUIENTE..." name="guardar" class="btn btn-theme btn-lg btn-block">
                    <input type="reset" id="cancelar" value="CANCELAR" name="cancelar" class="btn btn-theme btn-lg btn-block">
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