<!DOCTYPE html><head>
<title>Republik</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="" />
 <link href="css/stygms.css" rel="stylesheet">
</head>
<html>
<body>
	
				<div id="navigation">
				<ul id="navlist">
				</ul>
			</div>
	
	<!-------------New Slider------------------------------->
	<div class="imgbox">
	<img id="banner" src="images/book.png" alt="">
	</div>



	
	<h1 id="servtext"><a name="servicio">Gracias por Contactarnos</a></h1>
	<div id="serv">
		
	<div id="boxallservice">
			
			
			<p>¡Su reserva se ha realizado con exito!</p>
		</div>
		</div>
		
</body>
</html>

<?php
if (isset($_POST['correo']) && isset($_POST['mensaje'])){
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$mensaje = $_POST['mensaje'];
$mesa = $_POST['mesa'];

	

$from = $correo;
$to = "armandomelendez00@gmail.com";
$subject = "Nuevo mensaje de ". $correo;
$message = "Nombre: " .$nombre . "   Telefono: " . $telefono . "   Mesa: " . $mesa . "   Mensaje: " . $mensaje;
$headers = "From:" . $from;

	
if(mail($to, $message, $headers)) {
echo $nombre . "  su reserva se a realizado con exito para  " . $mesa;
}else{
echo 0;
}
	
}else{
echo 0;
}
?>

