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
	<li><a href="./?view=home"><i class="fa fa-home"></i> Inicio</a></li>
	<?php
	if($folder!=null){
	    echo '<li><a href="./?view=home&folder='.$folder->code.'"><i class="fa fa-folder-open"></i> '.$folder->filename.'</a></li>';
	}
	?>

</ol>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
	 /* Fixed/sticky icon bar (vertically aligned 50% from the top of the screen) */
.icon-bar {
  position: fixed;
  top: 40%;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

/* Style the icon bar links */
.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: white;
  font-size: 20px;
}

/* Style the social media icons with color, if you want */
.icon-bar a:hover {
  background-color: #000;
}

.facebook {
  background: #3B5998;
  color: white;
}


.email {
  background: #ff3633;
  color: white;
}

.whatsapp {
  background: #1d8503;
  color: white;
}

.llamada {
  background: #06fcbd;
  color: white;
}

</style>



<center><h3>Home/Suscripciones</h3></center>
<br>
</br>

<div class="icon-bar">
  <a target="blank" href="mailto:lawyerspace@gmail.coom?subject=Asunto" class="email"><i class="fa fa-envelope"></i></a>
  <a target="blank" href="https://api.whatsapp.com/send?phone=74937715" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
  <a target="blank" href="https://www.facebook.com/shared.mk/" class="facebook"><i class="fa fa-facebook"></i></a>
  <a target="blank" href="tel:+503 74937715" class="llamada"><i class="fa fa-phone"></i></a>
</div> 

<center><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Click Me</button></center>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

	<!-- Modal content-->
	
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Solo 1 minuto!</h4>
      </div>
      <div class="single-image-carusel">
	  <center><img class="img-fluid" src="./res/img/ambiente.png"></center>
		<center><h4><p>Reflexiona por un minuto Cuida tu Hogar para ti y tus Hijos!!</p></h4></center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<br>
</br>

<center><div class="w3-card-4" style="width:50%;">
    <header class="w3-container w3-blue">
      <h3>Bienvenido estimado Abogado</h3>
    </header>

    <justify><div class="w3-container">
      <p>Somos una empresa dedicada al servicio de todos los Abogados brindadoles la herramienta para el exito de sus casos de manera online en la cual podra llevar
	  un control de todos sus casos de manera segura,online,eficaz para el exito de su trabajo; tambien estamos comprometidos 
con la conciencia del Cuidado del MEDIO AMBIENTE hacia toda la SOCIEDAD, es Responsabilidad de TODOS cuidar NUESTRO HOGAR sino lo hacemos nosotros desde hoy no habra 
un futuro para las nuevas generaciones, Empecemos desde Hoy!</p>
    </div>

    <footer class="w3-container w3-blue">
      <h5>Lawyerspace</h5>
    </footer>
  </div>
</div></justify>
 </center>

<br>
</br>

<div class="container">
             
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Suscripcion 1</th>
        <th>Suscripcion 2</th>
        <th>Metodo de Pago</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Pago Mensual $15.00 (1 Vez cada mes)</td>
        <td>Pago Anual $180.00 (12 meses en 1 Año)</td>
        <td>
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
              <input type="hidden" name="cmd" value="_s-xclick">
              <input type="hidden" name="hosted_button_id" value="5WAUJTT5WY7KC">
              <table>
              <tr><td><input type="hidden" name="on0" value="Suscripcion">Suscripcion</td></tr><tr><td><select name="os0">
                <option value="Suscripcion 1">Suscripcion 1 : $15.00 USD - anual</option>
                <option value="Suscripcion 2">Suscripcion 2 : $180.00 USD - mensual</option>
              </select> </td></tr>
              </table>
              <input type="hidden" name="currency_code" value="USD">
              <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
              <img alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
              </form></td>
      </tr>
      <tr>
        <td></td>
        <h2><td>Suscripcion Gratis por 30 Dias</td></h2>
        <td></td>
      </tr>
      
    </tbody>
  </table>
</div>
<br>
</br>


</div>
</div>