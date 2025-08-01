<?php session_start();
$errorMsg ="";
$validUser="";
//$id = $_GET['user_id'];
$befor_encode = base64_decode($_GET['prof_dt']);
$prof_dt = explode('~', $befor_encode);
$id = $prof_dt[0];
$table = $prof_dt[1];
$location = $prof_dt[2];
if(isset($_POST["submit"])){
$validUser = $_POST["password"] == "admin123";
//echo $validUser;exit();
if($validUser==1) {
$_SESSION["login"] = true;
header("Location:user-profile?prof_dt=" . urlencode(base64_encode($befor_encode)));die(); 
}

else $errorMsg = "Invalid Password."; }
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Admin Login | MasTech 2025  | <?= $location ?></title>

<meta name="description" content="">
<meta content="ShipTek 2024,<?= $location ?>" name="keywords">
<meta property="og:image" content="https://www.uaemastech.com/login/images/logo-2.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="500">
<meta property="og:image:height" content="313">
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.uaemastech.com/"/>
<meta property="og:title" content="Admin Login | MasTech 2025 |<?= $location ?>" />
<meta property="og:description" content="" />

<link rel="shortcut icon" href="../assets/images/favicon.ico">
<!-- fraimwork - css include -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/login.css">
<!-- icon css include -->
<link rel="stylesheet" type="text/css" href="css/fontawesome-all.css">
<link rel="stylesheet" type="text/css" href="css/flaticon.css">
</head>



<div class="wrapper" style="position: relative;">
<div class="logo" style="margin-bottom:35px">
<img src="images/bizlogo.png" alt="RealTek">
</div>
 <!-- <div class="text-center mt-4 name" style="text-align: center;margin-top:15px;margin-bottom:5px;color:#ec1921;font-weight:600;font-size: 18px;">Biz Events Management</div> -->

<div class="error" style="text-align: center;"><?= $errorMsg ?></div>   
<div style="">
<form class="p-3 mt-3" method="POST" action="" name="adminlogin" 
id="adminlogin">
            
<div class="form-field d-flex align-items-center">
<span class="fas fa-key"></span>
<input type="password" name="password" id="password" placeholder="Enter Password" required>
</div>
<div id="passerror"></div>


  <div style="text-align:center">                              
<button type="submit" name="submit" id="submit" class="btn mt-3">Submit</button>
<input type="button" class="btn mt-3" style="display: none" id="waitmsg"
 value="Please Wait..." disabled="disabled">
  </div> 

</form>
</div>

</div>


<!-- footer-->
<div id="footer" style="position: relative;margin-top:280px">
<div class="container">
<div class="row">

<div class="col-lg-12 col-md-12 col-sm-12">
<div class="copyright-text">
<p class="m-0">Copyright © 2024 <a href="http://www.ariesesolutions.com/" target="_blank" style="color:#03a9f4"> Aries e-Solutions</a>.  All Rights Reserved.</p>

</div>
</div>
</div>
</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper-1.12.9.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.js"></script>


<script type="text/javascript">

var validate =  $("#adminlogin").validate({
rules: {
 password:"required",
                
},
  messages: {
  password:"Please enter admin password.",
            
  },
  errorPlacement: function(error, element) {
    if (element.attr("type") == "password") {
        error.insertAfter("#passerror");
     }
    else {
      error.insertAfter(element);
         }

          },

submitHandler: function() {
  
      $('#submit').hide();
       $('#waitmsg').show();
      return true;
      }

});
</script>



