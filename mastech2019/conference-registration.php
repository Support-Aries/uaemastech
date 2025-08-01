<?php include_once 'header.php'; ?>
<script src="js/jquery-1.11.1.min.js"></script>
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

<div class="container">
    
    
    
    
    <div class="row image-wrapper">
    
        <div class="col-md-6">
        <img src="images/Registration-image-01 MASTerclassfinal.jpg" alt="" class="img-responsive"> 
            
            <div class="text-boxes">
            
                <p>MASTERCLASS : Heavy Lift and Transport Essentials <br> 26th March 2019 Onboard QE2</p>
                
            </div>
            
        </div>
        
        <div class="col-md-6">
            <img src="images/Registration-image-02.png" alt="" class="img-responsive"> 
            
            
            <div class="text-boxes">

                <p>MASTECH CONFERENCE 2019 <br> 27th March 2019 Onboard QE2</p>

            </div>
        </div>
    
    </div>
    
    
    
    
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <h1 style="color:white" class="h1">
                MASTECH Conference &amp; MASTERCLASS Registration Form    
               </h1>
        </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    <div class="row">
        <div class="col-md-12">
           <?php
           if(isset($_GET['st'])&&!empty($_GET['st'])){
                    $st=$_GET['st'];
                     if($st==2)
                     { ?>
    <div class="content" style="color: #e2d178"> Retry!!!</div>
                     <?php  }
                    else if($st==1){ ?>
    <div class="content" style="color: #DE0E0E">  The registration for MASTECH CONFERENCE and MASTERCLASS has been closed. We look forward to seeing you for the next edition of MASTECH & MASTERCLASS</div>
                     <?php }
                     else{ ?>
                         
           <?php } }
                     ?>
    <br>
            <form method="post" action="conference_response.php">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label style="color: white" for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required="required" />
                        </div>
                         <div class="form-group">
                            <label style="color: white" for="name">
                                Company</label>
                            <input type="text" class="form-control" id="name" name="company" placeholder="Enter company" required="required" />
                        </div>
                        
                        

                        <div class="form-group">
                            <label style="color: white" for="name">
                                Title</label>
                            <select name="title" id="title"  class="form-control" style="color:#999;" required="">
                                <option value="">--Select--</option>
                               <option value="Dr.">Dr.</option>
                                <option value="Prof.">Prof.</option>
                                <option value="Mr.">Mr.</option>
                                <option value="Ms.">Ms.</option>
                                <option value="Mrs.">Mrs.</option>
                                
                                

                            </select>
                        </div>
                        
                        
                        <div class="form-group">
                            <label style="color: white" for="email">
                                Email Address</label>
                         
                               
                                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required="required" />
                        </div>
                        <div class="form-group">
                            <label style="color: white" for="phone">
                                Contact Number</label>
                            <input type="number" class="form-control" id="number" name="number" placeholder="Enter Number" required="required" />
                        </div>
                        

                 
                    
                        <div class="form-group">
                            <label style="color: white" for="name">
                                Business Type</label>
                            <select name="type" id="type" onchange="getType(this.value);" class="form-control" style="color:#999;" required>
                                <option value="">--Select--</option>
                                
                                <option value="Ship building">Ship building</option>
                                 <option value="Ship Repair">Ship Repair</option>
                                  <option value="Classification Society">Classification Society</option>
                                   <option value="Port and Logistics">Port and Logistics</option>
                                    <option value="Consultant">Consultant</option>
                                     <option value="EPC/EPCI">EPC/EPCI</option>
                                      <option value="Marine Equipment">Marine Equipment</option>
                                       <option value="Ship Owner">Ship Owner</option>
                                        <option value="Ship Operation">Ship Operation</option>
                                         <option value="Marine Warranty">Marine Warranty</option>
                                         <option value="Others">Others</option>
                                         
                            </select>
                        </div>
                          <div class="form-group">
                            <label style="color: white" for="name">
                                How did you know about MASTECH</label>
                              <select name="about" class="form-control" style="color:#999;" id="aboutmastech"  onchange="getData(this.value);" required>
                                <option value="">--Select--</option>
                                <option value="Linkedln">Linkedln</option>
                                 <option value="Media">Media</option>
                                  <option value="Email invite">Email invite</option>
                                   <option value="Phone call invite">Phone call invite</option>
                                    <option value="Internet Search">Internet Search</option>
                                     <option value="Word of Mouth">Word of Mouth</option>
                                     <option value="Other">Other</option>
                                      
                                         
                            </select>
                        </div>
                        <div class="form-group">
                            <!--<input type="checkbox" name="masterclassInt" id="masterclassInt">--> 
                            <label style="color: white" for="name">
                                Interested in ‘MASTERCLASS on 26 March 2019 Onboard QE2’ ? </label>
                        <select name="masterclassInt" id="masterclassInt" class="form-control" style="color:#999;" required>
                            <option value="">--Select--</option>
                            <option value="YES">YES</option>
                            <option value="NO">NO</option>
                        </select>
                        </div>
                   
                        
<!--                        <div class="form-group">
                            <label style="color: white" for="phone">
                                Message</label>
                            
                            <textarea rows="4" cols="50" name="msg" placeholder="Enter message" id="msg" class="form-control"></textarea>
                            
                        </div>-->

                        <input type="hidden" value="" name="b_type" id="b_type">
                        <input type="hidden" value="" name="about_other" id="about_other">
                        
                        <button type="submit" name="submit" class="btn btn-primary pull-right" id="btnContactUs">
                            Submit</button>
                      
                </div>
              
            
        </div>
        </form>
                
        </div>
    </div><br/><br/><br/><br/><br/><br/>
    </div>
    
</div>


<!-- For Buisiness type starts-->
<div class="form-popup" id="myForm">
    <div class="form-container">
        <!--<label for="email"><b>Email</b></label>-->
        <input type="text" id="other_type" placeholder="Type here" name="other_type" required>

        <button type="submit" onclick="setType()" class="btn">Ok</button>
        <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
    </div>
</div>
<!-- For Buisiness type ends-->

<!-- For  aboutmastech starts-->
<div class="form-popup" id="myFormabout">
    <div class="form-container">
        <!--<label for="email"><b>Email</b></label>-->
        <input type="text" id="aboutdet" placeholder="Type here" name="aboutdet" required>

        <button type="submit" onclick="setAbout()" class="btn">Ok</button>
        <button type="button" class="btn cancel" onclick="closeaboutForm()">Close</button>
    </div>
</div>
<!-- For  aboutmastech ends-->

<script>
    
function getData() 
{
// alert($("#aboutmastech").val())
    var opt=document.getElementById('aboutmastech').value;
    if(opt=='Other')
    {

        document.getElementById("myFormabout").style.display = "block";
    }
    else{
        document.getElementById("myFormabout").style.display = "none";
    }
    
}
function getType() 
{
    document.getElementById("myForm").style.display = "none";
    var opt=document.getElementById('type').value;
    if(opt=='Others')
    {

        document.getElementById("myForm").style.display = "block";
    }
    
}
function setType() 
{
    var opt=document.getElementById("other_type").value;
    if(opt!='')
    {
    document.getElementById("b_type").value=opt;
    document.getElementById("myForm").style.display = "none";
    }
    else{
        document.getElementById("other_type").focus();
    }
}
function setAbout() 
{
    var opt=document.getElementById("aboutdet").value;
    if(opt!='')
    {
    document.getElementById("about_other").value=opt;
    document.getElementById("myFormabout").style.display = "none";
    }
    else{
        document.getElementById("aboutdet").focus();
    }
}
 function closeForm()
{
        document.getElementById("type").value = "";
        document.getElementById("myForm").style.display = "none";
 }
 function closeaboutForm()
{
        document.getElementById("aboutmastech").value = "";
        document.getElementById("myFormabout").style.display = "none";
       // document.getElementById("myForm").style.display = "none";
 }
</script>

<?php include_once 'footer.php'; ?>


<style>

    .open-button {
        background-color: #555;
        color: white;
        padding: 16px 20px;
        border: none;
        cursor: pointer;
        opacity: 0.8;
        position: fixed;
        bottom: 23px;
        right: 28px;
        width: 280px;
    }

    .form-popup {

            display: none;
            position: fixed;
            bottom: 0;
            border: 3px solid #f1f1f1;
            z-index: 9;
            margin: 18% 40%;

    }


    .form-container {
        max-width: 300px;
        padding: 10px;
        background-color: white;
    }


    .form-container input[type=text], .form-container input[type=password] {
        width: 100%;
        padding: 15px;
        margin: 5px 0 22px 0;
        border: none;
        background: #f1f1f1;
    }


    .form-container input[type=text]:focus, .form-container input[type=password]:focus {
        background-color: #ddd;
        outline: none;
    }

    
    .form-container .btn {
        background-color: #4CAF50;
        color: white;
        padding: 10px;
        border: none;
        cursor: pointer;
        width: 49%;
        margin-bottom:10px;
        opacity: 0.8;
    }


    .form-container .cancel {
        background-color: red;
    }


    .form-container .btn:hover, .open-button:hover {
        opacity: 1;
    }
</style>

