<?php
	include("baseDatos.php");
	session_start();

	$sql = "SELECT * FROM `carritotemporal` WHERE idUser=".$_SESSION['idUser'];
	$result=mysqli_query($conexion,$sql);
	$count = mysqli_num_rows($result);

	if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])) {
		if($_REQUEST['action'] == 'pay' && ($count!=0)) {
			if($result) {
				while($row=mysqli_fetch_array($result)){
					$idCarrito = $row['id'];
					$idUser = $row['idUser'];
					$idItem = $row['idItem'];
					$nombre = $row['Nombre'];
					$talla = $row['Talla'];
					$categoria = $row['Categoria'];
					$precio = $row['Precio'];
					$img = $row['img'];
					$query="INSERT INTO compras(idUser, idItem, Nombre, Talla, Categoria, Precio, img, Fecha) VALUES('$idUser', '$idItem', '$nombre', '$talla', '$categoria', '$precio', '$img', now())";
					mysqli_query($conexion,$query);
				}
				header("location: ../detalleCompras.php");
			}
			$query = "DELETE FROM `carritotemporal` WHERE `carritotemporal`.`idUser` = $idUser";
			mysqli_query($conexion,$query);
		} else if($_REQUEST['action'] == 'pay' && ($count==0)) {
			header("location: ../productos.php");
		}
	} 
?>