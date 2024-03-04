<?php

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "agenciayuppies@gmail.com"
$subject = "Orçamento enviado através do Site"

$headers = "From: " .$name. "\r\n"  .
"CC: takashi20@gmail.com ";

$txt = "Você recebeu um email de " .$name . "\r\nEmail: "  .$email   ."\r\n
Message: ".   $message;

if ($email!=NULL) {
    mail($to, $subject, $txt, $headerss);
}

header ('Location: obrigado.html');

?>