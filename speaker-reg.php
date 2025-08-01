<?php include 'header.php'; ?>


<section class="bannerSecInnerPage position-relative">
    <div class="overlay"></div>
    <div class="container position-relative">
        <div class="row justify-content-center align-items-center text-center text-content-div">
            <h1>
                Speaker Registration
            </h1>
            <h3 class="closesTextRefFrom">
                <b> Registration Closed </b>
            </h3>
            <p>
                <a href="./"> Home</a> | Speaker Registration
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



<!-- contact sec start -->
<!-- <section class="contact-sec">
    <div class="container">
        <div class="col-12 section-head text-center m-auto mb-5">

            <h2 class="title mx-2">
                Speaker Registration
            </h2>
            <h3>
                <b> Registration Closed </b>
            </h3>
        </div>
        <div class="contact-wrap bg-none p-0">
            <div class="dots">
                <img src="assets/images/dots/dots13.png" alt="Shadow Image" class="contact-dots-1 img-moving-anim2">
            </div>
            <div class="contact-wrap row py-4 px-3 contact align-items-start m-0">
                <div class="col-lg-4">
                    <div class="contact-thumb-wrap" style="background-image: url(assets/images/banner/contact-bg.png);">
                        <div class="contact-content">
                            <h5 class="title text-white"><a href="./">Home</a> | Speaker Registration</h5>
                            <p class="desc mb-2">
                                Date : <?php echo $evt_date ?>
                            </p>
                            <p class="desc mb-2">
                                Time : <?php echo $evt_time ?>
                            </p>
                            <div class="info">
                                <a class="icon d-block mb-3" href="mailto: <?php echo $mail ?>">
                                    <img src="assets/images/icon/mail1.svg" alt="Mail" style="color: #fff;">
                                    <?php echo $mail ?>
                                </a>
                                <a class="location d-block mb-3">
                                    <img src="assets/images/icon/map-pin2.svg" alt="Map"><?php echo $location ?>
                                </a>
                                <a class="phone d-block mb-3" href="tel: <?php echo $Phone1 ?>">
                                    <img src="assets/images/icon/phone3.svg" alt="Phone">
                                    <?php echo $Phone1 ?>
                                </a>
                                <a class="phone d-block mb-3" href="tel: <?php echo $Phone2 ?>">
                                    <img src="assets/images/icon/phone3.svg" alt="Phone">
                                    <?php echo $Phone2 ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8 mt-4 mt-lg-0">
                    <form class="contact-form" name="speaker-reg" id="speaker-reg" method="post"
                        action="speaker-reg-action.php">
                        <?php
                        $random = rand(1000, 9999);
                        $_SESSION['captcha'] = $random;
                        if (isset($_GET['status']) && $_GET['status'] == 0) {
                            echo "<div class='error-message'>Please try again later.</div>";
                        }

                        if (isset($_GET['status']) && $_GET['status'] == 1) {
                            echo "<div class='success-message'>Your registration has been submitted successfully.</div>";
                        }
                        ?>
                        <div class="row gy-3">
                            <div class="col-12 mb-2 position-relative">
                                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="fname"
                                    required>
                                <label id="exampleFormControlInput1-error" class="error error-field"
                                    for="exampleFormControlInput1"></label>
                            </div>
                            <div class="col-lg-6 mb-2 position-relative">
                                <label for="exampleFormControlInput2" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="exampleFormControlInput2" name="email"
                                    required>
                                <label id="exampleFormControlInput2-error" class="error error-field"
                                    for="exampleFormControlInput2"></label>
                            </div>
                            <div class="col-lg-6 mb-2 position-relative">
                                <label for="exampleFormControlInput3" class="form-label">Contact Number</label>
                                <input type="number" class="form-control" id="exampleFormControlInput3" name="contact"
                                    required>
                                <label id="exampleFormControlInput3-error" class="error error-field"
                                    for="exampleFormControlInput3"></label>
                            </div>
                            <div class="col-lg-6 mb-2 position-relative">
                                <label for="exampleFormControlInput4" class="form-label">Company</label>
                                <input type="text" class="form-control" id="exampleFormControlInput4" name="company"
                                    required>
                                <label id="exampleFormControlInput4-error" class="error error-field"
                                    for="exampleFormControlInput4"></label>
                            </div>
                            <div class="col-lg-6 mb-2 position-relative">
                                <label for="exampleFormControlInput5" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="exampleFormControlInput5" name="designation"
                                    required>
                                <label id="exampleFormControlInput5-error" class="error error-field"
                                    for="exampleFormControlInput5"></label>
                            </div>

                        </div>
                        <div class="mb-3">

                        </div>
                        <div class="text-area col-12 mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Additional Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="message"></textarea>
                        </div>

                        <div class="col-12 col-lg-8 mb-2 position-relative">
                            <div class="cstmRecaptchaDiv">

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

                    </form>
                </div>
            </div>

            <div class="dots">
                <img src="assets/images/dots/dots14.png" alt="Shadow Image" class="contact-dots-2 img-moving-anim3">
            </div>
        </div>
    </div>
</section> -->
<!-- contact sec end -->

<?php include 'footer.php'; ?>
<script src="https://www.google.com/recaptcha/api.js"></script>

<script src="assets/js/jquery.validate.js"></script>

<script type="text/javascript">
    var validate = $("#speaker-reg").validate({
        rules: {
            fname: "required",
            company: "required",

            designation: "required",

            email: "required",
            contact: {
                required: true,
                digits: true,
            },

        },
        messages: {
            fname: "Please enter full name.",
            company: "Please enter company.",

            designation: "Please enter designation.",


            email: "Please enter E-mail.",
            contact: "Please enter contact number.",

        },
        errorPlacement: function(error, element) {
            if (element.attr("type") == "checkbox") {
                error.insertAfter("#caterr");
            } else {
                error.insertAfter(element);
            }
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
<style>
    .success-message {
        text-align: center;
        color: green;
        margin-bottom: 20px;
        font-size: 20px;
        font-weight: bold;
    }

    .error-message {
        text-align: center;
        color: red;
        margin-bottom: 20px;
        font-size: 20px;
        font-weight: bold;
    }
</style>