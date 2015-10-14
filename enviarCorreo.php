<?php
$correo= $_POST['correo'];
$to = $correo;
$subject = "CONFIRMACION ESTUDIO RECIVIDO";
$txt = "Gracias por completar el estudio socioeconomico, pronto nos pondremos en contacto para agendar tu visita domiciliaria";
$headers = "From: socioeconomicos@corseprin.com.mx " . "\r\n" .
"CC: harry_erick92@outlook.com";

$enviar = mail($to,$subject,$txt,$headers);

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