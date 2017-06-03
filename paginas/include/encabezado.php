<!DOCTYPE html>
<html>
<head> 
	<title>LinkApages</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="programacion,videos,imagenes,Programacion Web,Web Programacion">
	<meta name="description" content="Este sito.">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">
	<link href="../css/estilos.css" rel="stylesheet">
	<link href="../css/gridview.css" rel="stylesheet">
	<script src="../scripts/botones.js"></script>
	<link rel="icon" href="../imagenes/favicon.ico">
</head>  
<body onload="inicializar()">  
	<div id="div_principal">
		<header> 
			<?php session_start(); ?>
			<div class="renglon">
				<div class="col-6"> 
					<h1> LinkAPage</h1>
				</div>
				<div class="col-6"> 
					<?php 
					if(isset($_SESSION["nombreusuario"]))
					{
						echo "
						
						<a class='ingresar'   href='salir.php' >Te has identificado como:".$_SESSION["nombreusuario"]."(Salir)</a>
						";
					}
					else
					{
						echo "
						<a class='ingresar' href='ingresar.php' style='float: right;'>No te has identificado(entrar)</a>
						";
					}
					?>
				</div>
			</div>
		</header>   
		<div class="renglon"> 
			<nav class="col-12"> 
				<ul>
					<li class="menu-item"> <a href="index.php"> PRINCIPAL </a>
					</li>	
					<li  class="menu-item"> <a href="#"> CUENTA </a> 
						<ul class="submenu">


							<?php 
							if(isset($_SESSION["nombreusuario"]))
							{
								echo ' <li> <a href="ingresar.php">Preferencias</a></li> 
								<li> <a href="salir.php">Salir</a></li> ';
							}
							else
							{
								
								echo '
								<li> <a href="registro.php">Registrarse</a></li>
								<li> <a href="ingresar.php">Ingresar</a></li>';
							}
							?>



							
						</ul>
					</li>	
					<li  class="menu-item"> <a href="#">AYUDA</a>
						<ul class="submenu">
							<li> <a href="mapa.php"> Mapa del sitio </a></li>
							<li> <a href="#"> Contacto </a></li>
							<li> <a href="acerca.php"> Acerca de... </a></li>		
						</ul>
					</li>	
					<?php
					if(isset($_SESSION["nombreusuario"]))
					{
						if($_SESSION["tipo"]==2)
						{
							echo '
							<li  class="menu-item"> <a href="#">ADMINISTRACION</a>
								<ul class="submenu">
									<li> <a href="usuarios.php"> Ver Usuarios </a></li>		
								</ul>
							</li>
							';
						}
					}
					?>
				</ul>
			</nav>
		</div>
		<main>	
