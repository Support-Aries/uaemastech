<!DOCTYPE html>
<html>

<!-- Head -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <title>Live Settings</title>
    
        <link rel="icon" href="images/fav.png" sizes="any" type="image/png">

    <!-- For-Mobile-Apps -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Style -->
        <link href="css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <!-- //Style -->

    <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
    <!-- Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>
<?php 
include 'database.php';

$sql = "select * from livesettings";
$result = $conn->query($sql);
while ($row = $result->fetch_assoc()) {
    if ($row['id'] == 1)
        $day = $row['value'];
    if ($row['id'] == 2)
        $month = $row['value'];
    if ($row['id'] == 3)
        $year = $row['value'];
    if ($row['id'] == 4)
        $time = $row['value'];
    if ($row['id'] == 5)
        $iframe = $row['value'];
    if ($row['id'] == 6)
        $page = $row['value'];
    if ($row['id'] == 7)
        $home = $row['value'];
   
        $livelink = $_SERVER['SERVER_NAME']."/live";
}

if (isset($_POST)&&!empty($_POST)) {
   $query = " update livesettings set value='".$_POST['day']."' where credential='day' ";
   $conn->query($query);
   $query = " update livesettings set value='".$_POST['year']."' where credential='year' ";
   $conn->query($query);
   $query = " update livesettings set value='".$_POST['time']."' where credential='time' ";
   $conn->query($query);
   $query = " update livesettings set value='".$_POST['iframe']."' where credential='iframe' ";
   $conn->query($query);
   $query = " update livesettings set value='".$_POST['month']."' where credential='month' ";
   $conn->query($query);
   $query = " update livesettings set value='".$_POST['home']."' where credential='home' ";
   $conn->query($query);
   $query = " update livesettings set value='".$_POST['page']."' where credential='page' ";
   $conn->query($query);
//   header('Location:settings.php');
    echo "<meta http-equiv='refresh' content='0'>";
}
?>

    <div class="container">
        <h1>Live Settings</h1>
<!--        <div class="clear-loading spinner">
            <span><img src="../assets/img/logo.png" alt="" class="img-responsive"></span>
        </div>-->
    </div>

    <div class="wrapper form-article">
    
        <h3><a href="/live" target='_blank'><span class="sub-message"><b>View Live</b></span></a></h3>

        <form name='settings' method="post" enctype="multipart/form-data">
             <div class="input-field-box">
                <label for="usr">Page (1: timer page 2:live page 3: home redirection )</label>
                <input type="text" name="page" placeholder="Page" value="<?=$page?>">
            </div>
            <div class="input-field-box">
             <label for="usr">Day</label>
             <input type="text" name="day" placeholder="Day" value="<?=$day?>">
            </div>
            
            <div class="input-field-box">
                <label for="usr">Month</label>
                <input type="text" name="month" placeholder="Month" value="<?=$month?>">
            </div>
            
            <div class="input-field-box">
                <label for="usr">Year</label>
                <input type="text" name="year" placeholder="Year" value="<?=$year?>">
            </div>
            
            <div class="input-field-box">
                <label for="usr">Time</label>
                <input name="time" type="text" placeholder="Time"value="<?=$time?>">
            </div>
            
            <div class="input-field-box">
                <label for="usr">Home Link</label>
                <input name='home' type="text" placeholder="Home link" value="<?=$home?>">
            </div>
            
           
            
            <div class="input-field-box box-text-area">
                <label for="usr">Iframe</label>
                <textarea name="iframe" placeholder="Type here"><?=$iframe?></textarea>
            </div>
        
            <input type="submit" class="btn" value="Save">
           
        </form>

        
    </div>
    

    <div class="footer">
        
        <div class="countdown-links">
            <ul>
                <li><a href="http://www.indywood.tv/" target="_blank">Home</a></li>
                <li><a href="http://www.indywood.tv/about-us/" target="_blank">About us</a></li>
                <li><a href="http://www.indywood.tv/contact-us/" target="_blank">Contact us</a></li>
                <li><a href="http://www.indywood.tv/faq/" target="_blank">FAQ</a></li>
                <li><a href="http://www.ariesgroupglobal.com/" target="_blank">About Aries</a></li>
            </ul>
        </div>
        
        <p> © All rights reserved. <a href="http://ariesesolutions.com/">Aries e-Solutions</a>	</p>
    </div>




    <!-- Custom-JavaScript-File-Links -->
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/moment.js"></script>
        <script type="text/javascript" src="js/moment-timezone-with-data.js"></script>
        <script type="text/javascript" src="js/timer.js"></script>
        <script type="text/javascript" src="js/monetization.js"></script>
    
    <!-- //Custom-JavaScript-File-Links -->

</body>

</html>