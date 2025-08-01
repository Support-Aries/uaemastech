<?php
//include("PHPMailer/class.phpmailer.php");
// include("PHPMailer/class.smtp.php");
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->Mailer = "mail";                                // Set mailer to use SMTP
$mail->Host = 'mail.uaemastech.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'mastech2019@uaemastech.com';                 // SMTP username
$mail->Password = 'mastech2019';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->From = 'mastech2019@uaemastech.com';
$mail->FromName = 'Mailer';
$mail->addAddress('rakhiramachandran62@gmail.com', 'pk');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('mastech2019@uaemastech.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
//include("PHPMailer/class.phpmailer.php");
// include("PHPMailer/class.smtp.php");
//    $to = "rakhi.biztv@gmail.com";
//    $subject = "This is subject";
//
//    $message = "This is HTML message.";
//    $message .= "This is headline.";
//
//    $header = "From:WMC<rakhi.biztv@gmail.com> \r\n";
//   
//    $retval = mail($to,$subject,$message,$header);
//    if(isset($retval))//change
//    {
//                    $address = "rakhi.biztv@gmail.com";
////                                    $address="sathyabhamakr.biztv@gmail.com";
//
//
//
//                                    $mail  = new PHPMailer(); 
//                                    $mail->AddReplyTo('rakhi.biztv@gmail.com',"replay");
//                                    $mail->SetFrom("rakhi.biztv@gmail.com", 'WMC18');
//                                    $mail->AddAddress($address, "");
//                                    $mail->Subject = "Membership registration";
//                                    $message="This is HTML example message2";
//                                    $mail->MsgHTML($message); 
//                                    if($mail->Send()) {
//        echo "Message sent successfully...";
//                                    }
//    }
//    else
//    {
//        echo "Message could not be sent...";
//    }

//
//include("PHPMailer/class.phpmailer.php");
////           // include("PHPMailer/PHPMailerAutoload.php");
// include("PHPMailer/class.smtp.php");
//                                    $mail  = new PHPMailer(); 
//                                    $address = "rakhi.biztv@gmail.com";
//                                   // $address="sathyabhamakr.biztv@gmail.com";
//                                    //$address="saranyasasi.biztv@gmail.com";
//                                    $mail->AddReplyTo("sathyabhamakr.biztv@gmail.com","replay");
//                                    $mail->SetFrom('sathyabhamakr.biztv@gmail.com', 'Enquiry');
//                                    $mail->AddAddress($address, "");
//                                  // $mail->addBCC('support@ariesesolutions.com');
//                                    $mail->Subject = "Enquiry from BizTV Network Website-Rakhi";
//                                    $message = "This is HTML message.";
//     
//                                    $message .= "This is headline.";
//                                  $mail->MsgHTML($message); 
//                                  // $mail->AddAddress($email);
//
//                                     if(!$mail->Send()) {
//                                        echo "Mailer Error: " . $mail->ErrorInfo;
//                                     } else {
//                                      echo "sent";
//                                     }