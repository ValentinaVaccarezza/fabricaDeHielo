<?php
$nombre = $_POST["name"];
$email = $_POST ["inputEmail4"];
$ciudad = $_POST ["inputCity"];
$presupuesto = $_POST ["inputState"];
$para = "valentinavaccarezza@hotmail.com";
$asunto = "Consulta Hielos DZ";
$cuerpo = "<h1>Hola, recibiste un correo</h1>Nombre:".$nombre."<br>email:".$email."<br>consulta:".$consulta."<br>Chaito";
$cabecera = "From:" . $para. "\r\n";
$cabecera.= "MIME-Version: 1.0\r\n";
$cabecera.= "Content-Type: text/html; charset=UTF-8\r\n";

if ( !mail($para, $asunto, $cuerpo, $cabecera)) {
    echo "E-Mail no enviado";
     
} else {
    echo "E-Mail  enviado";
    
}

mail($para, $asunto, utf8_decode($message), $header);



?>