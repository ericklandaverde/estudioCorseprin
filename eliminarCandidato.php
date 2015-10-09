<?php
include ("conexion.php");
$conexion=Conectar();

$clave=$_POST['clave'];

$sql="DELETE * FROM identificacion WHERE id_rfc ='$clave'";
$registros = mysqli_query($conexion,$sql);
 
if(!$registros)
{
echo "ERROR AL ELIMINAR";
exit();
}
echo "
<script language='JavaScript' type='text/JavaScript'>
alert('REGISTRO ELIMINADO')
window.location='bajas.html' 
</script>
";
?>