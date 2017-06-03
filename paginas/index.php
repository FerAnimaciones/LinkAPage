<?php include 'include/encabezado.php';?>
<div class="renglon"> 
	<article class="Principal">
		<?php 
		if(isset($_SESSION["nombreusuario"]))
		{
			echo '<a href="sugerencias.php"> <h2 > ¡Comparte aquí tus Links! </h2>  </a> ';
		}
		else
		{
			echo '<a href="ingresar.php"> <h2 > ¡Comparte aquí tus Links! </h2>  </a> ';
		}
		include "include/conectar.php";

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

	</article>
</div>
<div class="renglon">
	<div class="margenes col-6">
		<article class="Categoria" id="cat1" >
			<div id="bardiv"> 
				<h2  id="programar">Sitios de videos <img src="../imagenes/video24.png" class="invertir" alt="H" width="25" height="25">   <img  class="imgderecha" src="../imagenes/btnocultar.png" alt="n" width="15" height="15" id="btn1"> </h2> 

			</div> 
			<div id="ul1">
				<?php 
				cargarlinks("Videos",$conexion);
				?>
			</div>
		</article>
	</div>
	<div class="margenes col-6">
		<article class="Categoria " >
			<div id="bardiv"> 
				<h2 id="imagenes">Sitios de Imágenes <img src="../imagenes/camara24.png"  class="invertir" alt="HTML5 Icon" width="25" height="25"> <img    class="imgderecha"  src="../imagenes/btnocultar.png" alt="n" width="15" height="15" id="btn2"></h2>
			</div>
			<?php 
			cargarlinks("Imagenes",$conexion);
			?>
			
		</article>
	</div>
</div>
<div class="renglon">
	<div class="margenes col-6">
		<article class="Categoria " >
			<div id="bardiv"> 
				<h2 id="programar">Sitios para aprender a programar <img src="../imagenes/book24.png" class="invertir" alt="HTML5 Icon" width="25" height="25"><img class="imgderecha"   src="../imagenes/btnocultar.png" alt="n" width="15" height="15" id="btn3">
				</h2>
			</div>
			<?php 
			cargarlinks("Aprende a programar",$conexion);
			?>
		</article>
	</div>
	<div class="margenes col-6">
		<article class="Categoria">
			<div id="bardiv"> 
				<h2 id="programar">Sitios con servicios de web fonts <img src="../imagenes/fonts.png"  alt="HTML5 Icon" width="25" height="25"> <img  class="imgderecha"  src="../imagenes/btnocultar.png" alt="n" width="15" height="15" id="btn4"></h2> 
			</div>
			<?php 
			cargarlinks("Servicio de web fonts",$conexion);
			?>
		</article>	
	</div>
</div>
<?php include 'include/pie.php';?>