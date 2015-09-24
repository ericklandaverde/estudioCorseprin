<?php
session_start();
	require_once('db.php');
	$email = $_POST['email'];
	$password = $_POST['password'];
	if($result = mysqli_query($conexion,'SELECT id, nombre, password, email FROM usuarios WHERE email=\''.$email.'\'')){
		$row = mysqli_fetch_array($result);
		if($row["password"] == $password){
			$_SESSION['usuario'] = $result;
			$_SESSION['id']=$row["id"];
			$_SESSION['nombre']=$row["nombre"];
			$_SESSION['email']=$row["email"];
			if ($row['email']== 'admin@gmail.com') {
				$_SESSION['admin']=1;
			}
			echo json_encode(array('error'=>false));
		}else{
			echo json_encode(array('error'=>true));
		}
	}else{
			echo json_encode(array('error'=>true));
		}
?>