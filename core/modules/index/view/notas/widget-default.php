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
	<li><a href="./?view=home"><i class="fa fa-home"></i> Inicio </a><a> / </a> <a href="./?view=notas"><i class="fa fa-pencil"></i> Mis Notas </a></li>

</ol>



<center><h3>Mis Notas</h3></center>



</div>
</div>

<div class="row">

<div class="col-md-12">




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





</div>
</div>
</div>

