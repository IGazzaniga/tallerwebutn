<?php

date_default_timezone_set('Etc/UTC');

require 'libs/PHPMailer/PHPMailerAutoload.php';

class Gmail
{

  function Send($to, $to_name = "", $subject, $message, $attach = array()){
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = "bifanolautaro@gmail.com";
    $mail->Password = "mipass";

    $mail->setFrom('from@escuela3.com', 'Mailer');
    $mail->addAddress($to, $to_name);
    $mail->addReplyTo('info@escuela3.com', 'Información');
    foreach ($attach as $file) {
      $mail->addAttachment($file);
    }
    $mail->isHTML(true);

    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients. Ir al siguiente link.';

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
  }
}
