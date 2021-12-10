<?php
	include("baseDatos.php");

	$productosCarrito = array();
	$count = array();
	$total = array();	

	$sql = "SELECT * FROM `carritotemporal` WHERE idUser=".$_SESSION['idUser'];
	$result = mysqli_query($conexion,$sql);
	if($result) {
		$count = mysqli_num_rows($result);
		if($count != 0) {
			while($row = mysqli_fetch_assoc($result)){
				array_push($productosCarrito, $row);
			} 
			$sql = "SELECT SUM(Precio) FROM carritotemporal WHERE idUser=".$_SESSION['idUser'];
			$suma = mysqli_query($conexion,$sql);
			$total = mysqli_fetch_array($suma);
		}
	}
?>