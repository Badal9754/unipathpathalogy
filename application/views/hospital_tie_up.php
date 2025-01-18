<?php include('includes/header.php') ?>
<section class="page-title">
    <div class="bg-layer" style="background-image: url(assets/images/img/banner-about.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Hospital Tie Up</h1>
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
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label>Phone</label>
                                    <div class="slect-1">
                                        <i class="fa-sharp fa-solid fa-text-width"></i>
                                        <input type="number" name="number" required="" placeholder="Contact Number">
                                    </div>
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
                               
                               
                                <div class="col-lg-6 col-md-12 col-sm-12 form-group">
                                    <label>Email</label>
                                    <i class="fa-sharp fa-solid fa-text-width"></i>
                                    <input type="email" name="email" required="" placeholder="Email">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <label>Description</label>
                                   
                                        <i class="fa-sharp fa-solid fa-text-width"></i>
                                        <textarea type="text" name="description" required="" placeholder="Description"></textarea>
                                     
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