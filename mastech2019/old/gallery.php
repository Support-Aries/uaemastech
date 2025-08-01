<?php include_once 'header.php'; ?>	
<style>
    @import url(https://fonts.googleapis.com/css?family=Quicksand:400,300);
body{
    font-family: 'Quicksand', sans-serif;
}
.gal-container{
	padding: 12px;
}
.gal-item{
	overflow: hidden;
	padding: 3px;
}
.gal-item .box{
	height: 350px;
	overflow: hidden;
}
.box img{
	height: 100%;
	width: 100%;
	object-fit:cover;
	-o-object-fit:cover;
}
.gal-item a:focus{
	outline: none;
}
.gal-item a:after{
	content:"\e003";
	font-family: 'Glyphicons Halflings';
	opacity: 0;
	background-color: rgba(0, 0, 0, 0.75);
	position: absolute;
	right: 3px;
	left: 3px;
	top: 3px;
	bottom: 3px;
	text-align: center;
    line-height: 350px;
    font-size: 30px;
    color: #fff;
    -webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
}
.gal-item a:hover:after{
	opacity: 1;
}
.modal-open .gal-container .modal{
	background-color: rgba(0,0,0,0.4);
}
.modal-open .gal-item .modal-body{
	padding: 0px;
}
.modal-open .gal-item button.close{
    position: absolute;
    width: 25px;
    height: 25px;
    background-color: #000;
    opacity: 1;
    color: #fff;
    z-index: 999;
    right: -12px;
    top: -12px;
    border-radius: 50%;
    font-size: 15px;
    border: 2px solid #fff;
    line-height: 25px;
    -webkit-box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
	box-shadow: 0 0 1px 1px rgba(0,0,0,0.35);
}
.modal-open .gal-item button.close:focus{
	outline: none;
}
.modal-open .gal-item button.close span{
	position: relative;
	top: -3px;
	font-weight: lighter;
	text-shadow:none;
}
.gal-container .modal-dialogue{
	width: 80%;
}
.gal-container .description{
	position: relative;
	height: 40px;
	top: -40px;
	padding: 10px 25px;
	background-color: rgba(0,0,0,0.5);
	color: #fff;
	text-align: left;
}
.gal-container .description h4{
	margin:0px;
	font-size: 15px;
	font-weight: 300;
	line-height: 20px;
}
.gal-container .modal.fade .modal-dialog {
    -webkit-transform: scale(0.1);
    -moz-transform: scale(0.1);
    -ms-transform: scale(0.1);
    transform: scale(0.1);
    top: 100px;
    opacity: 0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
}

.gal-container .modal.fade.in .modal-dialog {
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    -ms-transform: scale(1);
    transform: scale(1);
    -webkit-transform: translate3d(0, -100px, 0);
    transform: translate3d(0, -100px, 0);
    opacity: 1;
}
@media (min-width: 768px) {
.gal-container .modal-dialog {
    width: 55%;
    margin: 50 auto;
}
}
@media (max-width: 768px) {
    .gal-container .modal-content{
        height:250px;
    }
}
/* Footer Style */
i.red{
    color:#BC0213;
}
.gal-container{
    padding-top :75px;
    padding-bottom:75px;
}
footer{
    font-family: 'Quicksand', sans-serif;
}
footer a,footer a:hover{
    color: #88C425;
}
</style>
<body style="background-image: url(images/menu.jpg)">
    
    
    <section>
        
        
        
        <div class="container-fluid gal-container"title="MASTECH 2011 Day 1">
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
             <div class="gallery-padding">
                <div class="img-frame">
                    <div class="image-wrapper">
                        <a class="fancybox" href="https://get.google.com/albumarchive/104495081553058519621/album/AF1QipPa8otOY31oYvBZbvTSQweHRkCqNM3Dx0WwEVVv?authKey=CIeq_aCxnPP6aA" target="_blank" title="MASTECH 2013- DAY-1" style="height: 115px;width: 212px;" rel="gallery88">
                            <img src="images/gallery/t3.jpg" alt=""/></a>
                    </div>
                        
            <div class="hidden">
<!--                <a class="fancybox" href="http://www.thadinews.com/2017/01/blog-post_68.html" rel="gallery88"></a>-->
                
            </div>
                </div>
            </div> 
      </div>
    </div>
    
    
    
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
      <div class="box">
             <div class="gallery-padding">
                <div class="img-frame">
                    <div class="image-wrapper">
                        <a class="fancybox" href="https://get.google.com/albumarchive/104495081553058519621/album/AF1QipMW1-bTszOShp7WKMydb3r9D4PP1SvqDpxwjhfa?authKey=CN6Biefjh7uMowE" target="_blank" title="MASTECH 2013- DAY-2" style="height: 115px;width: 212px;" rel="gallery88">
                            <img src="images/gallery/t4.jpg" alt=""/></a>
                    </div>
                        
            <div class="hidden">
<!--                <a class="fancybox" href="http://www.thadinews.com/2017/01/blog-post_68.html" rel="gallery88"></a>-->
                
            </div>
                </div>
            </div> 
      </div>
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
        
        <div class="box">
             <div class="gallery-padding">
                <div class="img-frame">
                    <div class="image-wrapper">
                        <a class="fancybox" href="https://get.google.com/albumarchive/104495081553058519621/album/AF1QipNPLaU3aR3GLJde6IDz_vr-myh4ZvXHtYDMm7-C?authKey=CI_l7Pf_z5qxqQE" target="_blank" title="MASTECH 2011 Day 1" style="height: 115px;width: 212px;" rel="gallery88">
                            <img src="images/gallery/t1.jpg" alt=""/></a>
                    </div>
                        
            <div class="hidden">
<!--                <a class="fancybox" href="http://www.thadinews.com/2017/01/blog-post_68.html" rel="gallery88"></a>-->
                
            </div>
                </div>
            </div> 
          
          
          
          
          
      </div>
      
    </div>
    <div class="col-md-4 col-sm-6 co-xs-12 gal-item">
        
        <div class="box">
             <div class="gallery-padding">
                <div class="img-frame">
                    <div class="image-wrapper">
                        <a class="fancybox" href="https://get.google.com/albumarchive/104495081553058519621/album/AF1QipNlJLdg-InD51K3_iM3gj6QugttGHp3iTldi58e?authKey=CMiDzM-O09X_gQE" target="_blank" title="MASTECH 2011 - Day 2" style="height: 115px;width: 212px;" rel="gallery88">
                            <img src="images/gallery/t2.jpg" alt=""/></a>
                    </div>
                        
            <div class="hidden">
<!--                <a class="fancybox" href="http://www.thadinews.com/2017/01/blog-post_68.html" rel="gallery88"></a>-->
                
            </div>
                </div>
            </div> 
      </div>
        
      
        
   </div>
    
    </div>
</section>
    
    
</body>

<?php include_once 'footer.php'; ?>