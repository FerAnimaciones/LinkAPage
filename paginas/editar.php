<?php include 'include/encabezado.php';?>
<link href="../css/formularios.css" rel="stylesheet">
<script src="../scripts/registroeditar.js"></script>
<form method="post" action="actualizar.php" id="contenedor">
	<?php
	$id=$_GET["id"];
	$nombre=$_GET["nombre"];
	$usuario=$_GET["usuario"];
	$correo=$_GET["correo"];
	$fecha=$_GET["fecha"];

	?>
	<div class="renglon">
		<div class="col-6 col-t-6">
			<label id="lb1" >Nombre Completo:</label>
		</div>
		<div class="col-6 col-t-6">
			<input id="in1" type="text" name="nomcom" value="<?php echo $nombre; ?>"  required />
		</div>
	</div>
	<div class="renglon">
		<div class="col-6 col-t-6 ">
			<label id="lb2">Nombre de usuario:</label>
		</div>
		<div class="col-6 col-t-6">
			<input id="in2" type="text" name="user" value="<?php echo $usuario; ?>" required />
		</div>
	</div>
	<div class="renglon">
		<div class="col-6 col-t-6 ">
			<label id="lb3">Contraseña:</label>

		</div>
		<div class="col-6 col-t-6">
			<input id="in3" type="password" name="contrasena" required />
		</div>
	</div>

	<div class="renglon">
		<div class="col-6 col-t-6 ">
			<label id="lb5">Correo:</label>
		</div>
		<div class="col-6 col-t-6">
			<input id="in5" type="email" name="correo" value="<?php echo $correo; ?>"  required  placeholder="correo@dominio.com" /> 
		</div>
	</div>
	<div class="renglon">
		<div class="col-6 col-t-6 ">
			<label id="lb7">Fecha de nacimiento:</label>
		</div>
		<div class="col-6 col-t-6">
			<input type="date" id="in7" name="nacimiento"  value="<?php echo $fecha; ?>" required />
		</div>
	</div>
	<div class="renglon">
		<div class="col-6 col-t-6 ">
			&nbsp;
		</div>
		<div class="col-6 col-t-6">
			<input id="id" type="text" style="display: none" name="id" value="<?php echo $id; ?>"  required />
			<input type="submit" value="Guardar"/>
		</div>
	</div>
</form>	
<?php include 'include/pie.php';?>