    <?php
	include('../conexion.php');
	$conexion=conectar();
    
    session_start();
	$clave=$_POST['clave'];
	$_SESSION["clave"]=$_POST['clave'];
	$_SESSION["email"]=$_POST['email'];

	$puesto=$_POST['puesto'];
	$nombre="".$_POST['nombre']." ".$_POST['apellidoPaterno']." ".$_POST['apellidoMaterno']."";
	$direccion=$_POST['direccion'];
	$fecha=$_POST['fecha'];
	$edad=$_POST['edad'];
	$estadocivil=$_POST['estadocivil'];
	$telefono=$_POST['telefono'];
	$email=$_POST['email'];
	$nivelacademico=$_POST['nivelacademico'];
    
    //Comprobamos si ha ocurrido un error.
	if ($_FILES["imagen"]["error"] > 0){
		echo "<script language='javascript'>alert('Ha ocurrido un error con la imagen.')</script>";
	} else {
		//Ahora vamos a verificar si el tipo de archivo es un tipo de imagen permitido.
		//Y que el tamano del archivo no exceda los 100kb
		$permitidos = array("image/jpg", "image/jpeg", "image/png");
		$limite_kb = 1000;

		if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite_kb * 10124){
			//Esta es la ruta donde copiaremos la imagen
			//Recuerden que deben crear un directorio con este mismo nombre
			//En el mismo lugar donde se encuentra el archivo subir.php
			$rutaImagen = "../imagenes/candidatos/" . $_FILES['imagen']['name'];
			//Comprovamos si este archivo existe para no volverlo a copiar.
			//Pero si quieren pueden obviar esto si no es necesario.
			//Oh pueden darle otro nombre para que no sobreescriba el actual.
			if (!file_exists($rutaImagen)){
				//Aqui movemos el archivo desde la ruta temporal a nuestra ruta
				//Usamos la variable $resultado para almacenar el resultado del proceso de mover el archivo
				//Almacenara true o false
				$resultado = @move_uploaded_file($_FILES["imagen"]["tmp_name"], $rutaImagen);
				if ($resultado){
					echo "<script language='javascript'>alert('Imagen subida satisfactorimente.')</script>";
				} else {
					echo "<script language='javascript'>alert('Ocurrio un error al subir la imagen.')</script>";
				}
			} else {
				// echo $_FILES['imagen']['name'] . ", Este archivo existe";
				   echo "<script language='javascript'>alert('Esta imagen ya existe.')</script>";
			}
		} else {
			echo "<script language='javascript'>
			alert('Archivo no permitido, es tipo de archivo prohibido o excede el tamano de $limite_kb Kilobytes')
			</script>";
		}
	}
	

	$sql="insert identificacion(id_rfc, puesto, nombre, direccion, fecha, edad, estadocivil, telefono, email, nivelacademico, rutaImagen) 
	values('$clave','$puesto','$nombre','$direccion','$fecha','$edad','$estadocivil','$telefono','$email','$nivelacademico','$rutaImagen')";
	$registro=mysqli_query($conexion,$sql);
	if(!$registro)
	{
		echo"
		<script language='javascript'>
		alert('ERROR AL GUARDAR DATOS')
		window.location='../formularioIdentificacion.html'
		</script>";
		exit();
		}
		else
		{
		echo"
		<script language='javascript'>
		alert('DATOS DE IDENTIFIACION ENVIADOS CORRECTAMENTE')
		window.location='../formularioDocumentos.php'
		</script>";
	}
?>