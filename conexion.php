<?php 
   function conectar()
   {
    $conexion=mysqli_connect("mysql.hostinger.es","u375487675_socio","ittlacorseprin.","u375487675_capit") or die("No hay conexion");
	if (!$conexion)
	{
		echo"ERROR AL CONECTARCE CON EL SERVIDOR";
		exit();
	}

	$coneccion=mysqli_select_db($conexion,"u375487675_capit") or die("No existe base de datos");

	if (!$coneccion)
	{
		echo"ERROR AL ABRIR LA BASE DE DATOS";
		exit();
	}
     	return ($conexion);
   }
?>