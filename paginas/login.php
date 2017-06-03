<?php
include 'include/encabezado.php';
include 'include/validacion.php';


$USUARIO =validar($_POST["user"],"USUARIO");
$CONTRASENA=validar($_POST["contrasena"],"CONTRASENA");
if($USUARIO !=null && $CONTRASENA !=null) 
{
	require("include/conectar.php");
	$sql = "select * from usuarios where usuario='$USUARIO' and contrasena='$CONTRASENA';";
	mysqli_set_charset($conexion,"utf8");
	$resultado = mysqli_query($conexion, $sql);	
	if(mysqli_num_rows($resultado) > 0){		
		while($renglon = mysqli_fetch_assoc($resultado)){
			$_SESSION["id"]=$renglon["id_usuario"];
			$_SESSION["nombreusuario"] = $renglon["nombre"];
			$_SESSION["tipo"] = $renglon["tipo"];
			$_SESSION["correo"] = $renglon["correo"];
			echo "<div class='panelMensajes'> <h3> Bienvenido    ".$renglon["nombre"]." </h3>
				<p>En un momento seras redirigido</p>

			 </div>";
			header( "refresh:2;url=index.php" );	
		}
	}
	else{
		echo "<div class='panelMensajes'> El usuario no existe o la contraseña es incorrecta.</div> ";
	}
	mysqli_close($conexion);
}
else {
	echo "<div class='panelMensajes'> <h3> Error no ingreso nada.</h3></div> ";
}
include 'include/pie.php';
?>