<!-- HECHO POR: Enrique León Geraldo IDS 5 T.M. -->
<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BajaShop - Contáctanos</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="CSS/styleContactanos.css">
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
		<div class="container-form">
			<h2>Formulario de contacto</h2>
			<form class="formulario">
				<label for="nombre">Nombre</label>
				<input type="text" name="nombre" placeholder="Nombre completo">
				<label for="email">Email</label>
				<input type="text" name="email" placeholder="example@mail.com">
				<label>Comentarios</label>
				<textarea></textarea>
				<button>Enviar</button>
			</form>
		</div>
		<div class="info-general">
			<h2>Encuentranos:</h2>
			<div class="container-info">
				<div class="sucursal">
					<div class="direccion">
						<img src="img/Sucursal.png">
						<h3>Blv. 5 de Febrero, Plaza San Diego, local 5, 23000, La Paz, B.C.S.</h3>
					</div>
					<div class="telefono">
						<img src="img/Telefono.png">
						<h3>612 122 2696</h3>
					</div>
					<div class="horario">
						<img src="img/Horario.png">
						<h3>Lunes a Viernes: 10:00am - 07:00pm, Sábados: 10:00am - 05:00pm</h3>
					</div>
				</div>
				<div class="google-maps">
					<div class="ubicación">
						<img src="img/Google-maps.png">
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer">
		<h2>© 2021, BajaShop. Todos los derechos reservados.</h2>
	</footer>
</body>
</html>