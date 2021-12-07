<!-- HECHO POR: Enrique León Geraldo IDS 5 T.M. -->
<?php
	session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BajaShop - Carrito</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" integrity="sha512-BnbUDfEUfV0Slx6TunuB042k9tuKe3xrD6q4mg5Ed72LTgzDIcLPxg6yI2gcMFRyomt+yJJxE+zJwNmxki6/RA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="CSS/styleCarrito.css">
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
		<div class="container-carrito">
			<h1>Carrito</h1>
			<h2>Precio</h2>
			<div class="producto">
				<div class="img-producto">
					<img src="img/Producto10.jpg">
				</div>
				<div class="datos">
					<h3 id="nombre">Hoodie Casual</h3>
					<h4 id="talla">Talla: M</h4>
					<h4 id="categoria">Categoría: Hoodie</h4>
					<h4 id="disponibilidad">Disponible</h4>
					<div class="cantidad">
						<label for="cantidad">Cantidad:</label>
						<select id="cantidad">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
						</select>
					</div>
					<button>Eliminar</button>
				</div>
				<div class="precio">
					<h3 id="precio">$474.00 MXN</h3>
				</div>
			</div>
			<div class="producto">
				<div class="img-producto">
					<img src="img/Producto5.jpg">
				</div>
				<div class="datos">
					<h3 id="nombre">Conjunto Casual</h3>
					<h4 id="talla">Talla: M</h4>
					<h4 id="categoria">Categoría: Conjunto</h4>
					<h4 id="disponibilidad">Disponible</h4>
					<div class="cantidad">
						<label for="cantidad">Cantidad:</label>
						<select id="cantidad">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
						</select>
					</div>
					<button>Eliminar</button>
				</div>
				<div class="precio">
					<h3 id="precio">$1299.00 MXN</h3>
				</div>
			</div>
			<div class="resumen">
				<div class="subtotal">
					<h3 class="regular">Subtotal (2 productos):</h3>
					<h3 class="bold">$1773.00 MXN</h3>
				</div>
				<div class="envio">
					<h3 class="regular">Costo de entrega:</h3>
					<h3 class="bold">Sin costo</h3>
				</div>
				<div class="pagar">
					<button>Proceder al pago</button>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer">
		<h2>© 2021, BajaShop. Todos los derechos reservados.</h2>
	</footer>
</body>
</html>