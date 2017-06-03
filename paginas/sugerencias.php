  <?php include 'include/encabezado.php';?>  
  <?php
  if(isset($_SESSION["tipo"]))
  {
    ?>
    <link href="../css/formularios.css" rel="stylesheet">
    <script src="../scripts/sugerencias.js"></script>
    <form method="post" action="sugerencias-manejo.php?idusuario=<?php echo $_SESSION["id"]; ?>&usuario=<?php echo $_SESSION["nombreusuario"]; ?>" id="contenedor">
     <div>
      <div class="renglon">
       <div class="col-6 col-t-6">
        <label id="lb1" >Nombre del Visitante:</label>
      </div>
      <div class="col-6 col-t-6">
        <input id="in1" type="text" name="nombre" size="25"  value="<?php echo $_SESSION["nombreusuario"]; ?>"  disabled="disabled" readonly  />
      </div>
    </div>
    <div class="renglon">
     <div class="col-6 col-t-6">
      <label id="lb2" >Correo del Visitante:</label>
    </div>
    <div class="col-6 col-t-6">
      <input id="in2" type="email" required name="correo" value="<?php echo $_SESSION["correo"]; ?>"  disabled="disabled"  readonly placeholder="correo@dominio.com" />
    </div>
  </div>
  <div class="renglon">
   <div class="col-6 col-t-6">
    <label id="lb3" >Direcion del sitio que sugiere:</label>
  </div>
  <div class="col-6 col-t-6">
    <input id="in3" type="url" required  name="pagina" size="25"  placeholder="www.nombredeldominio.com" />
  </div>
</div>
<div class="renglon">
 <div class="col-6 col-t-6">
  <label id="lb4" >Nombre del sitio que sugiere:</label>
</div>
<div class="col-6 col-t-6">
  <input id="in4" rows="2" cols="26" name="descripcion"  placeholder="Escribe aqui tu descripcion" />
</div>
</div>
<div class="renglon">
 <div class="col-6 col-t-6">
  <label id="lb5"> ¿Qué califacion le darias al sitio que recomiendas?</label>
</div>
<div class="col-6 col-t-6">
  <?php
  require("include/conectar.php");
  echo "<select  id='in5' name='califacion' >";
  $sql = "select * from calificaciones";
  mysqli_set_charset($conexion,"utf8");
  $resultado = mysqli_query($conexion, $sql); 
  if(mysqli_num_rows($resultado) > 0){    
    while($renglon = mysqli_fetch_assoc($resultado)){
      echo "<option value='".$renglon["id_calificacion"]."'>". $renglon['descripcion']."</option>";
    }          
  }
  else{
    echo "<option> NO EXISTEN DATOS</option>";
  }
  echo "</select>";
  ?>
</div>
</div>
<div class="renglon">
 <div class="col-6 col-t-6">
  <label id="lb6" >Clasificacion del sitio que recomiendas:</label>
</div>
<div class="col-6 col-t-6">
  <select id="in6" name="categoria" >
    <?php
    require("include/conectar.php");
    $sql = "select * from categorias";
    mysqli_set_charset($conexion,"utf8");
    $resultado = mysqli_query($conexion, $sql); 
    if(mysqli_num_rows($resultado) > 0){    
      while($renglon = mysqli_fetch_assoc($resultado)){
        echo "<option value='".$renglon["id_categoria"]."'>". $renglon['descripcion']."</option>";
      }          
    }
    else{
      echo "<option> NO EXISTEN DATOS</option>";
    }
    ?>
  </select> 
</div>
</div>
<div class="renglon">
 <div class="col-6 col-t-6 ">
  <label id="lb7" >El sitio sugerido es seguro</label>
</div>
<div class="col-6 col-t-6">
  <input id="in7"  type="checkbox" name="seguridad" required value="Sí"/>
</div>
</div>
<div class="renglon">
 <div class="col-6 col-t-6 ">
  &nbsp;
</div>
<div class="col-6 col-t-6">
  <input type="reset" value="Borrar"/>
  <input type="submit" value="Enviar"/>
</div>
</div>
</div>	
</form>
<?php

}
else
{
  echo '<center><h2  style="color:black;"> No estas autoizado para entrar a esta pagina </h2> </center>';
  header( "refresh:2;url=index.php" ); 
}

include 'include/pie.php';


?>