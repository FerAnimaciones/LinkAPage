<?php
include 'include/encabezado.php';
if(isset($_SESSION["tipo"]))
{
	if($_SESSION["tipo"]==1)
	{
		echo '<center><h2  style="color:black;"> No estas autoizado para entrar a esta pagina </h2> </center>';
		header( "refresh:2;url=index.php" );	
	}
	else
	{
		$id=$_GET["iduser"];
		require("include/conectar.php");	
		$sql = "delete from usuarios where id_usuario=$id;";
		mysqli_set_charset($conexion, "utf8");
		$resultado = mysqli_query($conexion, $sql);	
		if($resultado == true){
			echo "<div class='panelMensajes'> <h3> El Usario se elimino correctamente </h3> </div>";
		}
		else{
			echo "<div class='panelMensajes'> Ocurrió un error: ". mysqli_error($conexion) ."</div> ";
		}
		mysqli_close($conexion);
	}

}else
{
	echo '<center><h2  style="color:black;"> No estas autoizado para entrar a esta pagina </h2> </center>';
	header( "refresh:2;url=index.php" );
}
include 'include/pie.php';
?>