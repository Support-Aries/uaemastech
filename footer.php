<!-- footer area start -->
<!-- <footer class="footer-area" style="background-image: url(assets/images/banner/Footer.png);"> -->
<footer class="footer-area" style="background: #f8f8f8;">
    <div class="container">
        <div class="footer-top">
            <div class="row align-items-start justify-content-between gap-3 gap-lg-0">
                <div class=" col-lg-3">
                    <div class="">
                        <div class="">
                            <div class="footer-info d-flex justify-content-center flex-column" style="margin-left: 0;">
                                <a href="./" class="footer-logo">
                                    <img src="assets/esol/images/logo/logo.png" style="width: 130px;" alt="Footer Logo">
                                </a>
                                <p style="font-weight: 500;text-align: left;">
                                    An International Marine Technical Conference
                                </p>

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 d-flex justify-content-center flex-column gap-2">
                    <div>
                        <h5>Quick Links</h5>
                    </div>
                    <div class="d-flex gap-3 flex-row justify-content-start">
                        <div>
                            <p class="footerLink mb-2">
                                <a href="aboutus"> About Us</a>
                            </p>
                            <p class="footerLink mb-2">
                                <a href="index#pastSponsors"> Past Sponsors</a>
                            </p>
                        </div>
                        <div>
                            <p class="footerLink mb-2">
                                <a href="index#speakers"> Past Speakers</a>
                            </p>
                            <p class="footerLink mb-2">
                                <a href="index#news">News</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-4 d-flex justify-content-start justify-content-lg-centre">
                    <div class="contactUsFooter">
                        <div>
                            <h5>Contact Us</h5>
                        </div>
                        <div class="d-flex flex-column gap-3 justify-content-center">
                            <div class="d-flex flex-column flex-lg-row gap-3 gap-lg-5">
                                <div class="number d-flex gap-2">
                                    <div class="icon"><img style="width: 20px;" src="assets/esol/icons/phone-call-footer.png" alt="Phone"></div>
                                    <a href="tel:+971 52 928 5938" style="color: black;" class="number-link">+971 52 928 5938</a>
                                </div>
                                <div class="number d-flex gap-2">
                                    <div class="icon"><img style="width: 20px;" src="assets/esol/icons/phone-call-footer.png" alt="Phone"></div>
                                    <a href="tel:+971 50 189 4338" style="color: black;" class="number-link">+971 50 189 4338</a>
                                </div>
                            </div>
                            <div class="number d-flex gap-2">
                                <div class="icon"><img style="width: 20px;" src="assets/esol/icons/mail-footer.png" alt="Phone"></div>
                                <a href="mailto:mastech2025@uaemastech.com" style="color: black;" class="number-link">mastech2025@uaemastech.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="footer-copyright-area text-center pb-3">
            <span>©
                <script>
                    document.write(new Date().getFullYear())
                </script>
                Mastech | Design By <a href="https://www.ariesesolutions.com/" target="_blank"> Aries E Solutions
                </a>
            </span>
        </div>
    </div>
</footer>
<!-- footer area end -->








</div>
<!-- jquery -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.countdown.min.js"></script>

<!-- animation -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<!-- magnific popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>

<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- slick -->
<script src="assets/js/slick.min.js"></script>

<!-- parallax js -->
<script src="assets/js/parallax.min.js"></script>

<!-- javaScript -->
<script src="assets/js/main.js"></script>

<!-- color switch -->
<!-- <script src="color-switch/switch.js"></script> -->

<!-- owl carosel -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script>
    $(document).ready(function() {
        var owl = $('.pastSpeakers');
        owl.owlCarousel({
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1, // 1 item for mobile screens
                    margin: 5 // Smaller margin for smaller screens
                },
                600: {
                    items: 2, // 2 items for tablet screens
                    margin: 8
                },
                1000: {
                    items: 5, // 3 items for desktops
                    margin: 10
                },
                1200: {
                    items: 5, // 4 items for larger desktops
                    margin: 15 // Optional larger margin for bigger screens
                }
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        var owl = $('.newsSlider');
        owl.owlCarousel({
            //  items: 3,
            loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 1000,
            responsive: {
                0: {
                    items: 1, // 1 item for mobile screens
                    margin: 5 // Smaller margin for smaller screens
                },
                600: {
                    items: 2, // 2 items for tablet screens
                    margin: 8
                },
                1000: {
                    items: 3, // 3 items for desktops
                    margin: 10
                },
                1200: {
                    items: 3, // 4 items for larger desktops
                    margin: 15 // Optional larger margin for bigger screens
                }
            }
        });
    });
</script>

<!-- sponsors slider -->
<script>
    var owl = $('.associateSponsorSlider');
    owl.owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
        responsiveClass: true,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            }
        }
    });
    var owl = $('.newSponsorSlider');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsiveClass: true,
        nav: false,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            }
        }
    });
</script>
<!-- end sponsors slider -->

<script src="https://www.google.com/recaptcha/api.js"></script>





<!-- end owl carosel -->

<script>
    // Ensure this script runs after the DOM and Bootstrap are fully loaded
    document.addEventListener("DOMContentLoaded", () => {
        // Select all nav-link elements inside the offcanvas menu
        const links = document.querySelectorAll(".nav-link");
        const offcanvasElement = document.getElementById("offcanvasExample");

        // Initialize the Offcanvas object
        const offcanvas = new bootstrap.Offcanvas(offcanvasElement);

        // Add a click event listener to each link
        links.forEach((link) => {
            link.addEventListener("click", () => {
                // Use the Offcanvas API to hide the menu
                offcanvas.hide();
            });
        });
    });

    // end Hamberg menu closing
</script>


<script src="cstm-js.js"></script>

<script>
    $(document).ready(function() {
        // Toggle dropdown menu on click
        $('.dropdown-toggle').on('click', function(e) {
            e.preventDefault(); // Prevent default anchor behavior
            $(this).siblings('.dropdown-menu').slideToggle(); // Toggle dropdown visibility
            $(this).parent().toggleClass('open'); // Add open class for styling
        });

        // Close dropdown menu when clicking outside
        $(document).on('click', function(e) {
            if (!$(e.target).closest('.nav-item').length) {
                $('.dropdown-menu').slideUp();
                $('.nav-item').removeClass('open');
            }
        });
    });
</script>

<?php include 'speaker-details.php'; ?>


</body>

</html>