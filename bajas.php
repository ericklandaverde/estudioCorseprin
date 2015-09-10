<html>
<head>
<script language="JavaScript" type="text/javascript">
function cancelar()
{
    window.location="bajas.html"
}
</script>

</head>


<?php 
include("conexion.php");
$clave=$_POST['clave'];
if(empty($clave))
{
 echo"<script language='JavaScript' type='text/JavaScript'>
           window.location='bajas.html'
        </script>
       ";
	   exit();
}
$conexion=conectar();
$sql="select * from empleados where clave_emp='$clave'";
$registro=mysql_query($sql,$conexion);
if(!$registro)
{
 echo"<script language='JavaScript' type='text/JavaScript'>
           alert('ERROR EN LA CLAVE')
		   window.location='bajas.html'
		 </script>
       ";
}
 else
 {
 $datos=mysql_fetch_object($registro);
  if(!$datos->clave_emp)
  {
   echo"<script language='JavaScript' type='text/JavaScript'>
           alert('LA CLAVE NO EXISTE')
		   window.location='bajas.html'
		 </script>
       ";
	   exit();
  }
 }
?>
  
  <div align="center">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p><strong><font size="5" color="blue">DESEA ELIMINAR AL SIGUIENTE EMPLEADO? </font> </strong>
      </p>
  </div>
  <form name='form1' id='form1' method='post' action='bajas2.php'>
  
    <div align="center"><strong><br>
      CLAVE: 
      <input type='text' name='clave'  value="<?php echo $datos->clave_emp?>" readonly >
      <br>
      NOMBRE:
      <input type='text' name='nombre' value="<?php echo $datos->nombre?>" readonly>
      <br>
      
      EMAIL:
      <input type='text' name='email' value="<?php echo $datos->email?>" readonly>
      <br>
      EMPRESA:
      <input type='text' name='empresa' value="<?php echo $datos->empresa?>" readonly>
            
      <br>
      CIUDAD:
      <input type='text' name='correo' value="<?php echo $datos->ciudad?>" readonly>
      
      <br>
      SALARIO BASE:
      <input type='text' name='salario' value="<?php echo $datos->salario_base?>" readonly>
      </td>
    </strong>    </div>
    <p align="center">
         <input type='submit' name='eliminar' value="SI">
		<input type='button' name='button' value="NO" onclick='cancelar();'>
		</td>
		</font>
 </form>
</body>
</html>
