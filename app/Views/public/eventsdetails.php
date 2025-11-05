        <div class="page-title relative style-2">
            <div class="paralaximg" data-parallax="scroll" data-image-src="<?= base_url() . '/assets/public/' ?>/images/page-title/backgroundd.jpg">
            </div>
        </div><!-- /.page-title -->

        <!-- main-content -->
        <div class="main-content">

            <!-- .blog-details-main -->
            <div class="blog-detail-wrap">
                <div class="inner">
                    <div class="heading">
                        <ul class="list-tags has-bg ">

                        </ul>
                        <h3><?= $newsinfo['name']; ?></h3>
                        <div class="wrap-meta">
                            <ul class="meta">
                                <li class="text-body-1"><i class="icon-calendar"></i><a class="link" href="#"><?= $newsinfo['date']; ?></a></li>

                            </ul>

                        </div>
                    </div>
                    <div class="content">
                        <p class="text-secondary text-body-1 mb_12"><?= $newsinfo['description']; ?></p>
                    </div>
                    <div class="image-wrap">
                        <img class="lazyload" data-src="<?= base_url('uploads/' . $newsinfo['image']); ?>" alt="img"
                            src="<?= base_url('uploads/' . $newsinfo['image']); ?>">
                    </div>
                    </br>




                </div>

            </div><!-- /.blog-details-main -->


        </div><!-- main-content -->