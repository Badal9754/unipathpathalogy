<?php include('includes/header.php') ?>
<section class="page-title">
    <div class="bg-layer" style="background-image: url(assets/images/img/banner-about.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Our Services</h1>
        </div>
    </div>
</section>

<section class="service-page-section">
    <div class="auto-container">
        <div class="row clearfix">
            <?php
            if ($allService) {
                foreach ($allService as $service) {

                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><a href=""><img
                                                src="<?= base_url()?>upload/service/<?= $service['image']?>" alt=""></a></figure>
                                    <div class="icon-box"><i class="flaticon-biochemistry"></i></div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href=""><?= $service['title']?></a></h3>
                                    <p><?= $service['description']?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>