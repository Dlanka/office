<?php

//Email address for 'To'
//$to = 'info@iasl.lk';
//email subject type in here 
require 'PHPMailerAutoload.php';

if (isset($_POST['email3'])) {

    $mail = new PHPMailer;

    //$to = 'lanka@infoseek.lk';
    //$to = 'darshaka4mail@gmail.com';
    $email = isset($_POST['email3']) ? $_POST['email3'] : '';
    //$name = isset($_POST['name3']) ? $_POST['name3'] : '';
    //$message = isset($_POST['message3']) ? $_POST['message3'] : '';
   // $subject = "IASL";

    //$details = '';

    //$details = 'Name: ' . $name . ' </br> Email: ' . $email . ' </br> Message: ' . $message;

    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    //$mail->Host = 'smtp1.example.com;smtp2.example.com';  // Specify main and backup SMTP servers
    $mail->Host = 'www.appsy.co';                         // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'lanka@infoseek.lk';                 // SMTP username
    $mail->Password = 'Infoseek123';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
//    $mail->Port = 587;                                    // TCP port to connect to
    $mail->Port = 75;                                    // TCP port to connect to

    $mail->setFrom($email, 'Mailer');
    //$mail->addAddress('joe@example.net', 'Joe User');     // Add a recipient
    //$mail->addAddress('ellen@example.com');               // Name is optional
    $mail->addReplyTo('lanka@infoseek.lk', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Here is the subject';
    $mail->Body = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}

//mail('darshaka4mail@gmail.com', 'subject', 'details');



if (isset($_POST['email2'])) {


    $to = 'lanka@infoseek.lk';


    $email = isset($_POST['email2']) ? $_POST['email2'] : '';

    $details = 'Email: ' . $email;

//    $details = 'Message: ' . 'Subscribe email ';
//    '</br>Email: ' . $email .

    $headers = 'From: ' . $email . "\r\n";
    $headers .='Reply-To: ' . $email . "\r\n";
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    $sent = mail($to, $subject, $details, $headers);

    if ($sent) {
        return true;
    } else {
        return false;
    }
}
?>
