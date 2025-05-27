<?php
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';
require 'PHPMailer-master/src/Exception.php';
// Usar las clases necesarias
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Crear una nueva instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = HOST; // Cambia esto según tu proveedor de correo
    $mail->SMTPAuth = true;
    $mail->Username = EMAIL; // Tu dirección de correo
    $mail->Password = PASSWORD; // Tu contraseña o clave de aplicación
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = SMTP_PORT;
    // Remitente y destinatario
    // Define el mail y nombre del remitente
    $mail->setFrom(EMAIL, '104 CUBES');
    // Define el mail y nombre del destinatario
    $mail->addAddress($email, $nombre);

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = $asunto;
    $mail->Body = $cuerpo;
    $mail->AltBody = $cuerpo;

    // Enviar el correo
    $mail->send();
    echo 'El mensaje se envió correctamente.';
} catch (Exception $e) {
    echo "Hubo un error al enviar el mensaje: {$mail->ErrorInfo}";
}
