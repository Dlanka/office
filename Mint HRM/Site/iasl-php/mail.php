<?php

include('class.phpmailer.php');
include('class.smtp.php');

if (isset($_POST['email3'])) {

    $email = isset($_POST['email3']) ? $_POST['email3'] : '';
    $name = isset($_POST['name3']) ? $_POST['name3'] : '';
    $message = isset($_POST['message3']) ? $_POST['message3'] : '';

    $subject = "IASL";
    $EmailMessage = "<h4>Name :$name</h4 ><br>Email : $email <br>Message : $message";

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;       // enable SMTP authentication
    $mail->SMTPSecure = "ssl";     // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port = "465";     // set the SMTP port

    $mail->Username = "";  // GMAIL username
    $mail->Password = ""; // GMAIL password
    //$mail->From       = "admin@infoseek.lk";
    $mail->From = $email;
    $mail->FromName = $name;
    $mail->Subject = $subject;
    $mail->WordWrap = 50; // set word wrap

    $mail->MsgHTML($EmailMessage);
    //$mail->AddAddress("sandun.hndit@gmail.com","sandun");
    $mail->AddAddress("info@iasl.lk", "IASL");
    $mail->IsHTML(true); // send as HTML

    $mail->Send();
    if (!$mail) {
        echo "Not sent";
    } else {
        echo "Sent";
    }
}

if (isset($_POST['email2'])) {

    $email = isset($_POST['email2']) ? $_POST['email2'] : '';
    
    $subject = "IASL Subscribe";
    $EmailMessage = "<p>Email : $email</p>";

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;       // enable SMTP authentication
    $mail->SMTPSecure = "ssl";     // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com";      // sets GMAIL as the SMTP server
    $mail->Port = "465";     // set the SMTP port

    $mail->Username = "";  // GMAIL username
    $mail->Password = ""; // GMAIL password
    //$mail->From       = "admin@infoseek.lk";
    $mail->From = $email;
    $mail->FromName = $email;
    $mail->Subject = $subject;
    $mail->WordWrap = 50; // set word wrap

    $mail->MsgHTML($EmailMessage);
    //$mail->AddAddress("sandun.hndit@gmail.com","sandun");
    $mail->AddAddress("info@iasl.lk", "IASL");
    $mail->IsHTML(true); // send as HTML

    $mail->Send();

    if (!$mail) {
        echo "Not sent";
    } else {
        echo "Sent";
    }
}