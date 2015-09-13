<?php 
   function conectar()
   {
    $conexion=mysqli_connect("mysql.hostinger.es","u802532598_pract","mCuoJ07aFn","u802532598_capit") or die("No hay conexion");
	if (!$conexion)
	{
		echo"ERROR AL CONECTARCE CON EL SERVIDOR";
		exit();
	}

	$coneccion=mysqli_select_db($conexion,"u802532598_capit") or die("No existe base de datos");

	if (!$coneccion)
	{
		echo"ERROR AL ABRIR LA BASE DE DATOS";
		exit();
	}
     	return ($conexion);
   }
?>