<?php include_once 'config.php';
error_reporting(E_ALL);

// Display errors on the screen
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

?>

<!-- //navigation -->
<!-- /banner -->
<!-- about -->
<html>

<head>
    <title>Mastech: An International Marine Technical Conference UAE</title>
    <meta name="description" content="The Fifth edition of MASTECH event organized by Biz Events Management will take stage in Dubai on 27th March 2019." <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Marine Technical Conference, Marine Conference, Marine Conference in UAE" />
    <link rel="canonical" href="http://www.uaemastech.com/">
<!--<link rel="icon" href="/favicon.ico" sizes="any" type="image/ico">-->

    <link rel="shortcut icon" href="images/fav.png">
    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    
    
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    
	<!--Adding flipclock-->
	<link rel="stylesheet" href="css/flipclock.css">
	
	<!-- Custom Theme files -->
    <link href='//fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	
	<!--Adding flipclock-->
	<script src="js/jquery.js"></script> 
	<script src="css/flipclock.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	
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
        
        // ---Testimonials starts---
       
 $(document).ready(function() {
  //carousel options
  $('#quote-carousel').carousel({
    pause: true, interval: 10000,
  });
});
//---Testimonials Ends---
    </script>
    <script src="js/jssor.slider-22.2.8.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        jssor_html5_AdWords_slider_init = function() {

            var jssor_html5_AdWords_SlideoTransitions = [
              [{b:-1,d:1,o:-1,rY:-120},{b:2600,d:500,o:1,rY:120,e:{rY:17}}],
              [{b:-1,d:1,o:-1},{b:1480,d:20,o:1},{b:1500,d:500,y:-20,e:{y:19}},{b:2300,d:300,x:-20,e:{x:19}},{b:3100,d:300,o:-1,sY:9}],
              [{b:-1,d:1,o:-1},{b:2300,d:300,x:20,o:1,e:{x:19}},{b:3100,d:300,o:-1,sY:9}],
              [{b:-1,d:1,sX:-1,sY:-1},{b:0,d:1000,sX:2,sY:2,e:{sX:7,sY:7}},{b:1000,d:500,sX:-1,sY:-1,e:{sX:16,sY:16}},{b:1500,d:500,y:20,e:{y:19}}],
              [{b:1000,d:1000,r:-30},{b:2000,d:500,r:30,e:{r:2}},{b:2500,d:500,r:-30,e:{r:3}},{b:3000,d:3000,x:70,y:40,rY:-20,tZ:-20}],
              [{b:-1,d:1,o:-1},{b:0,d:1000,o:1}],
              [{b:-1,d:1,o:-1,r:30},{b:1000,d:1000,o:1}],
              [{b:-1,d:1,o:-1},{b:2780,d:20,o:1},{b:2800,d:500,y:-70,e:{y:3}},{b:3300,d:1000,y:180},{b:4300,d:500,y:-40,e:{y:3}},{b:5300,d:500,y:-40,e:{y:3}},{b:6300,d:500,y:-40,e:{y:3}},{b:7300,d:500,y:-40,e:{y:3}},{b:8300,d:400,y:-30}],
              [{b:-1,d:1,c:{y:200}},{b:4300,d:4400,c:{y:-200},e:{c:{y:1}}}],
              [{b:-1,d:1,o:-1},{b:4300,d:20,o:1}],
              [{b:-1,d:1,o:-1},{b:5300,d:20,o:1}],
              [{b:-1,d:1,o:-1},{b:6300,d:20,o:1}],
              [{b:-1,d:1,o:-1},{b:7300,d:20,o:1}],
              [{b:-1,d:1,o:-1},{b:8300,d:20,o:1}],
              [{b:2000,d:1000,o:-0.5,r:180,sX:4,sY:4,e:{r:5,sX:5,sY:5}},{b:3000,d:1000,o:-0.5,r:180,sX:-4,sY:-4,e:{r:6,sX:6,sY:6}}],
              [{b:-1,d:1,o:-1,c:{m:-35.0}},{b:0,d:1500,x:150,o:1,e:{x:6}}],
              [{b:-1,d:1,o:-1,c:{y:35.0}},{b:0,d:1500,x:-150,o:1,e:{x:6}}],
              [{b:-1,d:1,o:-1},{b:6500,d:2000,o:1}],
              [{b:-1,d:1,o:-1},{b:2000,d:1000,o:0.5,r:180,sX:4,sY:4,e:{r:5,sX:5,sY:5}},{b:3000,d:1000,o:0.5,r:180,sX:-4,sY:-4,e:{r:6,sX:6,sY:6}},{b:4500,d:1500,x:-45,y:60,e:{x:12,y:3}}],
              [{b:-1,d:1,o:-1},{b:4500,d:1500,o:1,e:{o:5}},{b:6500,d:2000,o:-1,r:10,rX:30,rY:20,e:{rY:6}}]
            ];

            var jssor_html5_AdWords_options = {
              $AutoPlay: true,
              $Idle: 1600,
              $SlideDuration: 100,
              $SlideEasing: $Jease$.$InOutSine,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_html5_AdWords_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,
                $ChanceToShow: 1
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $ActionMode: 2
              }
            };

            var jssor_html5_AdWords_slider = new $JssorSlider$("jssor_html5_AdWords", jssor_html5_AdWords_options);
        };
        
    </script>

    <style>
        /* jssor slider bullet navigator skin 05 css */
        /*
        .jssorb05 div           (normal)
        .jssorb05 div:hover     (normal mouseover)
        .jssorb05 .av           (active)
        .jssorb05 .av:hover     (active mouseover)
        .jssorb05 .dn           (mousedown)
        */
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

        /* jssor slider arrow navigator skin 12 css */
        /*
        .jssora12l                  (normal)
        .jssora12r                  (normal)
        .jssora12l:hover            (normal mouseover)
        .jssora12r:hover            (normal mouseover)
        .jssora12l.jssora12ldn      (mousedown)
        .jssora12r.jssora12rdn      (mousedown)
        .jssora12l.jssora12lds      (disabled)
        .jssora12r.jssora12rds      (disabled)
        */
        .jssora12l, .jssora12r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 30px;
            height: 46px;
            cursor: pointer;
            background: url('img/a12.png') no-repeat;
            overflow: hidden;
        }
        .jssora12l { background-position: -16px -37px; }
        .jssora12r { background-position: -75px -37px; }
        .jssora12l:hover { background-position: -136px -37px; }
        .jssora12r:hover { background-position: -195px -37px; }
        .jssora12l.jssora12ldn { background-position: -256px -37px; }
        .jssora12r.jssora12rdn { background-position: -315px -37px; }
        .jssora12l.jssora12lds { background-position: -16px -37px; opacity: .3; pointer-events: none; }
        .jssora12r.jssora12rds { background-position: -75px -37px; opacity: .3; pointer-events: none; }
        .blink_me {
  animation: blinker 1s linear infinite;
            
}

@keyframes blinker {  
  50% { opacity: 0; }
}

.title {

    font-size: 2em;
    color: #002E66;
    margin: 0;

}
    </style>

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
    
    <script>
        //        $(document).ready( function() {
        //            $('#myCarousel').carousel({
        //            	interval:   4000
        //        	});

        var clickEvent = false;
        $('#myCarousel').on('click', '.nav a', function() {
            clickEvent = true;
            $('.nav li').removeClass('active');
            $(this).parent().addClass('active');		
        }).on('slid.bs.carousel', function(e) {
            if(!clickEvent) {
                var count = $('.nav').children().length -1;
                var current = $('.nav li.active');
                current.removeClass('active').next().addClass('active');
                var id = parseInt(current.data('slide-to'));
                if(count == id) {
                    $('.nav li').first().addClass('active');	
                }
            }
            clickEvent = false;
        });
        });
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
<!--                            <li><a href="aboutus.php" class="scroll">ABOUT US</a></li>-->

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

                                    <!--                                                                      <li><a href="award-catg.php"> AWARD CATEGORIES</a> </li>-->
                                    
                                    <li><a href="nomination.php"> AWARD NOMINATION</a> </li>
                                    <li><a href="award-winners.php"> AWARD WINNERS 2017</a> </li>
                                   

                                </ul>
                            </li>

                            <li><a href="gallery.php">GALLERY</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">SPONSORS<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">

                                    <li><a href="conference-sponsors.php"> CONFERENCE SPONSORS</a> </li>  
                                    <li><a href="sponsors-tariff.php"> SPONSORS TARIFF</a> </li>  
                                </ul></li>
                            <li><a href="aboutus.php">ABOUT US</a></li>
                            <!--<li><a href="news.php">NEWS</a></li>-->
<!--                            <li><a href="contactus.php">CONTACT US</a></li>-->
                            
                            <li><a href="conference-registration.php">REGISTRATION</a></li>
                            <li class="reg-button"><a href="http://www.uaemastech.com/live/">LIVE STREAM</a></li>

                            <!--                                                        <li><a href="#" class="active">Company</a></li>-->
                            <div class="clearfix"></div>
                        </ul>
<!--                        <p id="te"></p>
                        <p id="be"></p>
                        <p id="ts"></p>
                        <p id="bs"></p>
                        <p id="ht"></p>-->
                        

                    </div>
                    <!-- /.navbar-collapse -->
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
    <style>
        body
        {
            padding-top: 0px;
        }
        #myCarousel .nav a small
        {
            display: block;
        }
        #myCarousel .nav
        {
            background: #eee;
        }
        .nav-justified > li > a
        {
            border-radius: 0px;
        }
        .nav-pills>li[data-slide-to="0"].active a { background-color: #16a085; }
        .nav-pills>li[data-slide-to="1"].active a { background-color: #e67e22; }
        .nav-pills>li[data-slide-to="2"].active a { background-color: #2980b9; }
        .nav-pills>li[data-slide-to="3"].active a { background-color: #8e44ad; }
        
    </style>

    <div>
        <div id="myCarousel" class="slider-section" data-ride="">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active" style=" margin-top:15px">
                    <img src="images/banner-j2.jpg" alt="Mastech" title="MASTECH AN INTERNATIONAL MARINE TECHNICAL CONFERENCE">
                    <div class="carousel-caption">
                        <h3>
                        </h3>
                        <!--                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>-->
                        
                    </div>
                </div>
               
                <!-- End Item -->
                <!--            <div class="item">
                <img src="images/banner-2.jpg">
                <div class="carousel-caption">
                    <h3>
                        </h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>-->
                <!-- End Item -->
                <!--            <div class="item">
                <img src="http://placehold.it/1200x400/2980b9/ffffff&text=Portfolio">
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>-->
                <!-- End Item -->
                <!--            <div class="item">
                <img src="http://placehold.it/1200x400/8e44ad/ffffff&text=Services">
                <div class="carousel-caption">
                    <h3>
                        Headline</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. Lorem
                        ipsum dolor sit amet, consetetur sadipscing elitr.</p>
                </div>
            </div>-->
                <!-- End Item -->
            </div>
            <!-- End Carousel Inner -->
            <ul class="nav nav-pills nav-justified">
                <!--            <li data-target="#myCarousel" data-slide-to="0" class="active"><a href="#">MASTECH 2017<small></small></a></li>
            <li data-target="#myCarousel" data-slide-to="1"><a href="#">MASTECH 2017<small></small></a></li>-->
                <!--            <li data-target="#myCarousel" data-slide-to="2"><a href="#">Portfolio<small>Lorem ipsum
                dolor sit</small></a></li>
            <li data-target="#myCarousel" data-slide-to="3"><a href="#">Services<small>Lorem ipsum
                dolor sit</small></a></li>-->
            </ul>
        </div>
    </div>
    <div></div>
    
    <marquee style="color:#21618c !important; font-size:22px; font-weight:bold; background:white; padding:5px 0px;"><b style="color:#21618c !important;">THANKS TO ALL OUR SPONSORS, PANELISTS AND DELEGATES FOR MAKING MASTECH 2019 A GRAND SUCCESS</b> </marquee>
   
        
    <br>
    
	
    
   <div class="row">
   
    <div class="col-md-12 col-sm-12 count-down-sec">
    
        <div class="row">
             <!-- <div class="col-md-4 topics-head">
                 <a href="http://www.uaemastech.com/live/"  target="_blank">     <u>  <i><h2>MASTECH CONFERENCE LIVE STREAM</h2></i></u></a>
            </div> -->
			
         <!-- <div class="col-md-4 topics-head">
          <center><h3 class="title" >MASTECH 2019 PANEL TOPICS</h3></center>
         </div> -->
   
<!--        <div class="col-md-4 count-down-block">
            <div class="clock" ></div>
        </div>-->
        
        </div>
    
    </div>
    </div>
    
    
    <div class="col-md-9 col-sm-9 content-section-lft">
    
        
        <!-- MASTECH 2017 PANEL TOPICS STARTS --> 

        <?php 
		// Number of days to MASTECH 2019 CONFERENCE
		
        $abs_path1 = getcwd();
        $result = $mysqli->query("SELECT id,topic,image  FROM speakertopic where status=1");
        //  echo "'".$abs_path1."/admin/app/webroot/images/speakertopics/".$rows['image']."'";
		// PANEL-4: Early Integration of Transportation and Installation in Complex EPC Projects
		// PANEL-3: Rig Re-Activation : Actions and Reactions
		// PANEL-1: Artificial Intelligence & Digitization : Application in Marine and Offshore Industries
		// PANEL-2: Transformation in Marine Fuel : 2020 and Beyond
		$panel_numbers = array("4", "3", "1", "2", "5"); 
		$panel_numbers = array("2", "1", "3", "4", "5"); 
		// $panel_index = 0;
        $image_count = 0;
        $button_html = '';
        $slider_html = '';
        $thumb_html = '';
        while( $rows = mysqli_fetch_assoc($result)){
            $active_class = "";
            if(!$image_count) {
                $active_class = 'active';
                // $image_count = 1;
			}
            //$image_count++;
            // echo $image_count;
			// $panel_index = 1;
            $thumb_image = $rows['image'];
            $topic=$rows['topic'];
            $image=$rows['image'];
            $r="admin/app/webroot/images/speakertopics/".$image;
            $caption=$rows['topic'];  
            // slider image html
            $slider_html.= "<div class='item ".$active_class."'>";
            $slider_html.= "<img src='admin/app/webroot/images/speakertopics/".$image."' alt='".$rows['topic']."'><a class='item-link panel-number' href='panel-topic-details.php' tabindex='-1'>PANEL-".$panel_numbers[$image_count]."</a>";
            $slider_html.= "<div class='carousel-caption'>
                                <div class='item-content'>

                                    <div class='item-summary'>  ".$caption." </div>
                                    <a class='item-link' href='conference-registration.php' tabindex='-1'>REGISTER HERE</a>
                                    <a class='item-link' href='panel-topic-details.php' tabindex='-1'>DETAILS</a>
                                </div></div></div>";

            // Button html

            $button_html.= "<li data-target='#carousel-example-generic' data-slide-to='".$image_count."' class='".$active_class."'></li>";
            $image_count++;
        }
        ?>    
		
		
		
		<!-- <section class="panel-topic-sec">

            <div class="container-fluid no-margin">
               
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php echo $button_html; ?>
                        </ol>
                        <div class="carousel-inner">
                            <?php echo $slider_html; ?>
                        </div>



                        <div class="controls-bottom">
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>

                            </a>

                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </section> -->
        

        <div class="about" id="about" style="margin-top: 4%;">

            <div class="container">

                <div class="clearfix"></div>

                <div class="col-md-12 text-center">
                    <div class=" wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                        <h2>INTERNATIONAL MARINE TECHNICAL CONFERENCE</h2>
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                        <h5>About MASTECH</h5>
                        <p style="text-align: justify"> MASTECH is an International Marine Technical Conference with a tradition of showcasing the latest in marine domain.MASTECH is home to one of the largest gatherings of the maritime and offshore industry experts in the Middle East region. The Fifth edition of MASTECH organized by Biz Events Management will take stage in Dubai on 27th March 2019.</p>
                    </div>
                </div>



                <div class="col-md-12">
                    <div class="wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms"> 

                        <h5>What You'll Find</h5>
                        <p style="text-align: justify">Marine industry is at stage of innovative transformation. Ongoing technological metamorphosis is shaping up this age old industry for exciting future. This MASTECH captures finest topics at the pinnacle of this transmutation. The one-day conference will provide an unrivaled environment to exchange information.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                        <p style="text-align: justify">Showcase the latest technical innovations, explore collaborations, solicit business opportunities and take stock of trends and issues at the heart of future strategies. previous MASTECH editions saw about 1300 plus delegates attending the
                            presentation of nearly 20 technical papers focusing on next-generation ship design,
                            shipping economics, technical innovations in maritime industry, marine
                            heavy lift &amp; transport, transport solutions for modular projects and industry
                            outlooks for the oil &amp; gas sector.</p>
                    </div>

                </div>

				<!-- https://player.vimeo.com/video/208820498?api=1&loop=1&color=357ded&title=0&byline=0&portrait=0 --> 

                <div class="col-md-6">
                    <div class="inner" id="vimeoWrap">
                        <iframe id="video" src="https://player.vimeo.com/video/321664980?api=1&loop=1&color=357ded&title=0&byline=0&portrait=0" width="100%" height="250" frameborder="0" style="border: 5px solid #fff;" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                     </div>
                </div>

          



                <div class="col-md-12">
                    <div class="wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms"> 

                        <h5>Who Should Attend</h5>
                        <p>MASTECH will be an interacting platform for Industry leaders keen to remodel their business strategies. Executives shall find it enthralling to augment the knowledge. Beginners shall discover it as a floor for future careers.</p>
                    </div>
                </div>


            </div>
        </div>

        
    </div>  
    

        
        <div class="col-md-3 col-sm-3 content-section-rgt">
            
            

            <h4>2019 Sponsors/Partners</h4>


            <div class="sponsor-slider-item">
                <h5>Platinum Sponsor</h5>
                <div class="slider slider-for">
                    <div><a href="https://www.unitedheavylift.de/" target="_blank"><img src="images\sponsors\UHL.jpg"></a></div>
                    <div><a href="https://www.unitedheavylift.de/" target="_blank"><img src="images\sponsors\UHL.jpg"></a></div>
                    <div><a href="https://www.unitedheavylift.de/" target="_blank"><img src="images\sponsors\UHL.jpg"></a></div>
                    <div><a href="https://www.unitedheavylift.de/" target="_blank"><img src="images\sponsors\UHL.jpg"></a></div>
                    <div><a href="https://www.unitedheavylift.de/" target="_blank"><img src="images\sponsors\UHL.jpg"></a></div>
                </div>

            </div>

            
            <div class="sponsor-slider-item">
                <h5>Gold Sponsor </h5>
                <div class="slider slider-for-gold">
                    <div><a href="https://www.mcdermott.com/" target="_blank"><img src="images\sponsors\mcdermott.jpg"></a></div>
                </div>

            </div>


            <div class="sponsor-slider-item">
                <h5>Gold Sponsor </h5>
                <div class="slider slider-for-gold">
                    <div><a href="https://www.fluor.com/" target="_blank"><img src="images\sponsors\fluor.jpg"></a></div>
                </div>

            </div>
<div class="sponsor-slider-item">
                <h5>Cocktail Sponsor </h5>
                <div class="slider slider-for-gold">
                    <div><a href="http://technomak.com/" target="_blank"><img src="images\sponsors\tech1.jpg"></a></div>
                    <div><a href="http://www.ariesgroupglobal.com/" target="_blank"><img src="images\sponsors\ariesgroup.jpg"></a></div>
                </div>

            </div>

            
            <div class="sponsor-slider-item">
                <h5>Silver Sponsors</h5>
                <div class="slider slider-for-silver">
                    <div><img src="images\sponsors\albwardy-damen.jpg"></div>
                    <div><img src="images\sponsors\BWS.jpg"></div>
                    <div><img src="images\sponsors\coordinadora-home.jpg"></div>
                    <div><a href="https://www.mammoet.com/" target="_blank"><img src="images\sponsors\mammoet.jpg"></a></div>
                     <div><a href="https://www.roll-group.com/" target="_blank"><img src="images\sponsors\roll.jpg"></a></div>
                </div>
            </div>
            
            
            
            
            <div class="sponsor-slider-item">
                <h5>Associate Sponsors</h5>
                <div class="slider slider-for-associate">
                    <!--<div><img src="images\sponsors\ariesgroup.jpg"></div>-->
                    <div><img src="images\sponsors\classnk.jpg"></div>
                    <div><img src="images\sponsors\casp-home.jpg"></div>
                </div>
            </div>


            <div class="sponsor-slider-item">
                <h5>Media Partners </h5>
                <div class="slider slider-for-media">
                    <div><img src="images\sponsors\marasi.jpg"></div>
                    <div><img src="images\sponsors\worldoils.jpg"></div>
                    <div><img src="images\sponsors\middleeast.jpg"></div>
                    <div><img src="images\sponsors\ship2shore.jpg"></div>
                    <div><img src="images\sponsors\marinworld.jpg"></div>
                    <div><img src="images\sponsors\portnews.jpg"></div>
                    <div><img src="images\sponsors\maritimesky.jpg"></div>
                    <div><img src="images\sponsors\robban-assafina.jpg"></div>
                    <div><a href="http://www.overseasprojectcargo.com/" target="_blank"><img src="images\sponsors\OPCA-SMALL.jpg" style="width:156px;"></a></div>
                </div>

            </div>
            
            
      


        </div>  

    
    <div class="clearfix"></div>

        <!-- MASTECH 2017 PANEL TOPICS ENDS -->   

    
   
   
    

    <!--- End of Testimonials ---->

    <!--START COMMENTING OUT SPONSORSHIP SECTION 

    <div class="sponsorship-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4" style="text-align: center;"><br/>
                    <h2 style="color: #fff;text-align: center;text-shadow: 2px 2px 5px #000;">MASTECH 2017 SPONSORS</h2><br/><br/>
                    <div id="myCarousel" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="item active">
                                <a href="#"><img class="thumbnail" src="images/CJ_LOGISTICS.png" alt="Slide1"></a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-12"><br/>
                    <h2 style="color: #fff;text-align: center;text-shadow: 2px 2px 5px #000;"> </h2><br/><br/>
                    <div class="row">
                        <div class="col-md-5"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/image-1.jpg" alt="Slide1"></div>
                        <div class="col-md-5"></div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12"><br/>
                    <h2 style="color: #fff;text-align: center;text-shadow: 2px 2px 5px #000;"> </h2> 
                     <br><br>
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/image-1.jpg" alt="Slide1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/GOLDSPONSOR.jpg" alt="Slide1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/abs.jpg" alt="Slide1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/mak.jpg" alt="Slide1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/modermott.jpg" alt="Slide1"></div>
                        <div class="col-md-1"></div>
                    </div>
                </div>


                <div class="col-md-12"><br/></div>
            </div>

            <div class="row">

                <div class="col-md-6"><br/>
                    <h2 style="color: #fff;text-align: center;text-shadow: 2px 2px 5px #000;"> </h2>
                    
                    <br><br>
                        <div class="row">
						<div class="col-md-4"></div>
                        <div class="col-md-4 thumbnail"><img class="" src="images/Greatwaters-logo.jpg" alt="Slide1"></div>
                        <div class="col-md-4"></div>

                    </div>

                </div>

                <div class="col-md-6"><br/>
                    <h2 style="color: #fff;text-align: center;text-shadow: 2px 2px 5px #000;"> </h2>  
                    <br><br>  
				
                    
                    <div class="row">

                        <div class="col-md-4"></div>
                        <div class="col-md-4 thumbnail"><img class="" src="images/ariesgroup.jpg" alt="Slide1"></div>
                        <div class="col-md-4"></div>

                    </div>

                </div>

                <div class="col-md-12"><br/>
                    <h2 style="color: #fff;text-align: center;text-shadow: 2px 2px 5px #000;"> </h2>  
                    <br><br>

                    <div class="row">

                        <div class="col-md-2"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/chalmers.jpg" alt="Slide1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/classnk.jpg" alt="Slide1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/alb.png" alt="Slide1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/hempel.jpg" alt="Slide1"></div>
                        <div class="col-md-2"></div>

                    </div>
                </div>
                <div class="col-md-12"><br/></div>
            </div>

            <div class="row">
                <div class="col-md-12"><br/>
                    <h2 style="color: #fff;text-align: center;text-shadow: 2px 2px 5px #000;"> MASTECH 2017 SUPPORTING ORGANIZATIONS </h2>
                    <br><br>

                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/asts.jpg" alt="Slide1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/blazer.jpg" alt="Slide1"></div>

                        <div class="col-md-2 thumbnail"><img class="" src="images/edu.jpg" alt="Slide1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/noble.jpg" alt="Slide1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/som.jpg" alt="Slide1"></div>
                        <div class="col-md-1"></div>
                    </div>
                    <br>
                    <div class="row">

                        <div class="col-md-1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/green.jpg" alt="Slide1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/yash.jpg" alt="Slide1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/logo2.jpg" alt="Slide1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/acmt.jpg" alt="Slide1"></div>
                        <div class="col-md-2 thumbnail"><img class="" src="images/rina.jpg" alt="Slide1"></div>
                        <div class="col-md-1"></div>
                    </div>
                    <br/>
                </div>
                <div class="col-md-12"><br/></div>

            </div>
        </div>
    </div>

	END COMMENTING OUT SPONSORSHIP SECTION -->




	<!--START COMMENTING OUT DELEGATE COMPANIES SECTION
	
    <div class="mid-bann" id="MASTECH"><br/><br/>
        <h1 style="text-align: center;font-size: 24px;">MASTECH 2019</h1><br/>
        <p style="text-align: center"><b>We expect key presence from various leading maritime establishments to be part of
										MASTECH 2019, which includes but not limited to</b></p><br/><br/>
        <div class="row col-list">
            <div class="col-md-4 t1" style="float: left">

                <ul class="list-unstyled">
                    <li>

                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> DRYDOCKS WORLD</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> DP WORLD</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> PETROFAC</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> TOPAZ ENERGY AND MARINE</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> ESNAAD</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> CLASS NK</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> IRSHAD</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> BV</p>
                    </li>
                    <li>

                    </li>
                </ul>
            </div>
            <div class="col-md-4 t2">

                <ul class="list-unstyled">
                    <li>

                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> FLUOR</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> MAERSK</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> NPCC</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> SVITZER</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> McDERMOTT</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> ADPC</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> ADSB</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> BAHRI</p>
                    </li>
                    <li>

                    </li>
                </ul>
            </div>
            <div class="col-md-4 t3">

                <ul class="list-unstyled">
                    <li>

                    </li>

                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> ZADCO</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> DAMEN</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> LAMPRELL</p>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 t3">

                <ul class="list-unstyled">
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> ADMA-OPCO</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> DNVGL</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> ADNOC</p>
                    </li>
                    <li>
                        <p class="option"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> ABS</p>
                    </li>
                    <li>

                    </li>

                </ul>
            </div>
        </div>
        <hr />


    </div>

	END COMMENTING OUT DELEGATE COMPANIES SECTION -->

    <div class="three-steps" style="display:none;">
        <div class="container delegate-profile">
            <br><br>
            <h3 class="delegatesprofile wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">DELEGATE PROFILE</h3>
            <p class="animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">MASTECH will provide information and business networking opportunity to its delegates from:</p>
            <div class="three">
                <div class="col-md-4 circle-article three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                    <label> </label>
                    <h4>Ship Building</h4>
<!--                    				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
                </div>
                <div class="col-md-4 circle-article three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                    <label> </label>
                    <h4>Ship Owners</h4>
<!--                    				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
                </div>
                <div class="col-md-4 circle-article three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                    <h4>Marine Engineering</h4>
<!--                    				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="three">
                <div class="col-md-4 circle-article three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                    <label> </label>
                    <h4>Charterers & Agents</h4>
<!--                    				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
                </div>
                <div class="col-md-4 circle-article three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                    <label> </label>
                    <h4>Ship Repair</h4>
<!--                    				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
                </div>
                <div class="col-md-4 circle-article three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                    <h4>Naval Architecture</h4>
<!--                    				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="three">
                <div class="col-md-4 circle-article three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                    <label> </label>
                    <h4>Offshore Construction</h4>
<!--                    				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
                </div>
                <div class="col-md-4 circle-article three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                    <label> </label>
                    <h4>Oil & Gas</h4>
<!--                    				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
                </div>
                <div class="col-md-4 circle-article three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                    <h4>Classification Societies</h4>
<!--                    				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="three">
                <div class="col-md-4 circle-article three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                    <label> </label>
                    <h4>Port Authorities</h4>
<!--                    				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
                </div>
                <div class="col-md-4 circle-article three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                    <label> </label>
                    <h4>Marine Equipment Suppliers</h4>
<!--                    				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
                </div>
                <div class="col-md-4 circle-article three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
                    <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
                    <h4>Insurers</h4>
<!--                    				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

    </div>


    <br/><br/>

        
        
        <div id="all_reviews">
            <div class="section_inner">
<!--                <h2 class="section_title center animate">MASTECH CONFERENCE IN NUMBERS</h2>-->
			<center><h3 class="title" >MASTECH CONFERENCE IN NUMBERS</h3></center>
                <ul class="reviews">

                    <li class="review animate">
                        <p class="message"><b>5TH EDITION</b> MASTECH is in it's fifth edition of lighting up the marine and offshore technical landscape with indepth panels.</p>
                        <div class="meta">
                            <!-- <div class="avatar" style="background-image: url(&quot;https://cdn.freedcamp.com/frontpage/v4/images/quotes/erichil.jpg&quot;);"></div> --> 
                            <div class="name">
                                <div class="first_last text-s"> </div>
                                
                            </div>
                        </div>
                    </li>
                    <li class="review animate">
                        <p class="message"><b>300+ DELEGATES</b> One day conference will be attended by 300 plus delegates from all over the marine and offshore industry.</p>
                        <div class="meta">
                            <!-- <div class="avatar" style="background-image: url(&quot;https://cdn.freedcamp.com/frontpage/v4/images/quotes/erichil.jpg&quot;);"></div> --> 
                            <div class="name">
                                <div class="first_last text-s"> </div>
                                
                            </div>
                        </div>
                    </li>
                    <li class="review animate">
                        <p class="message"><b>5 PANELS</b> Panels are led by industry experts and are indepth, interactive, and innovative. </p>
                        <div class="meta">
                            <!-- <div class="avatar" style="background-image: url(&quot;https://cdn.freedcamp.com/frontpage/v4/images/quotes/erichil.jpg&quot;);"></div> --> 
                            <div class="name">
                                <div class="first_last text-s"> </div>
                            
                            </div>
                        </div>
                    </li>
                    <li class="review animate">
                        <p class="message"><b>6 HOURS</b> of networking opportunity which includes business executives, industry experts, versatile talent pool.</p>
                        <div class="meta">
                            <!-- <div class="avatar" style="background-image: url(&quot;https://cdn.freedcamp.com/frontpage/v4/images/quotes/erichil.jpg&quot;);"></div> --> 
                            <div class="name">
                                <div class="first_last text-s"> </div>
                               
                            </div>
                        </div>
                    </li>
                    <li class="review animate">
                        <p class="message"><b>15 SPEAKERS</b> share their expertise on the cutting edge technology and developments shaping up the industry future.</p>
                        <div class="meta">
                            <!-- <div class="avatar" style="background-image: url(&quot;https://cdn.freedcamp.com/frontpage/v4/images/quotes/erichil.jpg&quot;);"></div> --> 
                            <div class="name">
                                <div class="first_last text-s"> </div>
                                
                            </div>
                        </div>
                    </li>
                    <li class="review animate">
                        <p class="message"><b>AWARDS 2019</b> MASTECH recognizes the leading organizations, personnel for their achievements and contributions.</p>
                        <div class="meta">
                            <!-- <div class="avatar" style="background-image: url(&quot;https://cdn.freedcamp.com/frontpage/v4/images/quotes/erichil.jpg&quot;);"></div> --> 
                            <div class="name">
                                <div class="first_last text-s"> </div>
                                
                            </div>
                        </div>
                    </li>
                    
                  


                </ul>

            </div>
        </div>

      <section class="panel-topic-sec">

         

          <div class="container-fluid no-margin">
              <center><h3 >NEWS / ANNOUNCEMENTS</h3></center><br/>
              <div class="col-md-12">
                  

                  <div id="newsCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
<!--
                      <ol class="carousel-indicators">
                          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                          <li data-target="#myCarousel" data-slide-to="1"></li>
                      </ol>
-->

                      <!-- Wrapper for slides -->
					  
                      <div class="carousel-inner">  <!-- All 7 flyers changed by JavadBacker 17 Feb 2019 (Used new resized flyers 1349 x 450 @ 72px) -->
					      
						  <div class="item active">
                              <img src="images/news/10%20MasTech%202019_Venue%20Annoucement_WhiteSpace.png" alt="">
                          </div>
                          
                          <div class="item">
                              <img src="images/news/panelteam.png" alt="">
                          </div>
						  
						  <div class="item">
                              <img src="images/news/31 MasterClass.png" alt="">
                          </div>
						  
						  <div class="item">
                              <img src="images/news/21 Mastech 2019 Awards_WhiteSpace.png" alt="">
                          </div>
						  
						  <div class="item">
                              <img src="images/news/01%20MasTech%202019_Sponsorship%20Flyer_UHL_WhiteSpace.png" alt="">
                          </div>
                          
                          
                          <div class="item">
                              <img src="images/news/MAMMOET-SILVER.png" alt="">
                          </div>
						  
						  <!-- <div class="item">
                          <!--     <img src="images/news/02 MasTech 2019_Sponsorship Flyer_MCDRMT_WhiteSpace.jpg" alt="">
                          <!-- </div> -->
						  
						  <!-- <div class="item">
                          <!--     <img src="images/news/03 MasTech 2019_Sponsorship Flyer_Fluor_WhiteSpace.jpg" alt="">
                          <!-- </div> -->
						  
						  <!-- <div class="item">
                          <!--     <img src="images/news/04 MasTech 2019_Sponsorship Flyer_AD_WhiteSpace.jpg" alt="">
                          <!-- </div> -->
						  
						  <div class="item">
                              <img src="images/news/05_MasTech 2019_Sponsorship Flyer_Coronodora.png" alt="">
                          </div>
						  
						  <!-- <div class="item">
                          <!--     <img src="images/news/05 MasTech 2019_Sponsorship Flyer_Blue Water_WhiteSpace.jpg" alt="">
                          <!-- </div> -->
						  
						  <!-- <div class="item">
                          <!--     <img src="images/news/06 MasTech 2019_Sponsorship Flyer_CNK_WhiteSpace.jpg" alt="">
                          <!-- </div> -->
						  
						  <!-- <div class="item">
                          <!--     <img src="images/news/07 MasTech 2019_Sponsorship Flyer_Aries_WhiteSpace.jpg" alt="">
                          <!-- </div> -->
                          
                          <div class="item">
                              <img src="images/news/Panel-Discussion.png" alt="">
                          </div>
                          
                          <div class="item">
                              <img src="images/news/early-integration.png" alt="">
                          </div>
                          
                          <div class="item">
                              <img src="images/news/TRANSFORMATION-IN-MARINE-FUEL-3.png" alt="">
                          </div>
                          
						  <div class="item">
                              <img src="images/news/20%20MasTech%202019_Rig%20Reactivation%20Panel_WhiteSpace.png" alt="">
                          </div>
                         
                          
                          
                          
                          <div class="item">
                              <img src="images/news/Panel-Discussion4.png" alt="">
                          </div>
                          <div class="item">
                              <img src="images/news/Panel-Discussion3.png" alt="">
                          </div>
                          <div class="item">
                              <img src="images/news/Panel-Discussion2.png" alt="">
                          </div>
                          <div class="item">
                              <img src="images/news/Panel-Discussion1.png" alt="">
                          </div>
                         <div class="item">
                              <img src="images/news/panel-dis.png" alt="">
                          </div>
                          <div class="item">
                              <img src="images/news/rig-reactivation.png" alt="">
                          </div>
                          <div class="item">
                              <img src="images/news/keynote11.png" alt="">
                          </div>
                          <div class="item">
                              <img src="images/news/keynote22.png" alt="">
                          </div>
                      </div>

                      
                      <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
                          <i class="fa fa-angle-left" aria-hidden="true"></i>
                      </a>
                      <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
                          <i class="fa fa-angle-right" aria-hidden="true"></i>
                      </a>
                      

                  </div>

                  
              </div>
          </div>


          
          
          
       
          
          
          
          
        </section>
        
        <!--- Testimonials ---->

        <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" type="text/css" rel="stylesheet">-->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js" type="text/javascript"></script>-->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">


<!--    <div class="testimonial-wrapper" style="background-image: url(images/testimonial-bg.jpg)">-->
    <div class="testimonial-wrapper">
            <div class="container" >

                <h3 class="title" style="color:#fff !important;">TESTIMONIALS</h3>

                <div class="row">
                    <div class="col-md-12">

                        <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                            <div style="background-color: #fff">


                                <!-- Carousel Slides / Quotes -->
                                <div class="carousel-inner" >


                                    <!-- Quote 1 -->
                                    <div class="item active">
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-md-12 quote-left"><i class="fa fa-quote-left" aria-hidden="true"></i></div>

                                                <div class="col-sm-4">
                                                    <p><b>Dr. Abdul Rahim</b></p> 
                                                    <p>Regional Manager South Asia</p>
                                                    <p>ClassNK</p>

                                                </div>

                                                <div class="col-sm-8">
                                                    <p>This conference provided an excellent opportunity to catch the latest developments in big data and its application in marine vessels and offshore platforms.</p>
                                                </div>

                                                <div class="col-md-12 quote-right"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
                                            </div>
                                        </blockquote>
                                    </div>


                                    <!-- Quote 2 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-md-12 quote-left"><i class="fa fa-quote-left" aria-hidden="true"></i></div>

                                                <div class="col-sm-4">
                                                    <p><b>Suresh Prashar</b></p> 
                                                    <p>Senior Director Operations </p>
                                                    <p>McDermott International Inc.</p>
                                                </div>

                                                <div class="col-sm-8">
                                                    <p>MASTECH has consistently been one of the best marine and offshore industry events in the region. In terms of a continuously high standard of presentations and attendees, MASTECH is really up there with the best.</p>
                                                </div>

                                                <div class="col-md-12 quote-right"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
                                            </div>
                                        </blockquote>
                                    </div>

                                    
                                    <!-- Quote 3 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-md-12 quote-left"><i class="fa fa-quote-left" aria-hidden="true"></i></div>

                                                <div class="col-sm-4">
                                                    <p><b>Sergej Krstanovic</b></p> 
                                                    <p>Marine & Offshore Chief Executive UAE </p>
                                                    <p>Bureau Veritas</p>
                                                </div>

                                                <div class="col-sm-8">
                                                    <p>The panel discussions provided multiple perspectives, from the side of the classification societies, owners and shipyards. It was a comprehensive analysis of the upcoming regulatory changes on clean fuels.</p>
                                                </div>

                                                <div class="col-md-12 quote-right"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
                                            </div>
                                        </blockquote>
                                    </div>
                                    
                                    
                                    <!-- Quote 4 -->
                                    <div class="item">
                                        <blockquote>
                                            <div class="row">
                                                <div class="col-md-12 quote-left"><i class="fa fa-quote-left" aria-hidden="true"></i></div>

                                                <div class="col-sm-4">
                                                    
                                                    <p><b>Hamad Al Maghrabi</b></p>
                                                    <p>General Manager</p>
                                                    <p>SAFEEN</p>
                                                </div>

                                                <div class="col-sm-8">
                                                    <p>MASTECH conference provided an excellent opportunity to meet the leading technocrats from UAE maritime industry. The event also showcase  the latest developments in big data and its application in marine vessels and offshore platforms.</p>
                                                </div>

                                                <div class="col-md-12 quote-right"><i class="fa fa-quote-right" aria-hidden="true"></i></div>
                                            </div>
                                        </blockquote>
                                    </div>

                                 

                                </div>

                            </div>

                            <!-- Bottom Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#quote-carousel" data-slide-to="0" class="active"></li>
                                <li data-target="#quote-carousel" data-slide-to="1"></li>
                                <li data-target="#quote-carousel" data-slide-to="2"></li>
                                <li data-target="#quote-carousel" data-slide-to="3"></li>
                            </ol>
                        </div>   

                    </div>
                </div>

            </div>
        </div>
    
    
    
    <marquee style="color:#21618c !important; font-size:22px; font-weight:bold; background:white; padding:5px 0px;"><b style="color:#21618c !important;">THANKS TO ALL OUR SPONSORS, PANELISTS AND DELEGATES FOR MAKING MASTECH 2019 A GRAND SUCCESS</b> </marquee>

    
    <div id="slider" >
 


            </div>

    
    
<!-- commenting out 17 Feb 2019 - JavadBacker >    
<!-- >    <div class="sponsors-slider">
<!-- >
<!-- >        <div class="slider slider-nav-home">
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-9.jpg" ></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-16.jpg" ></div>
<!-- >            <div><img  style="border:5px  solid #eee;" src="images/sponsors/1-12.jpg" ></div>
<!-- >            <div><img  style="border:5px  solid #eee;" src="images/sponsors/1-2.jpg" ></div>
<!-- >            <div><img  style="border:5px  solid #eee;" src="images/sponsors/1-18.jpg" ></div>
<!-- >
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-19.jpg" ></div>
<!-- >            <div><img  style="border:5px  solid #eee;" src="images/sponsors/1-13.jpg"></div>
<!-- >            <div><img  style="border:5px  solid #eee;" src="images/sponsors/1-3.jpg" ></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-8.jpg" ></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-10.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-1.jpg" ></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-15.jpg"></div>
<!-- >            
<!-- >            
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-6.jpg" ></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-7.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-11.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-20.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-21.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-14.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-22.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-17.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-4.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-5.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/25.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/26.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/27.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/28.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/29.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/30.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/31.jpg"></div>
<!-- >            <div><img style="border:5px  solid #eee;" src="images/sponsors/32.jpg"></div>
<!-- >            
<!-- >        </div>
<!-- >
<!-- >    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    


    <!-- /about -->
    <!-- ><div class="seeyoucontainer" style="height: 100px;">
<!-- >
<!-- >	<svg viewBox="0 0 2018 116" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<!-- >		<title>SEE YOU AT MASTECH 2019</title>
<!-- >		<g stroke="none" fill="none" fill-rule="evenodd" fill-opacity="0">
<!-- >			<text id="seeyouatmastech2019" stroke="#fff" fill="#645F5A" font-weight="normal" font-family="PermanentMarker-Regular, Permanent Marker" font-size="144">
<!-- >				<tspan x="3" y="109"><!--
<!-- >					<tspan>S</tspan><!--
<!-- >					<tspan>E</tspan><!--
<!-- >					<tspan>E</tspan><!--
<!-- >					<tspan> </tspan><!--
<!-- >					<tspan>Y</tspan><!--
<!-- >					<tspan>O</tspan><!--
<!-- >					<tspan>U</tspan><!--
<!-- >					<tspan> </tspan><!--
<!-- >					<tspan>A</tspan><!--
<!-- >					<tspan>T</tspan><!--
<!-- >					<tspan> </tspan><!--
<!-- >					<tspan>M</tspan><!--
<!-- >					<tspan>A</tspan><!--
<!-- >					<tspan>S</tspan><!--
<!-- >					<tspan>T</tspan><!--
<!-- >					<tspan>E</tspan><!--
<!-- >					<tspan>C</tspan><!--
<!-- >					<tspan>H</tspan><!--
<!-- >					<tspan>-</tspan><!--
<!-- >					<tspan>2</tspan><!--
<!-- >					<tspan>0</tspan><!--
<!-- >					<tspan>1</tspan><!--
<!-- >					<tspan>9</tspan><!--
<!-- >					</tspan><!--
<!-- >			</text>
<!-- >		</g>
<!-- >	</svg>
<!-- >
<!-- ></div>


<!-- /about -->

    <!-- //navigation -->
    <!-- /banner -->
    <!-- about -->


    <!--- contact ---->
        
        
         
        
      
   
        
        
        
        
        
        
    <!--- footer ---->

    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>

   
    <link href="css/slick.min.css" rel='stylesheet' type='text/css' />	
    <script src="js/slick.min.js"></script>  
    <script type="text/javascript">
        $('.slider-for').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            autoplay: true,
            autoplaySpeed: 3000,
        });
        
        $('.slider-for-associate').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            autoplay: true,
            autoplaySpeed: 3000,
        });
        
        $('.slider-for-media').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            autoplay: true,
            autoplaySpeed: 3500,
        });
        
        $('.slider-for-gold').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            autoplay: true,
            autoplaySpeed: 3500,
        });
        
        $('.slider-for-silver').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            autoplay: true,
            autoplaySpeed: 3800,
        });
        
        $('.slider-nav-home').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 2500,
            focusOnSelect: true
        });

        
        
        
    </script>    
        
        
        <script>(function(t,e,s,o){var n,a,c;t.SMCX=t.SMCX||[],e.getElementById(o)||(n=e.getElementsByTagName(s),a=n[n.length-1],c=e.createElement(s),c.type="text/javascript",c.async=!0,c.id=o,c.src=["https:"===location.protocol?"https://":"http://","widget.surveymonkey.com/collect/website/js/tRaiETqnLgj758hTBazgdyisHYB6Y3LKdNHpZrjgqdlLNE2r0hlluIIdfKrKJ0xW.js"].join(""),a.parentNode.insertBefore(c,a))})(window,document,"script","smcx-sdk");</script>
    <!--- footer ---->
</body>

</html>

<!--- contact ---->
    
    

    <style>

        body{
            
            background-image: linear-gradient(to right top, #6d327c, #485DA6, #00a1ba, #00BF98, #36C486);
        }

        #all_reviews .text-xs {
            font-size: 0.75rem;
        }
        #all_reviews .text-s {
            font-size: 0.875rem;
        }
        #all_reviews .center {
            text-align: center;
        }

        #all_reviews .section_inner {
            max-width: 1200px;
            margin: 0 auto;
            z-index: 2;
        }
        #all_reviews .section_title {
            font-weight: 300;
            font-size: 2.25rem;
            color: #2d3b4c;
            margin: 0;
            padding: 3rem 0;
        }


        @keyframes fadeInDown {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, -100%, 0);
                transform: translate3d(0, -100%, 0);
            }
            to {
                opacity: 1;
                -webkit-transform: none;
                transform: none;
            }
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                -webkit-transform: scale3d(0.8, 0.8, 0.8);
                transform: scale3d(0.8, 0.8, 0.8);
            }
            50% {
                opacity: 1;
            }
            to {
                opacity: 1;
            }
        }

        .animate {
            -webkit-animation-duration: 0.5s;
            animation-duration: 0.5s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }
        #all_reviews {
/*            background-color: #f6f8f9;*/
            padding-bottom: 4rem;
            font-family: 'Roboto', 'Segoe UI', 'Helvetica Neue', Helvetica, sans-serif !important;
            line-height: 1.6;
            margin-bottom: 30px;
        }
        #all_reviews .section_title {
            opacity: 0;
        }
        #all_reviews .section_title.animate {
            animation-name: fadeInDown;
        }
        #all_reviews .reviews {
            column-count: 3;
            column-gap: 0;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        #all_reviews .reviews .review {
            display: inline-block;
            break-inside: avoid;
            overflow: auto;
            opacity: 0;
        }
        #all_reviews .reviews .review.animate {
            animation-name: zoomIn;
        }
        #all_reviews .reviews .message {
            border: 1px solid #adbacc;
            border-radius: 4px;
            background-color: #fff;
            box-sizing: border-box;
            padding: 1rem 1.2rem;
            box-shadow: 0 4px 16px -4px rgba(0, 0, 0, 0.25);
            color: #556c84;
            margin: 1rem;
            min-height: 134px;
        }
        #all_reviews .reviews .meta {
            margin: 0 1rem;
        }
        #all_reviews .reviews .avatar {
            background-repeat: no-repeat;
            background-size: 48px;
            width: 48px;
            height: 48px;
            float: left;
            margin-right: 1rem;
            border-radius: 50%;
            overflow: hidden;
            background-color: #fff;
        }
        #all_reviews .reviews .first_last {
            color: #2d3b4c;
            font-weight: 400;
            padding-top: 15px;
        }
        #all_reviews .reviews .twitter {
            color: #556c84;
        }
        #all_reviews .load_more {
            margin-top: 2rem;
            padding: 0 4rem;
        }
        
        .about h2 {
            
            color: #fff;
        }
        
        .about p{
            
            color: #fff;
        }
        
        .about h5
        {
            color: #fff;
        }

  
        
        
        
        
    </style>

    
    
<!--- footer ---->
<?php include_once 'footer.php'; ?>


<script src="js/player.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/froogaloop.js"></script>


<script>
var iframe = document.getElementById('video');

// $f == Froogaloop
var player = $f(iframe);
$(window).scroll(function() {
    var top_of_element = $("#vimeoWrap").offset().top-450; //(450 static value)
    var bottom_of_element = $("#vimeoWrap").offset().top + $("#vimeoWrap").outerHeight();
    var bottom_of_screen = $(window).scrollTop() + $(window).innerHeight();
    var top_of_screen = $(window).scrollTop();
//    return ( elementBottom > viewportTop ) && ( elementTop < viewportBottom - $( this ).height() );
//    $("#te").html(top_of_element);
//    $("#be").html(bottom_of_element);
//    $("#ts").html(top_of_screen);
//    $("#bs").html(bottom_of_screen);
//    $("#ht").html($( this ).height());

    if ((bottom_of_screen- $( this ).height() > top_of_element) && (top_of_screen < bottom_of_element)){
        // the element is visible, do something
        player.api("play");
    } else {
            player.api("pause");
    }
});

</script>

<link rel="stylesheet" href="css/flipclock.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="js/flipclock.js"></script>	
<script type="text/javascript">
    var clock;

    $(document).ready(function() {

        // Grab the current date
				var currentDate = new Date();

				// Set some date in the future. In this case, it's always Jan 1
				var futureDate  = new Date("2019/3/27 08:00:00 AM"); // new Date('2014-01-01 05:02:12 pm');
                           
				// Calculate the difference in seconds between the future and current date
				var diff = futureDate.getTime() / 1000 - currentDate.getTime() / 1000;

				// Instantiate a coutdown FlipClock
				clock = $('.clock').FlipClock(diff, {
					clockFace: 'DailyCounter',
					countdown: true,
                    showSeconds: true,
				});
    });
</script>



    

