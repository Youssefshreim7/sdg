                         <div class="breadcrumb-area ptb-100 bg-img text-center" data-bgimg="<?= base_url() . '/assets/public/' ?>/image/other/nbackground.jpg">
                        <div class="container">
                            <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> - News Details</span>
                            <h2 class="extra-color font-24 font-xl-32 mst-4 mst-xl-7"><?= $newsinfo['name']; ?></h2>
                        </div>
                    </div>
                    <!-- breadcrumb-area end -->
                    <!-- main start -->
                    <main id="main">
                        <!-- blog-news start -->
                        <section class="blog-news section-pt">
                            <div class="container">
                                <div class="row row-mtm align-items-lg-start">
                                    <!-- blog-sidebar start -->
                                       <div class="col-12 col-lg-4 col-xxl-3 p-lg-sticky top-0">
                            <div class="blog-sidebar-wrap">
 
                                <!-- blog-recent start -->
                                <div class="blog-post-sidebar blog-recent" data-animate="animate__fadeIn">
                                    <h6 class="font-18">Recent News</h6>
                                    <div class="blog-recent-post mst-25">
                                        <div class="row row-mtm15">
                                            <?php foreach($newsrelated as $key => $value){?>
                                            <div class="blog-img-content d-flex flex-wrap">
                                                <a href="<?= site_url('home/eventsdetails/'.$value['id']); ?>"  class="d-block width-88">
                                                    <img src="<?= base_url('uploads/' . $value['image']); ?>"  class="img-fluid border-radius" alt="article-recent2">
                                                </a>
                                                <div class="blog-recent-content width-calc-88 psl-15">
                                                    <span class="d-block meb-6"><?= $value['date']; ?></span>
                                                    <span class="d-block heading-weight"><a href="<?= site_url('home/eventsdetails/'.$value['id']); ?>"  style="color:#3c3434!important;" class="primary-link"><?= $value['name']; ?></a></span>
                                                </div>
                                            </div>


                                            <?php } ?>
                                       
                                        </div>
                                    </div>
                                </div>
                                <!-- blog-recent end -->
                  
                            </div>
                        </div>
                                    <!-- blog-sidebar end -->
                                    <div class="col-12 col-lg-8 col-xxl-9 p-lg-sticky top-0">
                                        <div class="row row-mtm">
                                            <!-- article-img start -->
                                            <div class="article-img banner-hover" data-animate="animate__fadeIn">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <img src="<?= base_url('uploads/' . $newsinfo['image']); ?>" alt="News Image">
                                                    </div>
                                                    <?php foreach ($newsgall as $gallery) { ?>
                                                        <div class="swiper-slide">
                                                            <img src="<?= base_url('uploads/' . $gallery['photo']); ?>" >
                                                        </div>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                            <!-- article-img end -->
                                            <!-- article-title start -->
                                            <div class="article-title" data-animate="animate__fadeIn">

                                                <h2 class="font-24"><?= $newsinfo['name']; ?></h2>
                                            </div>
                                            <!-- article-title end -->
                                            <!-- article-description start -->
                                            <div class="article-description" data-animate="animate__fadeIn">
                                                <div class="row row-mtm">
                                                    <div class="article-desc">
                                                        <div class="article-detail p-mtm30">
                                                            <p><?= $newsinfo['description']; ?></p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- blog-news start -->



                        <!-- Include Swiper JS -->
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
                        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
                        <script>
                            document.addEventListener("DOMContentLoaded", function() {
                                setTimeout(() => { // Delay to ensure Swiper loads properly
                                    var swiper = new Swiper('.gallery-slider', {
                                        loop: true,
                                        spaceBetween: 10,
                                        slidesPerView: 1,
                                        centeredSlides: true, // Center the slide
                                        navigation: {
                                            nextEl: '.swiper-button-next',
                                            prevEl: '.swiper-button-prev',
                                        },
                                        pagination: {
                                            el: '.swiper-pagination',
                                            clickable: true,
                                        },
                                    });
                                }, 500); // Small delay to prevent layout shift issues
                            });
                        </script>  
       
       
       
       
       
       
       
       
       
       
       
       
       
       
        