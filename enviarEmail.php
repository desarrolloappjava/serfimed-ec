<?php

if(isset($_POST['enviar'])){
	if(!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['asunto']) && !empty($_POST['mensaje'])){

		$nombre = strip_tags($_POST['nombre']);
		$mail = strip_tags($_POST['email']);
		$empresa = strip_tags($_POST['mensaje']);

		$header = 'From: ' . $mail . " \r\n";
		$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$header .= "Mime-Version: 1.0 \r\n";
		$header .= "Content-Type: text/plain";

		$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
		$mensaje .= "Su e-mail es: " . $mail . " \r\n";
		$mensaje .= "Mensaje: " . $empresa . " \r\n";
		$mensaje .= "Enviado el " . date('d/m/Y', time());

		$mensajeRespuesta = "Si estás recibiendo este mensaje es porque esta en nuestra bandeja de entrada, te responderemos a la brevedad posible";

		$para = 'serfimed.ec@gmail.com';
		$paraDos = 'asesor@serfimed.com';
		$asunto = strip_tags($_POST['asunto']);

		mail($para, $asunto, utf8_decode($mensaje), $header);
		mail($paraDos, $asunto, utf8_decode($mensaje), $header);
		mail($mail, "Gracias por comunicarse con SERFIMED", utf8_decode($mensajeRespuesta));

		header("Location:contacto.php");

	}
}
?>
