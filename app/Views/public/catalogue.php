<!-- .page-title -->
            <div class="page-title relative">
                <div class="paralaximg" data-parallax="scroll" data-image-src="<?= base_url() . '/assets/public/' ?>/images/page-title/backgroundd.jpg">
                </div>
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="title">Catalogue</h3>
                                <ul class="breadcrumb">
                                    <li><a href="<?= site_url('home'); ?>">Homepage</a></li>
                                    <li>Pages</li>
                                    <li>Catalogue</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.page-title -->
                    <section class="flat-spacing-2">
            <div class="container-2">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-section text-center mb_43">
                            <h3 class="wow fadeInUp">Explore Our Catalogues</h3>
                            <p class="text-body-default text_secondary wow fadeInUp" data-wow-delay="0.1s">
                                Discover our curated catalogues featuring the latest collections and exclusive products. Download and browse to find what inspires you.
                            </p>
                        </div>
                        <div class="swiper tf-sw-collection" data-preview="4" data-tablet="3" data-mobile-sm="2"
                            data-mobile="1" data-space-lg="30" data-space-md="20" data-space="15" data-loop="false">
                            <div class="swiper-wrapper">
                                <?php foreach($mainservices as $key => $value){?>
                                <div class="swiper-slide">
                                    <div class="collection-position hover-img  style-4 wow fadeInUp" data-wow-delay="0.2s">
                                        <a  class="img-style ">
                                            <img class="lazyload" data-src="<?= base_url() . 'uploads/' . $value['image'] ?>"
                                            src="<?= base_url() . 'uploads/' . $value['image'] ?>" alt="banner-cls">
                                        </a>
                                        <div class="content cls-content">
                                            <h6> <a  class="link"><?php echo $value['title'];?></a></h6>
                                            <h6>
                                                <a href="<?= base_url() . 'uploads/' . $value['pdf'] ?>" class="btn btn-primary" download>
                                                    Download PDF
                                                </a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                               <?php } ?>
                            </div>
                            <div class="wrap-pagination d-block">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-12">
                                            <div
                                                class="sw-dots sw-pagination-collection type-circle d-flex d-md-none  justify-content-center">
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="sw-button swiper-button-next nav-next-collection md-none"></div>
                            <div class="sw-button swiper-button-prev nav-prev-collection md-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- .Collections -->