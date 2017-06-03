<?php
 /*
	DEFINE ("SERVIDOR",    "localhost");
	DEFINE ("USUARIO",     "id165528_fernando");
	DEFINE ("CONTRASENA",  "fernando"         );
	DEFINE ("BASEDEDATOS", "id165528_linkapage");
	*/
/*  */
	DEFINE ("SERVIDOR",    "localhost");
	DEFINE ("USUARIO",     "root"     );
	DEFINE ("CONTRASENA",  ""         );
	DEFINE ("BASEDEDATOS", "linkapage");

	$conexion = mysqli_connect(SERVIDOR, USUARIO, CONTRASENA, BASEDEDATOS);
	if ($conexion == false) {
		die("Falló la conexión: " . mysqli_connect_error());
	}  
?>
