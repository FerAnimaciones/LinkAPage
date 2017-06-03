<?php include 'include/encabezado.php';?>
<link href="../css/formularios.css" rel="stylesheet">
<script src="../scripts/login.js"></script>
<form method="post" action="login.php" id="contenedor">
	<div class="renglon">
		<div class="col-6 col-t-6 ">
			<label id="lb1">Nombre de usuario:</label>
		</div>
		<div class="col-6 col-t-6">
			<input id="in1" type="text" name="user"  required />
		</div>
	</div>
	<div class="renglon">
		<div class="col-6 col-t-6 ">
			<label id="lb2">Contraseña:</label>
		</div>
		<div class="col-6 col-t-6">
			<input id="in2" type="password" name="contrasena" required />
		</div>
	</div>
	<div class="renglon">
		<div class="col-6 col-t-6 ">
			&nbsp;
		</div>
		<div class="col-6 col-t-6">
		<input type="submit" value="Entrar"/>
		</div>
	</div>
</form>	
<?php include 'include/pie.php';?>