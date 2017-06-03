<?php include 'include/encabezado.php';?>
<link href="../css/tablas.css" rel="stylesheet">
<div class="renglon" style='padding-top: 20px; padding-bottom: 20px;'> 
	<div class="col-12">
		<?php
		if(isset($_SESSION["tipo"]))
		{
			if($_SESSION["tipo"]==1)
			{
				echo '<center><h2  style="color:black;"> No estas autoizado para entrar a esta pagina </h2> </center>';
				header( "refresh:2;url=index.php" );	
			}else
			{
				echo "<table border='1'>";
				echo "<tr>";
				echo "<th>Nombre </th><th> Usuario </th><th>Correo</th><th colspan='2' >Acciones</th>";
				echo "</tr>";
				require("include/conectar.php");
				$sql = "select id_usuario,nombre, usuario, correo, fecha from usuarios";
				mysqli_set_charset($conexion,"utf8");
				$resultado = mysqli_query($conexion, $sql);	

				if(mysqli_num_rows($resultado) > 0){		
					while($renglon = mysqli_fetch_assoc($resultado)){
						echo "<tr>";
						echo "<td> ".$renglon["nombre"]." </td><td>".$renglon["usuario"]."</td><td>".$renglon["correo"]."</td><td> <a href='borrarusuario.php?iduser=".$renglon["id_usuario"]."'  >Borrar</a></td><td> <a href='editar.php?id=".$renglon["id_usuario"]."&nombre=".$renglon["nombre"]."&usuario=".$renglon["usuario"]."&correo=".$renglon["correo"]."&fecha=".$renglon["fecha"]."'  >Editar</a></td>";
						echo "</tr>";
					}          
				}
				else{
					echo "No se encontró información.";
				}
				echo "</table>";
				mysqli_close($conexion);
			}
		}else
		{
			echo '<center><h2  style="color:black;"> No estas autoizado para entrar a esta pagina </h2> </center>';
			header( "refresh:2;url=index.php" );
		}


		?>
	</div>
</div>
<?php include 'include/pie.php';?>