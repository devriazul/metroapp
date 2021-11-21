<?php
/**
 * Mail handler
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'config.php';
require 'vendor/autoload.php';


list($name, $email, $subject, $message) = array_values($_POST);

$html ='<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <style>
        body{
            font-family: Ubuntu, sans-serif;
            background-color: #f0f3f4;
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }
        #users {
            border-collapse: collapse;
            width: 100%;
        }

        #users td, #users th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #users tr:nth-child(even){background-color: #f2f2f2;}

        #users tr:hover {background-color: #ddd;}

        #users th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>';


$html .='<table style="width:100%;background-color: #f0f3f4;padding:20px;">
    <tr>
        <td>
            <table style="width:640px;margin:0px auto;">
                <tr>
                    <td>
                        <table>
                            <tr>
                                <td colspan="2">
                                    Hi,<br/>
                                    <p>
                                        Here is new enquiry from <b>'.$name.'</b>
                                    </p>
                                </td>
                            </tr>
                        </table>
                        <table id="users" >
                            <tr>
                                <th>Name</th>
                                <th>'.$name.'</th>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>'.$email.'</td>
                            </tr>
                            <tr>
                                <td>Subject</td>
                                <td>'.$subject.'</td>
                            </tr>
                            <tr>
                                <td>Message</td>
                                <td>'.$message.'</td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>';


$mail = new PHPMailer(true);   
try { 

    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    
    //Server settings
    //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
    //$mail->IsSMTP();
    $mail->Host = CONFIG['email']['host']; 
    $mail->SMTPAuth = true;
    $mail->Port = CONFIG['email']['port'];  //587, 465
    $mail->SMTPSecure = CONFIG['email']['SMTPSecure'];  //'ssl'; //ssl
    $mail->Username = CONFIG['email']['username'];
    $mail->Password = CONFIG['email']['password'];


    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('abishar14@gmail.com', 'Robi');     // Add a recipient

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $html;
    $mail->AltBody = strip_tags($html);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}