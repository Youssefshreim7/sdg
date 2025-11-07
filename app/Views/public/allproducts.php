       <div class="breadcrumb-area ptb-100 bg-img text-center" data-bgimg="<?= base_url() . '/assets/public/' ?>/image/other/nbackground.jpg">>
           <div class="container">
               <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> - Collection left sidebar</span>
               <h2 class="extra-color font-24 font-xl-32 mst-4 mst-xl-7">Collection left sidebar</h2>
           </div>
       </div>
       <!-- breadcrumb-area end -->
       <!-- main start -->
       <main id="main">
           <!-- shop-content start -->
           <section class="shop-content section-ptb">
               <div class="container">
                   <div class="row align-items-xl-start">
                       <!-- shop-sidebar start -->
                       <div class="col-12 col-xl-3 p-xl-sticky top-0">
                           <div class="shop-sidebar-wrap shop-filter-sidebar" data-animate="animate__fadeIn">
                               <button type="button" class="shop-sidebar-close body-secondary-color icon-16 position-absolute" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                               <form class="shop-form" action="javascript:void(0)" id="shopForm">
                                   <!-- shop-sidebar categories start -->
                                   <div class="shop-sidebar shop-categories">
                                       <h6 class="font-18">Categories</h6>
                                       <div class="shop-cat-post mst-20">
                                           <div class="shop-cat ul-mtm-15">
                                               <?php foreach ($allcats as $key => $valuee) { ?>


                                                   <a href="<?= site_url('home/products_by_category/' . $valuee['id']); ?>" class="body-primary-color d-flex align-items-center justify-content-between">
                                                       <span><?php echo $valuee['name']; ?></span>

                                                   </a>
                                               <?php } ?>
                                           </div>
                                       </div>
                                   </div>
                                   <!-- shop-sidebar categories end -->


                                   <!-- shop-sidebar tag end -->
                               </form>
                           </div>
                           <!-- collection-product-list start -->

                           <!-- collection-product-list end -->
                           <!-- shop-sidebar banner start -->
                           <div class="sidebar-banner d-none d-xl-block banner-hover mst-30" data-animate="animate__fadeIn">
                               <a href="<?= base_url('home/allproducts') ?>" class="d-block banner-img position-relative br-hidden">
                                   <span class="banner-icon secondary-color font-20 position-absolute top-50 start-50 width-48 height-48 d-flex align-items-center justify-content-center extra-bg z-1 rounded-circle"><i class="ri-arrow-right-line d-block lh-1"></i></span>
                                   <img src="<?= base_url() . '/assets/public/' ?>//image/collection/side-image.jpg" class="w-100 img-fluid" alt="side-image">
                               </a>
                           </div>
                           <!-- shop-sidebar banner end -->
                       </div>
                       <!-- shop-sidebar end -->
                       <div class="col-12 col-xl-9 p-xl-sticky top-0">
                           <!-- collection-info start -->
                           <div class="row row-mtm" data-animate="animate__fadeIn">
                               <div class="col-12">
                                   <div class="row row-mtm15">
                                       <!-- collection-title start -->
                                       <div class="collection-title">
                                           <h6 class="font-18">Collection</h6>
                                       </div>
                                       <!-- collection-title end -->
                                       <!-- collection-img start -->
                                       <div class="collection-img">
                                           <img src="<?= base_url() . '/assets/public/' ?>//image/collection/collection-banner.jpg" class="w-100 img-fluid border-radius" alt="collection-banner">
                                       </div>
                                       <!-- collection-img end -->
                                       <!-- shop-top-bar start -->
                                       <div class="shop-top-bar">
                                           <div class="row row-mtm15 align-items-md-center">
                                               <div class="col-12 col-sm-6 col-md-7 col-lg-8">
                                                   <div class="shop-filter-view ul-mt15 align-items-center">
                                                       <!-- shop-filter start -->
                                                       <div class="shop-filter">
                                                           <button type="button" class="shop-filter-btn secondary-color d-flex align-items-center"><i class="ri-filter-line icon-16 mer-5"></i>Filter</button>
                                                       </div>
                                                       <!-- shop-filter end -->
                                                       <!-- shop-view-mode start -->
                                                       <div class="shop-view-mode">
                                                           <div class="ul-mt10">
                                                               <button type="button" class="shop-view-btn primary-color icon-16 opacity-100 disabled" data-view="grid" aria-label="Grid view"><i class="ri-layout-grid-line"></i></button>
                                                               <button type="button" class="shop-view-btn body-color icon-16 opacity-100" data-view="list" aria-label="List view"><i class="ri-list-unordered"></i></button>
                                                           </div>
                                                       </div>

                                                       <!-- shop-show-product end -->
                                                   </div>
                                               </div>

                                           </div>
                                       </div>
                                       <!-- shop-top-bar end -->
                                       <!-- shop-border start -->
                                       <div class="shop-border">
                                           <div class="bst"></div>
                                       </div>
                                       <!-- shop-border end -->
                                       <!-- shop-filter-list start -->

                                       <!-- shop-filter-list end -->
                                   </div>
                               </div>
                               <div class="col-12">
                                   <div class="shop-product-wrap data-grid">
                                       <!-- shop-grid start -->
                                       <div class="row row-mtm">
                                           <?php foreach ($allprod as $key => $value) { ?>
                                               <div class="col-6 col-md-4 shop-col" data-animate="animate__fadeIn">
                                                   <div class="single-product">
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
                                       <!-- shop-grid end -->
                                       <!-- paginatoin start -->
                                       <div class="paginatoin-area section-pt" data-animate="animate__fadeIn">
                                           <nav aria-label="Page navigation example">
                                               <ul class="pagination ul-mt5 align-items-center justify-content-center pagination-box">

                                                   <li class="page-item">
                                                       <a href="javascript:void(0)" class="page-link active d-flex align-items-center justify-content-center p-0 m-0 heading-weight border-0 border-radius lh-1" aria-label="Page number"><?= $pager ?></a>
                                                   </li>

                                               </ul>
                                           </nav>
                                       </div>
                                       <!-- paginatoin end -->
                                   </div>
                               </div>
                           </div>
                           <!-- collection-info end -->
                       </div>
                   </div>
               </div>
           </section>
           <!-- shop-content start -->










 