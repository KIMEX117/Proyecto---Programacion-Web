<!-- HECHO POR: Enrique León Geraldo IDS 5 T.M. -->
<?php
	session_start(); 

	if(isset($_SESSION["correo"]) && !empty($_SESSION["correo"])) {
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BajaShop - Iniciar sesión</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="CSS/styleSesion.css">
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
				<form method="POST" action="logica/login.php">
					<h1>Iniciar sesión</h1>
					<div class="formulario">
						<label for="correo">Correo electrónico</label>
						<input type="text" name="correo" placeholder="example@mail.com">
					</div>
					<div class="formulario">
						<label for="password">Contraseña</label>
						<input type="password" name="password" placeholder="Tu contraseña">
					</div>
					<?php
						if (isset($_GET['error'])) {
							switch ($_GET['error']) {
								case '1':
									echo '<div class="formulario"><p>* Falló en la conexión, intente nuevamente.</p></div>';
									break;	
								case '2':
									echo '<div class="formulario"><p>* Correo electrónico inválido.</p></div>';
									break;	
								case '3':
									echo '<div class="formulario"><p>* Contraseña incorrecta.</p></div>';
									break;
								case '4':
									echo '<div class="formulario"><p>* No pueden quedar campos vacíos.</p></div>';
									break;							
								default:
									break;
							}
						}
					?>
					<div class="formulario">
						<button class="btn btn-login">Iniciar sesión</button>
					</div>
				</form>
				<div class="line">
					<span>or</span>
				</div>
				<div class="login-social">
					<button class="btn btn-facebook">Iniciar sesión con Facebook</button>
					<button class="btn btn-google">Iniciar sesión con Google</button>
				</div>
				<div class="line"></div>
				<div class="register">
					<h2>¿No estas registrado todavía? </h2><a href="registro.php">Crear cuenta</a>
				</div>
			</div>
		</section>
	</main>
	<footer class="footer">
		<h2>© 2021, BajaShop. Todos los derechos reservados.</h2>
	</footer>
</body>
</html>