<?php
//echo "mfkdvk";
//session_start();
//if(isset($_POST))
//{
////  if (empty($_SESSION['captcha']) || trim(strtolower($_REQUEST['captcha'])) != $_SESSION['captcha']) {
//       // echo "Invalid";
//       $_SESSION['name']=$_POST['name'];
//      
//       $_SESSION['email']=$_POST['email'];
//       $_SESSION['message']=$_POST['message'];
//       $_SESSION['msg']="Invalid Captcha";
//        header("Location:index.php#contact");
//    } else {
      // echo 'Valid';
      if(isset($_POST['userName'])&& $_POST['userName']!="") {
                $name = ucwords(trim($_POST['userName']));
		$enq	= trim($_POST['userMsg']);
		$email	= trim($_POST['userEmail']);
		$mob	= trim($_POST['mobile']);
		 $sendmail = sendmail($name,$enq,$email,$mob); 
                  
                 $_SESSION['msg']="Enquiry has been submitted";
                
     }
//    }
//}


function sendmail($name,$enq,$email){
       
      //  $to = 'saranyasasi.biztv@gmail.com';
  $to= "nijil.biztv@gmail.com";
    // $to.= "developer@ariesesolutions.com.com".","."saranya609@gmail.com";

//        $to.= "shinoj@marinebiz.tv".","."anishc@marinebiz.tv";
//        $to.= "shinoj@marinebiz.tv";
       
        $subject  = " A contact from Website - $name";
        $message  = "<table style=' color:#000; '>Hi, <br/><br/>
                      An enquiry has been submitted by $name
                      <br/></table>";
        $message.=" The details are as follows:<br/><br/>";
        $message.="<table><tr><td><b>Name : </b>$name</td></tr>
                         <tr><td><b>Email :</b> $email</td></tr>
                           <tr><td><b>Message : </b>$enq</td></tr>
                                
                </table> ";
       $message.="<table style=' color:#000; '>Greetings<br/></table>"; 
        


       $headers = "From:$email";
    $headers .= "MIME-Version: Enquiry from Shiyas Website:\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 $headers .= 'Bcc: info@shiyascatering.com' . "\r\n";

        mail($to,$subject,$message,$headers);
//           echo "Email sent!"; 
header("Location:../contact.html");

        }    


