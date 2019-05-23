<?php

$clave = $_POST['clave'];
$nstatusCorreo = 'Si';

require('conexion.php');

$sql = "UPDATE usuarios SET statusCorreo ='$nstatusCorreo' WHERE Ucorreo = '$clave'";
mysqli_query($conexion,$sql) or die ("Error"); 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'fuentesdss@gmail.com';                     // SMTP username
    $mail->Password   = 'fuentes1982';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('fuentesdss@gmail.com', 'ITSPP');		// de donde se envio
    $mail->addAddress($clave);     							// destinatario
    

    // Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Egresados ITSPP';
    $mail->Body    = '
    <html lang="en">
<style>	
.button{
	background:#E20000;
	color:white;
	display: inline-block;
	font-size:14px;
	margin:20px;
	padding: 10px 0px;
	text-align: center;
	width: 200px;
	text-decoration: none;
	box-shadow: 0px 3px 0px #AF0000;
	margin-left: auto;
  	margin-right: auto;
}

.button:hover{
	box-shadow: 0px 0px 0px;
	padding:7;
}
</style>

El <b>ITSPP</b> a travez del departamento de vinculacion
te solicita a ti egresado de esta institucion a participar en la aplicacion
del formulario de contacto y seguimiento, agredeciendo entres al enlace abajo 
proporcionado, llenes el formulario y lo envies a la brevedad posible, <b>Gracias!</b>
<br>
<a href="http://localhost/formulario/login.php" class="button">Ir al formulario</a>';
    

    $mail->send();
    echo 'El mensaje se envio satisfactoriamente';
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}
   






 