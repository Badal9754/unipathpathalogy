<?php include('includes/header.php') ?>

<style>
    .error-text {
        color: red;
        font-size: 0.9rem;
        margin-top: 5px;
    }

    .is-invalid {
        border-color: red;
    }
</style>

<section class="page-title">
    <div class="bg-layer" style="background-image: url(assets/images/img/banner-about.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Contact Us</h1>
        </div>
    </div>
</section>
<section class="contact-info-section">
    <div class="auto-container">
        <div class="upper-box">
            <div class="row clearfix">
                <div class="col-lg-7 col-md-12 col-sm-12 image-column">
                    <figure class="image-box"><img src="assets/images/img/contact.png" alt=""></figure>
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <div class="sec-title">
                            <span class="sub-title">Get in Touch</span>
                            <h2>How Can We Assist You?</h2>
                        </div>
                        <div class="text">
                            <p>We value your time and are here to address any questions, feedback, or assistance you may
                                need.</p>
                        </div>
                        <div class="inner-box">
                            <div class="icon-box"><i class="flaticon-question"></i></div>
                            <h3>Contact Our Support Team</h3>
                            <p>We’re always here to help. Whether you have a question about our services, need support.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lower-box">
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-pin"></i></div>
                        <h3>Location</h3>
                        <p>28/1 B South Tukoganj Opposite Nath Mandir, Main Road, Kanchan Bagh, Indore, Madhya Pradesh
                            452001</p>
                        <h6><a href="contact.html">Check Location<i class="flaticon-right-arrow"></i></a></h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-phone-call-1"></i></div>
                        <h3><a href="tel:07314211104">0731-421-1104</a></h3>
                        <p>Mon to Sat: 9.00am to 5.00pm <br />Sun: 9.00am to 12.00pm</p>
                        <h6><a href="contact.html">Get Call Back<i class="flaticon-right-arrow"></i></a></h6>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                    <div class="single-item">
                        <div class="icon-box"><i class="flaticon-message"></i></div>
                        <h3><a href="Mall: Info@unipathmp.in"> Info@unipathmp.in</a></h3>
                        <p>To better connect with our team send your mail.</p>
                        <h6><a href="contact.html">Contact Form<i class="flaticon-right-arrow"></i></a></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-section sec-pad centred">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 inner-column">
                <div class="inner-box">
                    <div class="sec-title">
                        <span class="sub-title">Reach Out, We’re Here for You</span>
                        <h2>Connecting You to the Right <br>Solutions</h2>
                    </div>
                    <div class="form-inner">
                        <form id="contactForm" method="post" action="">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Name</label>
                                    <i class="fa-solid fa-circle-user"></i>
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Email</label>
                                    <i class="fa-solid fa-envelope"></i>
                                    <input type="email" name="email" required="" placeholder="Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Phone</label>
                                    <i class="fa-solid fa-phone-flip"></i>
                                    <input type="text" name="phone" required="" placeholder="Phone">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Test Packages</label>
                                    <div class="select-box slect-1">
                                        <select name="packages" class="selectmenu" required  style="width:100%;">
                                            <option value="" selected="selected">Select Packages</option>
                                            <option value="Basic Health Checkup">Basic Health Checkup</option>
                                            <option value="Comprehensive Health Checkup">Comprehensive Health Checkup
                                            </option>
                                            <option value="Womens's Wellness">Womens's Wellness</option>
                                            <option value="Senior Citizen Health">Senior Citizen Health</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>Message</label>
                                    <i class="fa-sharp fa-solid fa-text-width"></i>
                                    <textarea name="message" placeholder="Your message" required></textarea>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group message-btn">
                                    <button type="submit" class="theme-btn">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $(document).ready(function () {
        $("#contactForm").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                },
                packages: {
                    required: true
                },
                message: {
                    required: true,
                    minlength: 10
                }
            },
            messages: {
                name: {
                    required: "Please enter your name",
                    minlength: "Name should be at least 3 characters"
                },
                email: {
                    required: "Please enter your email",
                    email: "Please enter a valid email address"
                },
                phone: {
                    required: "Please enter your phone number",
                    digits: "Only numbers are allowed",
                    minlength: "Phone number should be 10 digits",
                    maxlength: "Phone number should be 10 digits"
                },
                packages: {
                    required: "Please select a package"
                },
                message: {
                    required: "Please enter your message",
                    minlength: "Message should be at least 10 characters"
                }
            },
            errorElement: "div",
            errorPlacement: function (error, element) {
                error.addClass("error-text");
                element.closest(".form-group").append(error);
            },
            highlight: function (element) {
                $(element).addClass("is-invalid");
            },
            unhighlight: function (element) {
                $(element).removeClass("is-invalid");
            }
        });
    });
</script>


<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>