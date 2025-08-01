<?php
session_start();
include('../dbcon.php');
$befor_encode = base64_decode($_GET['prof_dt']);
$prof_dt = explode('~', $befor_encode);
$id = $prof_dt[0];
$table = $prof_dt[1];
$location = $prof_dt[2];
$is_cocktail = $prof_dt[3];

if($is_cocktail==1){
  $title='Conference + Cocktail';
}
else{
  $title='Conference';
}

if(!isset($_SESSION['login']))
header("location:index?prof_dt=" . urlencode(base64_encode($befor_encode)));

$_SESSION['user_id'] = $id;
$_SESSION['table'] = $table;


$sql_details =mysqli_query($con,"SELECT * FROM `$table` 
    where id ='$id'");
$user_data = mysqli_fetch_assoc($sql_details);
if (isset($user_data["email"])) {
   $email1 = $user_data["email"];
} elseif (isset($user_data["office_mail"])) {
   $email1 = $user_data["office_mail"];
} else {
    
   $email1 = "Email not found";
}

if (isset($user_data["name"])) {
    
     $name1=$user_data['name'];
} elseif (isset($user_data["firstname"]) && isset($user_data["lastname"])) {
   
    $name1 = $user_data["firstname"] . ' ' . $user_data["lastname"];
    
} else {
   
    $name1 = "Name not found";
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>User Profile | MasTech 2025  |<?= $location ?></title>

<meta name="description" content="">
<meta content="Mastech 2025,<?= $location ?>" name="keywords">
<meta property="og:image" content="https://www.uaemastech.com/login/images/mastech_logo.png">
<meta property="og:image:type" content="image/png">
<meta property="og:image:width" content="500">
<meta property="og:image:height" content="313">
<meta property="og:type" content="website" />
<meta property="og:url" content="https://www.uaemastech.com/"/>
<meta property="og:title" content="User Profile | MasTech 2025 | <?= $location ?>" />
<meta property="og:description" content="" />

<link rel="shortcut icon" href="../assets/images/favicon.ico">
<!-- fraimwork - css include -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/user.css">
<!-- icon css include -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/flaticon.css">
</head>



<div class="page-content page-container" id="page-content" style=" margin: 80px auto;">
<div class="padding">
<div class="container">
<div class="row  d-flex justify-content-center">
 <!-- <div class="col-xl-2 "> </div>  -->

<div class="col-xl-8 col-md-12">
<div class="card user-card-full">
<div class="row m-l-0 m-r-0" >


<div class="col-sm-4 bg-c-lite-green user-profile" >
<div class="card-block text-center text-white">
<div class="m-b-25">
<img src="images/mastech_logo.png" class="img-radius" alt="Mastech" 
style="background:#fff;width:155px">
</div>
<h5 class="f-w-600"><?php echo $name1;?></h5>
<p class="f-w-600" ><?php echo $user_data['company'];?></p>
<p class="f-w-600" ><?php echo $title;?></p>

</div>
</div>


<div class="col-sm-8 detailsdiv" style="">
<div class="card-block">
<h6 class="m-b-20 p-b-5 b-b-default f-w-600">User Details</h6>

<div class="row">
<?php if($user_data['qr_status']==2){?>
<div class="col-sm-12">
    <table class="table table-striped">
    <tr>
      <td><img src="images/correct-ans.png" style="height:25px;">  &nbsp;<b>Succesfully Checked IN</b></td>
    </tr>
</table>
</div>
<?php }?>


<div class="col-sm-12">
     <table class="table table-striped">
    <tr>
      <th>Email ID</th>
      <td><?php echo $email1;?></td>
    </tr>
</table>
</div>
<div class="col-sm-12">
     <table class="table table-striped">
    <tr>
      <th>Designation</th>
      <td><?php echo $user_data['designation'];?></td>
    </tr>
</table>
</div>


</div>

<?php if($user_data['qr_status']==1 || $user_data['qr_status']==0 || $user_data['qr_status']==4){?>

<div class="row " id="submitdiv">
<div class="col-lg-12" style="text-align:center">                              
<button type="button" name="submit" id="submit" class="btn btn-primary" onclick="checkin(<?php echo $user_data['id'];?>)">Check IN</button>
<input type="button" class="btn btn-primary" style="display: none" id="waitmsg"
 value="Please Wait..." disabled="disabled">
  </div>
</div>

<?php } ?>

<?php if($user_data['qr_status']==2){?>
<div class="row ">
<div class="col-sm-12" style="text-align:center;">
    <table class="table table-striped">
    <tr>
<td><a href="./print-2" target="_blank" class="btn btn-info" role="button">Preview Card</a></td>


    </tr>
</table>
</div>
</div>
<?php }?>



</div>
</div>


</div>
</div>
</div>
</div>
</div>
</div>
 </div>

<!-- footer-->
<div id="footer">
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<script type="text/javascript">
function checkin(id){
$("#submit").hide();
$("#waitmsg").show();
$.ajax({
url: 'check-in-actions.php',
data: {id:id, table: '<?= $table ?>'},
type: "POST",
success: function (data) {
location.reload();
}
});
}
</script>