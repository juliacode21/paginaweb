<?php

$para = 'celcar.com, felipecruzjulia74@gmail.com';

$asunto = "mensaje desde felipecruzjulia74@gmail.com";

$mailheader ="from: ".$_POST['email']."\r\n";
$mailheader .="Reply-to: ".$_POST['email']."\r\n";
$mailheader .="content-type: text/html; charset=utf-8\r\n";
$MESSAGE_BODY = "Nombre: ".$_POST['name']."\n";
$MESSAGE_BODY = "\n<br>Email: ".$_POST['email']."\n";
$MESSAGE_BODY = "\n<br>Mensaje: ".nl2br($_POST['message'])."\n";


mail($para, $asunto, $MESSAGE_BODY, $mailheader) or die("error al enviar");

header('location: http://celccar.com/Celccar')

?>