<?php 
   function conectar()
   {
    $conexion=mysqli_connect("mysql.hostinger.es","u340419796_pract","4WuNtS10","u340419796_capit") or die("No hay conexion");
	if (!$conexion)
	{
		echo"ERROR AL CONECTARCE CON EL SERVIDOR";
		exit();
	}

	$coneccion=mysqli_select_db($conexion,"u340419796_capit") or die("No existe base de datos");

	if (!$coneccion)
	{
		echo"ERROR AL ABRIR LA BASE DE DATOS";
		exit();
	}
     	return ($conexion);
   }
?>