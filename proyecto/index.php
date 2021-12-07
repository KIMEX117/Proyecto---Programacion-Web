<!-- HECHO POR: Enrique León Geraldo IDS 5 T.M. -->
<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BajaShop - Inicio</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="CSS/style.css">
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
		<div class="banners">
			<img src="img/Banner1.png">
			<img src="img/Banner2.jpg">
		</div>
		<div class="productos">
			<div id="ofertas" class="ofertas">
				<h2>Ofertas</h2>
				<div class="elementos">
					<button class="btn-proximo"><img class="proximo-izq" src="img/Proximo.png"></button>
					<div class="container-grid">
						<div class="grid">
							<img src="img/Producto1.jpg">
							<h3>$199.00 MXN</h3>
							<h4>$249.00 MXN</h4>
						</div>
						<div class="grid">
							<img src="img/Producto2.jpg">
							<h3>$199.00 MXN</h3>
							<h4>$249.00 MXN</h4>
						</div>
						<div class="grid">
							<img src="img/Producto3.jpg">
							<h3>$180.00 MXN</h3>
							<h4>$270.00 MXN</h4>
						</div>
						<div class="grid">
							<img src="img/Producto4.jpg">
							<h3>$199.00 MXN</h3>
							<h4>$249.00 MXN</h4>
						</div>
					</div>
					<button class="btn-proximo"><img src="img/Proximo.png"></button>
				</div>
			</div>
			<div id="conjuntos" class="ofertas">
				<h2>Conjuntos destacados</h2>
				<div class="elementos">
					<button class="btn-proximo"><img class="proximo-izq" src="img/Proximo.png"></button>
					<div class="container-grid">
						<div class="grid">
							<img src="img/Producto5.jpg">
							<h3>$1299.00 MXN</h3>
							<span></span>
						</div>
						<div class="grid">
							<img src="img/Producto6.jpg">
							<h3>$1299.00 MXN</h3>
							<span></span>
						</div>
						<div class="grid">
							<img src="img/Producto7.jpg">
							<h3>$1299.00 MXN</h3>
							<span></span>
						</div>
						<div class="grid">
							<img src="img/Producto8.jpg">
							<h3>$1299.00 MXN</h3>
							<span></span>
						</div>
					</div>
					<button class="btn-proximo"><img src="img/Proximo.png"></button>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer">
		<h2>© 2021, BajaShop. Todos los derechos reservados.</h2>
	</footer>
</body>
</html>

