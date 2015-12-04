<?php
$conexion = mysqli_connect('mysql.hostinger.es','u375487675_usuar','ittla6021','u375487675_login') or die ('Error de Conexion de Servidor: ' .  mysqli_error());
$db=mysqli_select_db($conexion, 'u375487675_login') or die ('Error al seleccionar la Base de Datos: '.mysql_error());
mysqli_query ($conexion,"SET NAMES 'utf8'");
?>