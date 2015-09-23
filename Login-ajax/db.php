<?php
$conexion=mysqli_connect("mysql.hostinger.es","u802532598_usuar","mCuoJ07aFn","u802532598_login") or die ('Error de Conexion de Servidor: ' . mysql_error());

$db=mysqli_select_db($conexion,"u802532598_login") or die ('Error al seleccionar la Base de Datos: '.mysql_error());
mysql_query ("SET NAMES 'utf8'");
?>