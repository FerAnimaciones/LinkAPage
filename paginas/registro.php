<?php include 'include/encabezado.php';?>
	<link href="../css/formularios.css" rel="stylesheet">
	<script src="../scripts/registro.js"></script>
	<form method="post" action="registro-manejo.php" id="contenedor">
					<div class="renglon">
				<div class="col-6 col-t-6">
					<label id="lb1" >Nombre Completo:</label>
				</div>
				<div class="col-6 col-t-6">
					<input id="in1" type="text" name="nomcom"  required />
				</div>
			</div>
			<div class="renglon">
				<div class="col-6 col-t-6 ">
					<label id="lb2">Nombre de usuario:</label>
				</div>
				<div class="col-6 col-t-6">
					<input id="in2" type="text" name="user"  required />
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
					<label id="lb4">Repetir Contraseña:</label>
				</div>
				<div class="col-6 col-t-6">
					<input type="password" id="in4" name="rContrasena" required /> 
				</div>
			</div>

			<div class="renglon">
				<div class="col-6 col-t-6 ">
					<label id="lb5">Correo:</label>
				</div>
				<div class="col-6 col-t-6">
					<input id="in5" type="email" name="correo" required  placeholder="correo@dominio.com" /> 
				</div>
			</div>

			<div class="renglon">
				<div class="col-6 col-t-6 ">
					<label id="lb6" >Repetir Correo:</label>
				</div>
				<div class="col-6 col-t-6">
					<input type="email" id="in6" name="rCorreo"  required  placeholder="correo@dominio.com" />
				</div>
			</div>
			<div class="renglon">
				<div class="col-6 col-t-6 ">
					<label id="lb7">Fecha de nacimiento:</label>
				</div>
				<div class="col-6 col-t-6">
					<input type="date" id="in7" name="nacimiento" required />
				</div>
			</div>
			<div class="renglon">
				<div class="col-6 col-t-6 ">
					<label id="lb8">No soy un robot </label>
				</div>
				<div class="col-6 col-t-6">
					<input type="checkbox" id="in8" required name="robot" required /> 
				</div>
			</div>
			<div class="renglon">
				<div class="col-6 col-t-6 ">
					&nbsp;
				</div>
				<div class="col-6 col-t-6">
					<input  class="botones" type="reset" value="Borrar"/>
					<input type="submit" value="Enviar"/>
				</div>
			</div>
	</form>	
<?php include 'include/pie.php';?>