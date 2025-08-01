<?php include 'header.php'; ?>
<!-- contact sec start -->
<section class="contact-sec">
    <div class="container">
        <div class="col-xl-5 section-head text-center m-auto mb-5">
            <!-- <span class="label">Contact The Eventor Sales Team</span> -->
            <h2 class="title mx-2">
                Sponsorship Registration
            </h2>
        </div>
        <div class="contact-wrap bg-none p-0">
            <div class="dots">
                <img src="assets/images/dots/dots13.png" alt="Shadow Image" class="contact-dots-1 img-moving-anim2">
            </div>
            <div class="contact-wrap row py-4 px-3 contact align-items-start m-0">
                <div class="col-lg-4">
                    <div class="contact-thumb-wrap" style="background-image: url(assets/images/banner/contact-bg.png);">
                        <div class="contact-content">
                            <h5 class="title text-white"><a href="./">Home</a> | Sponsorship Registration </h5>
                            <p class="desc mb-2">
                                Date : <?php echo $evt_date ?>
                            </p>
                            <p class="desc mb-2">
                                Time : <?php echo $evt_time ?>
                            </p>
                            <div class="info">
                                <a class="icon d-block mb-3">
                                    <img src="assets/images/icon/mail1.svg" alt="Mail" style="color: #fff;"> dummy mail
                                </a>
                                <a class="location d-block mb-3">
                                    <img src="assets/images/icon/map-pin2.svg" alt="Map">location
                                </a>
                                <a class="phone d-block">
                                    <img src="assets/images/icon/phone3.svg" alt="Phone">
                                    phone number
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-4 mt-lg-0">
                    <form class="contact-form" name="sponsor-reg" id="sponsor-reg">
                        <div class="row gy-3">
                            <div class="col-lg-6 mb-2 position-relative">
                                <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                                <input type="text" class="form-control " id="exampleFormControlInput1"
                                     name="fname"  required>
                                <label id="exampleFormControlInput1-error" class="error error-field"
                                    for="exampleFormControlInput1"></label>
                            </div>
                            <div class="col-lg-6 mb-2 position-relative">
                                <label for="exampleFormControlInput2" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" id="exampleFormControlInput2"
                                     name="contact"  required>
                                <label id="exampleFormControlInput2-error" class="error error-field"
                                    for="exampleFormControlInput2"></label>
                            </div>
                            <div class="col-lg-6 mb-2 position-relative">
                                <label for="exampleFormControlInput3" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="exampleFormControlInput3"
                                     name="company" required>
                                <label id="exampleFormControlInput3-error" class="error error-field"
                                    for="exampleFormControlInput3"></label>
                            </div>
                            <div class="col-lg-6 mb-2 position-relative">
                                <label for="exampleFormControlInput4" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="exampleFormControlInput4"
                                     name="email"  required>
                                <label id="exampleFormControlInput4-error" class="error error-field"
                                    for="exampleFormControlInput4"></label>
                            </div>
                            <div class="col-lg-6 mb-2 position-relative">
                                <label for="exampleFormControlInput5" class="form-label">Where Are You Located </label>
                                <input type="text" class="form-control" id="exampleFormControlInput5"
                                     name="location" required>
                                <label id="exampleFormControlInput5-error" class="error error-field"
                                    for="exampleFormControlInput5"></label>
                            </div>
                            <div class="col-lg-6 mb-2 position-relative">
                                <label for="exampleFormControlInput6" class="form-label">Job Title</label>
                                <input type="text" class="form-control" id="exampleFormControlInput6"
                                     name="job_title" required>
                                <label id="exampleFormControlInput6-error" class="error error-field"
                                    for="exampleFormControlInput6"></label>
                            </div>
                            

                            <div class="text-area col-12 mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Additional Message</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                name="message"></textarea>
                        </div>

                        </div>
                        <div class="mb-3">

                        </div>
                       

                        <!-- <button class=" custom-btn2" type="submit">Submit</button> -->
                        <div class="col-lg-6 mb-3">
                            <!-- <div class="input-outer g-recaptcha"
                                data-sitekey="6Ldxe20UAAAAAD_17wcLirt0F7WmMb_Ixgoi3AYt">
                            </div> -->
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 text-center">

                            <button class=" custom-btn2" type="submit" id="submitBtn" name="submit">Submit</button>

                            <button type="button" class="custom-btn2" value="Please Wait.."
                                style="display: none; margin-top:35px;" id="waitmsg" disabled>
                                Please Wait...
                            </button>

                        </div>
                    </form>
                </div>
            </div>

            <div class="dots">
                <img src="assets/images/dots/dots14.png" alt="Shadow Image" class="contact-dots-2 img-moving-anim3">
            </div>
        </div>
    </div>
</section>
<!-- contact sec end -->

<?php include 'footer.php'; ?>
<script src="assets/js/jquery.validate.js"></script>

<script src="https://www.google.com/recaptcha/api.js"></script>

<script type="text/javascript">
    var validate = $("#sponsor-reg").validate({
        rules: {
            fname: "required",
            company: "required",
            location: "required",

            job_title: "required",
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
            location: "Please enter Where you are located.",

            job_title: "Please enter job title.",
            designation: "Please enter designation.",


            email: "Please enter E-mail.",
            contact: "Please enter contact number."

        },
        errorPlacement: function (error, element) {
            if (element.attr("type") == "checkbox") {
                error.insertAfter("#caterr");
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function (form) {
            if (grecaptcha.getResponse() == "") {
                alert("Are you a robot? Don't be shy, complete the reCaptcha! ?");
                return false;
            }
            // call your function
            $('#submitBtn').hide();
            $('#waitmsg').show();
            form.submit();

        }
    });
</script>
<style>
   /* .error-field {
  color: #da0c0c !important;
  position: absolute !important;
  bottom: -30% !important;
} */
 
</style>