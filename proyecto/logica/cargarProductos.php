<?php
	include("baseDatos.php");
	
	$productos = array();
		
	$sql="SELECT * FROM productos";
	$result=mysqli_query($conexion,$sql);
		
	while($row = mysqli_fetch_assoc($result)){
		array_push($productos, $row);
	}
?>
