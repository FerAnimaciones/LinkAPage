<?php
include 'include/encabezado.php';
include 'include/validacion.php';

$idusuario=$_GET["idusuario"];
$usuario=$_GET["usuario"];
$pagianarecomendada=validar($_POST["pagina"],"Pagina Recomendada");
$descripcion=validar($_POST["descripcion"],"descripcion");
$califacion=validar($_POST["califacion"],"Calificacion");  
$categoria=validar($_POST["categoria"],"Categoria"); 
$seguridad=isset($_POST["seguridad"]); 
if($seguridad==""){
	$seguridad="No";//
}
else
{
	$seguridad="Si";
}
$seguridad=validar($seguridad,"seguridad");
if( $pagianarecomendada !=null && $descripcion  !=null && $califacion !=null && $categoria !=null && $seguridad !=null  ) 
{
	require("include/conectar.php");	
	$sql = "insert into links values (0,'$pagianarecomendada','$descripcion',$idusuario,$categoria,$califacion)";
	mysqli_set_charset($conexion, "utf8");
	$resultado = mysqli_query($conexion, $sql);	
	if($resultado == true){
		echo "<div class='panelMensajes'> <h3>!Gracias por tu link </br> $usuario ¡</h3></div>";
	}
	else{
		echo "<div class='panelMensajes'> Ocurrió un error: ". mysqli_error($conexion) ." </br> El mensaje no se publico correctamente.</div> ";
	}
	mysqli_close($conexion);
}
else {
	header("location: index.php");
}
include 'include/pie.php';
?>