<?php
$name = $_POST['name'];
$email = $_POST['email']
$msg = $_POST['msg'];

$header = 'From: ' . $email . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0  \r\n";
$header .= "Content-Type: text/plain";

$msg = "Este mensaje fue enviado por: " . $name . " \r\n";
$msg = "Su email es: " . $email . " \r\n";
$msg = "Mensaje: " . $_POST['msg'] . " \r\n";
$msg = "Enviado el: " . date('d/m/Y', time())

$para = 'kangu930@gmail.com';
$asunto = 'PORTAFOLIO';

mail($para, $asunto, utf8_decode($msg), $header);

header("Location:index.html");
?>