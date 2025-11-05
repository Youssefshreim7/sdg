    
             
                             <div class="breadcrumb-area ptb-100 bg-img text-center" data-bgimg="<?= base_url() . '/assets/public/' ?>/image/other/nbackground.jpg">
                    <div class="container">
                        <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> - About us</span>
                        <h2 class="extra-color font-24 font-xl-32 mst-4 mst-xl-7">About us</h2>
                    </div>
                </div>
        <!-- breadcrumb-area end -->
        <!-- main start -->
        <main id="main">
             <!-- blog-news start -->
            <section class="blog-news section-ptb">
                <div class="container">
                    <!-- blog-grid start -->
                    <div class="row row-mtm">
                        <?php foreach ($projects as $key => $value) { ?>
                        <div class="col-12 col-md-6 col-lg-4" data-animate="animate__fadeIn">
                            <div class="blog-post banner-hover">
                                <div class="blog-main-img">
                                    <a href="<?= site_url('home/projectsdetails/'.$value['id']); ?>" class="d-block banner-img position-relative br-hidden">
                                        <img src="<?= base_url() . 'uploads/' . $value['image'] ?>" class="w-100 img-fluid" alt="a-1">
                                        <span style="background-color: #d9a72f !important;" class="d-inline-block heading-color font-14 position-absolute start-0 bottom-0 ptb-10 plr-15 extra-bg2 msl-15 meb-15 text-uppercase heading-weight border-radius">Homedecor</span>
                                    </a>
                                </div>
                                <div class="blog-post-content pst-25">
                                    <h6 class="font-18"><?php echo $value['name'];?></h6>
                                    <p class="mst-8">Explore how small decor changes can completely refresh your space with style, comfort, and visual balance</p>
                                    <a href="<?= site_url('home/projectsdetails/'.$value['id']); ?>" class="link-btn mst-8">Read more</a>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                     
                    </div>
                    <!-- blog-grid end -->
                    <!-- paginatoin start -->
 
                </div>
            </section>
            <!-- blog-news end -->
     


<script src="<?= base_url() . '/assets/public/' ?>/js/theme.js"></script>
























