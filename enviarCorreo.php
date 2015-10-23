<?php
// Varios destinatarios
// $para  = 'aidan@example.com' . ', '; // atención a la coma
// $para .= 'wez@example.com';
$correo= $_POST['correo'];
$para = $correo;

// título
$título = 'CONFIRMACION ESTUDIO RECIBIDO (PRUEBA)';

// mensaje
$mensaje = '
<html>
	<head>
	<title>Gerencia de Capital Humano</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    <!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	</head>
		<body>
	    <section id="contact" class="home-section bg-white">
		  	<div class="container">
		        <div class="alert alert-success">
		             <span class="glyphicon .glyphicon-envelope"></span>
		             <p>Gracias por completar el estudio socioeconomico, pronto nos pondremos en contacto para agendar tu visita domiciliaria</p>
		        </div> 
				
				<div class="row mar-top30 ">
					<div class="col-md-offset-2 col-md-8">
						<h5>Tienes dudas contactanos por nuestras redes sociales.</h5>
						<ul class="social-network">
							<li><p><a href="https://www.facebook.com/CorseprinSeguridadRH">facebook recursos humanos</a></p>
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
							</span></a>
							</li>
							<li><p><a href="http://corseprin.com.mx/">Pagina de Corseprin</a></p>
							<span class="fa-stack fa-2x">
								<i class="fa fa-circle fa-stack-2x"></i>
								<i class="fa fa-dribbble fa-stack-1x fa-inverse"></i>
							</span></a>
							</li>
							<li><p><a href="https://twitter.com/corseprin">Twitter</a></p>
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
					</div>
				</div>		
			</div>	
		</footer>
		</body>
</html>
';

// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
$cabeceras .= 'To: Mary <mary@example.com>, Kelly <kelly@example.com>' . "\r\n";
$cabeceras .= 'From: GERENCIA DE CAPITAL HUMANO <socioeconomicos@corseprin.com.mx>' . "\r\n";
$cabeceras .= 'Cc: socioeconomicos@corseprin.com.mx' . "\r\n";
$cabeceras .= 'Bcc: harry_erick92@outlook.com' . "\r\n";

// Enviarlo
$enviar = mail($para, $título, $mensaje, $cabeceras);

if(!$enviar)
	{
		echo"
		<script language='javascript'>
		alert('Error al enviar el correo!')
		window.location='consultas.php'
		</script>";
		exit();
		}
		else
		{
		echo"
		<script language='javascript'>
		alert('Correo enviado con exito')
		window.location='consultas.php'
		</script>";
	}
?>