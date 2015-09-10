<html>
<head>
<CENTER><BR><BR><font size=5 color="blue"><b> DATOS A MODIFICAR </b></font>
<script language="JavaScript" type="text/javascript">
function cancelar()
{
    window.location="cambios.html"
}
</script>
</head>

<body>
<?php 
include("conexion.php");
$clave=$_POST['clave'];
if(empty($clave))
{
 echo"<script language='JavaScript' type='text/JavaScript'>
           window.location='cambios.html'
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
		   window.location='cambios.html'
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
		   window.location='cambios.html'
		 </script>
       ";
	   exit();
  }
 }
?>
  </p>
 
  <form name='form1' id='form1' method='post' action='cambios2.php'>
  
    <div align="center"><br>
      <br>
		<B>CLAVE: <!-- este campo no se puede modificar por ke tiene la propiedad readonly --> 
		<input type='text' name='clave'  value="<?php echo $datos->clave_emp?>" readonly>
                <br>
          <B>NOMBRE:
          <input type='text' name='nombre' value="<?php echo $datos->nombre?>">
                <br>
		
      <B>	EMAIL:
          <input type='text' name='email' value="<?php echo $datos->email?>">
                <br>
          <B> EMPRESA:
          <input type='text' name='empresa' value="<?php echo $datos->empresa?>">
	
                <br>
          <B>CIUDAD:
          <input type='text' name='ciudad' value="<?php echo $datos->ciudad?>">
          <br>
          <B>SALARIO BASE:
          <input type='text' name='salario' value="<?php echo $datos->salario_base?>">
	</div>
    <p align="center">
         <input type='submit' name='cambiar' value="CAMBIAR">
		<input type='button' name='button' value="CANCELAR" onclick='cancelar();'>
 </form>
</body>
</html>
