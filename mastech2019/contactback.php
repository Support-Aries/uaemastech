<?php

if(isset($_POST))
{exit;

      // echo 'Valid';
      if(isset($_POST['name'])&& $_POST['name']!="") {
                $name = ucwords(trim($_POST['name']));
		$enq	= trim($_POST['message']);
		$email	= trim($_POST['email']);
                $phone	= trim($_POST['number']);
		
		 $sendmail = sendmail($name,$phone,$enq,$email);  
                 $_SESSION['msg']="Enquiry has been submitted";
                 header("Location:contactus.php?st=1");
     }
    
}


function sendmail($name,$phone,$enq,$email){
       
      //  $to = 'saranyasasi.biztv@gmail.com';
     $to = "mastech2019@uaemastech.com";
 //$to = 'rajeena.biztv@gmail.com';
        $subject  = " Enquiry from - $name";
        $message  = "<table style=' color:#000; '>Hi, <br/><br/>
                      An enquiry has been submitted by $name
                      <br/></table>";
        $message.=" The details are as follows:<br/><br/>";
        $message.="<table><tr><td><b>Name : </b>$name</td></tr>
                          <tr><td><b>Email :</b> $email</td></tr>
                          <tr><td><b>Phone :</b> $phone</td></tr>
                          <tr><td><b>Message : </b>$enq</td></tr>
                                
                </table> ";
       $message.="<table style=' color:#000; '>Greetings<br/></table>"; 
        


        $headers = "From:mastech2019@uaemastech.com\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
 //$headers .= 'Bcc: saranyasasi.biztv@gmail.com' . "\r\n";

        mail($to,$subject,$message,$headers);

        }

