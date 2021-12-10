<?php
	include("baseDatos.php");
	session_start();

	$idUser = $_SESSION['idUser'];
	if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])) {
		if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['id'])) {
			$idItem = $_REQUEST['id'];
			$sql="SELECT * FROM productos WHERE id=".$idItem;
			$result=mysqli_query($conexion,$sql);
			if($result) {
				if($row=mysqli_fetch_array($result)){
					$idItem = $row['id'];
					$nombre = $row['Nombre'];
					$talla = $row['Talla'];
					$categoria = $row['Categoria'];
					$precio = $row['Precio'];
					$img = $row['img'];
				}
			}
			var_dump($idUser);
			$query="INSERT INTO carritotemporal(idUser, idItem, Nombre, Talla, Categoria, Precio, img) VALUES('$idUser', '$idItem', '$nombre', '$talla', '$categoria', '$precio', '$img')";
			mysqli_query($conexion,$query);
			header('Location: ../productos.php');
		}
	}
?>