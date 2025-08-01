<?php 
include_once 'config.php';
include("PHPMailer/class.phpmailer.php");
include("PHPMailer/class.smtp.php");
include("PHPMailer/PHPMailerAutoload.php");

if ((isset($_POST['submit'])) && !empty($_POST)) {
//    echo "1";
    $title = addslashes(trim($_POST['title']));
    $fname = addslashes(trim($_POST['fname']));
    $lname= addslashes(trim($_POST['lname']));
    $company= addslashes(trim($_POST['company']));
    $designation= addslashes(trim($_POST['designation']));
     $position= addslashes(trim($_POST['position']));
    $contact= addslashes(trim($_POST['contact']));
    $email= addslashes(trim($_POST['email']));
    $pname= addslashes(trim($_POST['pname']));
//    $pcompany= addslashes(trim($_POST['pcompany']));
    $y_o_a= addslashes(trim($_POST['y_o_a']));
    $description= addslashes(trim($_POST['description']));
    $cat= addslashes(trim($_POST['category']));
    $ip = $_SERVER['REMOTE_ADDR'];
    $date=date('Y-m-d H:i:s');
    $agent = $_SERVER['HTTP_USER_AGENT'];
    $ip = getenv(REMOTE_ADDR);
    $result=mysqli_query($mysqli,"insert into award_nomination(title,fname,lname,company,designation,position,contact,email,person_name,achievement_yr,category,description,his_user_agent,his_ip,added_date) values('$title','$fname','$lname','$company','$designation','$position','$contact','$email','$pname','$y_o_a','$cat','$description','$agent','$ip','$date')") or die(mysql_error());
    if($result>0){  
        $mail  = new PHPMailer(); 
//        $address="arieshomeplex@ariesgroupglobal.com";
//        $address="sathyabhamakr.biztv@gmail.com";
//        $address="rakhi.biztv@gmail.com";
        $address="mastech2019@uaemastech.com";
        $mail->AddReplyTo("mastech2019@uaemastech.com","reply");
        $mail->SetFrom('mastech2019@uaemastech.com', 'MASTECH');
        $mail->AddAddress($address,"");
        $mail->Subject = "MASTECH NOMINATIONS 2019";
        $message  = "<table style=' color:#000; '>Hi Admin, <br/><br/>
                       A new nomination has been submitted via website under MASTECH. Please find the details:
                        <br/></table>";
        $message.="<table>
                         <tr><td><b>Title : </b>$title</td></tr>
                            <tr><td><b>First Name :</b> $fname</td></tr>
                            <tr><td><b>Last Name : </b>$lname</td></tr>
                             <tr><td><b>Company : </b>$company</td></tr>
                             <tr><td><b>Designation : </b>$designation</td></tr>
                             <tr><td><b>Position : </b>$position</td></tr>
                             <tr><td><b>Contact number : </b>$contact</td></tr>    
                             <tr><td><b>Email ID : </b>$email</td></tr>
                              <tr><td><h3>Nomination details</h3></td></tr>   
                              <tr><td><b>Name of person :</b> $pname</td></tr>
                            
                                <tr><td><b>Category : </b>$cat</td></tr>
                             <tr><td><b>Year of Achievement : </b>$y_o_a</td></tr>
                             <tr><td><b>Description of Project / Innovation : </b>$description</td></tr>
                               <tr><br/></tr>
                             </table> ";
        $message.="<table style=' color:#000; '><br/>Greetings.<br/></table>"; 
       $mail->MsgHTML($message);   
       if($mail->Send()){
                                    $mail1  = new PHPMailer(); 
                                    $mail1->AddReplyTo("mastech2019@uaemastech.com","reply");
                                    $mail1->SetFrom('mastech2019@uaemastech.com', 'MASTECH');
                                    $mail1->AddAddress($email,"");
                                   
                                    $mail1->Subject = "MASTECH NOMINATIONS 2019";
                                    $message1 ="Dear $fname $lname, 
                                                <br><br>
                                                Congratulations, your details for nomination 2019 successfully submitted. 
                                                <br><br>
                                                 Regards<br> <b>UAE MASTECH</b>";
                                     $res=$mail1->MsgHTML($message1);   
                                     if($mail1->Send()){
           $st=1;
       }else{ 
//           echo "Failed";
//           exit;
           $st=2;
       }
       }
}
//    $error="Something went wrong.Your enquiry is not submitted!!!";

}
?>
<?php include_once 'header.php'; ?>
<style>
   .error
{
color:red !important;
font-family:verdana, Helvetica;
}
</style>

<div class="about">
    <div class="container">
        <div class="content_row">
            <div class="nomination col-lg-12 col-md-12 col-sm-12">
                <h5>NOMINATIONS 2019</h5> 
                <form name="nomination-form" id="nomination-form" action="" method="post">
                    
                    <div class="row">
                        <?php if($st==1) 
                        {
                        ?>
                
                        <div class="success" >
                          <h6>SUCCESS</h6><br/>
                          
                        </div>         <?php 
                    
                        }if($st==2){ ?> 
                        <div class="success" >
                          <h6>FAILED</h6><br/>
                          
                        </div>         <?php 
                    
                        } ?>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" id="title" required="">
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="fname" id="fname" required>
                        </div>
                    </div>
                  
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lname" id="lname" required="">
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" class="form-control" name="company" id="company" required>
                        </div>
                    </div>

                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Designation</label>
                            <input type="text" class="form-control" name="designation" id="designation" required>
                        </div>
                    </div>
                        
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Position</label>
                            <input type="text" class="form-control" id="position" name="position" required>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="number" class="form-control" id="contact" name="contact" required>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Email ID</label>
                            <input type="email" class="form-control" name="email" id="email" required="">
                        </div>
                    </div>

                        
                    </div>   
                      
                    
                    <div class="row">
                    
                    <h6>Nomination Details </h6>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Name of Person / Company</label>
                            <input type="text" class="form-control" name="pname" id="pname" required>
                        </div>
                    </div>
                        
<!--                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Company</label>
                            <input type="text" class="form-control" name="pcompany" required="">
                        </div>
                    </div>-->


                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Year of Achievement</label>
                            <input type="text" class="form-control" name="y_o_a" name="y_o_a" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category</label>
                            <select name="category" id="category"  class="form-control" required>
                                <option value="">Select</option>
                                <option value="Enabling new technology">Enabling new technology</option>
                                <option value="Innovative / Challenging Projects">Innovative / Challenging Projects</option>
                                <option value="Multi faceted Logistics for Complex EPC Projects">Multi faceted Logistics for Complex EPC Projects</option>
                                <option value="Innovative / First of a Kind Designs">Innovative / First of a Kind Designs</option>
                                <option value="Advancements in Green Technology">Advancements in Green Technology</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description of Project / Innovation</label>
                            <textarea class="form-control txt-area" rows="10" name="description" id="description" required></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <small>* All fields are mandatory.</small>
                    </div>
                    <div class="col-md-12 text-center">
                        <button type="submit" name="submit" class="btn btn-primary">SUBMIT NOW </button>
                    </div>
                        
                    </div>    
                        
                </form>
                       
            </div>
        </div>

    </div>
</div>





    
<?php include_once 'footer.php'; ?>
<script src="js/jquery.min.js"></script>
 <script src="js/jquery.validate.js"></script>
 <script type="text/javascript">
var validate =  $("#nomination-form").validate({
    rules: {
                title:"required",
                fname:"required",
                lname:"required",
                company:"required",
                designation:"required",
                position:"required",
                contact:"required",
                email:"required",
                pname:"required",
//                pcompany:"required",
                y_o_a:"required",
                description:"required",
                category:"required",
  },
            messages: {
                title:"Please enter title.",
                fname:"Please enter first name.",
                lname:"Please enter last name.",
                company:"Please enter company.",
                designation:"Please enter designation.",
                position:"Please enter position.",
                contact:"Please enter contact number.",
                email:"Please enter email.",
                pname:"Please enter name of person / company.",
//                pcompany:"Please enter company of person.",
                y_o_a:"Please enter year of achievement.",
                description:"Please enter description.",
                category:"Please select category"
                 },

});
</script>