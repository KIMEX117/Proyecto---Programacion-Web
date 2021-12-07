<?php
	//session_start(); 
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
					echo $password;
					header('Location: ../iniciarSesion.php?error=3'); //CONTRASEÑA INCORRECTA
				}else{
					session_start();
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

	//CÓDIGO DE EMERGENCIA FUNCIONAL PERO SIN VALIDACIONES
	/*
	$correo = $_POST['correo'];
    $password = $_POST['password'];
    $password = sha1($password);

    $sql = "SELECT * FROM usuarios WHERE Correo = '$correo'";
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_assoc();


    if($row['Correo'] === $correo && $row['Contraseña'] === $password){
        $_SESSION['correo'] = $correo;
        header("Location: index.php");
    }else{
        header("Location: iniciarSesion.php");
    }
	*/
?>