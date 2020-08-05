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
	<li><a href="./?view=home"><i class="fa fa-home"></i> Inicio </a><a> / </a> <a href="./?view=contacto"><i class="fa fa-phone"></i> Contacto </a></li>

</ol>



<center><h3>Contacto</h3></center>
<center><h4>Contacto al Correo lawyerspacesv@gmail.com o al Numero 78102830</h4></center>
<br>
</br>

</div>
</div>

<div class="row">

<div class="col-md-12">
<form>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="de">De:</label>
    <input type="email" class="form-control" id="de" placeholder="name@example.com">
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="para">Para:</label>
    <input type="email" class="form-control" id="para" placeholder="name@example.com">
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="asunto">Asunto</label>
    <input type="text" class="form-control" id="asunto" placeholder="Asunto">
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="numero">Numero de Contacto</label>
    <input type="text" class="form-control" id="numero" placeholder="12345678">
  </div>
  <div class="form-group col-md-12">
  <div class="form-group">
    <label for="msj">Mensaje</label>
    <textarea class="form-control" id="msj" rows="9"></textarea>
  </div>
  <center><button type="submit" class="btn btn-primary">Enviar</button></center>
</form>

</div>
</div>
</div>
<br>
</br>
