<?php
	include("baseDatos.php");
	
	if(!empty($_POST['correo']) && !empty($_POST['password'])){
		$correo=$_POST['correo'];
		$sql="SELECT * FROM usuarios WHERE Correo='$correo'";
		$result=mysqli_query($conexion,$sql);
		if ($result) {
			$row=mysqli_fetch_array($result);
			$count=mysqli_num_rows($result);	
			if ($count!=0) {
				$password=sha1($_POST['password']);
				if ($row['Contraseña']!==$password) {
					header('Location: ../iniciarSesion.php?error=3'); //CONTRASEÑA INCORRECTA
				}else{
					session_start();
					$_SESSION['idUser']=$row['idUser'];
					$_SESSION['correo']=$row['Correo'];
					header('Location: ../index.php'); //INICIO DE SESIÓN EXITOSO
				}
			}else{
				header('Location: ../iniciarSesion.php?error=2'); //CORREO INVÁLIDO
			}
		}else{
			header('Location: ../iniciarSesion.php?error=1'); //CONEXIÓN FALLIDA
		}
	}else {
		header('Location: ../iniciarSesion.php?error=4'); //CAMPOS VACÍOS
	}
?>