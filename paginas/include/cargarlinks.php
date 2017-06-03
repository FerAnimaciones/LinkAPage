<?php
function cargarlinks($categoria,$conexion)
{
	echo "<ul>";
	$sql = "select li.url,li.descripcion from links as li, categorias as cat where cat.id_categoria=li.id_categoria and cat.descripcion='$categoria'";
	mysqli_set_charset($conexion,"utf8");
	$resultado = mysqli_query($conexion, $sql);	
	if(mysqli_num_rows($resultado) > 0){	

		while($renglon = mysqli_fetch_assoc($resultado)){
			echo "<li><a href='".$renglon["url"]."' >".$renglon["descripcion"]."</a></li>" ;
		}   

	}
	else{

		echo "No se encontró información.";
	}
	echo "</ul>";  
}
?>