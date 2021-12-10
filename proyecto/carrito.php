<!-- HECHO POR: Enrique León Geraldo IDS 5 T.M. -->
<?php
	session_start(); 
	if(!isset($_SESSION['idUser'])){
    	header("location: iniciarSesion.php");
	}
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
	<div class="div-Detalle">
		<div id="contDetalle" class="div-Detalle">
			<button id="btnDetalle"><a href="detalleCompras.php">Detalle de compras</a></button>
		</div>
		
	</div>
	<?php include_once('logica/cargarCarrito.php');?>
	<main class="<?php if(empty($productosCarrito)||($count<=1)){ echo "container-vacio"; }else if($count>1){ echo "container";} ?>">
		<div class="container-carrito">
			<h1>Carrito</h1>
			<h2>Precio</h2>
			<?php 
				if(empty($productosCarrito)){
					echo "<span class='producto-vacio'>No se han añadido productos todavía.</span>";
				}else {
					foreach ($productosCarrito as $producto) { ?>
					<div class="producto">
						<div class="img-producto">
							<?php $srcImg = "img/".$producto['img']; ?>
							<img src="<?php echo $srcImg; ?>">
						</div>
						<div class="datos">
							<h3 id="nombre"><?php echo $producto['Nombre'] ?></h3>
							<h4 id="talla"><?php echo "Talla: ".$producto['Talla'] ?></h4>
							<h4 id="categoria"><?php echo "Categoría: ".$producto['Categoria'] ?></h4>
							<h4 id="disponibilidad">Disponible</h4>
							<div class="cantidad">
								<h4 id="Promoción">Promo: Buenfin2021</h4>
							</div>
							<button><a id="btnEliminar" href="logica/eliminarCarrito.php?action=remove&id=<?php echo $producto["id"]; ?>">Eliminar</a></button>
						</div>
						<div class="precio">
							<h3 id="precio"><?php echo "$".$producto['Precio'].".00" ?></h3>
						</div>
					</div>
			<?php }} ?>
			<div class="resumen">
				<div class="subtotal">
					<h3 class="regular"><?php if(!empty($count)){ echo "Subtotal (".$count." productos):"; }else { echo "Subtotal (0 productos):"; }?></h3>
					<h3 class="bold"><?php if(!empty($total)) { echo "$".$total[0].".00 MXN"; }else { echo "$0.00 MXN"; }?></h3>
				</div>
				<div class="envio">
					<h3 class="regular">Costo de entrega:</h3>
					<h3 class="bold"><?php if(!empty($count)){ echo "Sin costo"; }else { echo "Por definir"; }?></h3>
				</div>
				<div class="pagar">
					<button><a id="btnPagar" href="logica/pagarCarrito.php?action=pay">Proceder al pago</a></button>
				</div>
			</div>
		</div>
	</main>
	<footer class="footer">
		<h2>© 2021, BajaShop. Todos los derechos reservados.</h2>
	</footer>
</body>
</html>