<?php include_once 'header.php'; ?>

<style>
    .datagrid table {
        border-collapse: collapse;
        text-align: left;
        width: 100%;
    }

    .datagrid {
        font: normal 12px/150% Arial, Helvetica, sans-serif;
        background: #fff;
        overflow: hidden;
        border: 1px solid #652299;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    .datagrid table td,
    .datagrid table th {
        padding: 3px 10px;
    }

    .datagrid table thead th {
        background: -webkit-gradient( linear, left top, left bottom, color-stop(0.05, #652299), color-stop(1, #4D1A75));
        background: -moz-linear-gradient( center top, #652299 5%, #4D1A75 100%);
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#652299', endColorstr='#4D1A75');
        background-color: #652299;
        color: #FFFFFF;
        font-size: 15px;
        font-weight: bold;
        border-left: 1px solid #714399;
    }

    .datagrid table thead th:first-child {
        border: none;
    }

    .datagrid table tbody td {
        color: #4D1A75;
        border-left: 1px solid #E7BDFF;
        font-size: 12px;
        font-weight: normal;
    }

    .datagrid table tbody .alt td {
        background: #F4E3FF;
        color: #4D1A75;
    }

    .datagrid table tbody td:first-child {
        border-left: none;
    }

    .datagrid table tbody tr:last-child td {
        border-bottom: none;
    }

    .datagrid table tfoot td div {
        border-top: 1px solid #652299;
        background: #F4E3FF;
    }

    .datagrid table tfoot td {
        padding: 0;
        font-size: 12px
    }

    .datagrid table tfoot td div {
        padding: 2px;
    }

    .datagrid table tfoot td ul {
        margin: 0;
        padding: 0;
        list-style: none;
        text-align: right;
    }

    .datagrid table tfoot li {
        display: inline;
    }

    .datagrid table tfoot li a {
        text-decoration: none;
        display: inline-block;
        padding: 2px 8px;
        margin: 1px;
        color: #FFFFFF;
        border: 1px solid #652299;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
        background: -webkit-gradient( linear, left top, left bottom, color-stop(0.05, #652299), color-stop(1, #4D1A75));
        background: -moz-linear-gradient( center top, #652299 5%, #4D1A75 100%);
        filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#652299', endColorstr='#4D1A75');
        background-color: #652299;
    }

    .datagrid table tfoot ul.active,
    .datagrid table tfoot ul a:hover {
        text-decoration: none;
        border-color: #4D1A75;
        color: #FFFFFF;
        background: none;
        background-color: #652299;
    }

    div.dhtmlx_window_active,
    div.dhx_modal_cover_dv {
        position: fixed !important;
    }
</style>



<style>

    .about h2 {
        font-size: 2em;
        color: #006699;

    }
</style>
<div style="background-image: url('images/menu.jpg') center fixed">
    <br><br><br> <br><br> 
    <div class="container">
        <div class="sponsorship-sec1">
            <div class="col-md-12 col-sm-12"><div class="col-md-10 col-sm-10"></div>


                <a href="images/MASTECH-2019-Brochure.pdf" target="_blank"><div class="col-md-2 col-sm-2 btn btn-danger pull-right" style="margin-left:10px;"> <b>Download  Brochure</b></div></a>

                <a href="sponsorship-enquiry.php"><div class="col-md-2 col-sm-2 btn btn-primary pull-right"> <b>Sponsorship Enquiry</b></div></a>



                <div class="about"  style="padding-bottom: 5px;padding-top: 3px;">
                    <h2 style="text-align: center;">SPONSORSHIP PACKAGES</h2>

                </div>


                <div class="container">
                    <div class="datagrid">



                        <div class="table-responsive">
                            <table class="table">

                                <thead><tr><th><center>PACKAGES / DIRECT BENEFITS</center></th><th><center>PLATINUM SPONSOR</center></th><th><center>GOLD SPONSOR</center></th><th><center>COCKTAIL SPONSOR</center></th> <th><center>REGISTRATION DESK SPONSOR</center></th></tr></thead>

                                <tbody>
                                    <tr>
                                        <td><center>Key note speaking opportunity</center></td>
                                        <td><center>X</center></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="alt">
                                        <td><center>Podium branding</center></td>
                                        <td><center>X</center></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><center>Branding of on-stage laptop</center></td>
                                        <td><center>X</center></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="alt">
                                        <td><center>Table space at conference</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><center>Sponsor logo on conference live stream</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="alt">
                                        <td><center>Branding at cocktail party</center></td>
                                        <td></td>

                                        <td></td>
                                        <td><center>X</center></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td><center>Branding of Delegate Badge/Lanyards</center></td>
                                        <td></td>

                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="alt">
                                        <td><center>Space for Roll up stands at the venues</center></td>
                                        <td><center>3 stands</center></td>

                                        <td><center>3 stands</center></td>
                                        <td><center>2 stands</center></td>
                                        <td><center>2 stands</center></td>
                                    </tr>
                                    <tr>
                                        <td><center>Delegate Passes</center></td>
                                        <td><center>10</center></td>

                                        <td><center>8</center></td>
                                        <td><center>6</center></td>
                                        <td><center>4</center></td>
                                    </tr>
                                    <tr class="alt">
                                        <td><center>Branding on the conference backdrop</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>
                                    </tr>
                                    <tr>
                                        <td><center>Hyperlinked logo on MASTECH website</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>
                                    </tr>
                                    <tr class="alt">
                                        <td><center>Sponsor logo on event promotional collaterals</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>      






                    </div></div>
                <br><br>




                <div class="container">
                    <div class="datagrid"> 

                        <div class="table-responsive">
                            <table class="table">
                                <thead><tr><th><center>PACKAGES / DIRECT BENEFITS</center></th><th><center>DELEGATE BADGE SPONSOR</center></th><th><center>SILVER SPONSOR</center></th><th><center>ASSOCIATE SPONSORS</center></th> </tr></thead>

                                <tbody>
                                    <tr>
                                        <td><center>Branding of Delegate Badge/Lanyards</center></td>
                                        <td><center>X</center></td>

                                        <td></td>
                                        <td></td>

                                    </tr>
                                    <tr class="alt">
                                        <td><center>Delegate Passes</center></td>
                                        <td><center>4</center></td>
                                        <td><center>4</center></td>
                                        <td><center>2</center></td>

                                    </tr>
                                    <tr >
                                        <td><center>Branding on the conference backdrop</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>

                                    </tr>
                                    <tr  class="alt">
                                        <td><center>Hyperlinked logo on MASTECH website</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>


                                    </tr>
                                    <tr >
                                        <td><center>Sponsor logo on event promotional collaterals</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>
                                        <td><center>X</center></td>


                                    </tr>
                                </tbody>
                            </table></div>
                    </div></div>
            </div>
        </div>

    </div>
    <br><br><br><br>

    
    
    
    
    
    <div class="sponsors-slider">

        <div class="slider slider-nav">
            <div><img style="border:5px  solid #eee;" src="images/sponsors/Untitled.jpg"></div>
            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-1.jpg"></div>
            <div><img style="border:5px  solid #eee;" src="images/sponsors/coordinadora.jpg"></div>
            <div><img style="border:5px  solid #eee;" src="images/sponsors/33.jpg"></div>
            <div><img style="border:5px  solid #eee;" src="images/sponsors/aries3.jpg"></div>
            <div><img style="border:5px  solid #eee;" src="images/sponsors/1-10.jpg"></div>
            <div><img style="border:5px  solid #eee;" src="images/sponsors/25.jpg"></div>
            
            <div><img style="border:5px  solid #eee;" src="images/sponsors/26.jpg"></div>
            <div><img style="border:5px  solid #eee;" src="images/sponsors/27.jpg"></div>
            <div><img style="border:5px  solid #eee;" src="images/sponsors/28.jpg"></div>
            <div><img style="border:5px  solid #eee;" src="images/sponsors/29.jpg"></div>
            <div><img style="border:5px  solid #eee;" src="images/sponsors/30.jpg"></div>
            <div><img style="border:5px  solid #eee;" src="images/sponsors/31.jpg"></div>
            <div><img style="border:5px  solid #eee;" src="images/sponsors/32.jpg"></div>
            
            <div><a href="https://www.mcdermott.com/" target="_blank"><img style="border:5px  solid #eee;" src="images/sponsors/1-19.jpg"></a></div>
            <div><a href="https://www.fluor.com/" target="_blank"><img style="border:5px  solid #eee;" src="images/sponsors/1-12.jpg"></a></div>
        </div>

    </div>
    
    
    <link href="css/slick.min.css" rel='stylesheet' type='text/css' />	
    <script src="js/slick.min.js"></script>  
    <script type="text/javascript">
        $('.slider-nav').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3500,
            focusOnSelect: true
        });

    </script>   
    
    
    
    
    

    <?php include_once 'footer.php'; ?>