<?php
include("../dbcon.php");
include ("../PHPMailer/class.phpmailer.php");
include ("../PHPMailer/class.smtp.php");

 $id = $_REQUEST['id'];
 $st = $_REQUEST['st'];
 $db = $_REQUEST['db'];
$loc = $_REQUEST['event_loc'];
$title = $_REQUEST['title'];
$event_date = $_REQUEST['event_date'];
$conference = $_REQUEST['conference'];
$awards = $_REQUEST['awards'];
$venue = $_REQUEST['venue'];
$venue_date = $_REQUEST['venue_date'];
$regtime = $_REQUEST['regtime'];
$dresscode = $_REQUEST['dresscode'];
$gmap = $_REQUEST['gmap'];
$sponsor = $_REQUEST['sponsor'];
$link = $_REQUEST['link'];
$is_cocktail = $_REQUEST['is_cocktail'];

if ($st == '1' || $st == '4' ) {
    $res01 = "SELECT * FROM $db WHERE `id` = '$id'";
  $res1 = mysqli_query($con,$res01);
  if (!$res1) {
    echo "Error: " . mysqli_error($con);
}

    $row1 = mysqli_fetch_array($res1);

    //// $email1= $row1["email"];
//$pic_email = $row1["pic_email"];
////  $name1 = strtolower($row1['name']); 
//// $name1 = ucwords($name1);
// $name1=$row1['name'];

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
         $name1 = $row1['name'];
    } elseif (isset($row1["firstname"]) && isset($row1["lastname"])) {

        $name1 = strtolower($row1["firstname"] . ' ' . $row1["lastname"]);
        $name1 = ucwords($name1);
    } else {

        $name1 = "Name not found";
    }

    //exit;

    $qr = $row1['qr'];
     $changeStatus = $st;

    // exit();
    if ($qr == "") {
       
        ///*********************QR CODE GENERATION GOES HERE********************************
        $PNG_TEMP_DIR = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'qrcodes' . DIRECTORY_SEPARATOR;
        //set it to writable location, a place for temp generated PNG files


        //html PNG location prefix
        $PNG_WEB_DIR = 'qrcodes/';

        include "qrlib.php";

        //ofcourse we need rights to create temp dir
        if (!file_exists($PNG_TEMP_DIR))
            mkdir($PNG_TEMP_DIR);

        
        $filename = $PNG_TEMP_DIR . 'test.png';

        $errorCorrectionLevel = 'L';
        $matrixPointSize = 5;//decrese to 1 for small qr code
        $url_dt = $id . '~' . $db . '~' . $loc . '~' . $is_cocktail;
        $url_dt = urlencode(base64_encode($url_dt));
        $site = "https://www.uaemastech.com/login/";
        $data = $site . "user-profile.php?prof_dt=$url_dt";
        //    $data=$site."user_certificate_print.php?cap=$enc_cap&user_id=$enc_user";//*******OLD LINK*******//
        $filename = $PNG_TEMP_DIR . 'mastech' . md5($data . '|' . $errorCorrectionLevel . '|' . $matrixPointSize) . '.png';
        QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize, 2);
        $filename_save = 'mastech' . md5($data . '|' . $errorCorrectionLevel . '|' . $matrixPointSize) . '.png';
        ///****************ENDS QR CODE GENERATION************************
        mysqli_query($con, $query);
        $qr = $filename_save;
    }


    $addeddate = date('Y-m-d');

    if($is_cocktail==1){
        $subject='Your Delegate Registration for MASTECH 2025 is Confirmed';
        $sub='PLEASE PRESENT THIS QR CODE TO PRINT YOUR BADGE ONSITE FOR ACCESS TO THE CONFERENCE & COCKTAIL';
    }
    else{
        $subject='Your Delegate Registration for MASTECH 2025 is Confirmed';
        $sub='PLEASE PRESENT THIS QR CODE TO PRINT YOUR BADGE ONSITE FOR ACCESS TO THE CONFERENCE';
    }

   

 $query = "UPDATE $db SET `qr_status` ='$changeStatus',`mail_date`='$addeddate',`is_cocktail`='$is_cocktail' WHERE id = '$id'";
    mysqli_query($con, $query);

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
    $mail->Password = "kZL00yzzCH?e";
    $from = "esol@shiptek20.com";


    //   echo dirname(__DIR__) . '/admin/qrcodes/'.$qr;exit;
    $mail->addAddress($email1);
   // $mail->addAddress('mastech2025@uaemastech.com');
   $mail->addBCC('awards@realteksummit.com');
    $mail->addBCC('anagha.p@ariesesolutions.com');
   // $mail->addBCC('mastech2025@uaemastech.com');
   // $mail->addBCC('events@biztvevents.com');

//$mail->addAddress('krishnendu@ariesesolutions.com');
//$mail->addCC($pic_email);
//$mail->addBCC('ceo.sec@ariesgroupglobal.com');
// $mail->addBCC('support@ariesesolutions.com');
    $mail->setFrom($from, 'MasTech Confirmation-' . $loc);

    $mail->Subject = $subject;
    $mail->AddEmbeddedImage(dirname(__DIR__) . '/admin-login/qrcodes/' . $qr, 'qrimg', $qr);
    $mail->AddEmbeddedImage(dirname(__DIR__) . '/admin-login/img/mastech_logo.png', 'logo', 'mastech_logo.png');
    $mail->AddEmbeddedImage(dirname(__DIR__) . '/admin-login/img/Sponsors-Logo.jpg', 'sponsor_flyer', 'Sponsors-Logo.jpg');
    $mail->AddEmbeddedImage(dirname(__DIR__) . '/admin-login/img/linkedinimg.png', 'linkedin_icon', 'linkedinimg.png');
    $mail->AddEmbeddedImage(dirname(__DIR__) . '/admin-login/img/mastechmail.png', 'mastechmail', 'mastechmail.png');
    
    $message = '<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>' . $title . '</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="background-color: #F2F3F5; margin: 0; padding: 0;">
    <table width="100%" bgcolor="#F2F3F5" cellpadding="0" cellspacing="0" border="0">
        <tr>
            <td align="center">
                <table width="650" bgcolor="#FFF" cellpadding="0" cellspacing="0" border="0" style="box-shadow: 0 1px 3px rgba(0,0,0,0.1);">
                    
                    <!-- Header -->
                    <tr>
                        <td align="center" style="padding: 30px;">
                            <img src="cid:logo" alt="MASTECH Logo" width="150" style="display: block;">
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding: 20px; font-family: Arial, sans-serif;">
                            <p>Dear ' . $name1 . ',</p>
                            <p style="line-height: 25px;">
                                Thanks for registering for the conference.<br>
                                This email serves as your registration confirmation for <b>MASTECH 2025</b>.
                            </p>

                            <!-- QR Code Section -->
                            <table width="100%" bgcolor="#123772" cellpadding="20" cellspacing="0" border="0">
                                <tr>
                                    <td align="center" style="color: #FFF;">
                                        <h3><b>'.$sub.'</b></h3>
                                        <img src="cid:qrimg" width="150" height="150" alt="QR Code">
                                        <p>
                                            <b>EVENT DATE:</b> ' . $event_date . '<br>
                                            <b>CONFERENCE:</b> ' . $conference . '<br>
                                            <b>VENUE:</b> ' . $venue . '<br>
                                            <b>DRESS CODE:</b> ' . $dresscode . '<br>
                                            ' . (!empty($gmap) ? '<b>GOOGLE MAP:</b> <a href="' . $gmap . '" style="color: #FFF; text-decoration: underline;">Click Here</a>' : '') . '
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <!-- LinkedIn Sharing -->
                            <table width="100%" border="1" cellpadding="15" cellspacing="0" style="margin-top: 10px; border-radius: 5px;">
                                <tr>
                                    <td align="center">
                                        
                                        <a href="https://www.linkedin.com/events/mastech2025-globalmaritimeconfe7284464255410520064/" target="_blank">
                                            <img src="cid:mastechmail" width="300" style="display: block; margin: 10px auto;">
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            <!-- Badge Collection -->
                            <table width="100%" border="1" cellpadding="15" cellspacing="0" style="margin-top: 10px; border-radius: 5px;">
                                <tr>
                                    <td align="center">
                                        <b>MASTECH 2025 Badge Collection</b><br><br>
                                        Delegate Badges can be collected from 08:30 am. Once you reach the venue kindly proceed to the Registration Desk with your Business Card and the attached QR Code for hassle free collection of your badge.
                                    </td>
                                </tr>
                            </table>

                            <!-- Valet Parking -->
                            <table width="100%" border="1" cellpadding="15" cellspacing="0" style="margin-top: 10px; border-radius: 5px;">
                                <tr>
                                    <td align="center">
                                        <b>Valet Parking</b><br><br>
                                        Valet parking is available at the venue, near the main entrance of The Armani Ballroom, Burj Khalifa. A MASTECH representative will be there to assist you.
                                    </td>
                                </tr>
                            </table>

                            <!-- Cancellation Policy -->
                            <table width="100%" border="1" cellpadding="15" cellspacing="0" style="margin-top: 10px; border-radius: 5px;">
                                <tr>
                                    <td align="center">
                                        <b>Cancellation Policy</b><br><br>
                                        Kindly notify us at least 3 days before the event if, for any reason, you are unable to attend. This will allow us to accommodate another delegate since seating is limited, besides ensuring minimal food wastage, and ensuring all seats are filled at the venue.
                                    </td>
                                </tr>
                            </table>

                            <!-- Event Info & Contact -->
                            <p>
                                To know more about this event, please visit:
                                <a href="https://www.uaemastech.com/" target="_blank">https://www.uaemastech.com/</a><br>
                                For any inquiries regarding the event or if you are interested in partnering with us, please feel free to contact us via email at:<br>
                                <a href="mailto:mastech2025@uaemastech.com">mastech2025@uaemastech.com</a> or Mob: +971 52 928 5938 | +971 50 189 4338 <br>
                            </p>

                            <!-- Sponsors Section -->
                            <table width="100%" border="1" cellpadding="15" cellspacing="0" style="margin-top: 10px; border-radius: 5px;">
                                <tr>
                                    <td align="center">
                                        <b>Partners and Sponsors</b><br><br>
                                        <img src="cid:sponsor_flyer" width="400" style="display: block; margin: 10px auto;">
                                    </td>
                                </tr>
                            </table>

                            <!-- Social Media -->
                            <table width="100%" border="1" cellpadding="15" cellspacing="0" style="margin-top: 10px; border-radius: 5px;">
                                <tr>
                                    <td align="center">
                                        <b>Follow us for real-time updates on MASTECH 2025</b><br><br>
                                        <a href="https://www.linkedin.com/events/mastech2025-globalmaritimeconfe7284464255410520064/" target="_blank">
                                            <img src="cid:linkedin_icon" width="25" height="25" style="display: inline-block;">
                                        </a>
                                    </td>
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

    $mail->Body = $message;
    $mail->IsHTML(true);



    if ($mail->Send()) {
        echo "1";
    } else {
        echo "failed";
    }
}
if ($st == 2) {
    $id = $id;
    $changeStatus = $st;

    $res1 = mysqli_query($con, "select * from `$db` where status=1 and id=$id");
    $row1 = mysqli_fetch_array($res1);

    //$email1= $row1["email"];
//$name1=$row1['name'];
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
        $name1 = $row1['name'];
    } elseif (isset($row1["firstname"]) && isset($row1["lastname"])) {

        $name1 = strtolower($row1["firstname"] . ' ' . $row1["lastname"]);
        $name1 = ucwords($name1);
    } else {

        $name1 = "Name not found";
    }


    // $changeStatus = $_GET['st'];
    //exit();
    $query = "UPDATE `$db` SET admin_status = $changeStatus, qr_status=3 WHERE id = '$id'";
    mysqli_query($con, $query);

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
    //Set who the message is to be sent from
    $from = "esol@shiptek20.com";



   // $mail->addAddress($email1);
     $mail->addAddress($email1);
    $mail->setFrom($from, 'MasTech 2025-' . $loc);
   
    //$mail->addAddress('mastech2025@uaemastech.com');
    //$mail->addBCC('awards@realteksummit.com');
    $mail->addBCC('anagha.p@ariesesolutions.com');
  
//    $mail->addBCC('events@biztvevents.com');
//    $mail->addBCC('mastech2025@uaemastech.com');
 //  $mail->AddCC('eventmanager@ariesgroupglobal.com');


$mail->AddEmbeddedImage(dirname(__DIR__) . '/admin-login/img/mastech_logo.png', 'logo', 'mastech_logo.png');



    $mail->Subject = "Status of your MASTECH 2025 Delegate Registration";
    $message = '<!DOCTYPE html>

  
     <html>

     <head>
         <meta charset="utf-8" />
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <title>' . $title . '</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
     </head>
 
 
     <body style="background-color: #F2F3F5;">
 
         <div style="background-color: #F2F3F5;">
             <div style="font-family: Arial, Helvetica, sans-serif;max-width: 650px;display: block;margin: 0 auto;margin-bottom: 50px;border-top: 2px dashed #ccc;box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
 
                <div style="background: #7ea8d8ff; padding: 30px;">
                    
                    <img src="cid:logo"  alt="" style="margin: 0 auto;display: block;padding: 6px 0px;width:auto;height:100px;">
                </div>
 
            <div style="background-color: white;padding: 5px 30px 30px 30px;">
 
                     <p style="margin-bottom: 20px;">
                      Dear ' . $name1 . ',
                     </p>
<p style="line-height: 25px;text-align: justify;">

Thank you for your interest in MASTECH 2025. Unfortunately, owing to the high volume of registrations, we regret that we are unable to take additional delegate entries 
currently. In case we have any withdrawals from the already accepted entries, you will be notified on a first come first serve basis.
<br>
If you are an invitee via our event sponsors, we recommend that you please contact them directly. Thank you again for your interest.
<br><br>


<b>Best Regards,</b><br>
<b>Team MASTECH 2025 </b><br>

                                   

</p>
</div>
<div style="background-color: #00BFFF;padding: 15px;">
<p style="margin: 0px;font-size: 20px;color: white;opacity: 1;text-align: center;">Thank you...!</p>
                 </div>
             </div>
         </div>
     </body>
 
 </html>';
    $mail->Body = $message;
    $mail->IsHTML(true);


    if ($mail->Send()) {
        echo "2";

    } else {
        // echo "Mailer Error: " . $mail->ErrorInfo;
        echo "failed";
    }
}

?>