<?php include_once 'header.php'; ?>

<style>
    .jumbotron {
background: #358CCE;
color: #FFF;
border-radius: 0px;
}
.jumbotron-sm { padding-top: 24px;
padding-bottom: 24px; }
.jumbotron small {
color: #FFF;
}
.h1 small {
font-size: 24px;
}
</style>
<div style="background-image: url('images/contact6.jpg')">
<div>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <h1 style="color:white" class="h1"><br/><br/><br/>
                    Contact us <small style="color: #777777"> </small></h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">   
        <div class="col-md-8">
            <?php
                    $st=$_GET['st'];
                     if($st==2)
                     { ?>
    <div class="content" style="color: #e2d178"> Retry!!!</div>
                     <?php  }
                    else if($st==1){ ?>
    <div class="content" style="color: #DE0E0E">Thank you. We have registered your query and will get in touch with you shortly.</div>
                     <?php }
                     else{ ?>
                         
                    <?php }
                     ?>
    <br>
            <div class="well well-sm">
                <form method="post" action="contactback.php">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color: white" for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label style="color: white" for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label style="color: white" for="phone">
                                Contact Number</label>
                            <input type="text" class="form-control" id="number" name="number" placeholder="Enter Number" required="required" />
                        </div>
                        
<!--                        <div class="form-group">
                            <label style="color: white" for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>-->
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label style="color: white" for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
                <legend style="color: white"><span class="glyphicon glyphicon-globe"></span> Our Team</legend>
                <address style="color: white">
                <strong>Jolly Kurien </strong><br>
                 President MAST : (056-5386422)<br><br>
				 <strong>Arjun Surendran </strong><br>

                 Event Convener	: (050-9456906)<br><br>
<!--				 <strong>Cyril Joseph </strong><br>
                 Sponsorship Manager : (056-4065258)-->

<!--                 Event Convener	: (050-9456906)<br><br>
				 <strong>Cyril Joseph </strong><br>-->
                 Sponsorship Manager : (056-4065258)


               
            </address>
            <address>
                <strong style="color:#777777">-----------------------------------</strong><br>
                <a style="color: white" href="mailto:mastech2019@uaemastech.com">mastech2019@uaemastech.com</a>
            </address>
            </form>
        </div>
    </div><br/><br/><br/><br/><br/><br/>
    </div>
    
</div>

<?php include_once 'footer.php'; ?>