<?php

include('lib/class.phpmailer.php');
include('lib/class.smtp.php');

//Client mail config
$account = "sandun@raoss.com";//username
$password = "sandunqaz567123";//password

if (isset($_POST['email'])) {

    
    $email = $_POST['email'];
    $name = $_POST['name'];
    $telephone = $_POST['subject'];
    $message = $_POST['message'];

    $EmailMessage = "<h4>Name :$name</h4 ><br>Email : $email<br>Phone Number : $telephone <br> Message : $message";

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;                 // enable SMTP authentication
    $mail->SMTPSecure = "ssl";              // sets the prefix to the servier //tls,ssl
    $mail->Host = "smtp.gmail.com";         // sets GMAIL as the SMTP server
    $mail->Port = 465;                      // set the SMTP port

    $mail->Username = $account;             // GMAIL username
    $mail->Password = $password;            // GMAIL password

    $mail->From = $email;
    $mail->FromName = $name;
    $mail->Subject = "SBF Group Contact Form";
    $mail->WordWrap = 50;                   // set word wrap

    $mail->MsgHTML($EmailMessage);
//    mail to
    //$mail->AddAddress('aiyat.goh@infiniskills.com', 'Goh ai yat');
    $mail->AddAddress('darshaka4mail@gmail.com', 'Goh ai yat');
    $mail->IsHTML(true);                    // send as HTML

    $mail->Send();

    if (!$mail) {
        echo json_encode("Not sent");
    } else {
        echo json_encode("Sent");
    }
}

