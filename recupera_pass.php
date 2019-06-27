<?php
error_reporting(0);

$Ucorreo = $_POST['Ucorreo'];

require('conexion.php');

$sql = "SELECT * FROM usuarios  WHERE Ucorreo = '$Ucorreo'";
$result = mysqli_query($conexion,$sql) or die ("No existe ningun resultado"); 
$row = mysqli_fetch_array($result);



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';



// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'fuentesdss@gmail.com';                     // SMTP username
    $mail->Password   = 'fuentes1982';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('fuentesdss@gmail.com', 'ITSPP');		// de donde se envio
    $mail->addAddress ($row['Ucorreo']);  							// destinatario    

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Recuperacion de clave ITSPP';
    $mail->Body    = 'La clave para acceder al formulario es:  '.$row[nucontrol];
    

    $mail->send();
    header("refresh:0; url=cerrar_s.php");     
    echo '<script language="javascript">alert("En breve resivira un correo, con su clave de acceso");</script>';
} catch (Exception $e) {
    echo "Error: {$mail->ErrorInfo}";
}

    



	













