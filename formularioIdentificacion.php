<!DOCTYPE html>
<html>
  <head>
    <title>Estudio SocioEconomico</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- css -->  
    <link href='progression.js/src/progression.css' rel='stylesheet' type='text/css'>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="progression.js/src/progression.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Alertify -->
    <script src="alertifyjs/alertify.js"></script>
    <link rel="stylesheet" href="alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="alertifyjs/css/themes/bootstrap.css">
    <!-- Alertif -->
    <link rel="stylesheet" href="datepicker/css/bootstrap.css">
	<link rel="stylesheet" href="datepicker/css/datepicker.css">
		<script src="datepicker/js/main.js"></script>
		<script src="datepicker/js/bootstrap.js"></script>
		<script src="datepicker/js/bootstrap-datepicker.js"></script>

    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
	<script src="js/modernizr.custom.js"></script>
	<script src="js/apigoogle.js"></script>
	<script>
			$(function(){
			 $('.datepicker').datepicker();
			});
	</script>
    <script type="text/javascript">
		function ValidarImagen(obj){
		    var uploadFile = obj.files[0];
		    
		    if (!window.FileReader) {
		        alert('Aviso del administrador','El navegador no soporta la lectura de archivos');
		        return;
		    }

		    if (!(/\.(jpg|jpeg|png)$/i).test(uploadFile.name)) {
		        alert('Aviso del administrador','El archivo a adjuntar no es una imagen');
		    }
		    else {
		        var img = new Image();
		        img.onload = function () {
		            if (this.width.toFixed(0) <= 200 && this.height.toFixed(0) <= 200) {
		                alertify.alert('Aviso del administrador','Las medidas deben ser mayor a: 200 * 200');
		            }
		            else if (uploadFile.size > 102400) //1MB
		            {
		                alertify.alert('Aviso del administrador','El peso de la imagen no puede exceder 1MB')
		            }
		            else {
		                alertify.alert('Aviso del administrador','Imagen correcta')                
		            }
		        };
		        img.src = URL.createObjectURL(uploadFile);
		    }                 
		}
    </script>
	<script type="text/javascript">
    $(document).ready(function(){
    	$('#insertar').click(function() {
    		if ($('#telefono').val().length != 10 || isNaN($('#telefono').val())) {
              $('#telefono').css('border-color','#FF0000');
               alertify.alert('Campo incorrecto!','El número de teléfono tiene que tener 10 numeros.');
              return false;
            }
        });
    });
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXvjidayUWJM8AZxrVmewY0lMMvppK4aQ&signed_in=true&libraries=places&callback=initAutocomplete"async defer></script>
	<script type="text/javascript">
    function upperCase() {
       var x=document.getElementById("formulario").value
       document.getElementById("formulario").value = x.toUpperCase()
    }
    </script>
    <script type="text/javascript" src="../jquery.js"></script>

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


	 <section id="contact" class="home-section bg-white">
	  	<div class="container">
			
			<div class="row"> 
			     <div class="col-md-offset-2 col-md-8">
					<div class="section-heading">
					 <h2>ESTUDIO SOCIOECONOMICO</h2>
					 <p><label>DATOS DE IDENTIFICACION</label></p>
				     <p>ESTAS REALIZANDO EL ESTUDIO EL DIA: </p>
	                 <script> var f = new Date(); document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear()); </script>
					</div>
				</div>
	        </div>

	  		<div class="row">
	  			<div class="col-md-offset-1 col-md-10">

				<form id="myform" action="models/modeloIdentificacion.php" method="post" class="form-horizontal" role="form" enctype="multipart/form-data">
				    <div class="form-group">
						<div class="col-md-offset-2 col-md-8">
						  <label>Clave RFC: </label>
						  <input type="text" data-progression="" data-helper="Help users through forms by prividing helpful hinters"
						  class="form-control" id="formulario" placeholder="Introduce tu RFC" name="clave" onblur="upperCase()" required>
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
					  	<div class="input-group">
						  <span class="input-group-addon">Nombre</span>
						  <input type="text" class="form-control" id="formulario" placeholder="Nombre" name="nombre" onblur="upperCase()" required>
						</div>
						<div class="input-group">
						  <span class="input-group-addon">Apellido Paterno</span>
						   <input type="text" class="form-control" id="formulario" placeholder="Apellido paterno" name="apellidoPaterno" onblur="upperCase()" required>						</div>
						<div class="input-group">
						  <span class="input-group-addon">Apellido Materno</span>
						  <input type="text" class="form-control" id="formulario" placeholder="Apellido materno" name="apellidoMaterno" onblur="upperCase()" required>
						</div>
					  </div>
				    </div>

				    <div class="form-group">
					  <div id="locationField" class="col-md-offset-2 col-md-8">
					  	  <label>Escribe tu direccion:</label>
						  <input type="text"  class="form-control" id="autocomplete" placeholder="Calle #Numero, Municipio o Delegacion, Estado" onFocus="geolocate()" name="direccion" required>
			              <label>Codigo postal</label>
				          <input class="form-control" id="postal_code" disabled="true">
					      <label>Pais</label>
				      	  <input class="form-control" id="country" disabled="true">
				      	  <label>Estado</label>
				          <input class="form-control" id="administrative_area_level_1" disabled="true">
				          <label>Municipio o delegacion</label>
				          <input class="form-control" class="field" id="locality" disabled="true">
						  <label>Dirección</label>
				          <input class="form-control" id="street_number" disabled="true">
				          <input class="form-control" id="route" disabled="true">
					  </div>
				    </div>

					<div class="form-group">
						<div class="col-md-offset-2 col-md-8">
						    <div class="input-group date well ">
                               <input type="text" class="datepicker form-control" placeholder="Fecha de nacimiento"  name="fecha" min="1960-12-31" max="2015-12-31" required>
                                  <span class="input-group-addon">
                                  <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                             </div>
						</div>
					</div>

					 <div class="form-group">
					    <div class="col-md-offset-2 col-md-8">
					    	<div class="input-group">
							  <span class="input-group-addon">Edad</span>
							  <input type="number" class="form-control" id="inputClave" placeholder="Edad" name="edad" required>
						    </div>
						</div>
					 </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <select type="text" class="form-control" id="inputClave" placeholder="Estado civil" name="estadocivil" required>
                        <option selected value="">Seleccionar estado civil</option>
                        <option value="Soltero">Soltero</option>
                        <option value="Casado">Casado</option>
                        <option value="Union libre">Union libre</option>
                      </select>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						<div class="input-group">
						  <span class="input-group-addon">Telefono</span>
						  <input type="tel" class="form-control" id="telefono" placeholder="Telefono" name="telefono" required>
					    </div>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						<div class="input-group">
						  <span class="input-group-addon">@</span>
						  <input type="email" class="form-control" placeholder="Correo electronico" name="email" required>
					    </div>
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
						<label>La fotografía debe ser un archivo de foto formato tipo: TuNombreApellidos.jpg|TuNombreApellidos.png</label>
						                                      Ejemplo: JosePerezHernandezHernandez.jpg|JosePerezHernandezHernandez.png
						<label>El tamano maximo de la fotografia debe de ser de 1MB</label> 
						<p>De frente, con la frente descubierta, sin barba, sin patilla, sin adornos de ninguna especie, 
						sin lentes, si usa bigote debe estar recortado y con el cabello corto.</p>

					  	<input type="file" accept="image/*" onchange="ValidarImagen(this);" class="form-control" id="inputClave" placeholder="Selecciona una fotografia" name="imagen" required>
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
    <!-- <script src="js/jquery.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
  	
</html>