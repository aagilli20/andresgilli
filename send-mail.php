<?php
//vars
// $subject = $_POST['subject'];
// $to = explode(',', $_POST['to'] );
$from = $_POST['email'];
//data
$msg = "NOMBRE: "  .$_POST['name']    ."<br>\n";
$msg .= "EMAIL: "  .$_POST['email']    ."<br>\n";
$msg .= "CONSULTA: "  .$_POST['comments']    ."<br>\n";

// Headers
// $headers  = "MIME-Version: 1.0\r\n";
// $headers .= "Content-type: text/html; charset=UTF-8\r\n";
// $headers .= "From: <".$from. ">" ;
// Indicamos el asunto
$asunto = "consulta de ".$_POST['name'];
$subject = utf8_decode($asunto);
// Indicamos el cuerpo del mensaje
$message = utf8_decode($msg);
// responder a
$to = "aagilli20@yahoo.com.ar";
$exito = mail($to, $subject, $message);
if(!$exito){
	header("Location:Contact_error.html");
} else{
	header("Location:Contact_ok.html");
}
die();
?>