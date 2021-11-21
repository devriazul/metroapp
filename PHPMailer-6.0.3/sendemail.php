<?php
  $subject = "Test mail";
  $to_email = "abishar14@gmail.com";
  $to_fullname = "John Doe";
  $from_email = "from@example.com";
  $from_fullname = "Jane Doe";
  $headers  = "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  // Additional headers
  // This might look redundant but some services REALLY favor it being there.
  $headers .= "To: $to_fullname <$to_email>\r\n";
  $headers .= "From: $from_fullname <$from_email>\r\n";
  $message = "<html>\r\n
  <head>\r\n
    <title>Hello Test</title>\r\n
  </head>\r\n
  <body>\r\n
    <p></p>\r\n
    <p style=\"color: #00CC66; font-weight:600; font-style: italic; font-size:14px; float:left; margin-left:7px;\">You have received an inquiry from your website.  Please review the contact information below.</p>\r\n
  </body>\r\n
  </html>";
  if (!mail($to_email, $subject, $message, $headers)) { 
    print_r(error_get_last());
  }
  else { ?>
    <h3 style="color:#d96922; font-weight:bold; height:0px; margin-top:1px;">Thank You For Contacting us!!</h3>
  <?php
  }
  ?>
  
<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// require 'PHPMailer-6.0.3/src/Exception.php';
// require 'PHPMailer-6.0.3/src/PHPMailer.php';
// require 'PHPMailer-6.0.3/src/SMTP.php';
// $toAddress = "amirobicse@gmail.com"; //To whom you are sending the mail.
// $message   = <<<EOT
//     <html>
//       <body>
//           <h>PHPMailer basic usage</h>
//           <p>It is working</p>
//       </body>
//     </html>
// EOT;
// $mail = new PHPMailer();
// $mail->IsSMTP();
// $mail->SMTPAuth    = true;
// $mail->Host        = "smtp.gmail.com";
// $mail->Port        = 587;
// $mail->SMTPOptions = array(
//     'ssl' => array(
//         'verify_peer' => false,
//         'verify_peer_name' => false,
//         'allow_self_signed' => true
//     )
// );
// $mail->IsHTML(true);
// $mail->Username = "abishar14@gmail.com"; // your gmail address
// $mail->Password = "Tumi4@mi"; // password
// $mail->SetFrom("abishar14@gmail.com");
// $mail->Subject = "Using PHPMailer without composer"; // Mail subject
// $mail->Body    = $message;
// $mail->AddAddress($toAddress);
// if (!$mail->Send()) {
//     echo "Failed to send mail";
    
// } else {
//     echo "Mail sent succesfully";
// }
?>