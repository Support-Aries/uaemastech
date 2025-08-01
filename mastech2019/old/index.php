		

<!-- //navigation -->
<!-- /banner -->
<!-- about -->
<html>
<head>
<title>Mastech UAE</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Diction Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<link href='//fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
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
							<li><a href="#about" class="scroll">ABOUT US</a></li>
<!--                                                            <li class="dropdown">
                                 <a href="#about" class="scroll">About<span class="caret"></span></a>
                                                                 <ul class="dropdown-menu" role="menu">
                <li><a href="mastech.php"> About MAST</a> </li>
            
            </ul></li>-->
                                                    
                                                        
<!--							<li><a href="#services" class="scroll">Services</a></li>-->
                                                        <li><a href="#MASTECH" class="scroll">MASTECH 2017</a></li>
                                                        <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown">CONFERENCE<span class="caret"></span></a>
                                                                 <ul class="dropdown-menu" role="menu">
                <li><a href="mastech.php"> CONFERENCE TOPIC</a> </li>
                <li><a href="mastech.php"> SPEAKER INVITATION</a> </li>
                <li><a href="mastech.php"> SPEAKERS</a> </li>
            
            </ul></li>
                                                        <li><a href="gallery.php">GALLERY</a></li>
							<li><a href="#news">SPONSORS</a></li>
                                                        <li><a href="#news">NEWS</a></li>
                                                        <li><a href="contactus.php">CONTACT US</a></li>
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
<script>

$(document).ready( function() {
    $('#myCarousel').carousel({
    	interval:   4000
	});
	
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
<div>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/banner-1.jpg">
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



	<div class="about" id="about">
		<div class="container">
			<div class="col-md-6 about-left wow fadeInLeft animated" data-wow-delay=".5s">
				<h3>ABOUT</h3>
                                <p style="text-align: justify">We, the office bearers of MAST, Middle-East Alumni of Ship Technology are a cohesive

group of Naval Architects, who have graduated from the Cochin University of Science and

Technology and currently holding prominent profiles in the UAE Marine industry. MAST

offers an excellent knowledge base and penetration in the Middle East Marine and Oil &

Gas industry.

</p>
				
			</div>
			<div class="col-md-6 about-left wow fadeInRight animated" data-wow-delay=".5s">
				<img src="images/1.jpg" alt="" class="img-responsive">
			</div>
			<div class="clearfix"></div>
			<div class="what wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<h3>MARINE TECHNICAL FORUM</h3>
				<p style="text-align: justify"> We feel proud to announce the Seventh edition of MASTECH event organized by Biz Events

Management at Dusit Thani, Dubai on 19th April’2017. MASTECH will be an excellent

opportunity to hear from leading industry and technical experts from UAE and all around the

world. This one-day conference will provide an unrivalled environment to exchange

information, showcase latest technical innovations, explore collaborations, solicit business

opportunities and take stock of trends and issues at the heart of future strategies.</p>
                                <p style="text-align: justify">Previous MASTECH editions saw about 1000 delegates attending the presentation of

nearly 20 technical papers focusing on next generation ship design, shipping economics,

technical innovations in maritime industry, marine heavy lift & transport, transport solutions

for modular projects and industry outlooks for the oil & gas sector.</p>
			</div>
                        
                        <p style="text-align: justify">We expect the key presence from various leading maritime establishments to be a part of

                            MASTECH 2017, which includes but not limited to</p>
		</div>
	</div>


<div class="three-steps">
	<div class="container">
		<h3 class="animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms"></h3>
<!--		<p class="animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">MASTECH will provide information and business

networking opportunity to its delegates from:</p>-->
		<div class="row col-list">
<!--		<div class="col-md-4 t1">
			<div class="col-head text-center">
				<span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
				<h2>DRYDOCKS WORLD</h2>
			</div>
			<ul class="list-unstyled">
                            <li>
	         	
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>DRYDOCKS WORLD</p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>DP WORLD</p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>PETROFAC</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>TOPAZ ENERGY AND MARINE</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>ESNAAD</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>NKK</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>IRSHAD</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>BV</p>
	         </li>
                 <li>
	         	
	         </li>
			</ul>
		</div>-->
<!--		<div class="col-md-4 t2">
			<div class="col-head text-center">
				<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
				<h2>Col List #2</h2>
			</div>
			<ul class="list-unstyled">
                            <li>
	         	
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>FLUOR</p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>MAERSK</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>NPCC</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>SVITZER</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>McDERMOTT</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>ADPC</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>ADSB</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>BAHRI</p>
	         </li>
                 <li>
	         	
	         </li>
			</ul>
		</div>-->
<!--		<div class="col-md-4 t3">
			
			<ul class="list-unstyled">
                            <li>
	         	
	         </li>
	         
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>ZADCO</p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>DAMEN</p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>LAMPRELL</p>
	         </li>
			</ul>
		</div>-->
<!--                            <div class="col-md-4 t3">
			
			<ul class="list-unstyled">
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>ADMA-OPCO</p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>DNVGL</p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>ADNOC</p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-ok inactive" aria-hidden="true"></span>ABS</p>
	         </li>
                 <li>
	         	
	         </li>
                 
			</ul>
		</div>-->
	</div>
                 
</div>




<div class="mid-bann"id="MASTECH"><br/><br/>
            <h3 style="text-align: center">MASTECH 2017</h3><br/>
            <p style="text-align: center"><b>(We expect the key presence from various leading maritime establishments to be a part of

MASTECH 2017, which includes but not limited to:)</b></p><br/><br/>
			<div class="row col-list">
                            <div class="col-md-4 t1" style="float: left">
<!--			<div class="col-head text-center">
				<span class="glyphicon glyphicon-paperclip" aria-hidden="true"></span>
				<h2>DRYDOCKS WORLD</h2>
			</div>-->
			<ul class="list-unstyled">
                            <li>
	         	
	         </li>
	         <li>
                     <p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span><b>DRYDOCKS WORLD</b></p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>DP WORLD</p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>PETROFAC</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>TOPAZ ENERGY AND MARINE</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>ESNAAD</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>NKK</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>IRSHAD</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>BV</p>
	         </li>
                 <li>
	         	
	         </li>
			</ul>
		</div>
		<div class="col-md-4 t2">
<!--			<div class="col-head text-center">
				<span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span>
				<h2>Col List #2</h2>
			</div>-->
			<ul class="list-unstyled">
                            <li>
	         	
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>FLUOR</p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>MAERSK</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>NPCC</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>SVITZER</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>McDERMOTT</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>ADPC</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>ADSB</p>
	         </li>
                 <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>BAHRI</p>
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
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>ZADCO</p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>DAMEN</p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>LAMPRELL</p>
	         </li>
			</ul>
		</div>
                            <div class="col-md-4 t3">
			
			<ul class="list-unstyled">
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>ADMA-OPCO</p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>DNVGL</p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>ADNOC</p>
	         </li>
	         <li>
	         	<p class="option"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>ABS</p>
	         </li>
                 <li>
	         	
	         </li>
                 
			</ul>
		</div>
	</div>
  	<hr />     
             
  	
</div>
<div class="three-steps">
	<div class="container">
		<h3 class="animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">DELEGATE PROFILE</h3>
		<p class="animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">MASTECH will provide information and business

networking opportunity to its delegates from:</p>
		<div class="three">
			<div class="col-md-4 three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
				<label> </label>
				<h4>Ship Building</h4>
<!--				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
			</div>
			<div class="col-md-4 three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
				<label> </label>
				<h4>Ship Owners</h4>
<!--				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
			</div>
			<div class="col-md-4 three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<span class="glyphicon glyphicon-random" aria-hidden="true"></span>
				<h4>Marine Engineering</h4>
<!--				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
			</div>
			<div class="clearfix"></div>
		</div>
                <div class="three">
			<div class="col-md-4 three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
				<label> </label>
				<h4>Charterers & Agents</h4>
<!--				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
			</div>
			<div class="col-md-4 three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
				<label> </label>
				<h4>Ship Repair</h4>
<!--				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
			</div>
			<div class="col-md-4 three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<span class="glyphicon glyphicon-random" aria-hidden="true"></span>
				<h4>Naval Architecture</h4>
<!--				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
			</div>
			<div class="clearfix"></div>
		</div>
                <div class="three">
			<div class="col-md-4 three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
				<label> </label>
				<h4>Offshore Construction</h4>
<!--				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
			</div>
			<div class="col-md-4 three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
				<label> </label>
				<h4>Oil & Gas</h4>
<!--				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
			</div>
			<div class="col-md-4 three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<span class="glyphicon glyphicon-random" aria-hidden="true"></span>
				<h4>Classification Societies</h4>
<!--				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
			</div>
			<div class="clearfix"></div>
		</div>
                <div class="three">
			<div class="col-md-4 three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
				<label> </label>
				<h4>Port Authorities</h4>
<!--				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
			</div>
			<div class="col-md-4 three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<span class="glyphicon glyphicon-signal" aria-hidden="true"></span>
				<label> </label>
				<h4>Marine Equipment Suppliers</h4>
<!--				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
			</div>
			<div class="col-md-4 three-left animated wow fadeInDown animated" data-wow-duration="1200ms" data-wow-delay="500ms">
				<span class="glyphicon glyphicon-random" aria-hidden="true"></span>
				<h4>Insurers</h4>
<!--				<p> Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod .</p>-->
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
                 
</div>

<br/><br/>
<div style="background-image: url(images/menu.jpg)"><br/>
<h3 style="text-align: center;color: white">SPEAKERS TOPIC</h3><br/><br/>
			<div class="ui-1">
                           
				<div class="col-md-6 ui-1-grd1 wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms">
					<div class="ui-1-top">
						<div class="col-xs-3 ui-1-left">
							<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 ui-1-right">
                                                    <h4 style="text-align: match-parent;color: white">Renewable Energy</h4>
<!--							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod .</p>-->
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 ui-1-grd1 wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms">
					<div class="ui-1-top">
						<div class="col-xs-3 ui-1-left">
							<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 ui-1-right">
                                                    <h4 style="color: white">Technical innovations in Shipbuilding & Marine Engineering</h4>
<!--							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod .</p>-->
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
				<div class="col-md-6 ui-1-grd1 wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms">
					<div class="ui-1-top">
						<div class="col-xs-3 ui-1-left">
							<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 ui-1-right">
							<h4 style="color: white">Marine Heavy Lift & Transport</h4>
<!--							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod .</p>-->
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-6 ui-1-grd1 wow fadeInUp animated" data-wow-duration="1200ms" data-wow-delay="500ms">
					<div class="ui-1-top">
						<div class="col-xs-3 ui-1-left">
							<span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
						</div>
						<div class="col-xs-9 ui-1-right">
							<h4 style="color: white">Marine Operations & Safety</h4>
<!--							<p> Nam libero tempore, cum soluta nobis est eligendi optio 
								cumque nihil impedit quo minus id quod .</p>-->
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div> 
<br/><br/><br/><br/><br/><br/><br/><br/>
</div>

<!-- /about -->	

</div>
<!-- //navigation -->
<!-- /banner -->
<!-- about -->
	
	
<!--- contact ---->	 
<!--- footer ---->	

<a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 0;"></span> <span id="toTopHover" style="opacity: 0;"> </span></a>

<!--- footer ---->	
</body>
</html>
	
<!--- contact ---->	 
<!--- footer ---->	
<?php include_once 'footer.php'; ?>