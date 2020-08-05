<?php


if(isset($_GET["tkn"]) && $_GET["tkn"]==$_SESSION["tkn"]){
	$file = FileData::getByCode($_GET["id"]);

	$url = "storage/data/".$_SESSION["user_id"]."/";
	$filename = $file->filename;

	if(!$file->is_folder)
		unlink($url.$filename);

	$file->del();
	Core::alert("Eliminando... Nota: Elimine los archivos dentro de la carpeta.");

}else{
	Core::alert("Permiso Denegado!");
}
Core::redir("./?view=archivo");

?>