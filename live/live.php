<!DOCTYPE html>
<html>

<!-- Head -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <title>UAE Mastech Live </title>

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
 $sql = "select * from livesettings where id=5";
 $result = $conn->query($sql);
 $row = $result->fetch_assoc();

     $iframe = $row['value'];
 
 
    ?>
    <div class="wrapper-live">
  
            
        <div class="video-wrapper">
            
        <?php echo $iframe ?>
        
       </div>

        
    </div>
    

    <div class="footer" id="live-footer">
        
      
        
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
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/moment.js"></script>
        <script type="text/javascript" src="js/moment-timezone-with-data.js"></script>
        <script type="text/javascript" src="js/timer.js"></script>
        <script type="text/javascript" src="js/monetization.js"></script>
    
    <!-- //Custom-JavaScript-File-Links -->

</body>

</html>