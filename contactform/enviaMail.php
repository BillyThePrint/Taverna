<?php 

$para = "maximilianoariela@gmail.com";
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