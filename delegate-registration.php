<?php include 'header.php'; ?>


<section class="bannerSecInnerPage position-relative">
    <div class="overlay"></div>
    <div class="container position-relative">
        <div class="row justify-content-center align-items-center text-center text-content-div">
            <h1>
                Delegate Registration
            </h1>
            <h3 class="closesTextRefFrom">
                <b> Thanks For The Overwhelming Response. Delegate Registration Is Closed</b>
            </h3>
            <p>
                <a href="./"> Home</a> | Delegate Registration
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



<?php include 'footer.php'; ?>

<!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->

<!-- validate -->

<script src="assets/js/jquery.validate.js"></script>



<script type="text/javascript">
    var validate = $("#contact_form").validate({
        rules: {
            firstname: "required",
            company: "required",
            sector: "required",
            nationality: "required",
            country: "required",
            designation: "required",
            companynumber: "required",
            email: "required",
            mobilenumber: {
                required: true,
                digits: true,
            },
            // captcha:"required",




        },
        messages: {
            firstname: "Please enter full name.",
            company: "Please enter company.",
            sector: "Please enter sector.",
            nationality: "Please enter nationality.",
            country: "Please enter country.",
            designation: "Please enter designation.",
            companynumber: "Please enter company telephone number.",

            email: "Please enter official mail.",
            mobilenumber: "Please enter mobile number.",
            // captcha:"Please enter the CAPTCHA number"

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
                document.getElementById("exampleFormControlInput10").value = ""; // Clear the CAPTCHA input for retry
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

    /* .captcha_style {
        background-color: black;
        color: white;
        padding: 6 7 6 7;
    } */
</style>