<?php include 'header.php'; ?>

<!-- hero sec start -->
<!-- <section class="hero-sec" style="background-image: url(assets/images/banner/group.png);"> -->
<section class="hero-sec position-relative">

    <div class="overlayBanner"></div>
    <video class="video-bg" autoplay muted playsinline loop preload="metadata">
        <source src="assets/esol/video/video.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="hero-slider-wrap">

        <div class="hero-slider-item overflow-hidden">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="slider-item-content-wrap">
                            <div class="item-content">
                                <!-- <h1 class="item-title1">
                                    MASTECH
                                </h1> -->
                                <div class="BannerLogoDiv mb-2">
                                    <img src="assets/esol/images/logo/logo-white.png" alt="">
                                </div>
                                <h3 class="editionNumberBannerSection ">
                                    6 <sup>th</sup> Edition
                                </h3>
                                <h3 class="h3BannerSection">
                                    An International Marine Technical Conference
                                </h3>
                                <div class="d-flex justify-content-center align-items-center flexBtnBanner text-white mb-1">
                                    <div class="dateBanner d-flex gap-2">
                                        <img style="width: 30px;height: 30px;" src="assets/esol/icons/google-calendar.png" alt="">
                                        <p><?php echo $evt_date ?> | <?php echo $evt_time ?></p>
                                    </div>

                                </div>
                                <div class="d-flex justify-content-center align-items-center flexBtnBanner text-white mb-3">
                                    <div class="dateBanner d-flex gap-2">
                                        <img style="width: 30px;height: 30px;" src="assets/esol/icons/location.png" alt="">
                                        <p><?php echo $location ?></p>
                                    </div>
                                </div>

                                <!--  -->

                                <div class="info-sec infoBannerSec">
                                    <div class="container">
                                        <div class="info-countdown mb-0">
                                            <ul class="counter-box d-flex justify-content-center gap-3 gap-lg-5" data-countdown="2025/02/13">
                                            </ul>
                                            <div class="dots img-moving-anim2">
                                                <img src="assets/images/dots/dots3.png" alt="Shadow Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--  -->

                                <!-- <p class="item-sub">
                                    An International Marine Technical Conference UAE
                                </p> -->
                                <div class="d-flex gap-3 justify-content-center align-items-center flexBtnBanner">
                                    <div class="">
                                        <a href="delegate-registration"> <button
                                                class="custom-btn2 cstmWidthMobile">Delegate Registration</button></a>
                                    </div>
                                    <div class="">
                                        <a href="sponsorship-enquiry"> <button
                                                class="custom-btn2 cstmWidthMobile">Sponsorship Enquiry</button></a>
                                    </div>
                                    <div class="">
                                        <a href="speaker-reg"><button class="custom-btn2 cstmWidthMobile">Speaker
                                                Registration</button></a>
                                    </div>

                                </div>
                                <div class="d-flex gap-3 justify-content-center align-items-center flexBtnBanner">
                                    <div class="">
                                        <a href="javascript:void(0)"> <button class="custom-btn2 cstmWidthMobile"
                                                data-bs-toggle="modal" data-bs-target="#mediaReg"> Media
                                                Registration</button></a>
                                    </div>
                                    <div class="">
                                        <a href="nomination-registration"> <button class="custom-btn2 cstmWidthMobile">
                                                Nomination Registration</button>
                                        </a>
                                    </div>
                                </div>

                                <img src="assets/images/dots/dots.png" alt="Shadow Image"
                                    class="dots-1 opacity-50 img-moving-anim2">
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-4 col-md-6 order-md-2 order-1">
                        <div class="item-image">
                            <div class="img-1 img-moving-anim1">
                                <img src="assets/esol/images/banner-section/people-taking-part-high-protocol-event.jpg"
                                    alt="Event template">
                            </div>
                            <div class="img-2 img-moving-anim2">
                                <img src="assets/esol/images/banner-section/view-large-ship-water.webp"
                                    alt="Event template">
                            </div>
                            <img src="assets/images/dots/dots2.png" alt="Shadow Image" class="dots-2 img-moving-anim3">
                        </div>
                    </div> -->
                </div>
                <!-- <div class="highlight-text img-moving-anim4">
                    <strong class="big-title"><span class="text">CONF 2025</span></strong>
                </div> -->
            </div>
        </div>



    </div>
</section>
<!-- hero sec start -->



<!-- info sec start -->
<div class="info-sec infoBannerSec">
    <div class="container">
        <!-- <div class="info-countdown" style="background-image: url(assets/images/banner/bg.png);">
            <ul class="counter-box d-flex justify-content-around" data-countdown="2025/02/13">
            </ul>
            <div class="dots img-moving-anim2">
                <img src="assets/images/dots/dots3.png" alt="Shadow Image">
            </div>
        </div> -->
        <div class="information-area">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="600">
                    <div class="mail indexContactInfoBox">
                        <div class="icon"><img src="assets/esol/icons/mail.png" alt="Mail"></div>
                        <a href="mailto:mastech2025@uaemastech.com" class="mail-link">mastech2025@uaemastech.com</a>
                    </div>
                </div>
                <!-- <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="800">
                    <div class="location">
                        <div class="icon"><img src="assets/esol/icons/location-box.png" alt="Map"></div>
                        <a href="#" class="location-link">Dubai</a>
                    </div>
                </div> -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="number indexContactInfoBox">
                        <div class="icon"><img src="assets/esol/icons/telephone.png" alt="Phone"></div>
                        <a href="tel:+971 52 928 5938" class="number-link">+971 52 928 5938</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                    <div class="number indexContactInfoBox">
                        <div class="icon"><img src="assets/esol/icons/telephone.png" alt="Phone"></div>
                        <a href="tel:+971 50 189 4338" class="number-link">+971 50 189 4338</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- info sec end -->


<!-- video sec start -->
<section class="video-sec" data-src="assets/images/banner/home-conference-video-bg" style="background: #f1f1ff;" data-parallax>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="vimeoDiv mb-3 mb-lg-0">
                    <iframe
                        width="100%"
                        height="315"
                        src="https://www.youtube.com/embed/laF_y4-I8mI?si=5F2no17A32ooYwi9&autoplay=1&mute=1&loop=1&playlist=laF_y4-I8mI"
                        title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin"
                        allowfullscreen>
                    </iframe>

                </div>
                <!-- <div class="video-wrap">
                    <div class="video-image img-moving-anim1">
                        <img src="assets/images/video/video1.jpg" alt="Video Image 1">
                    </div>
                    <div class="video-play">
                        <img src="assets/images/video/video2.jpg" alt="Video Image 2" data-bs-backdrop="static">
                        <a class="video-btn1 popup-video" href="" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><span><i class="fas fa-play"></i></span></a>
                    </div>
                    <div class="dots img-moving-anim2">
                        <img src="assets/images/dots/dots6.png" alt="Shadow Image">
                    </div>
                </div> -->
            </div>
            <div class="col-lg-6">
                <div class="video-content-wrap">
                    <h2 class="title">
                        About MASTECH
                    </h2>
                    <p class="desc">
                        MASTECH is a Global Maritime Technical Conference with a tradition of showcasing the latest in the maritime, shipping, offshore and EPC domains. MASTECH is home to one of the largest gatherings of the maritime and offshore industry experts in the Middle East region. The Sixth edition of MASTECH organized by the Middle East Alumni of Ship Technology (MAST) and Biz Events Management will take stage on February 13, 2025.
                    </p>
                    <!-- <div class="management d-flex">
                        <h3 class="event count-block p-lg-5 p-3"><span>07</span>Days Event</h3>
                        <h3 class="speakers count-block p-lg-5 p-3"><span>20+</span>Speakers</h3>
                    </div> -->
                    <!-- <div class="dots img-moving-anim3">
                        <img src="assets/images/dots/dots7.png" alt="Shadow Image">
                    </div> -->
                    <!-- <button class="custom-btn2 video-btn">Resister Now</button> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- video sec end -->

<!-- about sec start -->
<section id="about" class="about-sec">
    <div class="container">
        <div class="section-head col-12 justify-content-center text-center mb-5">
            <!-- <span class="label">Welcome to Eventor Conference 2023</span> -->
            <h1 class="title mb-4">
                What You'll Find
            </h1>
            <p class="desc mx-3">
                The Maritime industry is in a constant flux of innovative transformation. Ongoing technological metamorphosis is shaping up this age old industry for exciting future.
            </p>
            <p class="desc mx-3">
                The previous editions of MASTECH had witnessed over 1300 plus delegates attending the presentation of over 75 technical papers and panels focusing on next-generation ship design, shipping economics, technical innovations in maritime industry, marine heavy lift & transport, transport solutions for modular projects and industry outlooks for the oil & gas sector.
            </p>
            <p class="desc mx-3">
                MASTECH 2025 will capture some of the finest, relevant, and futuristic topics at the pinnacle of this transmutation. The one-day conference will provide an unrivaled environment to exchange information and build networks. MASTECH 2025 aims to showcase the latest technical innovations, explore collaborations, solicit business opportunities, and take stock of trends and issues at the heart of future strategies.
            </p>
        </div>
        <div class="about-items-wrap cstmHeightWhatFindSection" data-aos="fade-right" data-aos-duration="1000">
            <div class="row g-4">
                <div class="col-6 col-md-3" data-aos="fade-right" data-aos-duration="800">
                    <div class="about-item">
                        <div class="item-thumb">
                            <img class="img-fluid imgWhatFind"
                                src="assets/esol/images/aboutSection/cargo-ship-miami-harbor.png" alt="About Images">
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-right" data-aos-duration="800">
                    <div class="about-item">
                        <div class="item-thumb">
                            <img class="img-fluid imgWhatFind"
                                src="assets/esol/images/aboutSection/about-section-new.jpg" alt="About Images">
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-right" data-aos-duration="700">
                    <div class="about-item">
                        <div class="item-thumb">
                            <!-- <img src="assets/images/about/about2.png" alt="About Images"> -->
                            <img class="img-fluid imgWhatFind"
                                src="assets/esol/images/aboutSection/technological-futuristic-holograms-logistics-means-transport.jpg"
                                alt="About Images">

                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-right" data-aos-duration="600">
                    <div class="about-item">
                        <div class="item-thumb">
                            <img class="img-fluid imgWhatFind"
                                src="assets/esol/images/aboutSection/conf-mash.png"
                                alt="About Images">

                        </div>
                    </div>
                </div>
                <!-- <div class="dots img-moving-anim5">
                    <img src="assets/images/dots/dots4.png" alt="Shape Images">
                </div> -->
            </div>
        </div>
    </div>
    <div class="shape">
        <img src="assets/images/shape/1.svg" alt="Shadow">
    </div>
</section>
<!-- about sec end -->
<div class="container mt-5">
    <hr>
</div>

<section class="speakers-gallery-sec pt-0">
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 col-lg-4">
                <h1 class="title mb-4">
                    Who Should Attend ?
                </h1>
            </div>
            <div class="col-12 col-lg-8">
                <p class="desc">
                    MASTECH will be an interacting platform for Industry leaders keen to remodel their business strategies and carve future ready solutions. Executives shall find it enthralling to augment the knowledge, while for beginners this will be a stepping stone to explore networks and understand how the industry aligns for the future.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- <div class="container mt-5">
    <hr>
</div> -->

<section class="agendaPadding" id="agenda" style="background: url(assets/esol/images/agenda/agenda-bg_1.png);background-repeat: no-repeat;background-size: cover;background-position: center;background-attachment: fixed;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="title text-center text-white fontSizeAgenda">
                    Agenda
                </h2>
            </div>
            <div class="col-12 col-md-10 col-lg-7 text-center">
                <img class="img-fluid" src="assets/esol/images/agenda/agenda.png" alt="">
            </div>
        </div>
    </div>
</section>

<!-- <div class="container mt-5">
    <hr>
</div> -->

<!-- speakers -->

<section id="speakers" class="speakers-gallery-sec position-relative pb-0">
    <div class="container">
        <div class="section-head col-xl-8 m-auto text-center mb-5">
            <span class="label">Mastech 2025</span>
            <h2 class="title">
                Speakers
            </h2>
        </div>
        <div class="speakers-gallery-items-wrap">
            <div class="row">
                <!-- speaker -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center align-items-center mb-3 mb-lg-5">
                    <div class="speakers-gallery-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                        <div class="speakers-gallery-item-thumb overflow-hidden position-relative">
                            <img src="assets/esol/images/speakers-25/ADNOC-L&S-AlexBrykalov-2.jpg" alt="Mastech 2025 Speaker">
                        </div>

                        <div class="item-content">
                            <h3 class="title">Captain Alex Brykalov</h3>
                            <span class="sub">Vice President, Commercial in Offshore and Onshore Logistics<br>ADNOC Logistics & Services</span>
                            <div class="speakerModal pt-2">
                                <a type="button" class="btn btnSpeaker" data-bs-toggle="modal" data-bs-target="#alexBrykalov">
                                    View More
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end speaker -->
                <!-- speaker -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center align-items-center mb-3 mb-lg-5">
                    <div class="speakers-gallery-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                        <div class="speakers-gallery-item-thumb overflow-hidden position-relative">
                            <img src="assets/esol/images/speakers-25/Koichi-KAIZU.jpg" alt="Mastech 2025 Speaker">
                        </div>

                        <div class="item-content">
                            <h3 class="title">Koichi Kaizu</h3>
                            <span class="sub">
                                Logistics / Module Transportation<br>JGC Corporation
                            </span>
                            <div class="speakerModal pt-2">
                                <a type="button" class="btn btnSpeaker" data-bs-toggle="modal" data-bs-target="#Koichi-KAIZU">
                                    View More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end speaker -->
                <!-- speaker -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center align-items-center mb-3 mb-lg-5">
                    <div class="speakers-gallery-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                        <div class="speakers-gallery-item-thumb overflow-hidden position-relative">
                            <img src="assets/esol/images/speakers-25/MohammadJaber.jpg" alt="Mastech 2025 Speaker">
                        </div>

                        <div class="item-content">
                            <h3 class="title">Mohammad Jaber</h3>
                            <span class="sub">
                                Managing Director<br> DSV Air & Sea Abu Dhabi
                            </span>
                            <div class="speakerModal pt-2">
                                <a type="button" class="btn btnSpeaker" data-bs-toggle="modal" data-bs-target="#MohammadJaber">
                                    View More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end speaker -->
                <!-- speaker -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center align-items-center mb-3 mb-lg-5">
                    <div class="speakers-gallery-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                        <div class="speakers-gallery-item-thumb overflow-hidden position-relative">
                            <img src="assets/esol/images/speakers-25/SourenGharnagharian.png" alt="Mastech 2025 Speaker">
                        </div>

                        <div class="item-content">
                            <h3 class="title">Souren Gharnagharian</h3>
                            <span class="sub">
                                Investment Manager<br> Australis Maritime
                            </span>
                            <div class="speakerModal pt-2">
                                <a type="button" class="btn btnSpeaker" data-bs-toggle="modal" data-bs-target="#SourenGharnagharian">
                                    View More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end speaker -->
                <!-- speaker -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center align-items-center mb-3 mb-lg-5">
                    <div class="speakers-gallery-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                        <div class="speakers-gallery-item-thumb overflow-hidden position-relative">
                            <img src="assets/esol/images/speakers-25/spyridon-lalaounis.jpg" alt="Mastech 2025 Speaker">
                        </div>

                        <div class="item-content">
                            <h3 class="title">Spyridon Lalaounis</h3>
                            <span class="sub">
                                Director <br>New Builds, Bahri Ship Management
                            </span>
                            <div class="speakerModal pt-2">
                                <a type="button" class="btn btnSpeaker" data-bs-toggle="modal" data-bs-target="#spyridon-lalaounis">
                                    View More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end speaker -->
                <!-- speaker -->
                <div class="col-12 col-md-6 col-lg-4 col-xl-3 d-flex justify-content-center align-items-center mb-3 mb-lg-5">
                    <div class="speakers-gallery-item" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="400">
                        <div class="speakers-gallery-item-thumb overflow-hidden position-relative">
                            <img src="assets/esol/images/speakers-25/LarsSeistrup.jpg" alt="Mastech 2025 Speaker">
                        </div>

                        <div class="item-content">
                            <h3 class="title">Lars Seistrup</h3>
                            <span class="sub">
                                Managing Director<br>
                                Albwardy Damen
                            </span>
                            <div class="speakerModal pt-2">
                                <a type="button" class="btn btnSpeaker" data-bs-toggle="modal" data-bs-target="#LarsSeistrup">
                                    View More
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end speaker -->

            </div>
            <div class="dots img-moving-anim1">
                <img src="assets/images/dots/dots8.png" alt="Shadow Image">
            </div>
        </div>

    </div>
    <div class="shape">
        <img src="assets/images/shape/3.svg" alt="">
    </div>
</section>


<!--  -->

<!-- end speakers -->

<!-- brand sec start -->
<div id="sponsors" class="brand-sec">
    <div class="container">
        <h1 class="title mb-4 text-center sponsorHeading">
            Sponsors
        </h1>

        <!-- try new slider -->

        <div class="row">
            <div class="owl-carousel sponsorAllSlider owl-theme">
                <div class="item itemOneSlider">
                    <img class="sponsorTestSlider" src="assets/esol/images/sponsors/mastech-sponsor-try.png" alt="">
                </div>
                <div class="item itemOneSlider">
                    <img class="sponsorTestSlider" src="assets/esol/images/sponsors/mastech-sponsor-try-1.png" alt="">
                </div>
                <div class="item itemOneSlider">
                    <img class="sponsorTestSlider" src="assets/esol/images/sponsors/mastech-sponsor-try-2.png" alt="">
                </div>
                <div class="item itemOneSlider">
                    <img class="sponsorTestSlider" src="assets/esol/images/sponsors/mastech-sponsor-associate-try.png" alt="">
                </div>

            </div>
        </div>
        <style>
            .sponsorTestSlider {
                max-width: fit-content;
                height: 200px;
            }

            .itemOneSlider {
                display: flex;
                justify-content: center;
            }
        </style>

        <!-- end try new slider -->


        <!-- platinum sponsor -->
        <div class="row justify-content-center align-items-center mb-4">
            <h3 class="title mb-4 text-center sponsorNameHeading">
                Platinum Sponsors
            </h3>
            <!-- sponsor -->
            <div class="col-12 col-md-6 col-lg-4 d-flex borderSponsor mx-3">
                <a href="https://coscoht.com/" target="_blank">
                    <img src="assets/esol/images/sponsors/platinum/coso.png" alt="Brand Image 1">
                </a>

            </div>
            <!-- end sponsor -->
            <!-- sponsor -->
            <div class="col-12 col-md-6 col-lg-4 d-flex borderSponsor mx-3">
                <a href="https://www.dnv.com/" target="_blank">
                    <img src="assets/esol/images/sponsors/platinum/DNV.png" alt="Brand Image 1">
                </a>

            </div>
            <!-- end sponsor -->


        </div>
        <!-- end platinum sponsor -->
        <!-- Gold sponsor -->
        <div class="row justify-content-center align-items-center mb-4">
            <h3 class="title mb-4 text-center sponsorNameHeading">
                Gold Sponsors
            </h3>
            <!-- sponsor -->
            <div class="col-12 col-md-6 col-lg-4 d-flex borderSponsor mx-3">
                <a href="https://www.fluor.com" target="_blank">
                    <img src="assets/esol/images/sponsors/gold/fluor.jpg" alt="Brand Image 1">
                </a>

            </div>
            <!-- end sponsor -->
            <!-- sponsor -->
            <div class="col-12 col-md-6 col-lg-4 d-flex borderSponsor mx-3">
                <a href="https://www.dsv.com/en/" target="_blank">
                    <img src="assets/esol/images/sponsors/gold/dsv-new.jpg" alt="Brand Image 1">
                </a>

            </div>
            <!-- end sponsor -->
            <!-- sponsor -->
            <div class="col-12 col-md-6 col-lg-4 d-flex borderSponsor mx-3">
                <a href="https://www.technomak.com/" target="_blank">
                    <img src="assets/esol/images/sponsors/gold/technomak.jpg" alt="Brand Image 1">
                </a>

            </div>
            <!-- end sponsor -->

        </div>
        <!-- end Gold sponsor -->

        <!-- Silver Sponsor -->
        <div class="row justify-content-center align-items-center mb-4">
            <h3 class="title mb-4 text-center sponsorNameHeading">
                Silver Sponsors
            </h3>


            <!-- sponsor -->
            <div class="col-12 col-md-6 col-lg-4 d-flex borderSponsor mx-3">
                <a href="javascript:void(0)" style="cursor: initial;">
                    <img src="assets/esol/images/sponsors/silver/albward-damen.jpg" alt="Brand Image 1">
                </a>
            </div>
            <!-- end sponsor -->
            <!-- sponsor -->
            <div class="col-12 col-md-6 col-lg-4 d-flex borderSponsor mx-3">
                <a href="https://ww2.eagle.org/en.html" target="_blank">
                    <img src="assets/esol/images/sponsors/silver/abs.jpg" alt="Brand Image 1">
                </a>
            </div>
            <!-- end sponsor -->
        </div>
        <!-- end Silver Sponsor -->

        <!-- Badge and Lanyard Sponsor -->
        <div class="row justify-content-center align-items-center mb-4">
            <div class="col-12 col-md-6 mb-4">
                <h3 class="title mb-4 text-center sponsorNameHeading">
                    Registration Area Sponsor
                </h3>
                <div class="row justify-content-center">
                    <!-- sponsor -->
                    <div class="col-12 col-md-6 col-lg-4 d-flex borderSponsor">
                        <a href="https://ariesmar.com/in/en" target="_blank">
                            <img src="assets/esol/images/sponsors/reg-area/aries.png" alt="Brand Image 1">
                        </a>
                    </div>
                    <!-- end sponsor -->
                </div>
            </div>
            <div class="col-12 col-md-6 mb-4">
                <h3 class="title mb-4 text-center sponsorNameHeading">
                    Badge and Lanyard Sponsor
                </h3>
                <div class="row justify-content-center">
                    <!-- sponsor -->
                    <div class="col-12 col-md-6 col-lg-4 d-flex borderSponsor">
                        <a href="https://www.shipworkz.com/" target="_blank">
                            <img src="assets/esol/images/sponsors/badge/SW-Logo.png" alt="Brand Image 1">
                        </a>

                    </div>
                    <!-- end sponsor -->
                </div>
            </div>
        </div>
        <!-- end Gold sponsor -->

        <!-- associate sponsor -->
        <div class="row justify-content-center align-items-center mb-4">
            <h3 class="title text-center sponsorNameHeading">
                Associate Sponsors
            </h3>

            <!-- Associate slider -->
            <div id="" class="brand-sec cstmPaddingSponsorSlider">
                <div class="container">
                    <div class="brand-items-wrap d-md-flex text-center justify-content-around align-items-center">
                        <!-- slider -->
                        <div class="owl-carousel associateSponsorSlider owl-theme">

                            <div class="item sponsorSliderItem">
                                <div class="borderSponsor sliderSponsordiv">
                                    <a href="https://www.tritek-automation.com/" target="_blank">
                                        <img class="p-2" src="assets/esol/images/sponsors/associate/tritek.png" alt="Brand Image 1">
                                    </a>
                                </div>
                            </div>
                            <div class="item sponsorSliderItem">
                                <div class="borderSponsor sliderSponsordiv">
                                    <a href="https://www.emaratmaritime.com/" target="_blank">
                                        <img class="p-2" src="assets/esol/images/sponsors/associate/emaratmaritime.png" alt="Brand Image 1">
                                    </a>
                                </div>
                            </div>
                            <div class="item sponsorSliderItem">
                                <div class="borderSponsor sliderSponsordiv">
                                    <a href="https://greatwatersenergy.com/" target="_blank">
                                        <img class="p-2" src="assets/esol/images/sponsors/associate/GWM-Logo.png" alt="Brand Image 1">
                                    </a>
                                </div>
                            </div>
                            <div class="item sponsorSliderItem">
                                <div class="borderSponsor sliderSponsordiv">
                                    <a href="https://cymare.com/" target="_blank">
                                        <img class="p-2" src="assets/esol/images/sponsors/associate/cymare.png" alt="Brand Image 1">
                                    </a>
                                </div>
                            </div>
                            <div class="item sponsorSliderItem">
                                <div class="borderSponsor sliderSponsordiv">
                                    <a href="https://khalidfarajshipping.com/" target="_blank">
                                        <img class="p-2" src="assets/esol/images/sponsors/associate/khalid-faraj.jpg" alt="Brand Image 1">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Associate slider -->


        </div>
        <!-- end associate sponsor -->




    </div>
</div>
<!-- brand sec end -->

<!-- testimonials -->
<section class="review-sec" style="background-image: url(assets/images/banner/review.png);">
    <div class="container">
        <h2 class="review-title col-10 col-md-10 col-lg-8 col-xl-7 my-5">
            Testimonials
        </h2>
        <div class="review-cards-wrap">
            <div class="review-card-items-wrap">
                <!-- slider -->
                <div class="review-card-item">
                    <p class="card-desc">
                        This conference provided an excellent opportunity to catch the latest developments in big data
                        and its application in marine vessels and offshore platforms.
                    </p>
                    <div class="profile">

                        <div class="content">
                            <h5 class="name">Dr. Abdul Rahim </h5>
                            <span>Regional Manager South Asia<br> ClassNK</span>
                        </div>
                    </div>

                </div>
                <!-- end slider -->
                <!-- slider -->
                <div class="review-card-item">
                    <p class="card-desc">
                        MASTECH has consistently been one of the best marine and offshore industry events in the region.
                        In terms of a continuously high standard of presentations and attendees, MASTECH is really up
                        there with the best.
                    </p>
                    <div class="profile">

                        <div class="content">
                            <h5 class="name">Suresh Prashar</h5>
                            <span>
                                Senior Director Operations<br>
                                McDermott International Inc.
                            </span>
                        </div>
                    </div>

                </div>
                <!-- end slider -->
                <!-- slider -->
                <div class="review-card-item">
                    <p class="card-desc">
                        The panel discussions provided multiple perspectives, from the side of the classification
                        societies, owners and shipyards. It was a comprehensive analysis of the upcoming regulatory
                        changes on clean fuels.
                    </p>
                    <div class="profile">

                        <div class="content">
                            <h5 class="name">Sergej Krstanovic</h5>
                            <span>
                                Marine & Offshore Chief Executive UAE<br>
                                Bureau Veritas
                            </span>
                        </div>
                    </div>

                </div>
                <!-- end slider -->
                <!-- slider -->
                <div class="review-card-item">
                    <p class="card-desc">
                        MASTECH conference provided an excellent opportunity to meet the leading technocrats from UAE
                        maritime industry. The event also showcase the latest developments in big data and its
                        application in marine vessels and offshore platforms.
                    </p>
                    <div class="profile">

                        <div class="content">
                            <h5 class="name">Hamad Al Maghrabi</h5>
                            <span>
                                General Manager<br>
                                SAFEEN
                            </span>
                        </div>
                    </div>

                </div>
                <!-- end slider -->

            </div>
            <div class="carousel-nav">
                <button type="button" class="main-left-arrow"><i class="fa-solid fa-chevron-left"></i></button>
                <button type="button" class="main-right-arrow"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <div class="dots">
                <img src="assets/images/dots/dots11.png" alt="Shadow Image">
            </div>
        </div>
    </div>
</section>
<!-- end testimonials -->


<section id="pricing" class="pricing-sec">
    <div class="container">
        <div class="section-head col-xl-8 m-auto text-center px-5">

            <h2 class="title mb-4">
                Mastech Conference In Numbers
            </h2>

        </div>
        <div class="pricing-cart-wrap">
            <div class="row row-cols-1 row-cols-lg-3 g-4">
                <!-- card -->
                <div class="col col-md-6 col-lg-4">
                    <div class="card  h-100" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <div class="card-body">
                            <h3 class="price-pacage">6TH EDITION
                            </h3>
                            <p>
                                MASTECH is in it's sixth edition of lighting up the marine and offshore technical
                                landscape with indepth panels.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- card -->
                <div class="col col-md-6 col-lg-4">
                    <div class="card  h-100" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <div class="card-body">
                            <h3 class="price-pacage">5 PANELS
                            </h3>
                            <p>
                                Panels are led by industry experts and are indepth, interactive, and innovative.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- card -->
                <div class="col col-md-6 col-lg-4">
                    <div class="card  h-100" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <div class="card-body">
                            <h3 class="price-pacage">15 SPEAKERS
                            </h3>
                            <p>
                                share their expertise on the cutting edge technology and developments shaping up the
                                industry future.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- card -->
                <div class="col col-md-6 col-lg-4">
                    <div class="card  h-100" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <div class="card-body">
                            <h3 class="price-pacage">300+ DELEGATES
                            </h3>
                            <p>
                                One day conference will be attended by 300 plus delegates from all over the marine and
                                offshore industry.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- card -->
                <div class="col col-md-6 col-lg-4">
                    <div class="card  h-100" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <div class="card-body">
                            <h3 class="price-pacage">6 HOURS
                            </h3>
                            <p>
                                of networking opportunity which includes business executives, industry experts,
                                versatile talent pool.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- end card -->
                <!-- card -->
                <div class="col col-md-6 col-lg-4">
                    <div class="card  h-100" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="2000">
                        <div class="card-body">
                            <h3 class="price-pacage">AWARDS 2025
                            </h3>
                            <p>
                                MASTECH recognizes the leading organizations, personnel for their achievements and
                                contributions.
                            </p>

                        </div>
                    </div>
                </div>
                <!-- end card -->

            </div>
            <div class="dots img-moving-anim1">
                <img src="assets/images/dots/dots12.png" alt="Shadow Image">
            </div>
        </div>
    </div>
    <div class="shape">
        <img src="assets/images/shape/5.svg" alt="Shape">
    </div>
</section>



<div class="container">
    <hr>
</div>




<!-- gallery sec start -->
<section id="news" class="gallery-sec" data-aos="fade-up" data-aos-duration="1200">
    <div class="container-fluid">
        <div class="elfsight-app-06e25afb-5d32-4fa2-838c-86116291b796" data-elfsight-app-lazy></div>
        <div class="shape">
            <img src="assets/images/shape/6.svg" alt="Shape">
        </div>
    </div>
</section>
<!-- gallery sec end -->





<!-- map -->
<!-- gallery sec start -->
<section class="gallery-sec" data-aos="fade-up" data-aos-duration="1200">
    <div class="">
        <div class="col-xl-8 section-head text-center m-auto mb-5">
            <h2 class="title ">
                Event Location
            </h2>
        </div>
        <div class="col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.192311363398!2d55.2743371!3d25.196736299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f4281c76a9d87%3A0xeb5cdbd2a322d9c5!2sArmani%20Hotel!5e0!3m2!1sen!2sin!4v1734600521322!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<!-- end map -->


<?php include 'footer-slider-sponsor.php'; ?>


<!-- Modal 2 -->
<div class="modal  popup-box fade" id="mediaReg" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog popup-box-dialog modal-dialog-centered">
        <div class="modal-content popup-box-content">
            <div class="popup-card" style="width:100%">
                <button type="button" class="btn popup2-btn  ms-auto" data-bs-dismiss="modal"><i
                        class="fa-solid fa-xmark"></i></button>
                <img src="assets/images/popup.png" class="card-img-top d-none d-lg-block" alt="popup-bg">
                <div class="card-body popup-card-body d-none d-lg-block">
                    <div class="popup-title-area">
                        <h5 class="card-title popup-title">Media Registration</h5>
                    </div>
                </div>

                <form action="media-reg-action.php" class="popup-form" method="POST" name="media-reg" id="media-reg">
                    <?php
                    $random = rand(1000, 9999);
                    $_SESSION['captcha'] = $random;

                    if (isset($_GET['status']) && $_GET['status'] == 0) {

                        echo "<script>alert('Please try again later');</script>";
                    }

                    if (isset($_GET['status']) && $_GET['status'] == 1) {
                        echo "<script>alert('Your registration has been submitted successfully');</script>";
                    }
                    ?>
                    <div class="row gy-3 mb-3">
                        <div class="col-lg-6 mb-2 position-relative">
                            <label for="exampleFormControlInput5" class="form-label">Name Of Media</label>
                            <input type="text" class="form-control" id="exampleFormControlInput5" name="media" required>
                            <label id="exampleFormControlInput5-error" class="error error-field"
                                for="exampleFormControlInput5"></label>
                        </div>
                        <div class="col-lg-6 mb-2 position-relative">
                            <label for="exampleFormControlInput6" class="form-label">Location</label>
                            <input type="text" class="form-control" id="exampleFormControlInput6" name="location"
                                required>
                            <label id="exampleFormControlInput6-error" class="error error-field"
                                for="exampleFormControlInput6"></label>
                        </div>

                        <div class="col-lg-6 mb-2 position-relative">
                            <label for="exampleFormControlInput7" class="form-label">Website</label>
                            <input type="text" class="form-control" id="exampleFormControlInput7" name="website"
                                required>
                            <label id="exampleFormControlInput7-error" class="error error-field"
                                for="exampleFormControlInput7"></label>
                        </div>


                        <div class="col-lg-6 mb-2 position-relative">
                            <label for="exampleFormControlInput8" class="form-label">Contact Information</label>
                            <input type="number" class="form-control" id="exampleFormControlInput8" name="contact"
                                required>

                            <label id="exampleFormControlInput8-error" class="error error-field"
                                for="exampleFormControlInput8"></label>
                        </div>

                        <!-- <div class="col-lg-6">
                        <div class="g-recaptcha" data-sitekey="6Ldxe20UAAAAAD_17wcLirt0F7WmMb_Ixgoi3AYt">
                        </div>
                        </div> -->
                        <div class="col-12 col-lg-8 mb-2 position-relative">
                            <div class="cstmRecaptchaDiv flex-column">

                                <label for="exampleFormControlInput10" class="form-label w-100">
                                    <span><img src="assets/esol/images/icon/captcha.png" alt=""></span>
                                    Captcha &nbsp - &nbsp<?php echo $random; ?>
                                </label>
                                <input type="text" class="form-control cstmRecaptchaInp" name="captcha"
                                    id="exampleFormControlInput10" data-parsley-trigger="keyup"
                                    placeholder="Enter Captcha">
                                <input type="hidden" name="captcha_val" value="<?php echo $random ?>">
                            </div>
                        </div>
                    </div>
                    <!-- <button class="custom-btn2">Submit</button> -->
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center mediaModalBtnDiv">

                        <button class="custom-btn2" type="submit" id="submit" name="submit">Submit</button>

                        <button type="button" class="custom-btn2" value="Please Wait.."
                            style="display: none; margin-top:35px;" id="waitmsg" disabled>
                            Please Wait...
                        </button>
                        <button type="button" class="btn btn-danger d-block d-lg-none closeBtnMediaModal" data-bs-dismiss="modal">Close</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<script src="assets/js/jquery.validate.js"></script>

<script type="text/javascript">
    var validate = $("#media-reg").validate({
        rules: {
            media: "required",
            location: "required",
            website: "required",
            contact: "required",

        },
        messages: {
            media: "Please enter name of media.",
            location: "Please enter location.",
            website: "Please enter website.",
            contact: "Please enter contact number",

        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        },
        submitHandler: function(form) {
            const enteredCaptcha = document.getElementById("exampleFormControlInput10").value;
            const expectedCaptcha = "<?php echo $_SESSION['captcha']; ?>"; // Get expected captcha from PHP session

            // Validate the entered CAPTCHA against the expected value
            if (enteredCaptcha !== expectedCaptcha) {
                alert("Incorrect CAPTCHA. Please try again."); // Show alert if CAPTCHA is incorrect
                document.getElementById("exampleFormControlInput10").value = "";
                document.getElementById("exampleFormControlInput10").focus(); // Focus back on the CAPTCHA field
                return false; // Prevent form submission
            }

            $('#submit').hide();
            $('#waitmsg').show();
            form.submit(); // Submit the form if CAPTCHA is valid
        }
    });
</script>

<!-- social media plugin -->
<script src="https://static.elfsight.com/platform/platform.js" async></script>
<!-- end social media plugin -->


<!-- speaker details -->

<!-- speaker Modal -->
<div class="modal fade" id="LarsSeistrup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <div class="speakerNameDiv">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Lars Seistrup</h1>
                    <p>
                        Managing Director<br>
                        Albwardy Damen
                    </p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body speaker-modal-cstm">
                <p>
                    A marine engineer and degree in engineering by background, the ALBWARDY DAMEN Managing Director has had a varied career including spells working for shipping lines, and at power plants. The majority of his career he spent with tug and off shore company Svitzer as Chief Operating Officer. Clearly as happy in coveralls and a hard hat as he is in a tailored suit. He has been 15 years in the UAE and the Dane took over the helm at ALBWARDY DAMEN in January 2013.
                </p>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end speaker modal -->
<!-- speaker Modal -->
<div class="modal fade" id="spyridon-lalaounis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <div class="speakerNameDiv">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Spyridon Lalaounis</h1>
                    <p>
                        Director <br>New Builds, Bahri Ship Management
                    </p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body speaker-modal-cstm">
                <p>
                    Spyridon Lalaounis heads the New Build Department at Bahri. He is a Chartered Engineer in the UK and EU Engineering Councils and holds a Fellowship with the Royal Institute of Naval Architects (RINA). With 20+ years of professional experience, Spyridon is responsible for all new construction project within Bahri Group. Under his leadership, his team has successfully delivered 40% of Bahri’s total fleet – this includes 11 - VLCCs, 10 - 55K Chemical Carriers, 9 - 82K Bulk Carriers and 6 Multi-purpose Ro-Con Vessels. Currently, Spyridon is concentrating on new technologies and alternative fuels that can be implemented in future new build vessels or can be retrofitted in Bahri’s existing fleet.
                </p>
                <p>
                    He holds a Bachelor of Engineering (Honors) in Naval Architecture and Small Craft Engineering and two Masters of Science (MSc) degrees - Marine Engineering and Business Information Technology Systems. Prior joining Bahri in 2011, he has held several senior positions in leading ship organizations such as Teekay Shipping Corporation and Anglo-Eastern Group, successfully completing various projects in Europe, Middle East, and Asia. Spyridon is Member of several technical committees including ABS, DNV and LR Middle East Technical Committees.
                </p>
                <p>
                    He is a proud father of 2 boys aged 5 and 4 years.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end speaker modal -->
<!-- speaker Modal -->
<div class="modal fade" id="SourenGharnagharian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <div class="speakerNameDiv">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Souren Gharnagharian</h1>
                    <p>
                        Investment Manager<br> Australis Maritime
                    </p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body speaker-modal-cstm">
                <p>
                    Souren is an experienced investment executive within the shipping and offshore energy industries. He is an Investment Manager at Australis Maritime, a leading private credit fund manager in the maritime industry. Souren is also Vice President at Aurora Offshore, a ship owner and manager in the offshore segment in the Middle East. Additionally, Souren serves as a Director at Mag Container Lines, an integrated shipping and logistics provider in the UAE. Previously, Souren worked at the Reederei Nord Group and at Almi Tankers. He graduated from Bayes (formerly Cass) Business School with a distinction in MSc Shipping, Trade & Finance and holds a first-class honours in Bachelors of Sciences from the University of Durham.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end speaker modal -->
<!-- speaker Modal -->
<div class="modal fade" id="MohammadJaber" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <div class="speakerNameDiv">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Mohammad Jaber </h1>
                    <p>
                        Managing Director <br> DSV Air & Sea Abu Dhabi
                    </p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body speaker-modal-cstm">
                <p>
                    Mohammad Jaber is a seasoned logistics and transportation professional with 23
                    years of industry experience. He has served in various sectors, including capital
                    project logistics, oil and gas, chemicals, marine services, agriculture, pharmalogistics, and defense sector logistics, both in the UAE and globally
                </p>
                <p>
                    After a successful career at Agility Global Integrated Logistics (GIL), where he rose to
                    the position of Chief Operating Officer & VP projects MEA, Mohammad Jaber
                    continued his journey at DSV as Managing Director for DSV Air & Sea Division in Abu
                    Dhabi when the company acquired Agility's (GIL) business in August 2021. This
                    acquisition made DSV one of the world's top three freight forwarders.
                </p>
                <p>
                    Innovations today drives a lot of the positive change on the industry, where
                    Mohammad contributing on supply chain and logistics sector through leading the
                    logistics working group in Abu Dhabi chamber, further driving within DSV Abu Dhabi
                    many initiatives in sustainability like EV trucks, Drones, and many carbon emissions
                    reduction initiatives
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end speaker modal -->
<!-- speaker Modal -->
<div class="modal fade" id="Koichi-KAIZU" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <div class="speakerNameDiv">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Koichi Kaizu</h1>
                    <p>
                        Logistics / Module Transportation<br>JGC Corporation
                    </p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body speaker-modal-cstm">
                <p>
                    primarily responsible for overseeing the operations, progress, resources, and budget related to the logistics execution of overseas energy plant construction EPC projects. Additionally, as a subject matter expert within the company, I support the execution of large-scale and complex logistics, including modularized projects at JGC Corporation.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end speaker modal -->
<!-- speaker Modal -->
<div class="modal fade" id="alexBrykalov" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <div class="speakerNameDiv">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Captain Alex Brykalov </h1>
                    <p>
                        Vice President, Commercial in Offshore and Onshore Logistics<br>
                        ADNOC Logistics & Services
                    </p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body speaker-modal-cstm">
                <p>
                    As the Vice President, Commercial in Offshore and Onshore Logistics at ADNOC Logistics & Services, Captain Alex Brykalov brings over 20 years of global leadership experience. With a proven track record of managing end-to-end commercial contracts and project management, Captain Brykalov excels in setting strategic, commercial, and operational goals that significantly enhance a company's profitability.
                </p>
                <p>
                    Captain Brykalov is renowned for being a strong strategic planner, team-builder, and problem solver. Their collaborative communication style and leadership skills have been instrumental in building and maintaining effective working relationships with personnel, shareholders, government agencies, and other key stakeholders.
                </p>
                <p>
                    With comprehensive knowledge of the GCC Offshore market, coupled with an operational and commercial background, Captain Brykalov has a deep understanding of ADNOC Group standards and requirements. Their extensive business connections with EPC companies and service providers further underscore their expertise.
                </p>
                <p>
                    In addition to their professional accomplishments, Captain Brykalov is a DBA candidate and holds an MBA degree, showcasing their commitment to continuous learning and academic excellence.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- end speaker modal -->


<!-- end speaker details -->