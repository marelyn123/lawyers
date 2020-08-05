<?php


if(!empty($_POST) && !isset($_SESSION["user_id"])){// aqui evalua la sesion
//	print_r($_POST);
	$ux = UserData::getByEmail($_POST["email"]);//envia al modelo 
	if($ux==null){//si no hay ninguno correo pues te dice que te registres
		$user = new UserData();//te dice que la nueva variable de USerData es $user
	
		//todo esto es lo que viene de HTML y lo guarda en los nuevos nombres ->name ->lasnamae etc
		$user->name=$_POST["name"];
		$user->lastname=$_POST["lastname"];
		$user->username=$_POST["username"];
		$user->password=sha1(md5($_POST["password"]));//te acordas de napo de sha1 y md5 aqui encritpta la contraseña
		$user->email=$_POST["email"];
		//una vez catptura todo lo de HTML lo envia ala funcion add() que esta en USER DATA
		$user->add();
	
		Core::alert("Usuario regisrado exitosamente!");
	}else{
		Core::alert("Error al agregar el usuario!");

	}
		Core::redir("./");
}

?>