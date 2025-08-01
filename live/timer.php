<!DOCTYPE html>
<html>

<!-- Head -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <title>UAE mastech | Live </title>
    
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
 while($row = $result->fetch_assoc()){
 if($row['id']==1)
     $day = $row['value'];
 if($row['id']==2)
$month = $row['value'];
 if($row['id']==3)
$year = $row['value'];
 if($row['id']==4)
 $time = $row['value'];
 }
    ?>

    <div class="container">
        <h3> MASTECH - AN INTERNATIONAL MARINE TECHNICAL CONFERENCE </h3>
<!--        <div class="clear-loading spinner">
          MASTECH - AN INTERNATIONAL MARINE TECHNICAL CONFERENCE 
        </div>-->
    </div>

    <div class="wrapper">
    
        <h3><span class="sub-message">We'll be live in :</span></h3>

        <div class="clock">
            <div class="column days">
                <div class="timer" id="days"></div>
                <div class="text">DAYS</div>
            </div>
            <div class="timer days">:</div>
            <div class="column">
                <div class="timer" id="hours"></div>
                <div class="text">HOURS</div>
            </div>
            <div class="timer">:</div>
            <div class="column">
                <div class="timer" id="minutes"></div>
                <div class="text">MINUTES</div>
            </div>
            <div class="timer">:</div>
            <div class="column">
                <div class="timer" id="seconds"></div>
                <div class="text">SECONDS</div>
            </div>
        </div>

        
    </div>
    

    <div class="footer">
        
<!--        <div class="countdown-links">
            <ul>
                <li><a href="http://www.indywood.tv/home/" target="_blank">Home</a></li>
                <li><a href="http://www.indywood.tv/about-us/" target="_blank">About us</a></li>
                <li><a href="http://www.indywood.tv/contact-us/" target="_blank">Contact us</a></li>
                <li><a href="http://www.indywood.tv/faq/" target="_blank">FAQ</a></li>
                <li><a href="http://www.ariesgroupglobal.com/" target="_blank">About Aries</a></li>
            </ul>
        </div>-->
        
        <p> © All rights reserved. <a href="http://ariesesolutions.com/">Aries e-Solutions</a>	</p>
    </div>




    <!-- Custom-JavaScript-File-Links -->
        <script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
        <script type="text/javascript" src="js/moment.js"></script>
        <script type="text/javascript" src="js/moment-timezone-with-data.js"></script>
        <!--<script type="text/javascript" src="js/timer.js"></script>-->
        <script type="text/javascript" src="js/monetization.js"></script>
    
    <!-- //Custom-JavaScript-File-Links -->
<script>
    $(function(){  
    var BigDay = new Date("<?php echo $day ?> <?php echo $month ?> <?php echo $year ?>, <?php echo $time ?>");
    var msPerDay = 24 * 60 * 60 * 1000 ;


    window.setInterval(function(){
        var today = new Date();
        var timeLeft = (BigDay.getTime() - today.getTime());

        var e_daysLeft = timeLeft / msPerDay;
        var daysLeft = Math.floor(e_daysLeft);

        var e_hrsLeft = (e_daysLeft - daysLeft)*24;
        var hrsLeft = Math.floor(e_hrsLeft);

        var e_minsLeft = (e_hrsLeft - hrsLeft)*60;
        var minsLeft = Math.floor(e_minsLeft);

        var e_secsLeft = (e_minsLeft - minsLeft)*60;
        var secsLeft = Math.floor(e_secsLeft);


        //                var timeString = daysLeft + " : " + hrsLeft + " : " + minsLeft + " : " + secsLeft;
        $('#days').html(daysLeft);
        $('#hours').html(hrsLeft);
        $('#minutes').html(minsLeft);
        $('#seconds').html(secsLeft);
    }, 1000);
})
</script>
       
</body>

</html>