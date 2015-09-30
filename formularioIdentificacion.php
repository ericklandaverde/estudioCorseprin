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
	<script src="js/apigoogle.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXvjidayUWJM8AZxrVmewY0lMMvppK4aQ&signed_in=true&libraries=places&callback=initAutocomplete"async defer></script>
	<script type="text/javascript">
		function upperCase() {
		   var x=document.getElementById("formulario").value
		   document.getElementById("formulario").value=x.toUpperCase()
		}
    </script>
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
					 <p><label>DATOS DE IDENTIFICACION</label></p>
					    <p>Enlace rapido adelante <a href="http://estudiocorseprin.pe.hu/formularioDocumentos.html">Adelante</a></p>
				     <p>ESTAS REALIZANDO EL ESTUDIO EL DIA: </p>
	               <script>  
	                  var f = new Date();
	                  document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
	               </script>
					</div>
				  </div>
			  </div>

	  		<div class="row">

	  			<div class="col-md-offset-1 col-md-10">

				<form action="formularioDocumentos.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
				    <div class="form-group">
						<div class="col-md-offset-2 col-md-8">
						  <label>Clave RFC: </label>
						  <input type="text" class="form-control" id="formulario" placeholder="Introduce tu RFC" name="clave" onblur="upperCase()" required>
						</div>
				    </div>
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
						  <label>Puesto a cubrir: </label>
						  <select type="text" class="form-control" id="inputClave" placeholder="Puesto a cubrir" name="puesto" onkeyUp="this.value.toUpperCase()"required>
						  	<option selected value="">Seleccionar puesto</option>
						  	<option value="Administrativo">Administrativo</option>
						  	<option value="Escolta">Escolta</option>
						  	<option value="Jefe de servicio">Jefe de servicio</option>
						  	<option value="Jefe de turno">Jefe de turno</option>
	                        <option value="Guardia">Guardia</option>
	                        <option value="Supervisores">Supervisores</option>
	                      </select>
						</div>
					</div>
				    <div class="form-group">
					  <div class="col-md-offset-2 col-md-8">
					  <input type="text" class="form-control" id="formulario" placeholder="Nombres" name="nombre" onblur="upperCase()" required>
					  <input type="text" class="form-control" id="formulario" placeholder="Primer Apellido" name="primerApellido" onblur="upperCase()" required>
					  <input type="text" class="form-control" id="formulario" placeholder="Segundo Apellido" name="segundoApellido" onblur="upperCase()" required>
					  </div>
				    </div>
				  
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
							<div id="locationField">
								<input type="text" id="autocomplete" placeholder="Escribe tu direccion" onFocus="geolocate()" name="direccion" required></input>
							</div>
						        <label>Dirección</label>
						        <input id="street_number" disabled="true"></input>
						        <input id="route" disabled="true"></input><br>
						      	<label>Cuidad</label>
						        <input ><input class="field" id="locality" disabled="true"></input>
						      	<label>Estado</label>
						        <input id="administrative_area_level_1" disabled="true"></input>
						        <label>Codigo postal</label>
						        <input id="postal_code" disabled="true"></input>
						      	<label>Pais</label>
						      	<input id="country" disabled="true"></input>
						</div>
					</div>
					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
						  <input type="date" class="form-control" id="inputClave" placeholder="Fecha de nacimiento" name="fecha" required>
						</div>
					</div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="number" class="form-control" id="inputClave" placeholder="Edad" name="edad" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <select required type="text" class="form-control" id="inputClave" placeholder="Estado civil" name="estadocivil">
                        <option selected value="">Seleccionar estado civil</option>
                        <option value="Soltero">Soltero</option>
                        <option value="Casado">Casado</option>
                      </select>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="tel" class="form-control" id="inputClave" placeholder="Telefono" name="telefono" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="email" class="form-control" id="inputClave" placeholder="Correo electronico" name="email" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <select type="text" class="form-control" id="inputClave" placeholder="Nivel academico" name="nivelacademico" required>
					  	<option selected value="#">Seleccionar Nivel academico</option>
                        <option value="Primaria">Primaria</option>
                        <option value="Secuandaria">Secundaria</option>
                        <option value="Media Superior">Media Superior</option>
                        <option value="Superior">Superior</option>
                      </select>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						<label>Fotografia: </label>
						<p>La fotografía debe ser un archivo de foto formato tipo: nombre.jpg|nombre.png 
						<p>De frente, con la frente descubierta, sin barba, sin patilla, sin adornos de ninguna especie, 
						sin lentes, si usa bigote debe estar recortado y con el cabello corto estilo militar.</p>
						<?php
							function LimitAttach(tField,iType) {
								file=tField.value;
								if (iType==1) {
								extArray = new Array(".gif",".jpg",".png");
								}
								if (iType==2) {
								extArray = new Array(".swf");
								}
								if (iType==3) {
								extArray = new Array(".exe",".sit",".zip",".tar",".swf",".mov",".hqx",".ra",".wmf",".mp3",".qt",".med",".et");
								}
								if (iType==4) {
								extArray = new Array(".mov",".ra",".wmf",".mp3",".qt",".med",".et",".wav");
								}
								if (iType==5) {
								extArray = new Array(".html",".htm",".shtml");
								}
								if (iType==6) {
								extArray = new Array(".doc",".xls",".ppt");
								}
							    allowSubmit = false;
							    if (!file) return;
							     while (file.indexOf("\\") != -1) file = file.slice(file.indexOf("\\") + 1);
							    ext = file.slice(file.indexOf(".")).toLowerCase();
							    for (var i = 0; i < extArray.length; i++) {
								if (extArray[i] == ext) {
								allowSubmit = true;
								break;
								}
								}
								if (allowSubmit) {
								} else {
								tField.value="";
								alert("Usted sólo puede subir archivos con extensiones " + (extArray.join(" ")) + "\nPor favor seleccione un nuevo archivo");
								}
							}  
						?>

					  	<input type="file" onBlur="LimitAttach(this,1)" class="form-control" id="inputClave" placeholder="Selecciona una fotografia" name="image" required>
					</div>
				  </div>

				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						<input type="submit" id="insertar" value="SIGUIENTE..." name="guardar" class="btn btn-theme btn-lg btn-block">
	                    <input type="reset" id="cancelar" value="CANCELAR" name="cancelar" class="btn btn-theme btn-lg btn-block">	
						<button type="button" onClick="window.location='index.html'" class="btn btn-theme btn-lg btn-block">Regresar</button>
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