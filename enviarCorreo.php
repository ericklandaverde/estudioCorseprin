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
	<title>GERENCIA DE CAPITAL HUMANO</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	</head>
		<body>
		<div class="jumbotron">
		    <div class="container">
		         <p>Gracias por completar el estudio socioeconomico, pronto nos pondremos en contacto para agendar tu visita domiciliaria</p>
			</div>
		</div>
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