<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
    <?php 
    $url = $_SERVER['REQUEST_URI']; //echo $url; exit();
		//$parts = explode('/', $url);
		//$url = explode('.', $parts[2]);
                $title = "Mastech UAE";
                $metaDesc = "Mastech UAE";
                $metaKeywords = "";
                if($url=="/index.php"){
                $title = "Mastech UAE ";
                 $metaDesc = "";
                 $metaKeywords = "";
                }
                if($url=="/sponsors.php"){
                $title = "";
                 $metaDesc = "";
                 $metaKeywords = "";
                }
                if($url=="/gallery.php"){
                $title = "";
                 $metaDesc = "";
                 $metaKeywords = "";
                }
                
    ?>
<title><?=$title?></title>
 <meta charset="utf-8">
 <meta http-equiv="content-type" content="text/html;charset=utf-8" />
 <meta name="keywords" content="<?= $metaKeywords?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <meta name="description" content="<?=$metaDesc?>">

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="images/fav.png">   

    

    
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/move-top.js"></script>
       <script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
				});
			});
		</script>
		<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>

<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-93161452-1', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body>
<!-- navigation -->
<!-- banner -->
<div class="banner1">
	<div class="container">
		<div class="navigation wow fadeInLeft animated" data-wow-delay=".5s">
			<nav class="navbar navbar-default">
			<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right link-effect">
                                                    <li><a href="index.php">HOME</a></li>
                            
                            <?php //if(basename($_SERVER['PHP_SELF'])=='index.php'){?>
<!--                                                    <li><a href="#" class="scroll">ABOUT US</a></li>-->
                                                     
                            <?php //}
   // else //
        
  //  {?>
<!--            <li><a href="index.php">ABOUT US</a></li>-->
    <?php// }?>
    
							
<!--                                                            <li class="dropdown">
                                 <a href="#about" class="scroll">About<span class="caret"></span></a>
                                                                 <ul class="dropdown-menu" role="menu">
                <li><a href="mastech.php"> About MAST</a> </li>
            
            </ul></li>-->
                                                    
                                                        
<!--							<li><a href="#services" class="scroll">Services</a></li>-->
<!--                                                        <li><a href="#MASTECH" class="scroll">MASTECH 2017</a></li>-->
                                                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">CONFERENCE<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="conference-schedule.php"> CONFERENCE SCHEDULE</a> </li>
                                    <li><a href="panel-topic-details.php"> PANEL TOPIC DETAILS</a> </li>
                                    <!--<li><a href="conference-topic.php"> CONFERENCE TOPIC</a> </li>-->
                                    <!--<li><a href="speaker-invitation.php"> SPEAKER INVITATION</a> </li>-->
                                    
                                  <li><a href="conference-speaker.php">CONFERENCE SPEAKERS</a> </li>
                                    <li><a href="images/MASTECH-2019-Brochure.pdf" target="_blank">BROCHURE</a> </li>
                                    <li><a href="speaker.php">PAST SPEAKERS</a> </li>

                                </ul>
                            </li>
                            
                            <li><a href="masterclass.php">MASTERCLASS</a></li>
            
            <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">AWARDS<span class="caret"></span></a>
                                                                 <ul class="dropdown-menu" role="menu">
                                                                     
                                                                      <!--<li><a href="award-catg.php"> AWARD CATEGORIES</a> </li>-->
                                                                     
                                                                     <li><a href="nomination.php"> AWARD NOMINATION</a> </li>
                                                                      <li><a href="award-winners.php"> AWARD WINNERS 2017</a> </li> 
                                                                     
                                                                  
            </ul></li>
                                                        <li><a href="gallery.php">GALLERY</a></li>
                                                      <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">SPONSORS<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">

                                    <li><a href="conference-sponsors.php"> CONFERENCE SPONSORS</a> </li>  
                                    <li><a href="sponsors-tariff.php"> SPONSORS TARIFF</a> </li>  
                                </ul></li>
                                                        <li><a href="aboutus.php" >ABOUT US</a></li>
<!--                                                        <li><a href="news.php">NEWS</a></li>-->
<!--                                                        <li><a href="contactus.php">CONTACT US</a></li>-->
                            
                            <li><a href="conference-registration.php">REGISTRATION</a></li>
                            <li class="reg-button"><a href="http://www.uaemastech.com/live/">LIVE STREAM</a></li>
                            
                            
<!--                                                        <li><a href="#" class="active">Company</a></li>-->
     				<div class="clearfix"></div>
						</ul>
						
							
					</div><!-- /.navbar-collapse -->
			</nav>
		</div>
		
<!--			<div class="banner-info">
			<div class="logo wow fadeInRight animated" data-wow-delay=".5s">
			<h3><a href="index.html"></a></h3>
		</div>
				<h1 class="wow fadeInRight animated" data-wow-delay=".5s"></h1>
				<p class="wow fadeInRight animated" data-wow-delay=".5s"></p>
			</div>-->
			
	</div>
</div>
<!--<div class="banner1">
	<div class="container">
		<div class="navigation wow fadeInLeft animated" data-wow-delay=".5s">
			<nav class="navbar navbar-default">
			 Brand and toggle get grouped for better mobile display 
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				 Collect the nav links, forms, and other content for toggling 
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right link-effect">
                                                    <li><a href="index.php">Home</a></li>
							
                                                            <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span class="caret"></span></a>
                                                                 <ul class="dropdown-menu" role="menu">
                <li><a href="mastech.php"> About MAST</a> </li>
            
            </ul></li>
                                                    
                                                        
							<li><a href="#services" class="scroll">Services</a></li>
                                                        <li><a href="mastech.php">Mastech 2017</a></li>
                                                        <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">Conference<span class="caret"></span></a>
                                                                 <ul class="dropdown-menu" role="menu">
                <li><a href="#"> Conference topics</a> </li>
                <li><a href="#"> Speaker Invitation</a> </li>
                <li><a href="#"> Speakers</a> </li>
            
            </ul></li>
                                                        <li><a href="gallery.php">Gallery</a></li>
							<li><a href="#">Sponsors</a></li>
                                                        <li><a href="#">News</a></li>
                                                        <li><a href="contactus.php">Contact</a></li>
                                                        <li><a href="#" class="active">Company</a></li>
     				<div class="clearfix"></div>
						</ul>
						
							
					</div> /.navbar-collapse 
			</nav>
		</div>
		
			<div class="banner-info">
			<div class="logo wow fadeInRight animated" data-wow-delay=".5s">
			<h3><a href="index.html"></a></h3>
		</div>
				<h1 class="wow fadeInRight animated" data-wow-delay=".5s"></h1>
				<p class="wow fadeInRight animated" data-wow-delay=".5s"></p>
			</div>
			
	</div>
</div>-->
<!-- //navigation -->
<!-- /banner -->
<!-- about -->
	
</div>	
<!--- contact ---->	 
<!--- footer ---->	

<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>

<!--- footer ---->	
</body>
</html>