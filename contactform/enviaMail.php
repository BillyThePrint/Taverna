<?php 

$para = "taverna.catering@gmail.com";
$asunto = "Consulta Desde Taverna";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


$nombre = $_POST['name'] ;
$email = $_POST['email'] ;
$telefono = $_POST['phone'] ;
$mensaje = $_POST['message'] ;

$correo = '
			<html>
			<head>
				<title></title>
			<body>
				<h2>Has recibido un mensaje através de Taverna</h2>
				<p>'.$nombre.' te envió el siguiente mensaje:</p>
				<p>'.$mensaje.' <br /><br />Podés ponerte en contacto por esta dirección de email: '.$email.'<br/><br/> O este número de telefono: ' .$telefono. '
				</p>
			</body>
			<html>';

mail($para,$asunto,$correo,$headers);
/************************Envio mail de confirmacion********************************************/
$paraConfirmacion = $_POST['email'];
$asuntoConfirmacion = "confirmación de consulta";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$confirmacion = "
			<html>
			<head>
				<title></title>
			<body>
				<h3>¡Gracias por contactarte con Taverna Catering!</h3>
				<p>En breve nos pondremos en contacto con vos.</p>
				<img src=''>
				</p>
			</body>
			<html>";
mail($paraConfirmacion,$asuntoConfirmacion,$confirmacion,$headers);