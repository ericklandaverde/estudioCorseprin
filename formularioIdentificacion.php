<?php

include('conexion.php');
$conexion=conectar();

$clave=$_POST['clave'];
$puesto=$_POST['puesto'];
$nombre=$_POST['nombre'];
$direccion=$_POST['direccion'];
$fecha=$_POST['fecha'];
$edad=$_POST['edad'];
$estadocivil=$_POST['estadocivil'];
$telefono=$_POST['telefono'];
$email=$_POST['email'];
$nivelacademico=$_POST['nivelacademico'];

 if(isset($_POST['image']))
    {
        if(getimagesize($_FILES['image']['tmp_name']) == FALSE)
        {
            echo"<script language='javascript'>alert('Por favor selecciona una imagen.')</script>";
        }
        else
        {
            $image= addslashes($_FILES['image']['tmp_name']);
            $name= addslashes($_FILES['image']['name']);
            $image= file_get_contents($image);
            $image= base64_encode($image);
            saveimage($name,$image);
        }
    }

function saveimage($name,$image)
{
    $qry="insert into identificacion (name,image) values ('$name','$image')";
    $result=mysql_query($qry,$con);
    if($result)
    {
        echo"<script language='javascript'>alert('Imagen guardada.')</script>";
    }
    else
    {
    	echo"<script language='javascript'>alert('Imagen no guardada.')</script>";
    }
}

/*$conexionsql=mssql_connect() or
  die("Error de conexión.");
mssql_select_db( 'examen') or
  die("Error de selección de base de datos.");
mssql_query("insert empleados(clave_emp, nombre, email, empresa, ciudad, salario_base) values('$clave','$nombre','$email','$empresa','$ciudad','$salario'") or
  die("Error SQL");
mssql_close($conexionsql);*/

$sql="insert identificacion(clave, puesto, nombre, direccion, fecha, edad, estadocivil, telefono, email, nivelacademico) 
values('$clave','$puesto','$nombre','$direccion','$fecha','$edad','$estadocivil','$telefono','email','$nivelacademico')";
$registro=mysqli_query($conexion,$sql);
if(!$registro)
{
echo"<script language='javascript'>alert('ERROR AL GUARDAR DATOS, REVISA TUS DATOS')window.location='formularioIdentificacion.html'</script>";
exit();
}
else
{
echo"<script language='javascript'>alert('DATOS GUARDADOS CORRECTAMENTE')window.location='formularioDocumentos.html'</script>";
}
?>