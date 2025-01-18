<?php include('includes/header.php') ?>
<section class="page-title">
    <div class="bg-layer" style="background-image: url(assets/images/img/banner-about.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Corporate Tie Up</h1>
        </div>
    </div>
</section>

<section class="contact-section sec-pad centred">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-xl-8 col-lg-12 col-md-12 offset-xl-2 inner-column">
                <div class="inner-box">
                    <div class="sec-title">

                        <h3>Basic Information</h3>
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
                                    <label>Last Name</label>
                                    <i class="fa-solid fa-envelope"></i>
                                    <input type="text" name="lname" required=""  placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label>Phone</label>
                                    <div class="slect-1">
                                        <i class="fa-sharp fa-solid fa-text-width"></i>
                                        <input type="number" name="number" required="" style="width: 100%;" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label>Email</label>
                                    <i class="fa-sharp fa-solid fa-text-width"></i>
                                    <input type="email" name="email" required="" placeholder="Email">
                                </div>
                                <h3 class="mb-3">Corporate Information</h3>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Corporate Name</label>
                                    <i class="fa-solid fa-circle-user"></i>
                                    <input type="text" name="name" placeholder="Name" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Company Profile/Nature of Business</label>
                                    <i class="fa-solid fa-envelope"></i>
                                    <input type="text" name="lname" required="" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label>Industry</label>
                                    <div class="slect-1">
                                        <i class="fa-sharp fa-solid fa-text-width"></i>
                                        <input type="number" name="number" required="" placeholder="Contact Number">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label>Approx Number of Employees Pan India</label>
                                    <i class="fa-sharp fa-solid fa-text-width"></i>
                                    <input type="email" name="email" required="" placeholder="Email">
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label>Corporate Address</label>
                                    <i class="fa-sharp fa-solid fa-text-width"></i>
                                    <input type="email" name="email" required="" placeholder="Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>State</label>
                                    <div class="select-box slect-1">
                                        <select name="state" type="text" id="state" style="width: 100%;" required>
                                            <option value="any ">Select State</option>
                                            <?php
                                            foreach ($state as $state_data) {
                                                ?>
                                                <option value="<?= $state_data['state_id'] ?>">
                                                    <?= $state_data['state_name'] ?>
                                                </option>
                                                <?php
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>City</label>
                                    <div class="select-box slect-1">
                                        <select name="city" type="text" id="city" style="width: 100%;">
                                            <option value="select state">Select City</option>
                                            <?php
                                            foreach ($city as $city_data) {
                                                ?>
                                                <option value="<?= $city_data['id'] ?>"><?= $city_data['name'] ?> </option>
                                            <?php } ?>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label>Approx Number of Employees Pan India</label>
                                    <div class="slect-1">
                                        <i class="fa-sharp fa-solid fa-text-width"></i>
                                        <input type="file" name="email" required="" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <label>Business Profession</label>
                                    <div class="select-box slect-1">
                                        <select name="profession" style="width: 100%;" required>
                                            <option value="" selected="selected">Select Packages</option>
                                            <option value="Basic Health Checkup">Basic Health Checkup</option>
                                            <option value="Comprehensive Health Checkup">Comprehensive Health Checkup
                                            </option>
                                            <option value="Womens's Wellness">Womens's Wellness</option>
                                            <option value="Senior Citizen Health">Senior Citizen Health</option>
                                        </select>
                                    </div>
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


<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>