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

	$images= addslashes($_FILES['images']['tmp_name']);
    $name= addslashes($_FILES['images']['name']);
    $images= file_get_contents($image);
    $images= base64_encode($image);

	$sql="insert identificacion(id_rfc, puesto, nombre, direccion, fecha, edad, estadocivil, telefono, email, nivelacademico, name, images) 
	values('$clave','$puesto','$nombre','$direccion','$fecha','$edad','$estadocivil','$telefono','email','$nivelacademico','$name','$images')";
	$registro=mysqli_query($conexion,$sql);
	if(!$registro)
	{
		echo"
		<script language='javascript'>
		alert('ERROR AL GUARDAR DATOS')
		window.location='formularioIdentificacion.php'
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
					 <p><label>REVISION DE DOCUMENTOS</label></p>
					 <p>CANDIDATO: <label><?php echo $clave; ?></label></p>
						 <p>Enlace rapido atras <a href="http://estudiocorseprin.pe.hu/formularioIdentificacion.php">Atras </a></p>
						 <p>Enlace rapido adelante <a href="http://estudiocorseprin.pe.hu/formularioLaboral.php">Adelante </a></p>
					</div>
				  </div>
			  </div>

	  		<div class="row">
               <div class="col-md-offset-1 col-md-10">
				<form action="formularioLaboral.php" method="post" class="form-horizontal" role="form">

				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <label>Actas de registro civil: </label>
					  <label>Nacimiento: </label>
					    <input type="hidden" class="form-control" id="inputClave" placeholder="Clave" name="clave" required value="<?php echo $clave; ?>">
					    <input type="radio" name="nacimiento" value="Si" placeholder="Selecciona una opcion" checked required>Si
					    <input type="radio" name="nacimiento" value="No" placeholder="Selecciona una opcion" required>No
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <label>Matrimonio: </label>
					    <input type="radio" name="matrimonio" value="Si" placeholder="Selecciona una opcion" checked required>Si
                        <input type="radio" name="matrimonio" value="No" placeholder="Selecciona una opcion" required>No
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					  <label>Identificacion peronal </label><br>
					  <label align="letf">Credencial  de elector: </label>
					  <input type="text" class="form-control" id="inputClave" placeholder="Documento" name="documento" required>
					  <label align="letf">Cartilla Militar: </label>
					  <input type="text" class="form-control" id="inputClave" placeholder="Folio" name="folio" required>
					  <label align="letf">Licencia de conducir: </label>
					  <input type="text" class="form-control" id="inputClave" placeholder="Vigencia" name="vigencia" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						<label>Seguridad social </label>
					  <input type="text" class="form-control" id="inputClave" placeholder="IMMS" name="imms" required>
					  <input type="text" class="form-control" id="inputClave" placeholder="R.F.C" name="clave" value="<?php echo $clave; ?>" required>
					  <input type="text" class="form-control" id="inputClave" placeholder="CURP" name="curp" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
					<input type="submit" id="insertar" value="SIGUIENTE..." name="guardar" class="btn btn-theme btn-lg btn-block">
                    <input type="reset" id="cancelar" value="CANCELAR" name="cancelar" class="btn btn-theme btn-lg btn-block">
                    <button type="button" onClick="window.location='formularioIdentificacion.php'" class="btn btn-theme btn-lg btn-block">Regresar</button>
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