<?php 
	include("baseDatos.php");
	session_start();

	if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])) {
		if($_REQUEST['action'] == 'remove' && !empty($_REQUEST['id'])) {
			echo "ENTRA AL SEGUNDO IF";
			$idCarrito = $_REQUEST['id'];
			echo $idCarrito;
			$sql = "DELETE FROM `carritotemporal` WHERE `carritotemporal`.`id` =".$idCarrito." and `carritotemporal`.`idUser` = ".$_SESSION['idUser'];
			mysqli_query($conexion,$sql);
			header('Location: ../carrito.php');
		}
	}
?>