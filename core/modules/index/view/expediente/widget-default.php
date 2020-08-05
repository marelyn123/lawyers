<?php 


if(!isset($_SESSION["user_id"])){ Core::redir("./");}

$alphabeth ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWYZ1234567890_-";
$token = "";
for($i=0;$i<6;$i++){
    $token .= $alphabeth[rand(0,strlen($alphabeth)-1)];
}
$_SESSION["tkn"]=$token;
$folder=null;
if(isset($_GET["folder"]) && $_GET["folder"]!=""){
	$folder = FileData::getByCode($_GET["folder"]);
}

?>


<div class="container">


<div class="row">
<div class="col-md-12">
<ol class="breadcrumb">
	<li><a href="./?view=home"><i class="fa fa-home"></i> Inicio </a><a> / </a> <a href="./?view=expediente"><i class="fa fa-users"></i> Mis Expedientes </a></li>

</ol>


<center><h3>Nuevo expediente</h3></center>
<br>
</br>
</div>
</div>

<div class="row">

<div class="col-md-14">
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="id_expe">ID expediente</label>
      <input type="text" class="form-control" id="id_expe" placeholder="ID Expediente">
    </div>
    <div class="form-group col-md-6">
      <label for="dui">DUI</label>
      <input type="text" class="form-control" id="dui" placeholder="DUI">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nombres">Nombres:</label>
      <input type="text" class="form-control" id="nombres" placeholder="Nombres">
    </div>
    <div class="form-group col-md-6">
      <label for="apellidos">Apellidos:</label>
      <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="area">Area:</label>
      <input type="text" class="form-control" id="area" placeholder="Area">
    </div>
    <div class="form-group col-md-6">
      <label for="delito">Delito:</label>
      <input type="text" class="form-control" id="delito" placeholder="Delito">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="nom_conta">Nombre de Contacto:</label>
      <input type="text" class="form-control" id="nom_conta" placeholder="Nombre de Contacto">
    </div>
    <div class="form-group col-md-6">
      <label for="num_conta">Numero de Contacto:</label>
      <input type="text" class="form-control" id="num_conta" placeholder="Numero de Contacto">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="depa">Departamento</label>
      <select id="depa" class="form-control">
        <option selected>Departamentos</option>
        <option>Ahuachapán</option>
		<option>Cabañas</option>
		<option>Chalatenango</option>
		<option>Cuscatlán</option>
		<option>La Libertad</option>
		<option>La Paz</option>
		<option>La Unión</option>
		<option>Morazán</option>
		<option>San Miguel</option>
		<option>San Salvador</option>
		<option>San Vicente</option>
		<option>Santa Ana</option>
		<option>Sonsonate</option>
		<option>Usulután</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="muni_dire">Municipio/Direccion:</label>
      <input type="text" class="form-control" id="muni_dire" placeholder="Municipio/Direccion">
    </div>
    <br>
   </br>
  <center><button type="submit" class="btn btn-primary">Registrar</button></center>
</form>
<br>
</br>


<!-- librerias para ckeditor  por si te quedas sin internet o dejan de funcinar
las tienes en tu servidor XD -->
<script src="./ckeditor/ckeditor.js"></script>
<script src="./ckeditor/samples/js/sample.js"></script>
<!-- fin de llamar a las librerias -->

<main>
	<div class="adjoined-bottom">
		<div class="grid-container">
			<div class="grid-width-100">
				<div id="editor">
					<h1></h1>
				</div>
			</div>
		</div>
	</div>
</main>
<script>
	initSample();
</script>


<br>
</br>
<br>
</br>
<br>
</br>
</div>
</div>
</div>

