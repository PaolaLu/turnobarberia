<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);

    try {
        // Configuración del servidor
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Servidor SMTP de Gmail
        $mail->SMTPAuth = true;
        $mail->Username = 'tuemail@gmail.com'; // Tu dirección de correo Gmail
        $mail->Password = 'tucontrasena'; // Tu contraseña de Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;

        // Remitente
        $mail->setFrom($email, $name);

        // Destinatario
        $mail->addAddress('tudestino@gmail.com'); // La dirección a la que se enviará el correo

        // Contenido del correo
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "<h3>Nombre: $name</h3><p>$message</p>";
        $mail->AltBody = "Nombre: $name\n\n$message";

        $mail->send();
        echo 'El mensaje se ha enviado correctamente';
    } catch (Exception $e) {
        echo "El mensaje no se pudo enviar. Error: {$mail->ErrorInfo}";
    }
}
?>
