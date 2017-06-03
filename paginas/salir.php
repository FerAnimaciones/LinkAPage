<?php 
session_start();
$_SESSION = array();
session_destroy();
include 'include/encabezado.php';
echo "<div class='panelMensajes'> <h2 style='color : black;'> Has serrado sesion </h></div>";
header( "refresh:2;url=index.php" );	
include 'include/pie.php';
?>	