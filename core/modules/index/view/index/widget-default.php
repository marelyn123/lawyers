<?php

if(isset($_SESSION["user_id"])){ Core::redir("./?view=home");}

?>
<style>
body {
	color: white;
}
h1 {
	color: white;
}
p {
	color: white
}
</style>
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<body background="./res/img/bg_2.jpg">
<div class="container">
<div class="row">
<div class="col-md-8">
<!--<img src="./res/img/bg_2.jpg" class="img-responsive img-thumbnail">-->


</div>
<div class="col-md-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Ingresar</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?action=processlogin">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Usuario o email" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
			    		</div>
						
			    		<input class="btn btn-default btn-block" type="submit" value="Iniciar Sesion">
                        <center><div class="g-signin2" data-onsuccess="onSignIn" data-theme="dark"></div>
                        <script>
                        function onSignIn(googleUser) {
                        // Useful data for your client-side scripts:
                         var profile = googleUser.getBasicProfile();
                        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
                        console.log('Full Name: ' + profile.getName());
                        console.log('Given Name: ' + profile.getGivenName());
                        console.log('Family Name: ' + profile.getFamilyName());
                        console.log("Image URL: " + profile.getImageUrl());
                        console.log("Email: " + profile.getEmail());

                        // The ID token you need to pass to your backend:
                        var id_token = googleUser.getAuthResponse().id_token;
                        console.log("ID Token: " + id_token);
                        }
                        </script><center>
			    	</fieldset>
			      	</form>
			    </div>
			</div>
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Registro</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="index.php?action=processregister">
                    <fieldset>
			    	  	<div class="form-group row">
			    	  	<div class="col-md-6">
			    		    <input class="form-control" placeholder="Nombre" name="name" type="text">
			    		    </div>
			    	  	<div class="col-md-6">
			    		    <input class="form-control" placeholder="Apellido" name="lastname" type="text">
			    		    </div>
			    		</div>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Nombre de usuario" name="username" type="text">
			    		</div>
			    		<div class="form-group">
			    		    <input class="form-control" placeholder="Email" name="email" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-default btn-block" type="submit" value="Registro">
			    	</fieldset>
			      	</form>
			    </div>
			</div>
</div>
</div>
</div>
<br>