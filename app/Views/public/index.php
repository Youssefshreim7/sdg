     
     
        <!-- collection css -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() . '/assets/public/' ?>/css/collection4.css">

        <!-- blog css -->
        <link rel="stylesheet" type="text/css" href="<?= base_url() . '/assets/public/' ?>/css/blog4.css">
        <!-- style css -->
        
        <link rel="stylesheet" type="text/css" href="<?= base_url() . '/assets/public/' ?>/css/style4.css">



           <section class="slider-content position-relative section-ptb bg-img" data-bgimg="<?= base_url() . '/assets/public/' ?>/image/index4/slider-bgimg.jpg">
                <div class="home-slider swiper" id="home-slider">
                    <div class="swiper-wrapper">
                         <?php foreach ($sliders as $key => $value) { ?>
                        <div class="swiper-slide" data-animate="animate__fadeIn">
                            <div class="slider-image">
                                <div class="container">
                                    <div class="row row-mtm flex-md-row-reverse">
                                        <div class="col-12 col-md-7 d-flex justify-content-center text-center">
                                            <div class="slide-img position-relative">
                                                <span class="d-inline-block"><img src="<?= base_url('uploads/' . $value['image']); ?>" class="w-100 img-fluid" alt="slider-2"></span>
 
                                           
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-5 text-center text-md-start">
                                            <div class="height-md-100 d-md-flex flex-md-column align-items-md-start justify-content-md-center">
                                                <span class="d-block slider-subtitle primary-color font-20 font-xl-32 extra-font meb-6 meb-sm-14 meb-xl-15 meb-xxl-19">System Design Group</span>
                                                <h2 class="font-40 font-sm-48 font-xl-72 font-xxl-80 section-heading-family section-heading-text section-heading-weight"><?= $value['name']; ?></h2>
                                                <p class="font-18 mst-16 mst-sm-24 mst-xl-29 mst-xxl-32"></p>
                                                <a href="<?= $value['btn_action_link']; ?>" class="btn-style primary-btn mst-23 mst-sm-33 mst-xl-43 mst-xxl-48"><?= $value['btn_text']; ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         
                            <?php } ?>
                    </div>
                </div>
                <div class="swiper-buttons d-none d-xl-block">
                    <div class="swiper-buttons-wrap">
                        <button type="button" class="swiper-prev swiper-prev-homeslider icon-16 width-40 width-xl-48 height-40 height-xl-48 position-absolute top-50 translate-middle-y z-1 rounded-circle" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                        <button type="button" class="swiper-next swiper-next-homeslider icon-16 width-40 width-xl-48 height-40 height-xl-48 position-absolute top-50 translate-middle-y z-1 rounded-circle" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                    </div>
                </div>
                <div class="swiper-dots d-xl-none position-absolute bottom-0 start-50 translate-middle-x z-1 plr-15 plr-md-30 meb-15 meb-md-30">
                    <div class="swiper-pagination swiper-pagination-homeslider d-flex flex-wrap justify-content-center"></div>
                </div>
            </section>
            <!-- main-slider end -->
            <!-- category-slider start -->
            <section class="category-slider section-pt">
                <div class="container">
                    <div class="cat-category">
                        <div class="section-capture text-center">
                            <span class="sub-title" data-animate="animate__fadeIn">Browse collection</span>
                            <div class="section-title" data-animate="animate__fadeIn">
                                <h2 class="section-heading">Shop by category</h2>
                            </div>
                        </div>
                        <div class="cat-wrap">
                            <div class="cat-slider swiper" id="cat-slider">
                                <div class="swiper-wrapper">
                                     <?php foreach($allcats as $key => $value){?>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
                                        <div class="cat-content meb-30 text-center">
                                            <a href="<?= site_url('home/products_by_category/'.$value['id']); ?>" class="d-block position-relative pbp-100">
                                                <div class="position-absolute top-0 end-0 bottom-0 start-0 extra-bg rounded-circle">
                                                    <div class="pst-30 peb-23">
 
                                                        <h6 class="font-18 text-truncate"><?php echo $value['name'];?></h6>
                                                    </div>
                                                    <span class="d-inline-block cat-img"><img src="<?= base_url() . 'uploads/' . $value['image'] ?>" class="w-100 img-fluid" alt="cat-2"></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button type="button" class="swiper-prev swiper-prev-cat" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                    <button type="button" class="swiper-next swiper-next-cat" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                </div>
                            </div>
                            <div class="swiper-dots" data-animate="animate__fadeIn">
                                <div class="swiper-pagination swiper-pagination-cat"></div>
                            </div>
                            <div class="view-button d-none" data-animate="animate__fadeIn">
                                <a href="collections.html" class="btn-style tertiary-btn">View all category</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- category-slider end -->
            <!-- home-about start -->
            <section class="home-about section-pt">
                <div class="container">
                    <div class="d-flex flex-wrap br-hidden">
                        <div class="col-12 col-lg-6" data-animate="animate__fadeIn">
                            <img src="<?= base_url() . 'uploads/' . $value['image'] ?>"class="w-100 img-fluid" alt="home-about-img">
                        </div>
                        <div class="col-12 col-lg-6 p-lg-relative extra-bg bg-img" data-bgimg="<?= base_url() . '/assets/public/' ?>/image/index4/home-about-img.png">
                            <!-- home-about-text start -->
                            <div class="home-about-text p-lg-absolute top-0 bottom-0 start-0 ptb-10 ptb-lg-10 plr-15 plr-lg-5 primary-bg text-center">
                                <div class="d-flex">
                                    <div class="home-about-text-row d-flex align-items-center">
                                        <span class="extra-color msl-15 msl-lg-0 mst-lg-15 text-uppercase text-nowrap heading-weight">130+ furniture collection</span>
                                        <span class="extra-color msl-15 msl-lg-0 mst-lg-15 text-uppercase text-nowrap heading-weight">130+ furniture collection</span>
                                        <span class="extra-color msl-15 msl-lg-0 mst-lg-15 text-uppercase text-nowrap heading-weight">130+ furniture collection</span>
                                    </div>
                                    <div class="home-about-text-row d-flex align-items-center">
                                        <span class="extra-color msl-15 msl-lg-0 mst-lg-15 text-uppercase text-nowrap heading-weight">130+ furniture collection</span>
                                        <span class="extra-color msl-15 msl-lg-0 mst-lg-15 text-uppercase text-nowrap heading-weight">130+ furniture collection</span>
                                        <span class="extra-color msl-15 msl-lg-0 mst-lg-15 text-uppercase text-nowrap heading-weight">130+ furniture collection</span>
                                    </div>
                                </div>
                            </div>
                            <!-- home-about-text end -->
                            <div class="col-lg-8 mx-lg-auto height-lg-100 d-lg-flex flex-lg-column align-items-lg-start justify-content-lg-center ptb-30 plr-15 plr-md-30 plr-lg-0">
                                <div class="section-capture mb-0">
                                    <span class="sub-title" data-animate="animate__fadeIn">Since 2011</span>
                                    <div class="section-title" data-animate="animate__fadeIn">
                                        <h2 class="section-heading"><?php echo $about['name'];?></h2>
                                    </div>
                                </div>
                                <p class="mst-16 mst-xl-23" data-animate="animate__fadeIn">
                                                    <?php
                                                    $maxLength = 100;
                                                    echo strlen($about['value']) > $maxLength
                                                        ? substr($about['value'], 0, $maxLength) . '...'
                                                        : $about['value'];
                                                    ?></p>
                                <a href="<?= base_url('home/aboout')?>" class="btn-style tertiary-btn mst-23 mst-xl-33" data-animate="animate__fadeIn">Read story</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- home-about end -->
            <!-- category-product start -->
            <section class="category-product section-pt">
                <div class="container">
                    <div class="collection-category">
                        <div class="section-capture text-center">
                            <span class="sub-title" data-animate="animate__fadeIn">Most popular collection</span>
                            <div class="section-title" data-animate="animate__fadeIn">
                                <h2 class="section-heading">Featured product</h2>
                            </div>
                        </div>
                        <div class="collection-wrap">
                            <div class="collection-product-slider swiper" id="trend-product-slider">
                                <div class="swiper-wrapper">
                                 <?php foreach ($featproducts as $key => $value) { ?>
                                    <div class="swiper-slide d-flex h-auto" data-animate="animate__fadeIn">
                                        <div class="single-product w-100">
                                            <div class="row single-product-wrap">
                                                           <div class="product-image-col">
                                                               <div class="product-image">
                                                                   <?php
                                                                    $mainImg = base_url('uploads/' . $value['image']);
                                                                    $secondImgName = $productFirstGallery[$value['id']] ?? $value['image']; // gallery first or fallback
                                                                    $secondImg = base_url('uploads/' . $secondImgName);
                                                                    ?>
                                                                   <a href="<?= site_url('home/productdetails/' . $value['id']); ?>" class="pro-img">
                                                                       <img src="<?= $mainImg ?>" class="w-100 img-fluid img1" alt="p-1">
                                                                       <img src="<?= $secondImg ?>" class="w-100 img-fluid img2" alt="p-2">
                                                                   </a>


                                                               </div>
                                                           </div>
                                                           <div class="product-content">
                                                               <div class="pro-content">
                                                                   <div class="product-title">
                                                                       <span class="d-block"><a href="<?= site_url('home/productdetails/' . $value['id']); ?>" style="color:#000000;" class="primary-link"><?php echo $value['name']; ?></a></span>
                                                                   </div>
                                                                   <div class="product-price">

                                                                   </div>
                                                                   <div class="product-ratting">

                                                                   </div>
                                                                   <div class="product-description">
                                                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry It is a long established fact that a will be distracted by the readable of at</p>
                                                                   </div>
                                                                   <div class="product-action-wrap">
                                                                       <div class="product-action">
                                                                           <a href="javascript:void(0)" class="add-to-wishlist">
                                                                               <span class="product-icon"><i class="ri-heart-line d-block icon-16 lh-1"></i></span>
                                                                               <span class="tooltip-text">wishlist</span>
                                                                           </a>
                                                                           <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                                               <span class="product-icon"><i class="ri-eye-line d-block icon-16 lh-1"></i></span>
                                                                               <span class="tooltip-text">quickview</span>
                                                                           </a>
                                                                           <a href="javascript:void(0)" class="add-to-cart">
                                                                               <span class="product-icon">
                                                                                   <span class="product-bag-icon icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                                                                                   <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                                   <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                                               </span>
                                                                               <span class="tooltip-text">add to cart</span>
                                                                           </a>
                                                                       </div>
                                                                   </div>
                                                               </div>
                                                           </div>
                                                       </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button type="button" class="swiper-prev swiper-prev-trend-product" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                    <button type="button" class="swiper-next swiper-next-trend-product" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                </div>
                            </div>
                            <div class="swiper-dots" data-animate="animate__fadeIn">
                                <div class="swiper-pagination swiper-pagination-trend-product"></div>
                            </div>
                            <div class="view-button" data-animate="animate__fadeIn">
                                <a href="<?= base_url('home/allproducts')?>" class="btn-style tertiary-btn">View all item</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- category-product end -->
            <!-- banner-area start -->
            <section class="category-slider section-ptb">
                <div class="container">
                    <div class="cat-category">
                        <div class="section-capture text-center">
                            <div class="section-title" data-animate="animate__fadeIn">
                                <h2 class="section-heading">View By Subcategory</h2>
                            </div>
                        </div>
                        <div class="cat-wrap">
                            <div class="cat-slider swiper" id="cat-slider">
                                <div class="swiper-wrapper">
                                    <?php foreach ($allsubcats as $key => $value) { ?>
                                    <div class="swiper-slide h-auto d-flex" data-animate="animate__fadeIn">
                                        <div class="cat-block w-100 banner-hover">
                                            <div class="d-none d-xl-block">
                                                <a href="<?= site_url('home/products_by_subcat/'.$value['cat_id'].'/'.$value['id']); ?>" class="d-block banner-img position-relative br-hidden">
                                                    <span class="banner-icon primary-color icon-16 position-absolute top-50 start-50 width-48 height-48 d-flex align-items-center justify-content-center extra-bg z-1 rounded-circle"><i class="ri-arrow-right-up-line d-block lh-1"></i></span>
                                                    <img src="<?= base_url() . 'uploads/' . $value['image'] ?>" class="w-100 img-fluid" alt="cat-2">
                                                </a>
                                            </div>
                                            <div class="d-xl-none">
                                                <a href="<?= site_url('home/products_by_subcat/'.$value['cat_id'].'/'.$value['id']); ?>" class="d-block banner-img position-relative br-hidden">
                                                    <img src="<?= base_url() . 'uploads/' . $value['image'] ?>" class="w-100 img-fluid" alt="cat-2">
                                                </a>
                                            </div>
                                            <div class="cat-content d-flex align-items-center justify-content-between mst-25">
                                                <h6 class="font-18"><?php echo $value['name'];?></h6>
                                            
                                            </div>
                                            <div class="cat-link d-xl-none mst-10">
                                                <a href="<?= site_url('home/products_by_subcat/'.$value['cat_id'].'/'.$value['id']); ?>" class="link-btn">Shop now</a>
                                            </div>
                                        </div>
                                    </div>
                                   <?php } ?>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button type="button" class="swiper-prev swiper-prev-cat" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                    <button type="button" class="swiper-next swiper-next-cat" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                </div>
                            </div>
                            <div class="swiper-dots" data-animate="animate__fadeIn">
                                <div class="swiper-pagination swiper-pagination-cat"></div>
                            </div>
                            <div class="view-button d-none" data-animate="animate__fadeIn">
                                <a href="collections.html" class="btn-style tertiary-btn">View all category</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
 
            <!-- testimonial start -->
            <section class="testimonial section-ptb extra-bg">
                <div class="container">
                    <div class="testi-category">
                        <div class="section-capture text-center">
                            <span class="sub-title" data-animate="animate__fadeIn">The lovely reviews</span>
                            <div class="section-title" data-animate="animate__fadeIn">
                                <h2 class="section-heading">Happy client love</h2>
                            </div>
                        </div>
                        <div class="testi-wrap">
                            <div class="row">
                                <div class="col-xl-10 mx-xl-auto">
                                    <div class="testi-slider swiper" id="testi-slider">
                                        <div class="swiper-wrapper">
                                           <?php foreach($testimonial as $key => $value){?>
                                            <div class="swiper-slide" data-animate="animate__fadeIn">
                                                <div class="testi-content position-relative pst-32 text-center text-lg-start">
                                                    <div class="testi-icon primary-color icon-64 position-absolute top-0 z-1"><i class="ri-double-quotes-l d-block lh-1"></i></div>
                                                    <div style="    background-color: #ffffff!important;" class="testi-feedback-review ptb-30 ptb-xl-50 plr-15 plr-md-30 plr-xxl-50 body-bg border-radius">
                                                        <p><?php echo $value['description'];?></p>
                                                    </div>
                                                    <div class="d-flex flex-column flex-lg-row align-items-center mst-44 msl-lg-5 msl-xxl-25">
 
                                                        <div class="pst-14 pst-lg-0 psl-lg-15">
                                                            <h6 class="font-18"><?php echo $value['name'];?></h6>
                                                            <span class="d-block mst-3"><?php echo $value['position'];?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                          <?php } ?>
                                        </div>
                                    </div>
                                    <div class="swiper-buttons">
                                        <div class="swiper-buttons-wrap">
                                            <button type="button" class="swiper-prev swiper-prev-testi" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                            <button type="button" class="swiper-next swiper-next-testi" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                        </div>
                                    </div>
                                    <div class="swiper-dots" data-animate="animate__fadeIn">
                                        <div class="swiper-pagination swiper-pagination-testi"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial end -->
            <!-- blog-area start -->
            <section class="blog-area section-ptb">
                <div class="container">
                    <div class="blog-category">
                        <div class="section-capture text-center">
                            <span class="sub-title" data-animate="animate__fadeIn">Recenlty for Events’s</span>
                            <div class="section-title" data-animate="animate__fadeIn">
                                <h2 class="section-heading">Latest for Evnets</h2>
                            </div>
                        </div>
                        <div class="blog-wrap">
                            <div class="blog-slider swiper" id="blog-slider">
                                <div class="swiper-wrapper">
                                  <?php foreach ($newsl as $key => $value) { ?>
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
                            <div class="view-button" data-animate="animate__fadeIn">
                                <a href="<?= base_url('home/evnets');?>" class="btn-style tertiary-btn">View more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog-area end -->