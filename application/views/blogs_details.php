<?php include('includes/header.php') ?>
<section class="page-title">
    <div class="bg-layer" style="background-image: url(assets/images/img/banner-about.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Blogs Details</h1>
        </div>
    </div>
</section>

<section class="sidebar-page-container blog-large-image news-style-two sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                <div class="blog-classic-content">
                    <div class="news-block-one">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><img src="<?= base_url() ?>upload/blog/<?= $blogdetails['image'] ?>" alt=""></figure>
                            </div>
                            <div class="lower-content">
                                <div class="category"><a href="">Laboratory</a></div>
                                <ul class="post-info clearfix">
                                    <li>11 August, 2022</li>
                                    <li><a href="">By Admin</a></li>
                                </ul>
                                <div class="text">
                                    <h2><a href=""><?= $blogdetails['title'] ?></a></h2>
                                    <p><?= $blogdetails['description'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>