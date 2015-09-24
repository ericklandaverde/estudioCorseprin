<?php
$conexion = mysqli_connect('mysql.hostinger.es','u802532598_usuar','kDu14GQj2G','u802532598_login') or die ('Error de Conexion de Servidor: ' .  mysqli_error());
$db=mysqli_select_db($conexion, 'u802532598_login') or die ('Error al seleccionar la Base de Datos: '.mysql_error());
mysqli_query ($conexion,"SET NAMES 'utf8'");
?>