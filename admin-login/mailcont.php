<!DOCTYPE html>

  
<html>

<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>' . $title . '</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
 
 
<body style="background-color: #F2F3F5;">
 
<div style="background-color: #F2F3F5;">
 <div style="font-family: Arial, Helvetica, sans-serif;max-width: 650px;display: block;margin: 0 auto;margin-bottom: 50px;border-top: 2px  #ccc;box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1), 0 1px 2px 0 rgba(0, 0, 0, 0.06);">
 
<div style="background-color: #FFF; padding: 30px;text-align:center;">
<img src="cid:logo" alt="image" style="height: 85px;margin: 30 auto;padding: 10px 0px;" align="center"; >
</div>
 
<div style="background-color: white;padding: 5px 30px 30px 30px;">
 <h4 style="text-align: center;">' . $title . ' </h4>
<p style="margin-bottom: 20px;">
Dear ' . $name1 . ',
</p>
<p style="line-height: 25px;text-align: justify;">
Thanks for registering for the conference.<br>
This email serves as your registration confirmation for <b>MASTECH 2025</b>.

<div style="background-color: #123772;  padding: 20px; text-align: center; color: white; border-radius: 5px;"><h3><b>QR CODE</b></h3>
<img src="cid:qrimg">
<br>

<b>EVENT DATE : </b>' . $event_date . '     <br>
<b>CONFERENCE : </b>' . $conference . '  <br>
<b>VENUE : </b> ' . $venue . ' <br>
<b>DRESS CODE : </b>' . $dresscode . '<br>';

    if (!empty($gmap)) {
        $message .= '<b>GOOGLE MAP LINK - </b><a href="' . $gmap . '" target="_blank" style="color: #FFF; text-decoration: underline;">Click Here</a><br><br>';
    }
</div>
    <br>
    $message .= '

    <div style="border: 1px solid #000; padding: 15px;  border-radius: 5px;margin-top:5px;">
                    <b>Share to your LinkedIn network</b><br><br>
                    <b>Promote your participation as a delegate of MASTECH 2025 to your LinkedIn network.</b><br><br>
                    <b>Three easy steps to post on LinkedIn.</b><br><br> 
    <ul style="text-align: left; display: inline-block; margin: 0 auto;">
        <li><a href="https://www.linkedin.com/events/mastech2025-globalmaritimeconfe7284464255410520064/" target="_blank">Click here or on the below banner</a></li>
        <li>Sign in to your LinkedIn profile</li>
        <li>View the post and share it on LinkedIn</li>
    </ul>
    <br>


    <a href="https://www.linkedin.com/events/mastech2025-globalmaritimeconfe7284464255410520064/" target="_blank">
        <img src="https://www.uaemastech.com/admin-login/img/mastechmail.png" alt="Share on LinkedIn" style="max-width: 100%; height: auto; display: block; margin: 10px auto;text-align: center;">
    </a>
                    
                   
    </div>


    <div style="border: 1px solid #000; padding: 15px; text-align: center; border-radius: 5px;margin-top:5px;">
                    <b>MASTECH 2025 Badge Collection</b><br><br>
                    Delegate Badges can be collected from 08:30 am. Once you reach the venue kindly proceed to the Registration Desk with your Business Card and the attached QR Code for hassle free collection of your badge.
    </div>


    <div style="border: 1px solid #000; padding: 15px; text-align: center; border-radius: 5px;margin-top:5px;">
                    <b>Valet Parking</b><br><br>
                    Valet parking is available at the venue, near the main entrance of The Armani Ballroom, Burj Khalifa. A MASTECH representative will be there to assist you.
    </div>

    <div style="border: 1px solid #000; padding: 15px; text-align: center; border-radius: 5px;margin-top:5px;">
                    <b>Cancellation Policy</b><br><br>
                    Kindly notify us at least 3 days before the event if, for any reason, you are unable to attend. This will allow us to accommodate another delegate since seating is limited, besides ensuring minimal food wastage, and ensuring all seats are filled at the venue.
    </div>
    <br><br>


To know more about this event, please visit: <a href="https://www.uaemastech.com/" target="_blank">https://www.uaemastech.com/</a>
<br>For any inquiries regarding the event or if you are interested in partnering with us, please feel free to contact us via email at:
<a href="mailto:mastech2025@uaemastech.com">mastech2025@uaemastech.com</a> or Mob: +971 52 928 5938 | +971 50 189 4338
<br>

</p>

<div style="border: 1px solid #000; padding: 15px; text-align: center; border-radius: 5px; margin-top: 5px;">
    <b>Partners and Sponsors</b><br><br>
    <img src="https://www.uaemastech.com/admin-login/img/Sponsors-Logo.jpg" alt="Partners and Sponsors" style="max-width: 100%; height: auto; display: block; margin: 10px auto;">
</div>

<div style="border: 1px solid #000; padding: 15px; text-align: center; border-radius: 5px; margin-top: 5px;">
    <b>Follow us for real-time updates on MASTECH 2025</b><br><br>
    
    <a href="https://www.linkedin.com/company/your-linkedin-page" target="_blank">
        <img src="https://www.uaemastech.com/admin-login/img/linkedinimg.png" alt="Follow us on LinkedIn" style="width: auto; height: 20px; display: inline-block;">
    </a>
</div>

</div>



             </div>
         </div>
     
     
     
</body>
 
 </html>