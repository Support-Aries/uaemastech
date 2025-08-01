    

<script type="text/javascript" src="<?=$this->webroot;?>js/jquery.cookies.2.2.0.min.js"></script>
<style type="text/css">
    

.circle {
z-index:10001; 
position:absolute;
margin-left: auto;
margin-right: auto;
border-radius: 50%;
width: 20%;
top:50%;
left:40%;
background: url("<?= $this->webroot ?>images/free.jpg");
background-repeat: no-repeat;
background-size: cover;
/*box-shadow: -1px 2px 12px 1px rgba(0,0,0,1);*/
box-shadow: 0 16px 32px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}
.circle-border {
border: 5px solid #ccc;
}
.circle-solid{
background-color: whitesmoke;
}
.circle:before {
content: "";
display: block;
padding-top: 100%;
}
@media (max-width: 480px)
{
.circle {
z-index:10001; 
position:absolute;
margin-left: auto;
margin-right: auto;
border-radius: 50%;
width: 20%;
top:70%;
left:40%;
background: url('images/free.jpg');
background-repeat: no-repeat;
background-size: cover;
/*box-shadow: -1px 2px 12px 1px rgba(0,0,0,1);*/
box-shadow: 0 16px 32px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
}

}


.panel-login {
    border-color: #111111;
    -webkit-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
    -moz-box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
    box-shadow: 0px 2px 3px 0px rgba(0,0,0,0.2);
}
.panel-login>.panel-heading {
    color: #fff;
    background-color: #111111;
    border-color: #111111;
    text-align:center;
}
.panel-login>.panel-heading a{
    text-decoration: none;
    color: #666;
    font-weight: bold;
    font-size: 15px;
    -webkit-transition: all 0.1s linear;
    -moz-transition: all 0.1s linear;
    transition: all 0.1s linear;
}
.panel-login>.panel-heading a.active{
    color: #029f5b;
    font-size: 18px;
}
.panel-login>.panel-heading hr{
    margin-top: 10px;
    margin-bottom: 0px;
    clear: both;
    border: 0;
    height: 1px;
    background-image: -webkit-linear-gradient(left,rgba(0, 0, 0, 0),rgba(0, 0, 0, 0.15),rgba(0, 0, 0, 0));
    background-image: -moz-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -ms-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
    background-image: -o-linear-gradient(left,rgba(0,0,0,0),rgba(0,0,0,0.15),rgba(0,0,0,0));
}



.nav-tabs>li>a {
  background-color: #FFF; 
  border-color: #808080; /*50%*/
  color:#808080;
}

/* active tab color */
.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {
  color: #fff;
  background-color: #25D1DA;
  border: 1px solid #25D1DA;
}

/* hover tab color */
.nav-tabs>li>a:hover {
  border-color: #808080;
  background-color: #C9DEAE;
}

.nav-tabs > li, .nav-pills > li {
    float:none;
    display:inline-block;
    *display:inline; /* ie7 fix */
     zoom:1; /* hasLayout ie7 trigger */
}

/* center tabs */
.nav-tabs, .nav-pills {
    text-align:center;
}

/* line below tabs */
.nav-tabs {
    border-bottom: 2px solid #808080;
}

/* center logo */
.img-center {
  margin:0 auto;
  padding: 15px;
}


.new-row {
  clear: left;    
}
  
.no-title-col {
  padding-top: 30px;      
}
.wrapper         {width:100%;height:100%;margin:0 auto;background:#CCC}
.h_iframe        {position:relative;}
.h_iframe .ratio {display:block;width:100%;height:auto;}
.h_iframe iframe {position:absolute;top:0;left:0;width:100%; height:100%;}

#first-slider .main-container {
  padding: 0;
}


#first-slider .slide1 h3, #first-slider .slide2 h3, #first-slider .slide3 h3, #first-slider .slide4 h3{
    color: #fff;
    font-size: 30px;
      text-transform: uppercase;
      font-weight:700;
}

#first-slider .slide1 h4,#first-slider .slide2 h4,#first-slider .slide3 h4,#first-slider .slide4 h4{
    color: #fff;
    font-size: 30px;
      text-transform: uppercase;
      font-weight:700;
}
#first-slider .slide1 .text-left ,#first-slider .slide3 .text-left{
    padding-left: 40px;
}


#first-slider .carousel-indicators {
  bottom: 0;
}
#first-slider .carousel-control.right,
#first-slider .carousel-control.left {
  background-image: none;
}
#first-slider .carousel .item {
  min-height: 425px; 
  height: 100%;
  width:100%;
}

.blink {
  animation: blink-animation 1s steps(5, start) infinite;
  -webkit-animation: blink-animation 1s steps(5, start) infinite;
}
@keyframes blink-animation {
  to {
    visibility: hidden;
  }
}
@-webkit-keyframes blink-animation {
  to {
    visibility: hidden;
  }
}

.carousel-inner .item .container {
    display: flex;
    justify-content: center;
    align-items: center;
    position: absolute;
    bottom: 0;
    top: 0;
    left: 0;
    right: 0;
}


#first-slider h3{
  animation-delay: 1s;
}
#first-slider h4 {
  animation-delay: 2s;
}
#first-slider h2 {
  animation-delay: 3s;
}


#first-slider .carousel-control {
    width: 6%;
        text-shadow: none;
}


#first-slider h1 {
  text-align: center;  
  margin-bottom: 30px;
  font-size: 30px;
  font-weight: bold;
}

#first-slider .p {
  padding-top: 125px;
  text-align: center;
}

#first-slider .p a {
  text-decoration: underline;
}
#first-slider .carousel-indicators li {
    width: 14px;
    height: 14px;
    background-color: rgba(255,255,255,.4);
  border:none;
}
#first-slider .carousel-indicators .active{
    width: 16px;
    height: 16px;
    background-color: #fff;
  border:none;
}


.carousel-fade .carousel-inner .item {
  -webkit-transition-property: opacity;
  transition-property: opacity;
}
.carousel-fade .carousel-inner .item,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  opacity: 0;
}
.carousel-fade .carousel-inner .active,
.carousel-fade .carousel-inner .next.left,
.carousel-fade .carousel-inner .prev.right {
  opacity: 1;
}
.carousel-fade .carousel-inner .next,
.carousel-fade .carousel-inner .prev,
.carousel-fade .carousel-inner .active.left,
.carousel-fade .carousel-inner .active.right {
  left: 0;
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}
.carousel-fade .carousel-control {
  z-index: 2;
}

.carousel-control .fa-angle-right, .carousel-control .fa-angle-left {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
}
.carousel-control .fa-angle-left{
    left: 50%;
    width: 38px;
    height: 38px;
    margin-top: -15px;
    font-size: 30px;
    color: #fff;
    border: 3px solid #ffffff;
    -webkit-border-radius: 23px;
    -moz-border-radius: 23px;
    border-radius: 53px;
}
.carousel-control .fa-angle-right{
    right: 50%;
    width: 38px;
    height: 38px;
    margin-top: -15px;
    font-size: 30px;
    color: #fff;
    border: 3px solid #ffffff;
    -webkit-border-radius: 23px;
    -moz-border-radius: 23px;
    border-radius: 53px;
}
.carousel-control {
    opacity: 1;
    filter: alpha(opacity=100);
}

.bg-overlaynew {
    background: rgba(0, 0, 0, 0) linear-gradient(to bottom, #699ab2 0px, #212338 87%) repeat scroll 0 0;
   
    opacity: 0.9;
 
}


/********************************/
/*       Slides backgrounds     */
/********************************/
#first-slider .slide1 {
    background-image: url(<?= $this->webroot ?>files/openingmovies/opening-movie-slide1.jpg);
      background-size: cover;
    background-repeat: no-repeat;
}
#first-slider .slide2 {
  background-image: url(<?= $this->webroot ?>files/openingmovies/opening-movie-slide2.jpg);
      background-size: cover;
    background-repeat: no-repeat;
}
#first-slider .slide3 {
  background-image: url(<?= $this->webroot ?>files/openingmovies/opening-movie-slide3.jpg);
      background-size: cover;
    background-repeat: no-repeat;
}
#first-slider .slide4 {
  background-image: url(<?= $this->webroot ?>files/openingmovies/opening-movie-slide4.jpg);
      background-size: cover;
    background-repeat: no-repeat;
}

.news-box
    {max-width: 82rem !important;}
   .item{min-height:400px;}

/********************************/
/*          Media Queries       */
/********************************/
@media screen and (min-width: 980px){
      
}
@media screen and (max-width: 640px){
      
}
</style>

<script>
// $(function() {

//     $('#login-form-link').click(function(e) {
//         $("#login-form").delay(100).fadeIn(100);
//         $("#register-form").fadeOut(100);
//         $('#register-form-link').removeClass('active');
//         $(this).addClass('active');
//         e.preventDefault();
//     });
//     $('#register-form-link').click(function(e) {
//         $("#register-form").delay(100).fadeIn(100);
//         $("#login-form").fadeOut(100);
//         $('#login-form-link').removeClass('active');
//         $(this).addClass('active');
//         e.preventDefault();
//     });

// });

</script>

<?php
//$cookie_name = "#popup";
//$cookie_value = "popup";
//setcookie($cookie_name,$cookie_value, time() + 3600, "/"); // 86400 = 1 day
//?>
<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->

<?php
//if(!isset($_COOKIE[$cookie_name])) {?>
    <!--<div id="popup">-->

    <!-- and here comes the image -->
    <!--<div id="btnClose" ><a id="btnClose" href="javascript:closeBox();"><img src="//<?php echo $this->webroot;?>images/fancybox.png" style="float:right"/></a></div>-->
    <!--<img src="<?=$this->webroot;?>images/delegate-reg-open-popups.jpg" alt="popup">-->

        <!-- Now this is the button which closes the popup-->
        <!--<button id="close" style="color: black">Close button</button>-->

        <!-- and finally we close the POPUP FRAME-->
        <!-- everything on it will show up within the popup so you can add more things not just an image -->
<!--</div>-->
<?php // }
?>
<!-- link that opens popup -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Popup image</button>-->

    

    
<!--<div id="myModal" name="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 20000;margin-top:150px;">
    
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body" >
           <div id="btnClose" data-dismiss="modal" ><a id="btnClose" href="javascript:closeBox();"><img src="<?php echo $this->webroot;?>images/fancybox.png" style="float:right"/></a> </div>  
           <a href="http://aliiff.com/registration"> <img src="<?=$this->webroot;?>images/delegate-reg-open-popups.jpg"  class="img-responsive"></a>
           
        </div>
    </div>
  </div>
   
</div>-->


<script type="text/javascript">
// var jq = $.noConflict(); 
$(document).ready(function() {   
    if ($(this).width() > 400) {       
    if(sessionStorage.getItem("fblike")==null){        
          setTimeout(function(){ 
            $("#myModal").modal({ backdrop: 'static',keyboard: false});
            $('#myModal').modal('show');
        }, 1000);
    }
    }
    $('#btnClose').click(function(){
        sessionStorage.setItem("fblike", "2");
        $('#myModal').modal('hide');
    }); 
   
   });

    </script>




        
        
    <script src="<?= $this->webroot ?>foundation/js/jquery.js"></script>
    <link rel="stylesheet" href="<?= $this->webroot ?>foundation/css/foundation.css" />
    <script src="<?= $this->webroot ?>foundation/js/modernizr.js"></script>
    <link href="<?= $this->webroot ?>foundation/css/aliiff.css" rel="stylesheet" type="text/css">
    <link href="<?= $this->webroot ?>foundation/css/foundation-icons/foundation-icons.css" rel="stylesheet" type="text/css">
    <link href="<?= $this->webroot ?>foundation/plugins/lightcase/css/lightcase.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?= $this->webroot ?>foundation/css/colorbox.css">
    
    <script type="text/javascript" src="<?= $this->webroot ?>foundation/js/jquery.colorbox.js"></script>

<script type="text/javascript">
        
        
    (function($) {
    $.fn.blink = function(options) {
        var defaults = {
            delay: 300
        };
        var options = $.extend(defaults, options);

        return this.each(function() {
            var obj = $(this);
            setInterval(function() {
                if ($(obj).css("visibility") == "visible") {
                    $(obj).css('visibility', 'hidden');
                }
                else {
                    $(obj).css('visibility', 'visible');
                }
            }, options.delay);
        });
    }
}(jQuery)) 
$(document).ready(function() {
    $('.blink').blink(); // default is 500ms blink interval.
    $('.blink_second').blink({
        delay: 400
    }); // causes a 100ms blink interval.
    $('.blink_third').blink({
        delay: 400
    }); // causes a 1500ms blink interval.     
});

        
        </script>





<!--<section class="news-section">
        <div class="row news-box">
            <div class="columns news-sections medium-8 small-12">
                <?php
                    $i = 0;
                    foreach ($posts as $post) {
                        if ($i < 4) {
                            if (!empty($post)) {?>
                <div class="columns news-cols medium-6" data-equalizer-watch>
                    <div class="hover-box">
                        <figure>
                            <img src="<?=$this->webroot;?>post/<?=$post['Blog']['image']?> " style="width:100%;height:100%;" alt="<?=$post['Blog']['alt_tag']?>" />
                            <div class="caption">
                                <figcaption>
                                    <h3><?=$post['Blog']['title'];?></h3>
                                    <p><?= addslashes(substr($post['Blog']['description'] , 0,100)) ?>....</p>
                                    <a href="<?=$this->webroot;?>postread/<?= $post['Blog']['bid']?>" class=" button tiny primary tiny-button-custom">Read More</a>
                                <a href="<?=$this->webroot;?>postread/<?= $post['Blog']['bid'];?>" class="button tiny primary tiny-button-custom">Read More</a>
                                </figcaption>
                            </div>
                        </figure>
                    </div>
                </div>

        <?php }
    }
$i++;} //exit;?>

              
                </div>
            
            <div class="columns news-sections medium-4 right">
                <div class="columns news-cols medium-12 announcements" style="height:258px;">
                    <div class="announce-home1">
                        <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-6" style="text-align:left;">
                            
                            <div style="margin-top: 113px;"><a href="<?=$this->webroot;?>gallery2017" target="blank"><span class="blink_me" style="color: #FFDC16;font-weight: bold;">  Gallery 2017 >>></span></a>
                        </div>
                            

                            
                              <img src="<?=$this->webroot;?>images/Epica.png" class="img-responsive"/>
                        </div> <div class="col-md-4"></div></div>
                        <br/>
                        <div class="row">
                        <h4>ALIIFF 2017<br>
                            CLICK HERE FOR <br>
                           
                            </h4>
                         <a href="/aliiff2015bk/registration" class="button register-btn-1">REGISTER NOW</a>
                      
                        <a href="<?=$this->webroot;?>register-delegate" class="button register-btn-1 res-view blink_me" style="background:#ff9900;">REGISTRATION FOR FREE</a>
                        <p style="display: block;">&nbsp;</p>
                        </div></div>
                </div>
                 <div class="columns news-cols medium-12" style="height:260;width:100% ;padding:10px 0px 0px 0px;">
                    <div class="hover-box">
                        <figure>
                     <iframe src="https://player.vimeo.com/external/141521833.hd.mp4?s=0a305b9f77e1e45778bfa8821c9c256c&profile_id=119" frameborder="0" style="overflow:hidden;height:100%;width:100%;background:#000;" height="100%" width="100%" ></iframe>
                    </figure>
                    </div>
        
                </div> 
               
               
               
               
                <div class="columns news-cols medium-12  "> 
                    <div class="embed-responsive embed-responsive-4by3" style="max-height:200px;">
                           <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6ftKmwNGNPY"  width="442" height="280" frameborder="0" allowfullscreen data-rel="lightcase"></iframe>
                       <iframe class="embed-responsive-item" width="442" height="280" src="https://www.youtube.com/embed/rPHUGrOzOgg" frameborder="0" allowfullscreen data-rel="lightcase"></iframe>
                       <iframe class="embed-responsive-item" width="442" height="280" src="https://www.youtube.com/embed/AwdmGqrt3yU" frameborder="0" allowfullscreen data-rel="lightcase"></iframe>
                    </div>
                    src="https://www.youtube.com/embed/6ftKmwNGNPY?rel=0&autoplay=1" 
                    <div class="hover-box">
                        <figure>
                            <a href="https://player.vimeo.com/external/141521833.hd.mp4?s=0a305b9f77e1e45778bfa8821c9c256c&profile_id=119" frameborder="0" allowfullscreen data-rel="lightcase">
                                <img src="img/video-play.jpg" />
    <iframe src="https://www.youtube.com/embed/6ftKmwNGNPY?autoplay=1&loop=1&playlist=6ftKmwNGNPY" width="442" height="306" frameborder="0" allowfullscreen data-rel="lightcase"></iframe>
                                <img src="img/ALIIFF(1).jpg" />
                            </a>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

<section class="main-links-home">
            <div class="bg-overlay1"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 home-thumbs1" style="margin-top:-22px;">
                        <h4>A unique platform for global film industry</h4>
                        <p>All Lights India International Film Festival (ALIIFF) aims at providing a unique platform for global film industry to portray excellence in film making, aids to inspire, nurture and integrate the Indian Cinema industry thereby facilitating congregation of people and nations. The film festival provides a premier showcase for all aspects of filmmaking: the art, the filmmaker, talented directors and actors, and the film- lover in all of us. ALIIFF aims at educating the community & film festival attendees through the art and science of film, promoting cross-cultural awareness, the exchange of ideas, and social understanding.</p>
                        <br><br>
                        <a href="<?=$this->webroot;?>aliiff-film-submission" style="background: none;
    border: 1px solid #fff;
    font-family: 'Roboto', sans-serif;
    letter-spacing: .2em;
    padding: 15px;
    font-size: 0.875em;">SUBMISSION OPEN</a>
                    </div>
                    <div class="columns medium-8 home-thumbs1">
                                   
                    
  <div id="picSlider" class="carousel slide" data-ride="carousel" data-interval="1500">
      
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">    
    <!-- Indicators -->
<!--
    <ol class="carousel-indicators">
      <li data-target="#picSlider" data-slide-to="1" class="active"></li>
      <li data-target="#picSlider" data-slide-to="2"></li>
      <li data-target="#picSlider" data-slide-to="3"></li>
      <li data-target="#picSlider" data-slide-to="4"></li>
      <li data-target="#picSlider" data-slide-to="5"></li>
    </ol>
-->

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        
        <div class="item active">
            <img src="<?=$this->webroot;?>images/gallery2018/slide-2.jpg" class="img-responsive" />
        </div>
<!--
        
        <div class="item">
            <img src="<?=$this->webroot;?>images/gallery2018/slide-4.jpg" class="img-responsive" />
        </div>
        <div class="item ">
            <img src="<?=$this->webroot;?>images/gallery2018/slide-3.jpg" class="img-responsive" />
        </div>
        <div class="item ">
            <img src="<?=$this->webroot;?>images/gallery2018/slide-1.jpg" class="img-responsive" />
        </div>
        <div class="item">
          <img src="<?=$this->webroot;?>images/gallery2018/slide-5.jpg" class="img-responsive" />
      </div>
    
-->
     
    </div>

    <!-- Left and right controls -->
<!--
    <a class="left carousel-control" href="#picSlider" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
-->
<!--
    <a class="right carousel-control" href="#picSlider" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
-->
  </div>
                </div>
                    
                </div>
          
            
        </section>
    

        <section class="teams">
        <div class="row" style="display: block;">
            <div class="columns medium-4 team-list">
                <span class="slider-btm"><i class="fi-play"></i><a href="<?=$this->webroot;?>delegate2018">Film Festival Registration </a></span>

            </div>
            <div class="columns medium-4 team-list">
            <span class="slider-btm"><i class="fi-play"></i>
                <a href="https://ifm.co.in/delegatereg" target="blank">Film Market Registration</a></span>
            </div>
            <div class="columns medium-4 team-list">
                <span class="slider-btm"><i class="fi-play"></i><a href="<?=$this->webroot;?>aliiff-festival-program">FESTIVAL PROGRAM</a></span>

            </div>
            <div class="columns medium-4 team-list">
                <span class="slider-btm"><i class="fi-play"></i><a href="<?=$this->webroot;?>winners">ALIIFF WINNERS 2018</a></span>

            </div>
            
        <div class="columns medium-4 team-list">
            <span class="slider-btm"><i class="fi-play"></i><a href="<?=$this->webroot;?>gallery18">ALIIFF GALLERY 2018</a></span>

            </div>
            <div class="columns medium-4 team-list">
                <span class="slider-btm"><i class="fi-play"></i> <a href="<?=$this->webroot;?>#">ALIIFF EVENT REPORT 2017</a></span>

            </div>
            
        </div>
    </section>
    <section class="opening-movie" style="background-image:url('/aliiff2016new/files/openingmovies/blur-bg1.jpg');">
        <div class="row">
            <div class="columns medium-4 opening-movie-details">
                <h2>opening movie - ALIIFF 2018</h2>
                <span class="opening-movie-title">No Date, No Signature</span>
                <h5>104 mins.Direction - Vahid Jalilvand - Iran</h5>
                <p>Kaveh Nariman is a coroner in the medical examiner's office. One day at his work he meets a corpse which is very familiar to him.</p>
                <!--<a href="<?=$this->webroot;?>aliiff-opening-movie-synopsis" class="button line-btn1">READ SYNOPSIS</a>-->
                 <a href="<?=$this->webroot;?>aliiff-opening-movie-synopsis" class="button line-btn1">READ SYNOPSIS</a>
            </div>
            <div class="columns medium-8 opening-movie-slides">
                <ul  id="myorbit" data-orbit data-options="animation: 'fade';
                                         timer_speed: 2000;
                                         slide_number: false;
                                         animation_speed: 500
                                         pause_on_hover: true;
                                         navigation_arrows: false,
                                         bullets: false;
       
        ">
                    <li> 
<!--                         timer_speed: 2000;
                                         slide_number: false;
                                         animation_speed: 500
                                         pause_on_hover: true;
                                         navigation_arrows: false,
                                         bullets: false;-->
                                         
                       
                        <img src="<?=$this->webroot;?>img/openingmovie2018/No Date, No Signature 1.jpg" alt="Area1" />
                        
                    </li>
                    <li>
                        <img src="<?=$this->webroot;?>img/openingmovie2018/No Date, No Signature 2.jpg" alt="Area3" />
                        
                    </li>
                    <li>
                        <img src="<?=$this->webroot;?>img/openingmovie2018/No Date, No Signature 3.jpg" alt="Area5" />
                        
                    </li>
                    <li>
                        <img src="<?=$this->webroot;?>img/openingmovie2018/No Date, No Signature 4.jpg" alt="webstill4" />
                        
                    </li>
                    <li>
                        <img src="<?=$this->webroot;?>img/openingmovie2018/No Date, No Signature 5.jpg" alt="webstill5" />
                        
                    </li>
                     <li>
                        <img src="<?=$this->webroot;?>img/openingmovie2018/No Date, No Signature 6.jpg" alt="webstill6" />
                        
                    </li>
                    <li>
                        <img src="<?=$this->webroot;?>img/openingmovie2018/No Date, No Signature 7.jpg" alt="webstill6" />
                        
                    </li>
                    <li>
                        <img src="<?=$this->webroot;?>img/openingmovie2018/No Date, No Signature 8.jpg" alt="webstill6" />
                        
                    </li>
                    <li>
                        <img src="<?=$this->webroot;?>img/openingmovie2018/No Date, No Signature 9.jpg" alt="webstill6" />
                        
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
    <!--<div class="tab-pane" id="features">Features Content</div>-->
    <section class="categories bg-overlaynew" id="categories">
        <div class="row">
            <div class="col-md-12">
            <div class="center-tab">   
            <div id="tab" class="btn-group " data-toggle="buttons-radio">
                <a href="#movie2018" class="btn btn-success active btn-lg" data-toggle="tab" ><b>2018</b></a>
                <a href="#movie2017" class="btn btn-danger  btn-lg" data-toggle="tab" ><b>2017</b></a>
                <a href="#movie2016" class="btn btn-info btn-lg" data-toggle="tab" ><b>2016</b></a>
                <a href="#prices" class="btn btn-warning btn-lg" data-toggle="tab" ><b>2015</b></a>
              
               
                 <!--<a href="#features  -------   #movie2016" class="btn btn-warning btn-lg" data-toggle="tab"><b>2016</b></a>-->
             
            </div>
                
            </div>  
                
                
            </div>
            <br><br><br><br>
            <div class="tab-content">
              <div class="tab-pane" id="prices">
            
            <div class="columns medium-12">
                <dl class="tabs center-tab" data-tab>
                    <dd class="active">
                        <a href="#panel95" class="tab-no-color">competition</a>
                    </dd>
                    <dd>
                        <a href="#panel96">out of competition</a>
                    </dd>
                </dl>
                <div class="tabs-content">
                    <div class="content active" id="panel95">
                        <div class="row" data-equalizer="" data-equalizer-mq="large-up">
                            
                                <?php 
                                foreach ($category as $value) {if($value['Category']['catType']==0 && $value['Category']['year']==2015) { ?>
                                <div class="columns medium-3 category-cards left" data-equalizer-watch=""><div class="category-list-home">
                                    <a href="<?php echo $this->webroot;?>movielist/<?php echo $value['Category']['id']?>"><img src="<?php echo $this->webroot;?>files/category/<?php echo $value['Category']['catImage']?>" /></a>
                                    <a class="div-hover" href="<?php echo $this->webroot;?>movielist/<?php echo $value['Category']['id']?>">
                                        <div class="card-split-left">
                                            <h4><?php echo $value['Category']['catName']?></h4>
                                            <p><?php if($value['Category']['catCap'] !='') {echo $value['Category']['catCap'];}else {echo '&nbsp;';}?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                                <?php }}?>
                        </div>
                    </div>
                    <div class="content" id="panel96">
                        <div class="row" data-equalizer="" data-equalizer-mq="large-up">
                            <?php foreach ($category as $value) {if($value['Category']['catType']==1 && $value['Category']['year']==2015){ ?>
                                <div class="columns medium-3 category-cards left" data-equalizer-watch=""><div class="category-list-home">
                                    <a href="<?php echo $this->webroot;?>movielist/<?php echo $value['Category']['id']?>"><img src="<?php echo $this->webroot;?>files/category/<?php echo $value['Category']['catImage']?>" /></a>
                                    <a class="div-hover" href="<?php echo $this->webroot;?>movielist/<?php echo $value['Category']['id']?>">
                                        <div class="card-split-left">
                                            <h4><?php echo $value['Category']['catName']?></h4>
                                            <p><?php echo $value['Category']['catCap']?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php }}?>
                            
                        </div>
                    </div>
                </div>
            </div>
            
              </div>
           <!--<div class="tab-pane" id="features">Coming Soon....</div>-->   
           
              <div class="tab-pane " id="movie2016"  >
            
            <div class="columns medium-12">
                <dl class="tabs center-tab" data-tab>
                    <dd class="active">
                        <a href="#panel97" class="tab-no-color">competition</a>
                    </dd>
                    <dd>
                        <a href="#panel98">out of competition</a>
                    </dd>
                </dl>
                <div class="tabs-content">
                    <div class="content active" id="panel97">
                        <div class="row" data-equalizer="" data-equalizer-mq="large-up">
                            
                                <?php foreach ($category as $value) {if($value['Category']['catType'] == 0 && $value['Category']['active'] == 1 ){ ?>
                                <div class="columns medium-3 category-cards left" data-equalizer-watch=""><div class="category-list-home">
                                       <?php if(!empty($value['Category']['catImage2'])) {?>
                                    <a href="<?php echo $this->webroot;?>home/movielist2/<?php echo $value['Category']['id']?>"><img src="<?php echo $this->webroot;?>files/category/<?php echo $value['Category']['catImage2']?>" /></a>
                                      <?php } else { ?>
                                          
                                    <a href="<?php echo $this->webroot;?>home/movielist2/<?php echo $value['Category']['id']?>"><img src="<?php echo $this->webroot;?>files/category/<?php echo $value['Category']['catImage']?>" /></a>
                                      <?php }  ?>
                                    <a class="div-hover" href="<?php echo $this->webroot;?>home/movielist2/<?php echo $value['Category']['id']?>">
                                        <div class="card-split-left">
                                            <p><?php echo $value['Category']['catName']?></p>
                                            <h4><?php if($value['Category']['catCap'] !='') {echo $value['Category']['catCap'];}else {echo '&nbsp;';}?></h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php }}?>
                        </div>
                    </div>
                    <div class="content" id="panel98">
                        <div class="row" data-equalizer="" data-equalizer-mq="large-up">
                            <?php foreach ($category as $value) {if($value['Category']['catType']==1 && $value['Category']['active'] == 1 ){ ?>
                                <div class="columns medium-3 category-cards left" data-equalizer-watch=""><div class="category-list-home">
                                         <?php if(!empty($value['Category']['catImage2'])) {?>
                                    <a href="<?php echo $this->webroot;?>home/movielist2/<?php echo $value['Category']['id']?>"><img src="<?php echo $this->webroot;?>files/category/<?php echo $value['Category']['catImage2']?>" /></a>
                                      <?php } else { ?>
                                     <a href="<?php echo $this->webroot;?>home/movielist2/<?php echo $value['Category']['id']?>"><img src="<?php echo $this->webroot;?>files/category/<?php echo $value['Category']['catImage']?>" /></a>
                                      <?php }  ?>
                                    <a class="div-hover" href="<?php echo $this->webroot;?>home/movielist2/<?php echo $value['Category']['id']?>">
                                        <div class="card-split-left">
                                            <h4><?php echo $value['Category']['catName']?></h4>
                                            <p><?php echo $value['Category']['catCap']?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php }}?>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
           
           <div class="tab-pane " id="movie2017">
           
            <div class="columns medium-12">
                <dl class="tabs center-tab" data-tab>
                    <dd class="active">
                        <a href="#panel99" class="tab-no-color">competition</a>
                    </dd>
                    <dd>
                        <a href="#pane200">out of competition</a>
                    </dd>
                </dl>
                <div class="tabs-content">
                    <div class="content active" id="panel99">
                        <div class="row" data-equalizer="" data-equalizer-mq="large-up">
                        
                                <?php foreach ($category17 as $value) {if($value['Category']['catType'] == 0 && $value['Category']['active2017'] == 1 ){ ?>
                                <div class="columns medium-3 category-cards left" data-equalizer-watch=""><div class="category-list-home">
                                       <?php if(!empty($value['Category']['catImage17'])) {?>
                                    <a href="<?php echo $this->webroot;?>home/movielist2017/<?php echo $value['Category']['id']?>"><img src="<?php echo $this->webroot;?>files/category/<?php echo $value['Category']['catImage17']?>" /></a>
                                      <?php } else { ?>
                                          
                                    <a href="<?php echo $this->webroot;?>home/movielist2017/<?php echo $value['Category']['id']?>"><img src="<?php echo $this->webroot;?>files/category/<?php echo $value['Category']['catImage17']?>" /></a>
                                      <?php }  ?>
                                    <a class="div-hover" href="<?php echo $this->webroot;?>home/movielist2017/<?php echo $value['Category']['id']?>">
                                        <div class="card-split-left">
                                            <p><?php echo $value['Category']['catName']?></p>
                                            <h4><?php if($value['Category']['catCap'] !='') {echo $value['Category']['catCap'];}else {echo '&nbsp;';}?></h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php }}?>
                        </div>
                    </div>
                    <div class="content" id="pane200">
                        <div class="row" data-equalizer="" data-equalizer-mq="large-up">
                            <?php foreach ($category17 as $value) {if($value['Category']['catType']==1 && $value['Category']['active2017'] == 1 ){ ?>
                                <div class="columns medium-3 category-cards left" data-equalizer-watch=""><div class="category-list-home">
                                         <?php if(!empty($value['Category']['catImage17'])) {?>
                                    <a href="<?php echo $this->webroot;?>home/movielist2017/<?php echo $value['Category']['id']?>"><img src="<?php echo $this->webroot;?>files/category/<?php echo $value['Category']['catImage17']?>" /></a>
                                      <?php } else { ?>
                                     <a href="<?php echo $this->webroot;?>home/movielist2017/<?php echo $value['Category']['id']?>"><img src="<?php echo $this->webroot;?>files/category/<?php echo $value['Category']['catImage17']?>" /></a>
                                      <?php }  ?>
                                    <a class="div-hover" href="<?php echo $this->webroot;?>home/movielist2017/<?php echo $value['Category']['id']?>">
                                        <div class="card-split-left">
                                            <h4><?php echo $value['Category']['catName']?></h4>
                                            <p><?php echo $value['Category']['catCap']?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php }}?>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
           
           <!--2018 2018 2018 2018 2018 2018-->
           <div class="tab-pane active" id="movie2018">
           
            <div class="columns medium-12">
                <dl class="tabs center-tab" data-tab>
                    <dd class="active">
                        <a href="#pane2018-1" class="tab-no-color">competition</a>
                    </dd>
                    <dd>
                        <a href="#pane2018-2">out of competition</a>
                    </dd>
                </dl>
                <div class="tabs-content">
                    <div class="content active" id="pane2018-1">
                        <div class="row" data-equalizer="" data-equalizer-mq="large-up">
                        
                                <?php foreach ($category18 as $value) {if($value['Category']['catType'] == 0 ){ ?>
                                <div class="columns medium-3 category-cards left" data-equalizer-watch=""><div class="category-list-home">
                                       <?php if(!empty($value['Category']['catImage18'])) {?>
                                    <a href="<?php echo $this->webroot;?>home/movielist2018/<?php echo $value['Category']['id']?>"><img src="<?php echo $this->webroot;?>files/category/<?php echo $value['Category']['catImage18']?>" /></a>
                                      <?php } else { ?>
                                          
                                    <a href="<?php echo $this->webroot;?>home/movielist2018/<?php echo $value['Category']['id']?>"><img src="<?php echo $this->webroot;?>files/category/<?php echo $value['Category']['catImage17']?>" /></a>
                                      <?php }  ?>
                                    <a class="div-hover" href="<?php echo $this->webroot;?>home/movielist2018/<?php echo $value['Category']['id']?>">
                                        <div class="card-split-left">
                                            <p><?php echo $value['Category']['catName']?></p>
                                            <h4><?php if($value['Category']['catCap'] !='') {echo $value['Category']['catCap'];}else {echo '&nbsp;';}?></h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php }}?>
                        </div>
                    </div>
                    <div class="content" id="pane2018-2">
                        <div class="row" data-equalizer="" data-equalizer-mq="large-up">
                            <?php foreach ($category18 as $value) {if($value['Category']['catType']==1){ ?>
                                <div class="columns medium-3 category-cards left" data-equalizer-watch=""><div class="category-list-home">
                                         <?php if(!empty($value['Category']['catImage18'])) {?>
                                    <a href="<?php echo $this->webroot;?>home/movielist2018/<?php echo $value['Category']['id']?>"><img src="<?php echo $this->webroot;?>files/category/<?php echo $value['Category']['catImage18']?>" /></a>
                                      <?php } else { ?>
                                     <a href="<?php echo $this->webroot;?>home/movielist2018/<?php echo $value['Category']['id']?>"><img src="<?php echo $this->webroot;?>files/category/<?php echo $value['Category']['catImage17']?>" /></a>
                                      <?php }  ?>
                                    <a class="div-hover" href="<?php echo $this->webroot;?>home/movielist2018/<?php echo $value['Category']['id']?>">
                                        <div class="card-split-left">
                                            <h4><?php echo $value['Category']['catName']?></h4>
                                            <p><?php echo $value['Category']['catCap']?></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <?php }}?>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            </div>
           <!--endddd 2018-->
           
            </div>
        </div>
    </section>
    
    <section class="gen-info" style="background-image:url('<?=$this->webroot;?>/post/dark-mosaic.png');color:#000;background-color:#fff;">
        <div class="row">
            <div class="columns cols-info medium-2" data-equalizer-watch="">
                <h3 class="bottom-gap"><b>venue</b></h3>
                <img src="<?=$this->webroot;?>images/pvr.jpg" class="bottom-gap">
                <p class="bottom-gap">All Lights India International Film Festival will be held on PVR Cinemas, Inorbit Mall, Hyderabad, India</p>
            </div>
            <div class="columns cols-info medium-2" data-equalizer-watch="">
                <h3 class="bottom-gap"><b>Plot</b></h3>
                <img src="<?=$this->webroot;?>img/plot2.jpg" class="bottom-gap">
                <p class="bottom-gap">PLOT â€“ Professional Script Lab will bring its expertise for a very special ........&nbsp;
                    <br><br></p>
                <a href="http://plotscriptlab.com/indywood-edition-hyderabad-2016/" target="blank" class="button tiny button secondary">KNOW MORE</a>
            </div>
            <div class="columns medium-2 cols-info" data-equalizer-watch="">
                <h3 class="bottom-gap"><b>Festival Schedule</h3>
                <img src="<?=$this->webroot;?>img/info3.jpg" class="bottom-gap">
                <p class="bottom-gap">Program Chart will give you an idea on the programs connected.......&nbsp;<br></p>
                <a href="<?=$this->webroot;?>aliiff-schedule" class="button tiny secondary">KNOW MORE</a>
                <!-- <a href="<?php echo $this->webroot;?>programchart" class="button tiny secondary">KNOW MORE</a> -->
            </div>
            <div class="columns cols-info medium-2" data-equalizer-watch="">
                <h3 class="bottom-gap"><b>Elite Attendees</b></h3>
                <img src="<?=$this->webroot;?>images/Elite-Attendees.jpg" class="bottom-gap">
                <p class="bottom-gap">All Lights India International Film Festival Elite Attendees</p>
                <br/>
                <a href="<?=$this->webroot;?>elite-attendees" class="button tiny button secondary">KNOW MORE</a>
            </div>
            
            <div class="columns medium-4 newsticker-box pull-right">
                
                    <h3>LATEST NEWS</h3>
               
                <div class="myWrapper latest-news">
                    <ul>
                    <?php foreach($news as $news){ ?>
                     <li>
                            <img src="<?=$this->webroot;?>post/<?=$news['Blog']['image'] ?>" />
                            <a style="color:#666;" href="<?=$this->webroot;?>postread/<?=$news['Blog']['bid']?>"><span><?php echo substr($news['Blog']['title'], 0, 40);?>....</span></a>
                            <p style="text-align:justify;"><?php echo substr($news['Blog']['description'], 0, 100); ?>....<a  style="color:#009966;" href="<?=$this->webroot;?>postread/<?= $news['Blog']['bid']?>"></a></p>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            
            
            
            
        </div>
    </section>
    
        <style>
 
            .slider-btm
            {
                background: none; 
                border: 1px solid #f19f00; 
                font-family: 'Roboto', sans-serif; 
                letter-spacing: .2em; 
                padding: 8px 15px; 
                font-size: 16px;
                font-weight: 600;
                margin: 10px 0px;
                color: #fff;
                width: 82%;
                border-radius: 2px;
                
               
            }
            
/*            .team-list a { color: #f19f00;}*/
        
            .fi-play{padding-right: 10px; color: #fff !important; }
            
        </style>
    
    
    
    <script src="<?= $this->webroot ?>foundation/js/foundation.min.js"></script>
    <script src="<?= $this->webroot ?>foundation/js/foundation.equalizer.js"></script>
    <script src="<?= $this->webroot ?>foundation/js/foundation.topbar.js"></script>
     <script src="<?= $this->webroot ?>foundation/plugins/lightcase/lightcase.js"></script>
    <script>
        $(document).foundation();

    </script>
    <script type="text/javascript">
    function closeBox() {
      sessionStorage.setItem("fblike", "1");  
      $.colorbox.close();
      $("#btnClose").css("display", "none");
      $(".group1").css("display", "none");
    }
        jQuery(document).ready(function($) {
            $("#loginform").validate({
            rules: {    
             password: {required: true},
             email: {required: true},
             optradio:{required: true},
            },
             messages: {
                optradio: "Please Choose login type",
                email:{required:'Card Number required'},
                password:{required:'password required'},
            },
            errorPlacement: function(error, element) {
              if (element.attr("name") == "optradio") {
                 error.insertAfter("#requestoptradio");
              } else {
                 error.insertAfter(element);
              }
            },
        });
        
        $cmethod = 'index';
        if($cmethod != 'movielist'){
           //  $('a[data-rel^=lightcase]').lightcase();
           //  if ($(this).width() > 400) {
           //  if(sessionStorage.getItem("fblike")==null){
           //            setTimeout(function(){
           //              $(".group1").css("display", "block");
           //             $.colorbox({inline:true, href:'.group1',fixed:'true',escKey: false,overlayClose: false,slideshow:true,width:'380px', height:'280px'});
           //          }, 8000);
           //        }
           // }
       }
        });

    </script>
    <script src="<?= $this->webroot ?>foundation/js/jquery.easy-ticker.js"></script>
    <script>
        $('.myWrapper').easyTicker({
            // list of properties
        });

    </script>

    <script src="<?= $this->webroot ?>foundation/js/readmore.min.js"></script>
    
    
    <script type="text/javascript">
    $(document).ready(function(){
       
        $('.readmore').readmore({
            collapsedHeight: 100,
            speed: 1000
        });
    $('.readmore').next().css("font-size", "12px"); 
    
    $("#myorbit").siblings(".orbit-timer").click();
  
    
    });  


    </script>
    
    
    
    