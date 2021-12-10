<?php
	include("baseDatos.php");

	$compras = array();
		
	$sql="SELECT * FROM compras WHERE idUser =".$_SESSION['idUser']." ORDER BY Fecha DESC";
	$result=mysqli_query($conexion,$sql);
		
	while($row = mysqli_fetch_assoc($result)){
		array_push($compras, $row);
	}
	$count = mysqli_num_rows($result);
?>