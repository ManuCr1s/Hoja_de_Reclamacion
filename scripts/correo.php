<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "../phpmailer/PHPMailer.php";
require_once "../phpmailer/SMTP.php";
require_once "../phpmailer/Exception.php";


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'man.rap123@gmail.com';                     // SMTP username
    $mail->Password   = '425_Manu';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('man.rap123@gmail.com', 'HOSPITAL REGIONAL DANIEL ALCIDES CARRION');
    $mail->addAddress($_POST['email']);     // Add a recipient

    // Attachments // Add attachments
    $nombre = explode(' ',$_POST['token']);
    $final = explode(':',$nombre[5]);
    $mail->addAttachment('../documentos/RECLAMO_'.$nombre[4].'_'.$final[0].'_'.$final[1].'_'.$final[2].'_'.$nombre[7].'.pdf');     // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'DESCARGA DEL RECLAMO REALIZADO';
    $mail->Body    = 'Buen dia por este medio le hacemos entrega de su reclamo, gracias por ayudarnos a mejorar';

    $mail->send();
    unlink('../documentos/RECLAMO_'.$nombre[4].'_'.$final[0].'_'.$final[1].'_'.$final[2].'_'.$nombre[7].'.pdf');
    echo 'Mensaje se envio correctamente';
} catch (Exception $e) {
    echo "Hubo un error: {$mail->ErrorInfo}";
}
