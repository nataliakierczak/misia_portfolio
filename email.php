<?php

require 'phpmailer/PHPMailerAutoload.php';
require 'mail-config.php';


if (isset($_POST['send-email'])) {
    //Create a new PHPMailer instance
    $mail = new PHPMailer;
    //Tell PHPMailer to use SMTP
    $mail->isSMTP();
    $mail->SMTPSecure = 'ssl';
    $mail->Host = $config['host'];
    //Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 465;
    //Whether to use SMTP authentication
    $mail->SMTPAuth = true;
    //Username to use for SMTP authentication
    $mail->Username = $config['login'];
    //Password to use for SMTP authentication
    $mail->Password = $config['password'];
    //Set who the message is to be sent from
    $mail->SMTPAuth = true;
    $mail->setFrom('natalia.kierczak@gmail.com', 'Pytanie ze strony');
    //Set who the message is to be sent to
    $mail->addAddress('natalia.kierczak@gmail.com', 'Natalia');
    //Set the subject line
    $mail->Subject = 'Pytanie ze strony';
    //Read an HTML message body from an external file, convert referenced images to embedded,
    //convert HTML into a basic plain-text alternative body
    $mail->msgHTML('');
    //Replace the plain text body with one created manually
    $mail->AltBody = '';
    $mail->Body = <<<EOT
Email: {$_POST['email']}
Name: {$_POST['name']}
Message: {$_POST['message']}
EOT;

    if (!$mail->send()) {
        //The reason for failing to send will be in $mail->ErrorInfo
        //but you shouldn't display errors to users - process the error, log it on your server.
        $msg = 'Wiadomość nie była odesłana. Proszę spróbować później.';
    } else {
        $msg = 'Dziękujemy! Wiadomość była odesłana.';
    }
};

?>
