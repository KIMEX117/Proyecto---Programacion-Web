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
						$_SESSION["correo"] = $correo;
						header("location: ../index.php");
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


	/*if(!empty($_POST['correo']) && !empty($_POST['password'])){
		$correo=$_POST['correo'];
		$sql="SELECT * FROM usuarios WHERE Correo='$correo'";
		$result=mysqli_query($conexion,$sql);
		if ($result) {
			$row=mysqli_fetch_array($result);
			$count=mysqli_num_rows($result);	
			if ($count!=0) {
				$password=sha1($_POST['password']);
				if ($row['Contraseña']!==$password) {
					header('Location: iniciarSesion.php?error=3');
				}else{
					session_start();
					$_SESSION['correo']=$row['Correo'];
					header('Location: index.php');
				}
			}else{
				header('Location: iniciarSesion.php?error=2');
			}
		}else{
			header('Location: iniciarSesion.php?error=1');
		}
	}else {
		header('Location: iniciarSesion.php?error=4');
	}*/
	







	/*session_start();
	include("baseDatos.php");

	if($_SERVER['REQUEST_METHOD'] === 'POST') {
		$nombre = $_POST['nombre'];
		$apellidoP = $_POST['apellidoP'];
		$apellidoM = $_POST['apellidoM'];
		$correo = $_POST['correo'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];
		
	}

	if(sha1($password)===sha1($repassword)){

		$query = "INSERT INTO usuarios (Nombre, PrimerApellido, SegundoApellido, Correo, Contraseña) VALUES ('$nombre', '$apellidoP', '$apellidoM', '$correo', sha1('$password'))"; 

		$resultado = mysqli_query($conexion,$query);

		$_SESSION["correo"] = $correo;
		header("location:index.php");
		
	}else {
		header("location:registro.php");
	}*/
?>