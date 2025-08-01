<?php include 'header.php'; ?>

<section class="bannerSecInnerPage position-relative">
    <div class="overlay"></div>
    <div class="container position-relative">
        <div class="row justify-content-center align-items-center text-center text-content-div">
            <h1>
                Nomination Registration
            </h1>
            <h3 class="closesTextRefFrom">
                <b> Registration Closed </b>
            </h3>
            <p>
                <a href="./"> Home</a> | Nomination Registration
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

        <div class="contact-wrap bg-none p-0">
            <div class="dots">
                <img src="assets/images/dots/dots13.png" alt="Shadow Image" class="contact-dots-1 img-moving-anim2">
            </div>
            <div class="contact-wrap row py-4 px-3 contact align-items-start m-0">
                <?php

                ?>
                <div class="col-12 mt-4 mt-lg-0">
                    <form class="contact-form" name="nomination-reg" id="nomination-reg" method="POST"
                        action="nomination-reg-action.php">
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
                            <div class="col-lg-6 mb-4 position-relative">
                                <label for="exampleFormControlInput1" class="form-label">Title</label>
                                <input type="text" class="form-control" id="exampleFormControlInput1" name="affiliation"
                                    required>
                                <label id="exampleFormControlInput1-error" class="error error-field"
                                    for="exampleFormControlInput1"></label>
                            </div>
                            <div class="col-lg-6 mb-4 position-relative">
                                <label for="exampleFormControlInput2" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput2"
                                    name="nominee_name" required>
                                <label id="exampleFormControlInput2-error" class="error error-field"
                                    for="exampleFormControlInput2"></label>
                            </div>
                            <div class="col-lg-6 mb-4 position-relative">
                                <label for="exampleFormControlInput3" class="form-label">Company</label>
                                <input type="text" class="form-control" id="exampleFormControlInput3"
                                    name="nominatedby_org" required>
                                <label id="exampleFormControlInput3-error" class="error error-field"
                                    for="exampleFormControlInput3"></label>
                            </div>
                            <div class="col-lg-6 mb-4 position-relative">
                                <label for="exampleFormControlInput4" class="form-label">Designation</label>
                                <input type="text" class="form-control" id="exampleFormControlInput4"
                                    name="nominee_designation" required>
                                <label id="exampleFormControlInput4-error" class="error error-field"
                                    for="exampleFormControlInput4"></label>
                            </div>
                            <div class="col-lg-6 mb-4 position-relative">
                                <label for="exampleFormControlInput5" class="form-label">Position</label>
                                <input type="text" class="form-control" id="exampleFormControlInput5"
                                    name="nominatedby_name" required>
                                <label id="exampleFormControlInput5-error" class="error error-field"
                                    for="exampleFormControlInput5"></label>
                            </div>
                            <div class="col-lg-6 mb-4 position-relative">
                                <label for="exampleFormControlInput6" class="form-label">Contact Number</label>
                                <input type="number" class="form-control" id="exampleFormControlInput6"
                                    name="nominee_contact" required>
                                <label id="exampleFormControlInput6-error" class="error error-field"
                                    for="exampleFormControlInput6"></label>
                            </div>
                            <div class="col-lg-6 mb-4 position-relative">
                                <label for="exampleFormControlInput7" class="form-label">Email ID</label>
                                <input type="email" class="form-control" id="exampleFormControlInput7"
                                    name="nominee_email" required>
                                <label id="exampleFormControlInput7-error" class="error error-field"
                                    for="exampleFormControlInput7"></label>
                            </div>
                            <div class="col-12">
                                <h2 class="title mx-2">
                                    Nomination Details
                                </h2>
                            </div>
                            <div class="col-lg-6 mb-3 position-relative">
                                <label for="exampleFormControlInput8" class="form-label">Name of Person /
                                    Company</label>
                                <input type="text" class="form-control" id="exampleFormControlInput8" name="nominatedby"
                                    required>
                                <label id="exampleFormControlInput8-error" class="error error-field"
                                    for="exampleFormControlInput8"></label>
                            </div>
                            <div class="col-lg-6 mb-3 position-relative">
                                <label for="exampleFormControlInput9" class="form-label">Year of Achievement</label>
                                <input type="number" class="form-control" id="exampleFormControlInput9"
                                    name="nominatedby_contact" required>

                                <label id="exampleFormControlInput9-error" class="error error-field"
                                    for="exampleFormControlInput9"></label>
                            </div>
                            <div class="col-lg-6 mb-3 position-relative">
                                <label for="selectSponsorCat" class="form-label">Category</label>
                                <select id="selectSponsorCat" class="form-select form-control formSelect"
                                    aria-label="Default select example" name="category" required>
                                    <option selected disabled>Select</option>
                                    <option value="Enabling new technology">Enabling new technology</option>
                                    <option value="Innovative / Challenging Projects">Innovative / Challenging Projects
                                    </option>
                                    <option value="Multi faceted Logistics for Complex EPC Projects">Multi faceted
                                        Logistics for Complex EPC Projects</option>
                                    <option value="Innovative / First of a Kind Designs">Innovative / First of a Kind
                                        Designs</option>
                                    <option value="Advancements in Green Technology">Advancements in Green Technology
                                    </option>
                                </select>
                                <label id="selectSponsorCat-error" class="error error-field"
                                    for="selectSponsorCat"></label>

                            </div>
                        </div>
                        <div class="mb-3">

                        </div>
                        <div class="text-area col-12 mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Description of Project /
                                Innovation</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="details"
                                id="details"></textarea>
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

<script src="assets/js/jquery.validate.js"></script>

<!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
<script type="text/javascript">
    var validate = $("#nomination-reg").validate({
        rules: {
            affiliation: "required",
            nominee_name: "required",
            nominatedby_org: "required",
            category: "required",
            nominee_designation: "required",
            nominatedby_name: "required",
            nominatedby_contact: {
                required: true,
                number: true
            },
            nominee_email: {
                required: true,
                email: true
            },
            nominatedby: "required",
            nominee_contact: "required"
        },
        messages: {
            affiliation: "Please enter the title",
            nominee_name: "Please enter the full name",
            nominatedby_org: "Please enter the company name",
            category: "You must select a category",
            nominee_designation: "Please enter the designation",
            nominatedby_name: "Please enter the position",
            nominee_contact: "Please enter a valid contact number",
            nominatedby: "Please enter the name of the individual/organization",
            nominee_email: {
                required: "Please enter a valid email address"
            },
            nominatedby_contact: "Please enter the year of achievement"
        },
        errorPlacement: function(error, element) {
            if (element.attr("type") === "checkbox") {
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
            form.submit();
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