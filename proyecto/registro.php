<!-- HECHO POR: Enrique León Geraldo IDS 5 T.M. -->
<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BajaShop - Registro</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="CSS/styleRegistro.css">
</head>
<body>
	<header>
		<nav class="navegacion">
			<ul id="menu">
				<li><a href="" id="menu-inicio"><i class="fa fa-bars" aria-hidden="true"></i></a>
					<ul>
						<li><a href="index.php" class="menu-opciones">Inicio</a></li>
						<li><a href="productos.php" class="menu-opciones">Productos</a></li>
						<li><a href="contactanos.php" class="menu-opciones">Contáctanos</a></li>
					</ul>
				</li>
			</ul>
            <div class="logo-nombre">
            	<img src="img/Logo.png">
            	<h1>BajaShop</h1>
            </div>
            <div class="secciones">
            	<ul>
            		<li><a href="index.php">Inicio</a></li>
            		<li><a href="productos.php">Productos</a></li>
            		<li><a href="contactanos.php">Contáctanos</a></li>
            	</ul>
            </div>
            <form action="" class="form">
				<div class="form-control">
					<input type="text" id="buscar" placeholder="Buscar">
					<button class="btn-search"><i class="fas fa-search"></i></button>
				</div>
			</form>
			<div class="inicio-sesion">
				<a href="iniciarSesion.php"><img src="img/Usuario.png"></a>
				<div class="sesion-opciones">
					<?php
						if(isset($_SESSION['correo'])) {
							echo $_SESSION["correo"];
							echo "<a id='registro' href='logica/logout.php'>Cerrar sesión</a>";
						}else{
							echo "
								<a id='inicio' href='iniciarSesion.php'>Iniciar sesión</a>
								<a id='registro' href='registro.php'>Registrarse</a>";
						} 
					?>
				</div>
			</div>
			<div class="carrito">
				<a id="carrito-img" href="carrito.php"><img src="img/Carrito.png"></a>
				<a id="carrito-texto" href="carrito.php">Carrito</a>
			</div>
		</nav>
	</header>
	<main class="container">
		<section class="container-login">
			<div class="container-formulario">
				<form method="POST" action="logica/registrarUsuario.php">
					<h1>Crear cuenta</h1>
					<div class="formulario">
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" placeholder="Tu nombre">
					</div>
					<div class="formulario">
						<label for="apellidoP">Primer apellido</label>
						<input type="text" name="apellidoP" placeholder="Apellido paterno">
					</div>
					<div class="formulario">
						<label for="apellidoM">Segundo apellido</label>
						<input type="text" name="apellidoM" placeholder="Apellido materno">
					</div>
					<div class="formulario">
						<label for="correo">Correo electrónico</label>
						<input type="text" name="correo" placeholder="example@mail.com">
					</div>
					<div class="formulario">
						<label for="password">Contraseña</label>
						<input type="password" name="password" placeholder="Tu contraseña">
					</div>
					<div class="formulario">
						<label for="repassword">Repetir contraseña</label>
						<input type="password" name="repassword" placeholder="Tu contraseña">
					</div>
					<?php
						if (isset($_GET['error'])) {
							switch ($_GET['error']) {
								case '1':
									echo '<div class="formulario"><p>* No pueden quedar campos vacíos.</p></div>';
									break;	
								case '2':
									echo '<div class="formulario"><p>* Los campos Nombre, Primer apellido y Segundo Apellido solo aceptan 25 caracteres como máximo. </p></div>';
									break;	
								case '3':
									echo '<div class="formulario"><p>* Formato del correo no válido.</p></div>';
									break;
								case '4':
									echo '<div class="formulario"><p>* La contraseña solo admite  8 caracteres mínimo y 16 máximo.</p></div>';
									break;	
								case '5':
									echo '<div class="formulario"><p>* Las contraseñas no coinciden.</p></div>';
									break;					
								default:
									break;
							}
						} else if(isset($_GET['success'])) {
							echo '<div class="formulario"><p> - La cuenta ha sido creada exitosamente. -</p></div>';
						}
					?>
					<div class="formulario">
						<button class="btn btn-login">Registrarse</button>
					</div>
				</form>
				<div class="line"></div>
				<div class="register">
					<a href="iniciarSesion.php">¿Ya tienes una cuenta?</a>
				</div>
			</div>
		</section>
	</main>
	<footer class="footer">
		<h2>© 2021, BajaShop. Todos los derechos reservados.</h2>
	</footer>
</body>
</html>