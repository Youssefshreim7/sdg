                    <div class="breadcrumb-area ptb-100 bg-img text-center" data-bgimg="<?= base_url() . '/assets/public/' ?>/image/other/nbackground.jpg">
                        <div class="container">
                            <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> - News</span>
                            <h2 class="extra-color font-24 font-xl-32 mst-4 mst-xl-7">Recent New’s</h2>
                        </div>
                    </div>
            <!-- breadcrumb-area end -->
            <!-- main start -->
            <main id="main">




            <!-- blog-area start -->
            <section class="blog-area section-ptb">
                <div class="container">
                    <div class="blog-category">
                      
                        <div class="blog-wrap">
                            <div class="blog-slider swiper" id="blog-slider">
                                <div class="swiper-wrapper">
                                    <?php foreach($news as $key => $value){?>
                                    <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                        <div class="w-100 blog-post banner-hover extra-bg text-center br-hidden">
                                            <div class="blog-main-img position-relative">
                                                <a href="<?= site_url('home/eventsdetails/'.$value['id']); ?>" class="d-block banner-img overflow-hidden">
                                                    <img src="<?= base_url() . 'uploads/' . $value['image'] ?>" class="w-100 img-fluid" alt="a-4">
                                                </a>
                                                <div class="blog-main-content d-none d-xl-block position-absolute top-0 bottom-0 start-0 end-0 z-1 mlr-15 mtb-15 overflow-hidden">
                                                    <div class="blog-content-title position-absolute bottom-0 start-0 end-0 ptb-10 plr-15 extra-bg border-radius">
                                                        <h6 class="font-18 w-100 text-truncate"><?php echo $value['name'];?></h6>
                                                    </div>
                                                    <div class="blog-content-info position-absolute top-0 bottom-0 start-0 end-0 d-flex flex-column align-items-center justify-content-center ptb-15 plr-15 extra-bg border-radius">
                                                        <span class="d-inline-block primary-color font-14 ptb-10 plr-15 meb-14 text-uppercase heading-weight border-full border-radius"><?php echo $value['date'];?></span>
                                                        <h6 class="font-18 w-100 text-truncate"><?php echo $value['name'];?></h6>
                                                        <p class="mst-1"><?php
                                                    $maxLength = 30;
                                                    echo strlen($value['description']) > $maxLength
                                                        ? substr($value['description'], 0, $maxLength) . '...'
                                                        : $value['description'];
                                                    ?></p>
                                                        <a href="<?= site_url('home/eventsdetails/'.$value['id']); ?>" class="blog-btn extra-color icon-16 width-48 height-48 d-flex align-items-center justify-content-center primary-bg mst-13 rounded-circle" aria-label="Page link"><i class="ri-arrow-right-line d-block lh-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="blog-post-content d-xl-none pst-24 peb-30 plr-15 plr-md-30">
                                                <span class="d-inline-block primary-color font-14 ptb-10 plr-15 mst-6 meb-14 text-uppercase heading-weight border-full border-radius"><?php echo $value['date'];?></span>
                                                <h6 class="font-18"><?php echo $value['name'];?></h6>
                                                <p class="mst-1"><?php
                                                    $maxLength = 30;
                                                    echo strlen($value['description']) > $maxLength
                                                        ? substr($value['description'], 0, $maxLength) . '...'
                                                        : $value['description'];
                                                    ?></p>
                                                <a href="<?= site_url('home/eventsdetails/'.$value['id']); ?>" class="link-btn mst-7">Read more</a>
                                            </div>
                                        </div>
                                    </div>

                                    <?php } ?>
                                    
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button type="button" class="swiper-prev swiper-prev-blog" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                    <button type="button" class="swiper-next swiper-next-blog" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                </div>
                            </div>
                            <div class="swiper-dots" data-animate="animate__fadeIn">
                                <div class="swiper-pagination swiper-pagination-blog"></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area end -->





















 