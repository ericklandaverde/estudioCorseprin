<?php 
   function conectar()
   {
	$servidor="mysql.hostinger.es";
	$usuario="u340419796_pract";
	$password="YES";
	$bd="u340419796_capit";
	$conexion= new mysqli($servidor,$usuario,$password,$bd);
	if (!$conexion)
	{
		echo"ERROR AL CONECTARCE CON EL SERVIDOR";
		exit();
	}

	$coneccion=mysqli_select_db($conexion,$bd);

	if (!$coneccion)
	{
		echo"ERROR AL ABRIR LA BASE DE DATOS";
		exit();
	}
     	return ($conexion);
   }
?>