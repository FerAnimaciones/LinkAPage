<?php
include 'include/encabezado.php';
include 'include/validacion.php';
$nombrecompelto =validar($_POST["nomcom"],"Nombre");
$nombreusuario=validar($_POST["user"],"Usuario");
$contrasena=validar($_POST["contrasena"],"Contraseña");
$correo=validar($_POST["correo"],"Correo Electronico");
$fecha=validar($_POST["nacimiento"],"Fecha Nacimiento");
if($nombrecompelto !=null && $nombreusuario !=null && $contrasena !=null && $correo !=null && $fecha !=null ) 
{
	require("include/conectar.php");	
	$sql = "insert into usuarios values (0,'$nombrecompelto','$nombreusuario','$contrasena','$correo','$fecha',1)";
	mysqli_set_charset($conexion, "utf8");
	$resultado = mysqli_query($conexion, $sql);	
	if($resultado == true){
		echo "<div class='panelMensajes'> <h3> El nuevo usario se creo correctamente </h3>  </div>";
	}
	else{
		echo "<div class='panelMensajes'> Ocurrió un error: ". mysqli_error($conexion) ."</div> ";
	}
	mysqli_close($conexion);
}
else {
	header("location: index.php");
}
include 'include/pie.php';
?>