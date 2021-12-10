<?php
	session_start(); 
	include("baseDatos.php");

	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		$nombre = $_POST['nombre'];
		$apellidoP = $_POST['apellidoP'];
		$apellidoM = $_POST['apellidoM'];
		$correo = $_POST['correo'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
	}

	if(!empty($nombre) && !empty($apellidoP) && !empty($apellidoM) && !empty($correo) && !empty($password) && !empty($repassword)) {
		if(strlen($nombre)<=25 && strlen($apellidoP)<=25 && strlen($apellidoM)<=25){
			if(filter_var($correo, FILTER_VALIDATE_EMAIL)) {
				if (strlen($password)>=8 || strlen($password<=16)) {
					if($password===$repassword) {
						$query = "INSERT INTO usuarios (Nombre, PrimerApellido, SegundoApellido, Correo, Contraseña) VALUES ('$nombre', '$apellidoP', '$apellidoM', '$correo', sha1('$password'))"; 
						$resultado = mysqli_query($conexion,$query);
						header('Location: ../registro.php?success=true');
					}else {
						header('Location: ../registro.php?error=5'); //CONTRASEÑAS DIFERENTES
					}
				}else {
					header('Location: ../registro.php?error=4'); //CONTRASEÑA MIDE MÍNIMO 8 Y MÁXIMO 16
				}
			}else{
				header('Location: ../registro.php?error=3'); //FORMATO DE CORREO NO VÁLIDO
			}
		}else {
			header('Location: ../registro.php?error=2'); //NOMBRE Y APELLIDOS DEMASIADO LARGO, MÁXIMO 25
		}
	}else {
		header('Location: ../registro.php?error=1'); //CAMPOS VACIOS
	}
?>