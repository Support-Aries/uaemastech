<?php
include('../dbcon.php');

include("../PHPMailer/class.phpmailer.php");
include("../PHPMailer/class.smtp.php");

$id = $_REQUEST['id'];
$st = $_REQUEST['st'];
$db = $_REQUEST['db'];
$loc = $_REQUEST['event_loc'];
$title = $_REQUEST['title'];
$event_date = $_REQUEST['event_date'];
$conference = $_REQUEST['conference'];
$awards = $_REQUEST['awards'];
$venue = $_REQUEST['venue'];
$regtime = $_REQUEST['regtime'];
$dresscode = $_REQUEST['dresscode'];
$gmap = $_REQUEST['gmap'];
//$sponsor = $_REQUEST['sponsor'];
$link = $_REQUEST['link'];
$is_cocktail = $_REQUEST['is_cocktail'];

if($st==1 || $st == '4')
{

$res1 = mysqli_query($con,"SELECT * FROM  `$db` WHERE id=$id"); 
$row1=mysqli_fetch_array($res1) ;

//$email1= $row1["email"];
//$name1 = strtolower($row1['name']); 
//$name1 = ucwords($name1);

if (isset($row1["email"])) {
   $email1 = $row1["email"];
} elseif (isset($row1["office_mail"])) {
   $email1 = $row1["office_mail"];
} else {
    
   $email1 = "Email not found";
}

if (isset($row1["name"])) {
    $name1 = strtolower($row1['name']); 
    $name1 = ucwords($name1);
	 $name1=$row1['name'];
} elseif (isset($row1["firstname"]) && isset($row1["lastname"])) {
   
    $name1 = strtolower($row1["firstname"] . ' ' . $row1["lastname"]);
     $name1 = ucwords($name1);
} else {
   
    $name1 = "Name not found";
}



$qr = $row1['qr'];
$changeStatus = $st;
    //exit();

    if($qr==""){
        ///*********************QR CODE GENERATION GOES HERE********************************
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'qrcodes'.DIRECTORY_SEPARATOR;
     //set it to writable location, a place for temp generated PNG files
        
        
        //html PNG location prefix
        $PNG_WEB_DIR = 'qrcodes/';
    
        include "qrlib.php";    
        
        //ofcourse we need rights to create temp dir
        if (!file_exists($PNG_TEMP_DIR))
            mkdir($PNG_TEMP_DIR);
        
        
        $filename = $PNG_TEMP_DIR.'test.png';
        
        $errorCorrectionLevel = 'L';
        $matrixPointSize = 5;//decrese to 1 for small qr code
        $url_dt = $id . '~' . $db . '~' . $loc . '~' . $is_cocktail;
        $url_dt = urlencode(base64_encode($url_dt));
        $site="https://www.uaemastech.com/login/";
        $data=$site."user-profile.php?prof_dt=$url_dt";
    //    $data=$site."user_certificate_print.php?cap=$enc_cap&user_id=$enc_user";//*******OLD LINK*******//
        $filename = $PNG_TEMP_DIR.'mastech'.md5($data.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
            QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2); 
            $filename_save = 'mastech'.md5($data.'|'.$errorCorrectionLevel.'|'.$matrixPointSize).'.png';
    ///****************ENDS QR CODE GENERATION************************
    $query = "UPDATE `$db` SET qr = '$filename_save' WHERE id = '$id'";
      mysqli_query($con,$query);
      $qr=$filename_save;
        } 


        $addeddate = date('Y-m-d');

        if($is_cocktail==1){
            
            $sub='Conference + Cocktail';
        }
        else{
           
            $sub='Conference';
        }

$query = "UPDATE `$db` SET is_resend = $changeStatus WHERE id = '$id'";
  mysqli_query($con,$query);

 $mail = new PHPMailer(true);
    
    
  //Tell PHPMailer to use SMTP
    $mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
    $mail->SMTPDebug = 0;
//Ask for HTML-friendly debug output
    $mail->Debugoutput = 'html';
//Set the hostname of the mail server
    $mail->Host = "mail.shiptek20.com";
//Set the SMTP port number - likely to be 25, 465 or 587
    $mail->Port = 25;
//Whether to use SMTP authentication
    //$mail->SMTPSecure = 'ssl';

    $mail->SMTPAuth = true;
//Username to use for SMTP authentication
    $mail->Username = "esol@shiptek20.com";
//Password to use for SMTP authentication
    $mail->Password = "kZL00yzzCH?e";
   //$mail->addAttachment("../shiptek-2022/assets/sponsor-logos.jpg");
//Set who the message is to be sent from
    $from = "esol@shiptek20.com";


  
$mail->addAddress($email1);

//$mail->addAddress('mastech2025@uaemastech.com');
//$mail->addBCC('awards@realteksummit.com');
$mail->addBCC('anagha.p@ariesesolutions.com');
//$mail->addBCC('events@biztvevents.com');

$mail->setFrom($from, 'Mastech-'.$loc);

$mail->Subject = "Your Delegate Registration for MASTECH 2025 is Confirmed";
   
    $mail->AddEmbeddedImage(dirname(__DIR__) . '/admin-login/img/mastech_logo.png', 'logo', 'mastech_logo.png');
    $mail->AddEmbeddedImage(dirname(__DIR__) . '/admin-login/img/SponsorsLogo2.jpg', 'sponsor_logo', 'SponsorsLogo2.jpg');
$message='<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>' . $title . '</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body style="background-color: #F2F3F5; margin: 0; padding: 0;">
    <table width="100%" bgcolor="#F2F3F5" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="center">
                <table width="650" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" border="0" style="box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1), 0 1px 2px rgba(0, 0, 0, 0.06);">
                    <!-- Logo Section -->
                    <tr>
                        <td align="center" style="padding: 30px;">
                            <img src="cid:logo" alt="image" style="height: 85px; display: block;" />
                        </td>
                    </tr>
                    <!-- Content Section -->
                    <tr>
                        <td style="padding: 30px; font-family: Arial, Helvetica, sans-serif;">
                            
                            <p>Dear ' . $name1 . ',</p>
                            <p style="line-height: 25px; text-align: justify;">
                                Greetings from <b>MASTECH 2025</b>.<br>
                                You must have already received confirmation email including QR code to attend the '. $sub .'. <br>
                                We look forward to seeing you at MASTECH at Armani Ballroom on Thursday, 13th February. <br>
                                If there are any changes to your schedules/ plans for attendance, kindly RSVP to <a href="mailto:mastech2025@uaemastech.com">mastech2025@uaemastech.com</a> at the earliest.<br>
                                Thank you for your cooperation.
                            </p>
                            <p>
                                Best Regards,<br><br>
                                For TEAM MASTECH<br>
                                Muhammed Shifas<br>
                                Program Manager, MASTECH 2025
                            </p>
                        </td>
                    </tr>
                    <!-- Footer Image -->
                    <tr>
                        <td align="center" style="padding: 10px 30px 30px 30px;">
                            <img src="cid:sponsor_logo" alt="mastech" style="width: 500px; height: auto; display: block;" />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>';
    $mail->Body = $message;
    $mail->IsHTML(true);                                    
                                    
                                    
                                    
if($mail->Send()){
echo "1";
}
else{
 echo "failed";
}
}





?>