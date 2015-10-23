<?php 
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Estudio SocioEconomico</title>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
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
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/style.css" rel="stylesheet" media="screen">
	<link href="color/default.css" rel="stylesheet" media="screen">
	<script src="js/modernizr.custom.js"></script>
    <script>
		$(function(){
			$('.datepicker').datepicker({
				format: 'dd/mm/yyyy',
                startDate: '-3d',
			});
		});
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
					</div>
				  </div>
			  </div>

	  		<div class="row">
                <div class="col-md-offset-1 col-md-10">

				<form action="models/modeloLaboral.php" method="post" class="form-horizontal" role="form">
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <input type="hidden" class="form-control" id="inputClave" placeholder="Clave" name="clave" required value="<?php echo $_SESSION["clave"]; ?>">
					    <div class="input-group">
						  <span class="input-group-addon"><label>Ultimo empleo</label></span>
						  <input type="text" class="form-control" id="inputClave" placeholder="Ultimo empleo" name="ultimoEmpleo" required>
						</div>
						<div class="input-group">
						  <span class="input-group-addon"><label>Direccion</label></span>
						  <input type="text" class="form-control" id="inputClave" placeholder="Direccion" name="direccion" required>
						</div>
						<div class="input-group">
						  <span class="input-group-addon"><label>Giro</label></span>
						  <input type="text" class="form-control" id="inputClave" placeholder="Giro" name="giro" required>
						</div>
						<div class="input-group">
						  <span class="input-group-addon"><label>Telefono:</label></span>
						  <input type="tel" class="form-control" id="telefono" placeholder="Telefono" name="telefono" required>
						</div>
					</div>
				  </div>
				  
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						<div class="input-group">
						  <span class="input-group-addon"><label>Puesto desempeñado:</label></span>
						  <input type="text" class="form-control" id="inputClave" placeholder="Puesto desempeñado" name="puesto" required>
						</div>
						
						<div class="input-group input-daterange">
						    <div class="input-group">
						         <span class="input-group-addon"><label>Fecha de Ingreso:</label></span>
						         <input type="date" class="datepicker form-control" id="inputClave" placeholder="Fecha de Ingreso" name="fechaIngreso" required>
						    </div>
						    <span class="input-group-addon">a</span>
						    <div class="input-group">
						         <input type="date" class="datepicker form-control" id="inputClave" placeholder="Fecha de Baja" name="fechaBaja" required>
						    </div> 
						</div>		
					</div>
				  </div>
				  
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						<div class="input-group">
						  <span class="input-group-addon"><label>Antiguedad</label></span>
						  <input type="text" class="form-control" id="inputClave" placeholder="Antiguedad" name="antiguedad" required>
						</div> 
						<div class="input-group">
						  <span class="input-group-addon"><label>Sueldo Inicial</label></span>
						  <input type="number" class="form-control" id="inputClave" placeholder="Sueldo Inicial" name="sueldoInicial" required>
						</div> 
						<div class="input-group">
						  <span class="input-group-addon"><label>Sueldo Final</label></span>
						  <input type="number" class="form-control" id="inputClave" placeholder="Sueldo Final" name="sueldoFinal" required>
						</div>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						<div class="input-group">
						  <span class="input-group-addon"><label>Jefe Inmediato</label></span>
						  <input type="text" class="form-control" id="inputClave" placeholder="Jefe Inmediato" name="jefe" required>
						</div>
						<div class="input-group">
						  <span class="input-group-addon"><label>Puesto del jefe</label></span>
						  <input type="text" class="form-control" id="inputClave" placeholder="Puesto del jefe" name="puestoJefe" required>
						</div>
						<div class="input-group">
						  <span class="input-group-addon"><label>Motivo de separacion</label></span>
						  <input type="text" class="form-control" id="inputClave" placeholder="Motivo de separacion" name="motivo" required>
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
    <!-- <script src="js/jquery.js"></script> -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
	<script src="js/jquery.smooth-scroll.min.js"></script>
	<script src="js/jquery.dlmenu.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>
  	
</html>