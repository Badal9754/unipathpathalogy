<?php include('includes/header.php') ?>
<section class="page-title">
    <div class="bg-layer" style="background-image: url(assets/images/img/banner-about.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Our blogs</h1>
        </div>
    </div>
</section>

<section class="blog-grid sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <?php
            if ($allBlogs) {
                foreach ($allBlogs as $blog) {
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <figure class="image"><img src="<?= base_url() ?>upload/blog/<?= $blog['image'] ?>" alt="">
                                    </figure>
                                    <div class="link-btn"><a href="<?= base_url('blog-details/' . $blog['slug_title']) ?>"><i
                                                class="flaticon-zoom-in"></i></a></div>
                                </div>
                                <div class="lower-content">
                                    <div class="category"><a
                                            href="<?= base_url('blog-details/' . $blog['slug_title']) ?>">Laboratory</a></div>
                                    <ul class="post-info clearfix">
                                        <li>11 August, 2022</li>
                                        <li><a href="<?= base_url('blog-details/' . $blog['slug_title']) ?>">By Admin</a></li>
                                    </ul>
                                    <h3><a href="<?= base_url('blog-details/' . $blog['slug_title']) ?>"><?= $blog['title']?></a>
                                    </h3>
                                    <div class="lower-box">
                                        <div class="link"><a href="<?= base_url('blog-details/' . $blog['slug_title']) ?>">Read
                                                More</a></div>
                                        <div class="right-info">
                                            <ul class="social-links clearfix">
                                                <li><a href=""><i class="fa-brands fa-facebook"></i></a></li>
                                                <li><a href=""><i class="fa-brands fa-square-twitter"></i></a></li>
                                                <li><a href=""><i class="fa-brands fa-instagram"></i>
                                                    </a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</section>

<?php include('includes/footer.php') ?>
<?php include('includes/footer-link.php') ?>