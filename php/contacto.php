<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Cargar la clase PHPMailer
require '../mail/PHPMailer.php';
require '../SMTP.php';
require '../Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $mensajeUsuario = $_POST["mensaje"];

    // Construye el mensaje del correo
    $mensaje = "<html><body>";
    $mensaje .= "<h1>Correo desde el formulario</h1>";
    $mensaje .= "<p><strong>Nombre:</strong> $nombre $apellido</p>";
    $mensaje .= "<p><strong>Correo Electrónico:</strong> $email</p>";
    $mensaje .= "<p><strong>Mensaje:</strong> $mensajeUsuario</p>";
    $mensaje .= "</body></html>";

    // Destinatario y asunto
    $para = "alejandromiceli88@gmail.com.com";
    $asunto = "Correo de usuario de UnionLTDA";

    // Configurar PHPMailer
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'tu_servidor_smtp';
    $mail->SMTPAuth = true;
    $mail->Username = 'tu_correo_smtp';
    $mail->Password = 'tu_contraseña_smtp';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Configurar el remitente y el destinatario
    $mail->setFrom($email, $nombre);
    $mail->addAddress($para);

    // Configurar el asunto y el cuerpo del mensaje
    $mail->Subject = $asunto;
    $mail->msgHTML($mensaje);

    // Enviar el correo
    if ($mail->send()) {
        echo 'Correo enviado correctamente';
    } else {
        echo 'Error al enviar el correo: ' . $mail->ErrorInfo;
    }
}
?>
