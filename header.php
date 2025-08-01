<?php
$pagename = basename($_SERVER['PHP_SELF']);
date_default_timezone_set("Asia/Dubai");
date_default_timezone_get();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="assets/esol/images/logo/fav-icon.png">

    <meta content="MASTECH is an International Marine Technical Conference with a tradition of showcasing the latest in marine domain.">

    <meta content="MASTECH: An International Marine Technical Conference UAE" name="keywords">
    <meta property="og:image" content="https://www.uaemastech.com/assets/esol/images/logo/og-img.png" />

    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="450" />
    <meta property="og:image:height" content="300" />


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title tags -->
    <?php if ($pagename == "index.php") { ?>
        <title>MASTECH: An International Marine Technical Conference UAE</title>
        <meta property="og:title" content="MASTECH: An International Marine Technical Conference UAE" />

    <?php  }

    ?>


    <?php
    if ($pagename == "nomination-registration.php") {

    ?>
        <title>Nomination Registration | MASTECH</title>
        <meta property="og:url" content="https://www.uaemastech.com/new-2025/nomination-registration">
        <meta property="og:title" content="Nomination Registration | MASTECH" />

    <?php  }

    if ($pagename == "speaker-reg.php") {

    ?>
        <title>Speaker Registration | MASTECH</title>
        <meta property="og:url" content="https://www.uaemastech.com/new-2025/speaker-reg">
        <meta property="og:title" content="Speaker Registration | MASTECH" />

    <?php  }
    if ($pagename == "sponsorship-enquiry.php") {

    ?>
        <title>Sponsorship Registration | MASTECH</title>
        <meta property="og:url" content="https://www.uaemastech.com/new-2025/sponsorship-enquiry">
        <meta property="og:title" content="Sponsorship Registration | MASTECH" />

    <?php  }
    if ($pagename == "delegate-registration.php") {

    ?>
        <title>Delegate Registration | MASTECH</title>
        <meta property="og:url" content="https://www.uaemastech.com/new-2025/delegate-registration">
        <meta property="og:title" content="Delegate Registration | MASTECH" />

    <?php  }
    if ($pagename == "aboutus.php") {

    ?>
        <title>About Us | MASTECH</title>
        <meta property="og:url" content="https://www.uaemastech.com/new-2025/aboutus">
        <meta property="og:title" content="About Us | MASTECH" />

    <?php  }
    if ($pagename == "past-speaker.php") {

    ?>
        <title>Past Speakers | MASTECH</title>
        <meta property="og:url" content="https://www.uaemastech.com/new-2025/past-speaker">
        <meta property="og:title" content="Past Speakers | MASTECH" />

    <?php  }
    if ($pagename == "past-sponsors.php") {

    ?>
        <title>Past Sponsors | MASTECH</title>
        <meta property="og:url" content="https://www.uaemastech.com/new-2025/past-sponsors">
        <meta property="og:title" content="Past Sponsors | MASTECH" />

    <?php  }
    if ($pagename == "agenda.php") {

    ?>
        <title>Agenda | MASTECH</title>
        <meta property="og:url" content="https://www.uaemastech.com/new-2025/agenda">
        <meta property="og:title" content="Agenda | MASTECH" />

    <?php  }
    if ($pagename == "gallery.php") {

    ?>
        <title>Gallery | MASTECH</title>
        <meta property="og:url" content="https://www.uaemastech.com/new-2025/gallery">
        <meta property="og:title" content="Gallery | MASTECH" />

    <?php  }




    ?>
    <!-- end title tags -->

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- animation -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- slik carousel -->
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/slick.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--  -->

    <link rel="stylesheet" href="cstm-styles.css">
    <link rel="stylesheet" href="cstm-responsive.css">


    <?php $evt_date = "February 13, 2025" ?>
    <?php $location = "Armani BallRoom, Burj Khalifa, Dubai" ?>
    <?php $evt_time = "09:00 AM - 06:00 PM" ?>
    <?php $mail = "mastech2025@uaemastech.com" ?>
    <?php $Phone1 = "+971 52 928 5938" ?>
    <?php $Phone2 = "+971 50 189 4338" ?>



    <!-- Color switch Alternatives -->
    <link rel="stylesheet" type="text/css" href="color-switch/css/switch.css">
    <link href="color-switch/css/color-2.css" rel="alternate stylesheet" type="text/css" title="color-2">
    <link href="color-switch/css/color-3.css" rel="alternate stylesheet" type="text/css" title="color-3">
    <link href="color-switch/css/color-4.css" rel="alternate stylesheet" type="text/css" title="color-4">
    <link href="color-switch/css/color-5.css" rel="alternate stylesheet" type="text/css" title="color-5">
    <link href="color-switch/css/color-6.css" rel="alternate stylesheet" type="text/css" title="color-6">
    <link href="color-switch/css/color-7.css" rel="alternate stylesheet" type="text/css" title="color-7">
    <link href="color-switch/css/color-8.css" rel="alternate stylesheet" type="text/css" title="color-8">

    <!-- owl carosel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">


    <!-- end owl carosel -->

    <style>
        .dropA::before {
            content: "" !important;
        }
    </style>

</head>

<body>



    <div class="body-wrap">
        <!-- header area start -->
        <header class="header-area">
            <nav class="header-nav navbar fixed-top navbar-expand-lg position-absolute w-100">
                <div class="container header-nav-menu">
                    <a class="navbar-brand" href="./">
                        <img src="assets/esol/images/logo/logo.png" style="width: 130px;" alt="Header Logo">
                    </a>

                    <div class="collapse navbar-collapse d-none d-lg-block">
                        <ul class="navbar-nav m-auto menuGap">

                            <li class="nav-item menuLargeScreen">
                                <a href="./" class="nav-link py-3">Home</a>
                            </li>
                            <li class="nav-item menuLargeScreen">
                                <a href="aboutus" class="nav-link py-3">About Us</a>
                            </li>
                            <li class="nav-item menuLargeScreen">
                                <a href="index#agenda" class="nav-link py-3">Agenda</a>
                            </li>
                            <li class="nav-item menuLargeScreen">
                                <a href="index#speakers" class="nav-link py-3">Speakers</a>
                            </li>
                            <li class="nav-item menuLargeScreen">
                                <a href="index#sponsors" class="nav-link py-3">Sponsors</a>
                            </li>

                            <!-- <li class="nav-item menuLargeScreen">
                                <a href="#speakers" class="nav-link py-3">Past Speakers</a>
                            </li> -->
                            <li class="nav-item menuLargeScreen">
                                <a href="index#news" class="nav-link py-3">News</a>
                            </li>
                            <li class="nav-item menuLargeScreen">
                                <a href="gallery" class="nav-link py-3">Gallery</a>
                            </li>
                            <!-- <li class="nav-item menuLargeScreen">
                                <a href="mastech2019/" target="_blank" class="nav-link py-3">Previous Edition</a>
                            </li> -->
                            <li class="nav-item menuLargeScreen">
                                <a href="" class="nav-link py-3">MASTECH In The Past</a>
                                <div class="drop-down">
                                    <div class="row drop-down-wrap g-0">
                                        <div class="col-12">
                                            <ul class="drop-down-menu">

                                                <li class="dropdown-item d-flex align-items-center">

                                                    <a href="past-sponsors" class="item-content dropA">
                                                        <h5 class="item-title">Past Sponsors</h5>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item d-flex align-items-center">

                                                    <a href="past-speaker" class="item-content dropA">
                                                        <h5 class="item-title">Past Speakers</h5>
                                                    </a>
                                                </li>
                                                <li class="dropdown-item d-flex align-items-center">

                                                    <a href="https://www.uaemastech.com/mastech2019/" target="_blank" class="item-content dropA">
                                                        <h5 class="item-title">MASTECH Previous Edition</h5>
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!-- <div class="mode-and-button d-flex align-items-center">

                            <button class="header-btn custom-btn2" data-bs-toggle="modal" data-bs-target="#exampleModal">Buy Tickets</button>
                        </div> -->
                    </div>

                    <!-- mobile menu -->
                    <div class="mobile-view-header d-block d-lg-none d-flex gap-3 align-items-center">
                        <!-- <div class="mode me-md-3">
                            <img src="assets/images/icon/sun.svg" alt="Sun" class="fa-sun" style="display: none;">
                            <img src="assets/images/icon/moon.svg" alt="Moon" class="fa-moon">
                        </div> -->
                        <!-- <button class="header-btn custom-btn2" data-bs-toggle="modal" data-bs-target="#exampleModal">Buy Tickets</button> -->

                        <a class="border rounded-1 py-1 px-2 bg-light" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
                            <span class="navbar-toggler-icon nav-toggler-icon"></span>
                        </a>

                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample">
                            <div class="offcanvas-header">
                                <a class="navbar-brand" href="./">
                                    <img src="assets/esol/images/logo/logo.png" style="width: 150px;" alt="Header Logo">
                                </a>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div class="dropdown mt-3">
                                    <ul class="navbar-nav m-auto">



                                        <li class="nav-item">
                                            <a href="./" class="nav-link py-3">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="aboutus" class="nav-link py-3">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index#agenda" class="nav-link py-3">Agenda</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index#speakers" class="nav-link py-3">Speakers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index#sponsors" class="nav-link py-3">Sponsors</a>
                                        </li>

                                        <!-- <li class="nav-item">
                                            <a href="index#speakers" class="nav-link py-3">Past Speakers</a>
                                        </li> -->
                                        <li class="nav-item">
                                            <a href="index#news" class="nav-link py-3">News</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="gallery" class="nav-link py-3">Gallery</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                            <a href="mastech2019/" target="_blank" class="nav-link py-3">Previous Edition</a>
                                        </li> -->

                                        <!-- Dropdown Menu -->
                                        <li class="nav-item dropdown">
                                            <a href="#" class="py-3 dropdown-toggle" id="dropdownMenu">
                                                MASTECH In The Past
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu" style="border: none;padding-left: 5px;">
                                                <li class="nav-link">

                                                    <a href="past-sponsors" class="item-content dropA">
                                                        Past Sponsors
                                                    </a>
                                                </li>
                                                <li class="nav-link">

                                                    <a href="past-speaker" class="item-content dropA">
                                                        Past Speakers
                                                    </a>
                                                </li>
                                                <li class="">

                                                    <a href="https://www.uaemastech.com/mastech2019/" target="_blank" class="item-content dropA">
                                                        MASTECH Previous Edition
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end mobile menu -->

                </div>
            </nav>

        </header>
        <!-- header area end -->