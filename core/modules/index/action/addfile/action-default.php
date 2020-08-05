<?php
// aqui tenemos el controlador
//print_r($_SESSION);
if(!empty($_POST) && isset($_SESSION["user_id"])){// este codigo es para ver si esta el usuario activo o no

	$alphabeth ="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWYZ1234567890_-";//este codigo crea un CODE
	$code = "";//aqui se inicializa en 0
	//este for lo que hace es que genera un randon para crear el codigo CODE 
	for($i=0;$i<12;$i++){
	    $code .= $alphabeth[rand(0,strlen($alphabeth)-1)];//aqui ya genero el codigo y se guarda en $code
	}

	//aqui inicia lo bonito y lo mas importante
	$f = new FileData();//fileData es el modelo
	$f->code= $code;// aqui captura el codigo que se inicio arriba
	//procura que los nombres sean iguales en todos lados 
	//en la base datos, en el id del html, y aqui un emjemplo name
	//$f->name= $_POST["name"];//->name es como se llamara aqui "name" es como se llamara en html

	$f->is_public = isset($_POST["is_public"])?1:0;//Aqui puede ser cualquier cosa nombre, apellido
	$f->folder_id = $_POST["folder_id"]!=""?$_POST["folder_id"]:"NULL";//aqui captura el id del folder si es folder sino envial NULL
	$f->user_id=$_SESSION["user_id"];//captra el id del usuario
	$f->description = $_POST["description"];//y captura la descripcion 


	//tene en cuenta las funciones
	//aqui lo que hace es subir el archivo 
	//practicamente de aqui ya no necesitaras nada
	//porque FILEDATA ES UN MODELO y UPLOAD es otro
	$handle = new Upload($_FILES['filename']);//bueno aqui no lo esta enviado a ningn lado sino que ami mismo lo hace luego lo envia add
	if ($handle->uploaded) {
		$url="storage/data/".$_SESSION["user_id"];//esta es la URL y el id del usuario
		$handle->Process($url);
		if($handle->processed){
	    $f->filename = $handle->file_dst_name;
	    $f->add();
	    Core::alert("Agregado exitosamente!");
	    Core::redir("./?view=archivo");
		}

	}


}


?>