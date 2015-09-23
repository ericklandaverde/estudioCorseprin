<?php
$conexion = mysql_connect('localhost','root') or die ('Error de Conexion de Servidor: ' . mysql_error());

$db=mysql_select_db('login') or die ('Error al seleccionar la Base de Datos: '.mysql_error());
mysql_query ("SET NAMES 'utf8'");
?>