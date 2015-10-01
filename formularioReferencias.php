<?php
	include('conexion.php');
	$conexion=conectar();

	$clave=$_POST['clave'];
	$ultimoEmpleo=$_POST['ultimoEmpleo'];
	$giro=$_POST['giro'];
	$telefono=$_POST['telefono'];
	$puesto=$_POST['puesto'];
	$fechaIngreso=$_POST['fechaIngreso'];
	$fechaBaja=$_POST['fechaBaja'];
	$antiguedad=$_POST['antiguedad'];
	$sueldoInicial=$_POST['sueldoInicial'];
	$sueldoFinal=$_POST['sueldoFinal'];
	$jefe=$_POST['jefe'];
	$puestoJefe=$_POST['puestoJefe'];
	$motivo=$_POST['motivo'];

	$sql="insert laboral(id_rfc, ultimoEmpleo, giro, telefono, puesto, fechaIngreso, fechaBaja, antiguedad, sueldoInicial, sueldoFinal, jefe, puestoJefe, motivo) 
    values('$clave','$ultimoEmpleo','$giro','$telefono','$puesto','$fechaIngreso','$fechaBaja','$antiguedad','$sueldoInicial','$sueldoFinal','$jefe','$puestoJefe','$motivo')";
	$registro=mysqli_query($conexion,$sql);
	if(!$registro)
	{
		echo"
		<script language='javascript'>
		alert('ERROR AL GUARDAR DATOS')
		window.location='formularioDocumentos.php'
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
					 <p><label>REFERENCIAS PERSONALES</label></p>
					 <p>CANDIDATO: <label><?php echo $clave; ?></label></p>
					     <p>Enlace rapido atras <a href="http://estudiocorseprin.pe.hu/formularioLaboral.php">Atras </a></p>
						 <p>Enlace rapido adelante <a href="http://estudiocorseprin.pe.hu/formularioEconomico.php">Adelante </a></p>
					</div>
				  </div>
			</div>

	  		<div class="row">
	  			<div class="col-md-offset-1 col-md-10">
					<form action="formularioEconomico.php" method="post" class="form-horizontal" role="form">
					  <div class="form-group">
						<div id="capa" class="col-md-offset-2 col-md-8">
							<input type="text" class="form-control" id="inputClave" placeholder="Nombre" name="nombre" required>
							<input type="text" class="form-control" id="inputClave" placeholder="Ocupacion" name="ocupacion" required>
							<select type="text" class="form-control" id="inputClave" placeholder="Tipo de relacion" name="relacion" required>
							  	<option selected value="">Seleccione relacion.</option>
							  	<option value="Amigo">Amigo</option>
							  	<option value="Familiar">Familiar</option>
							  	<option value="Antiguo Jefe">Antiguo Jefe</option>
							  	<option value="Compañero de trabajo">Compañero de trabajo</option>
		                    </select>
							<input type="text" class="form-control" id="inputClave" placeholder="Tiempo de conocerlo " name="tiempo" required>
							<input type="text" class="form-control" id="inputClave" placeholder="Direccion" name="direccion" required>
							<input type="tel"  class="form-control" id="inputClave" placeholder="Telefono" name="telefono" required>
							<input type="text" class="form-control" id="inputClave" placeholder="Comentarios" name="Comentario" required>
							<script type="text/javascript"> 
							
							 </script>
						</div>
					  </div>

					  <div class="form-group">
						<div class="col-md-offset-2 col-md-8">
						<input type="submit" id="insertar" value="SIGUIENTE..." name="guardar" class="btn btn-theme btn-lg btn-block">
	                    <input type="reset" id="cancelar" value="CANCELAR" name="cancelar" class="btn btn-theme btn-lg btn-block">
	                    <button type="button" onClick="window.location='formularioLaboral.html'" class="btn btn-theme btn-lg btn-block">Regresar</button>
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