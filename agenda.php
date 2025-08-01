<?php include 'header.php'; ?>

<section class="bannerSecInnerPage position-relative">
    <div class="overlay"></div>
    <div class="container position-relative">
        <div class="row justify-content-center align-items-center text-center text-content-div">
            <h1>
                Agenda
            </h1>
            <p>
                <a href="./"> Home</a> | Agenda
            </p>
            <p class="desc mb-2">
                Date : <?php echo $evt_date ?>
            </p>
            <p class="desc mb-2">
                Time : <?php echo $evt_time ?>
            </p>
            <div class="info infoInnerpage">
                <a class="icon d-block mb-3" href="mailto:  <?php echo $mail ?>">
                    <img src="assets/images/icon/mail1.svg" alt="Mail" style="color: #fff;"> <?php echo $mail ?>
                </a>
                <a class="location d-block mb-3">
                    <img src="assets/images/icon/map-pin2.svg" alt="Map"> <?php echo $location ?>
                </a>

            </div>
        </div>
    </div>
</section>


<!-- schedule sec start -->
<section class="schedule-sec">
    <div class="container">

        <div class="schedule-content-wrap">

            <div class="tab-content schedule-tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-day-1" role="tabpanel" aria-labelledby="pills-day-1-tab" tabindex="0">
                    <div class="row schedule-item align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">

                        <div class="col-12">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-md-3">
                                    <div class="card-description">
                                        <span class="time d-block">08.30 – 09.00</span>
                                    </div>
                                </div>
                                <div class="card-title-area mt-0 col-12 col-md-9">
                                    <h4 class="title mb-0">Registration & Reception</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>

                    <div class="row schedule-item align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">

                        <div class="col-12 mb-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-md-3">
                                    <div class="card-description">
                                        <span class="time d-block">09.00 – 09.45</span>
                                    </div>
                                </div>
                                <div class="card-title-area mt-0 col-12 col-md-9">
                                    <h4 class="title mb-0">
                                        Opening Ceremony and Keynote Address by Chief Guest:
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="row justify-content-start">

                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/SaifAlMazrouei.png" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Saif Al Mazrouei</span>
                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#SaifAlMazrouei">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->

                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/CaptainMohamedAlAli.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Captain Mohamed Al Ali</span>
                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#CaptainMohamedAlAli">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/cai-liancai.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Capt. Cai Liancai</span>
                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#cai-liancai">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->




                                <!-- <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center justify-content-left">
                                        <div class="card-thumb item-thumb">
                                            <img src="assets/images/profile1.png" alt="Profile 1">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Stella Smith</span>
                                            <span class="date d-block">October2,2023</span>

                                        </div>
                                    </div>
                                </div> -->

                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row schedule-item align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">

                        <div class="col-12 mb-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-md-3">
                                    <div class="card-description">
                                        <span class="time d-block">9.45 – 11.00</span>
                                    </div>
                                </div>
                                <div class="card-title-area mt-0 col-12 col-md-9">
                                    <p class="mb-2">
                                        Panel Discussion
                                    </p>
                                    <h4 class="title mb-0">
                                        Engineering, Procurement, Installation & Commissioning (EPIC): Dynamic Positioning (DP) Floatover Installations in the Middle East, Case Studies and Market Outlook.
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="row justify-content-center mb-3">
                                <h4 class="text-center mb-3">
                                    Moderator
                                </h4>
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3 mt-4">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/JollyKurien.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Jolly Kurien</span>
                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#JollyKurien">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                            </div>
                            <div class="row justify-content-start">
                                <h4 class="text-center mb-4">
                                    Panelists
                                </h4>
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/yuanMeng.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Dr. Yuan Meng</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#yuanMeng">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/sunHao.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Sun Hao</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#sunHao">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <!-- <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/linWeinan.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Lin Weinan</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#linWeinan">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div> -->
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/zuyan.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Zu Yan</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#zuyan">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/alanWang.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Alan Wang</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#alanWang">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/LiXin.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Li Xin</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#LiXin">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->


                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row schedule-item align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">

                        <div class="col-12">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-md-3">
                                    <div class="card-description">
                                        <span class="time d-block">11.00 – 11.15</span>
                                    </div>
                                </div>
                                <div class="card-title-area mt-0 col-12 col-md-9">
                                    <h4 class="title mb-0">Tea Break</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row schedule-item align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">

                        <div class="col-12 mb-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-md-3">
                                    <div class="card-description">
                                        <span class="time d-block">11.15 – 12.30</span>
                                    </div>
                                </div>
                                <div class="card-title-area mt-0 col-12 col-md-9">
                                    <p class="mb-2">
                                        Panel Discussion
                                    </p>
                                    <h4 class="title mb-0">
                                        Ship Design/ Ship Building: Global Shipbuilding Capacity Constraints – Middle East Yard Focus
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="row justify-content-center mb-3">
                                <h4 class="text-center mb-3">
                                    Moderator
                                </h4>
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/AshikSubahani.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Ashik Subahani</span>
                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#AshikSubahani">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                            </div>
                            <div class="row justify-content-start">
                                <h4 class="text-center mb-3">
                                    Panelists
                                </h4>
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/spyridon-lalaounis.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Spyridon Lalaounis</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#spyridon-lalaounis">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/unniKrish.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">
                                                Unnikrishnan Nair
                                            </span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#UnnikrishnanNair">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->

                                <!-- agenda speaker -->
                                <!-- <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/avathar.png" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Rado Antolovic</span>
                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#RadoAntolovic">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div> -->
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <!-- <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/avathar.png" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Mr. Mohammad Abdulrazaq Alawadhi</span>
                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#MohammadAbdulrazaqAlawadhi">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div> -->
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <!-- <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/Dheeraj-Sharma-reset.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Capt. Dheeraj Sharma</span>
                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#Dheeraj-Sharma-reset">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div> -->
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/LarsSeistrup.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">
                                                Lars Seistrup
                                            </span>
                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#LarsSeistrup">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/TerjeNeraas.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">
                                                Terje Neraas
                                            </span>
                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#TerjeNeraas">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->

                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row schedule-item align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">

                        <div class="col-12">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-md-3">
                                    <div class="card-description">
                                        <span class="time d-block">12.30 – 13.30</span>
                                    </div>
                                </div>
                                <div class="card-title-area mt-0 col-12 col-md-9">
                                    <h4 class="title mb-0">Lunch Break</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row schedule-item align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">

                        <div class="col-12 mb-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-md-3">
                                    <div class="card-description">
                                        <span class="time d-block">13.30 – 14.45</span>
                                    </div>
                                </div>
                                <div class="card-title-area mt-0 col-12 col-md-9">
                                    <p class="mb-2">
                                        Panel Discussion
                                    </p>
                                    <h4 class="title mb-0">
                                        Maritime Logistics: Marine assets supply and demand imbalance, market dynamics, limitations
                                        and opportunities
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="row justify-content-center mb-3">
                                <h4 class="text-center mb-3">
                                    Moderator
                                </h4>
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/MohammadJaber.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Mohammad Jaber</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#MohammadJaber">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                            </div>
                            <div class="row justify-content-start mb-3">
                                <h4 class="text-center mb-3">
                                    Panelists
                                </h4>
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/ADNOC-L&S-AlexBrykalov-2.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Capt. Alex Brykalov</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#alexBrykalov">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/SindhuDasan.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Sindhu Dasan</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#SindhuDasan">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/SourenGharnagharian.png" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Souren Gharnagharian</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#SourenGharnagharian">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/AbdallahAamer.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">
                                                Abdallah Aamer
                                            </span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#AbdallahAamer">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/MatteoPollara.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Matteo Pollara</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#MatteoPollara">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->


                            </div>
                        </div>
                    </div>
                    <hr>


                    <div class="row schedule-item align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">

                        <div class="col-12 mb-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-md-3">
                                    <div class="card-description">
                                        <span class="time d-block">14.45 – 16.00</span>
                                    </div>
                                </div>
                                <div class="card-title-area mt-0 col-12 col-md-9">
                                    <p class="mb-2">
                                        Panel Discussion
                                    </p>
                                    <h4 class="title mb-0">
                                        Modularization: Insights, Experiences, and Strategies for Harnessing the Power of Modularization to Revolutionize Capital Projects and How Early Engagement is Key for Successful Project Execution.
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="row justify-content-center mb-3">
                                <h4 class="text-center mb-3">
                                    Moderator
                                </h4>

                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/VineetBakshi.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Vineet Bakshi</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#VineetBakshi">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->


                            </div>
                            <div class="row justify-content-start">
                                <h4 class="text-center mb-3">
                                    Panelists
                                </h4>
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/LyndaMcQueen.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Lynda Mcqueen</span>
                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#LyndaMcQueen">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/Koichi-KAIZU.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Koichi Kaizu</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#Koichi-KAIZU">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/PeterRondhuis.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Peter Rondhuis</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#PeterRondhuis">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->

                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/TimKillen.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Tim Killen</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#TimKillen">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/JeffersonDean.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Jeff Dean</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#JeffersonDean">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->



                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row schedule-item align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">

                        <div class="col-12">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-md-3">
                                    <div class="card-description">
                                        <span class="time d-block">16.00 – 16.15</span>
                                    </div>
                                </div>
                                <div class="card-title-area mt-0 col-12 col-md-9">
                                    <h4 class="title mb-0">Tea Break</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row schedule-item align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">

                        <div class="col-12 mb-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-md-3">
                                    <div class="card-description">
                                        <span class="time d-block">16.15 – 17.30</span>
                                    </div>
                                </div>
                                <div class="card-title-area mt-0 col-12 col-md-9">
                                    <p class="mb-2">
                                        Panel Discussion
                                    </p>
                                    <h4 class="title mb-0">
                                        Sustainability: Marine and offshore regulatory updates, sustainability initiatives, and advanced technologies.
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="row justify-content-center mb-3">
                                <h4 class="text-center mb-3">
                                    Moderator
                                </h4>
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/Rahim.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Dr. Abdul Rahim</span>
                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#Rahim">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                            </div>
                            <div class="row justify-content-start">
                                <h4 class="text-center mb-3">
                                    Panelists
                                </h4>
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/AliShehab.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Ali Shehab</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#AliShehab">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/JanViggoJohansen.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Jan-Viggo Johansen</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#JanViggoJohansen">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <!-- <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/CaptAnwar.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Capt. Anwar Farah</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#CaptAnwar">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div> -->
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/IbrahimBehairy.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Dr. Ibrahim Behairy</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#IbrahimBehairy">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/jasmin.jpg" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Jasmin Fichte</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#jasmin">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div>
                                <!-- end agenda speaker -->
                                <!-- agenda speaker -->
                                <!-- <div class="col-12 col-md-6 col-lg-4 mb-3">
                                    <div class="d-flex align-items-center gap-3">
                                        <div class="card-thumb item-thumb">
                                            <img class="agendaSpeakerImage" src="assets/esol/images/speakers-25/avathar.png" alt="MASTECH Speaker">
                                        </div>
                                        <div class="card-description">
                                            <span class="name d-block">Capt: Basaer Ahmed</span>

                                            <p>
                                                <a type="button" class="" data-bs-toggle="modal" data-bs-target="#BasaerAhmed">
                                                    View More
                                                </a>
                                            </p>

                                        </div>
                                    </div>
                                </div> -->
                                <!-- end agenda speaker -->

                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row schedule-item align-items-center" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="1000">

                        <div class="col-12">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-12 col-md-3">
                                    <div class="card-description">
                                        <span class="time d-block">18.00 – 20.00</span>
                                    </div>
                                </div>
                                <div class="card-title-area mt-0 col-12 col-md-9">
                                    <h4 class="title mb-0">Cocktail Reception (Invitees Only)</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div>

                <p class="text-center fw-bold">
                    *The conference schedule is a live document and subjected to changes.*
                </p>
            </div>

            <div class="dots img-moving-anim1">
                <img src="assets/images/dots/dots2.png" alt="Shadow Image">
            </div>
        </div>
    </div>
    <div class="shape">
        <img src="assets/images/shape/2.svg" alt="Shape">
    </div>
</section>
<!-- schedule sec end -->


<?php include 'footer.php'; ?>