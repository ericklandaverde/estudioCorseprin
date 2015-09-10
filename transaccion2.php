<?php
include("conexion.php");
$conexion=conectar();

$clave=$_POST['clave'];
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$empresa=$_POST['empresa'];
$ciudad=$_POST['ciudad'];
$salario=$_POST['salario'];
$salario2=$_POST['salario'];

$tot = ($salario*10/100);
$total=$tot+$salario2;
$SQL="UPDATE empleados set salario_base='$total' WHERE clave_emp='$clave'";
$registros = mysql_query($SQL);
if(!$registros)
{
echo "ERROR AL APLICAR AUMENTO";
exit();
}
echo "<script language='JavaScript' type='text/JavaScript'>
alert('AUMENTO APLICADO')
window.location='transaccion.php' 
</script>
";

?>