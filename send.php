<?php
session_start();
if(!$_POST) exit;

require 'SendMail/PHPMailerAutoload.php';
if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

$params = [
	'nombres' => FILTER_SANITIZE_STRING,
	'correo' => FILTER_VALIDATE_EMAIL,
	'telefono' => FILTER_SANITIZE_STRING,
	'empresa' => FILTER_SANITIZE_STRING,
	'producto' => FILTER_SANITIZE_STRING,
	'mensaje' => FILTER_SANITIZE_FULL_SPECIAL_CHARS
];
$values = filter_input_array(INPUT_POST, $params);
$_SESSION['DATA_FORM'] = $values;

if (trim($values['nombres']) == '') {
	$_SESSION['ERRORS'] = 'El nombre es requerido.';
} else if(trim($values['correo']) == '') {
	$_SESSION['ERRORS'] = 'Ingresa un correo electrónico.';
} else if (!$values['correo']) {
	$_SESSION['ERRORS'] = 'El correo electronico escrito es inválido. Intente con otro.';
} else if (trim($values['mensaje']) == '') {
	$_SESSION['ERRORS'] = 'Por favor, ingrese su mensaje.';
} else {
	try {
		$mail = new PHPMailer();

		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.mandrillapp.com';
		$mail->Username = '';
		$mail->Password = '';
		$mail->SMTPSecure = 'tls';
		$mail->CharSet = 'UTF-8';
		$mail->Port = 587;

		$mail->From     = 'administracion@simmec.pe';
		$mail->FromName = 'Simmec';

		$body = '<h2>De: '.$values['nombres'].'</h2>'
				.'<ul><li>Correo electrónico: '.$values['correo'].'</li>'
				.'<li><strong>Teléfono</strong><p>'. $values['telefono'] .'</p></li>'
				.'<li><strong>Empresa</strong><p>'. $values['empresa'] .'</p></li>'
				.'<li><strong>Producto</strong><p>'. $values['producto'] .'</p></li>'
				.'<li><strong>Mensaje</strong><p>'. $values['mensaje'] .'</p></li></ul>';

		$text_body = 'De: '.$values['nombres']."\n\n"
				.'Correo electrónico: '.$values['correo']."\n"
				.'Teléfono: '.$values['telefono']."\n"
				.'Empresa: '.$values['empresa']."\n"
				.'Producto: '.$values['producto']."\n"
				."Mensaje\n". $values['mensaje'];

		$mail->Subject = 'Mensaje enviado desde la web simmec.pe';
		$mail->Body    = $body;
		$mail->AltBody = $text_body;
		// $mail->addAddress('larriega@gmail.com', 'Oscar Larriega');
		// $mail->AddCC('dantebecerra2013@artedangi.com');

	    if ($mail->send())
		{
			$_SESSION['SUCCESS'] = '<h3>Su correo ha sido enviado exitosamente.</h3><p>Gracias ' .$values['nombres']. ', nos comunicaremos con usted a la brevedad posible.</p>';
			$_SESSION['DATA_FORM'] = [];
		}
		else
		{
			$_SESSION['errors'] = 'Ups.. no se pudo enviar el correo, intentelo de nuevo.';
		}

		// Clear all addresses and attachments for next loop
		$mail->clearAddresses();
	} catch (phpmailerException $e) {
		$_SESSION['errors'] = $e->getMessage();
	}
}


header('location: contacto.php');