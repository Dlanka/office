<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


//$to = 'napsanjeewa@gmail.com';

if (isset($_POST['email1'])) {
    $to = 'darshaka4mail@gmail.com';
    
    //$return_value = array();

    $email = $_POST['email1'];
    $name = $_POST['name1'];
    //$telephone = isset($_POST['telephone']) ? $_POST['telephone'] : "";
    $message = $_POST['message1'];
    $subject = 'Kingslog';
    $details = '';

    $details = 'Name: ' . $name . ' </br> Email: ' . $email . ' </br> Message: ' . $message;

    $headers = 'From: ' . $email . "\r\n";
    $headers .='Reply-To: ' . $email . "\r\n";
    $headers .='X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

    $sent = mail($to, $subject, $details, $headers);
    //$sent = mail('darshaka4mail@gmail.com', '$subject', '$details');

    if ($sent) {
        return true;
        //$return_value['status'] = 'success';
        //$return_value['msg'] = 'Successfully sent mail.';
    } else {
        return false;;
        //$return_value['status'] = 'error';
        //$return_value['msg'] = 'Not sent mail.';
    }
    //echo json_encode($return_value);
}

