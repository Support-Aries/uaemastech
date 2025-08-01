<?php
   
        include_once 'config.php';
        include("PHPMailer/class.smtp.php");
        
        include("PHPMailer/class.phpmailer.php");
date_default_timezone_set('Asia/Kolkata');        
if(isset($_POST) && !empty($_POST))
{exit;
//    if(isset($_POST['name'])&& $_POST['name']!="") 
//        {
                $name = ucwords(trim($_POST['name']));
		$email	= trim($_POST['email']);
                $phone	= trim($_POST['number']);
		$company= trim($_POST['company']);
                $des= trim($_POST['desigination']);
                $ip = $_SERVER['REMOTE_ADDR'];
                $agent = $_SERVER['HTTP_USER_AGENT'];
                 $msg= trim($_POST['msg']);
                 $date=date('Y-m-d H:i:s');
                 
              $result = "INSERT INTO sponsor_enquiry_history( name, email, phone, company,desigination,his_user_agent,his_ip,message,reg_date)VALUES ('$name', '$email','$phone','$company','$des', '$agent', '$ip','$msg','$date')";       
            
              mysqli_query($mysqli, $result);
                 $sendmail1 = sendmail1($email);  
                $sendmail = sendmail($name,$title,$email,$phone,$company,$des,$msg); 
               
                //$_SESSION['msg']="Sponsorship Enquiry has been submitted";
                //header("Location:index.php");
//                  header("Location:conference-registration.php");
                  
                                   
             
//    }
     
}

function sendmail($name,$title,$email,$phone,$company,$des,$msg)
                {
 $mail= new PHPMailer(); 
                                  
//                                    $address="mastech2019@uaemastech.com";
                                  // $address="rajeena.biztv@gmail.com";      
                                  $address="sathyabhamakr.biztv@gmail.com ";    
                                   
//                                    $address="mastech2019@uaemastech.com";  
                                    $mail->SetFrom("mastech2019@uaemastech.com","MASTECH");

                                    $mail->Subject = "MASTECH-Sponsorship Enquiry from website";
                                   $body= "<table border='1' class='body'>
                                <tr>
                              
                                <td class='container'>
                                <div class='content'>
                                <table class='main'>
                                <tr> <td colspan='2'>  <p> An enquiry has been submitted by $name.   The details are as follows:</p></td><tr>
                                <tr>                                   
                                <td><b>Name</b></td>
                                <td>:$name</td>
                                </tr>
                                <tr>                                   
                                <td><b>Email</b></td>
                                <td>:$email</td>
                                </tr>
                                <tr>                                   
                                <td><b>Phone</b></td>
                                <td>:$phone</td>
                                </tr> 
                                <tr>                                   
                                <td><b>Company</b></td>
                                <td>:$company</td>
                                </tr> 
                                <tr>                                   
                                <td><b>Designation</b></td>
                                <td>:$des</td>
                                </tr> 
                                <tr>                                   
                                <td><b>Message</b></td>
                                <td>:$msg</td>
                                </tr> 
                                <tr><table style=' color:red; '>Greetings<br/></table></tr>
                               </table>";
       
                                    $mail->MsgHTML($body); 
                                   // $mail->AddAddress($email);
 $mail->AddAddress($address,"");   
                                     if(!$mail->Send()) 
                                    {
                                        echo "Mailer Error: " . $mail->ErrorInfo;
                                        header("Location:sponsorship-enquiry.php?st=2");
                                     } 
                                     else 
                                    {
                                       $sent = 'Sent'; 
                                        header("Location:sponsorship-enquiry.php?st=1");
                                     }
     // mail($to,$subject,$message,$headers);
      
}
function sendmail1($email)
{
    //$email;
    $subject  = "MASTECH Sponsorship Enquiry ";
        $message  = "<table style=' color:blue; '><b>Thank you for your enquiry!!!</b></table><br><br> ";
        $message.="<table style=' color:blue; '><b>Will contact you soon for more details.</b> </table> <br> <br>Team MASTECH";
            
       $headers = "From:MASTECH<mastech2019@uaemastech.com>\r\n";
        
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 //$headers .= 'Bcc: saranyasasi.biztv@gmail.com' . "\r\n";

        mail($email,$subject,$message,$headers); 
}
?>
