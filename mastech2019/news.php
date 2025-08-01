<?php include_once 'header.php'; ?>			
<style>
  





.inactive { visibility: hidden; }
.active { background-color: #F7F7F9; }
.col-list .col-head { color: white; border-bottom: thick solid rgba(0, 0, 0, 0.2); border-radius: 5px 5px 0 0; margin-top: 45px; }
.col-list .col-head span { color: white; font-size: 3em; padding: 15px; border: thick solid white; border-radius: 50%; margin-top: -45px; background-color: #BE1E2D; }
.col-list .col-head h2 { margin-top: 7px; margin-bottom: 5px; font-size: 2em; font-weight: 700; }
.col-list .t1 .col-head { background-color: #FFB748; }
.col-list .t2 .col-head { background-color: #16CAC8; }
.col-list .t3 .col-head { background-color: #F87152; }
.col-list .t1 li { border-bottom: 1px solid rgba(255, 183, 72, .4); }
.col-list .t2 li { border-bottom: 1px solid rgba(22, 202, 200, .4); }
.col-list .t3 li { border-bottom: 1px solid rgba(248, 113, 82, .4) }
.col-list .t1 li:last-child,
.col-list .t2 li:last-child,
.col-list .t3 li:last-child { border-bottom: 0; }
.col-list li p { font-size: 1.2em; padding: 7px; margin: 0; }
.col-list li:hover { background-color: #F7F7F9; }
.option span { color: rgba(162, 213, 0, 1); margin-left: 7px; margin-right: 7px;} 
</style>
<style>
    


.news {
    background: #fff;
	position: relative;
	overflow: hidden;
	z-index:1;
 	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;	

	border: 1px solid #eaeaea;
}

.news .img-figure {
	position: relative;
}

.news .img-figure img {
	position: relative;	
	overflow: hidden;
	-webkit-transition: all 1s ease;
	-moz-transition: all 1s ease;
	-ms-transition: all 1s ease;
	-o-transition: all 1s ease;
	transition: all 1s ease;
}

.news:hover .img-figure img {
	-webkit-transform: scale(1.10);
	-moz-transform: scale(1.10);
	-ms-transform: scale(1.10);
	-o-transform: scale(1.10);
	transform: scale(1.10);
}

.news .title {
	/*padding: 29px 30px;*/
	padding: 45px 30px;
	position: absolute;
	left: 0;
	background: #fff;
	width: 100%;
	height: 100%;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;	
}

.news .title h1 {
	margin: 0;
	text-transform: uppercase;
	font-weight: bold;
	font-size: 16px;
/*	color: #3D6AA2;*/
	text-align: center;
}

.news:hover .title  {
	margin-top: -90px;
	background: #fff;
}

.news  p.description {
	position: relative;
	font-weight: normal;
	line-height: 22px;
	opacity: 0;

	text-align: center;

	padding: 15px 30px 0px 30px;

	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;	
}

.news:hover p.description  {
	opacity: 1;
}

p.more {
	text-align: center;
}

.more a {
    position: relative;
    font-size: 13px;
    margin-top: 30px;
    display: block;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
    display: inline-block;
    color: #28998b;
}

.more a:after {
    content: '';
    width: 18px;
    height: 1px;

    position: absolute;
    left: 55px;
    top: 9px;

    background: #28998b;

    vertical-align: middle;
    margin-left: 10px;
    -webkit-transition: all 0.5s ease;
    -moz-transition: all 0.5s ease;
    -ms-transition: all 0.5s ease;
    -o-transition: all 0.5s ease;
    transition: all 0.5s ease;
}


.news:hover a:after {
    width: 30px;
}

.cat {
	background: #a0bc9f;
	color: #fff;
	text-transform: uppercase;
	position: absolute;
	left: 0;
	top: 20px;
	z-index: 1;
	padding: 3px 15px;
}

</style>
<div class="mid-news"><br/><br/>
            <h2 style="text-align: center;color: white">NEWS</h2><br/><br/>
            	<div class="row">
                    <div class="col-md-12">
                        <div class="col-sm-3">
				<div class="news">
					<div class="img-figure">
						<div class="cat">Recent</div>
						<img src="images/news/news1.jpg" class="img-responsive">
					</div>	

					<div class="title">
                                            <h1 style="text-align: left">" The UAE’s growing influence as an import and export hub and the rising popularity of its east coast with container ship operators is generating greater global interest in the regional maritime industry. " </h1>
					</div>
					<p class="description">
						
					</p>

					<p class="more">
                                            <a href="http://www.khaleejtimes.com/article/20130814/ARTICLE/308149876/1037"target="_blank">Read more</a>
					</p>
			</div>


			</div>
                    <div class="col-sm-3">
				<div class="news">
					<div class="img-figure">
						<div class="cat">Recent</div>
                                                <img src="images/news/news2.jpg" class="img-responsive">
					</div>	

					<div class="title">
                                            <h1 style="text-align: left">" DECKS CLEARED FOR SHARJAH MARITIME SHOW Gulf Maritime exhibition & Mastech conference set to anchor regional maritime industry "</h1>
					</div>
					<p class="description">
						
					</p>

					<p class="more">
                                            <a href="http://menafn.com/1093688010/DECKS-CLEARED-FOR-SHARJAH-MARITIME-SHOWGulf-Maritime-exhibition-&-Mastech-conference-set-to-anchor-regional-maritime-industry"target="_blank">Read more</a><i class="arrow" aria-hidden="true"></i>
					</p>
			</div>


			</div>
                    <div class="col-sm-3">
				<div class="news">
					<div class="img-figure">
						<div class="cat">Recent</div>
                                                <img src="images/news/news3.jpg" class="img-responsive">
					</div>	

					<div class="title">
                                            <h1 style="text-align: left">" DECKS CLEARED FOR SHARJAH MARITIME SHOW Gulf Maritime exhibition & Mastech conference set to anchor regional maritime industry "</h1>
					</div>
					<p class="description">
						
					</p>

					<p class="more">
                                            <a href="http://www.godubai.com/citylife/press_release_page.asp?pr=79078"target="_blank">Read more</a>
					</p>
			</div>


			</div>
                    
                    </div>
	</div><br/><br/><br/><br/>
<div class="clear"></div></div>
<?php include_once 'footer.php'; ?>