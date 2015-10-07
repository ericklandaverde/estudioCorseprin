    <?php
	include('conexion.php');
	$conexion=conectar();
    

	$clave=$_POST['clave'];
	$puesto=$_POST['puesto'];
	$nombre="".$_POST['nombre']." ".$_POST['apellidoPaterno']." ".$_POST['apellidoMaterno']."";
	$direccion=$_POST['direccion'];
	$fecha=$_POST['fecha'];
	$edad=$_POST['edad'];
	$estadocivil=$_POST['estadocivil'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	$nivelacademico=$_POST['nivelacademico'];
    
    //Comprobamos si ha ocurrido un error.
	if ($_FILES["imagen"]["error"] > 0){
		echo "<script language='javascript'>alert('Ha ocurrido un error con la imagen.')</script>";
	} else {
		//Ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
		//Y que el tamano del archivo no exceda los 100kb
		$permitidos = array("image/jpg", "image/jpeg", "image/png");
		$limite_kb = 100;

		if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 1024){
			//Esta es la ruta donde copiaremos la imagen
			//Recuerden que deben crear un directorio con este mismo nombre
			//En el mismo lugar donde se encuentra el archivo subir.php
			$rutaImagen = "imagenes/candidatos/" . $_FILES['imagen']['name'];
			//Comprovamos si este archivo existe para no volverlo a copiar.
			//Pero si quieren pueden obviar esto si no es necesario.
			//Oh pueden darle otro nombre para que no sobreescriba el actual.
			if (!file_exists($rutaImagen)){
				//Aqui movemos el archivo desde la ruta temporal a nuestra ruta
				//Usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
				//Almacenara true o false
				$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaImagen);
				if ($resultado){
					echo "<script language='javascript'>alert('Imagen subida satisfactorimente.')</script>";
				} else {
					echo "<script language='javascript'>alert('Ocurrio un error al subir la imagen.')</script>";
				}
			} else {
				echo $_FILES['imagen']['name'] . ", Este archivo existe";
			}
		} else {
			echo "<script language='javascript'>
			alert('Archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes')
			</script>";
		}
	}
	

	$sql="insert identificacion(id_rfc, puesto, nombre, direccion, fecha, edad, estadocivil, telefono, email, nivelacademico, rutaImagen) 
	values('$clave','$puesto','$nombre','$direccion','$fecha','$edad','$estadocivil','$telefono','$email','$nivelacademico','$rutaImagen')";
	$registro=mysqli_query($conexion,$sql);
	if(!$registro)
	{
		echo"
		<script language='javascript'>
		alert('ERROR AL GUARDAR DATOS')
		window.location='formularioIdentificacion.html'
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
						 <!-- <p>Enlace rapido atras <a href="http://estudiocorseprin.pe.hu/formularioIdentificacion.php">Atras </a></p>
						 <p>Enlace rapido adelante <a href="http://estudiocorseprin.pe.hu/formularioLaboral.php">Adelante </a></p> -->
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
					  <label>Credencial  de elector: </label>
					  <input type="text" class="form-control" id="inputClave" placeholder="Documento" name="documento" required>
					  <label>Cartilla Militar: </label>
					  <input type="text" class="form-control" id="inputClave" placeholder="Folio" name="folio" required>
					  <label>Licencia de conducir: </label>
					  <input type="text" class="form-control" id="inputClave" placeholder="Vigencia" name="vigencia" required>
					</div>
				  </div>
				  <div class="form-group">
					<div class="col-md-offset-2 col-md-8">
						<label>Seguridad social </label>
					  <input type="text" class="form-control" id="inputClave" placeholder="IMMS" name="imms" required>
					  <input type="text" class="form-control" id="inputClave" placeholder="R.F.C" name="rfc" value="<?php echo $clave; ?>" required>
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