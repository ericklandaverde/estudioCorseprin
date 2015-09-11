<?php 
   function conectar()
   {
	$servidor="mysql.hostinger.es";
	$usuario="u340419796_pract";
	$password="4WuNtS27";
	$bd="u340419796_capit";
	$conexion=mysql_connect($servidor,$usuario,$password);
	if (!$conexion)
	{
		echo"ERROR AL CONECTARCE CON EL SERVIDOR";
		exit();
	}

	$coneccion=mysql_select_db($bd,$conexion);

	if (!$coneccion)
	{
		echo"ERROR AL ABRIR LA BASE DE DATOS";
		exit();
	}
     	return ($conexion);
   }
?>