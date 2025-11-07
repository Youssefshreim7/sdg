       <link rel="stylesheet" type="text/css" href="<?= base_url() . '/assets/public/' ?>/css/product.css">
      <div class="breadcrumb-area ptb-100 bg-img text-center" data-bgimg="<?= base_url() . '/assets/public/' ?>/image/other/nbackground.jpg">
            <div class="container">
                <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> - <?php echo $product_info['name']; ?></span>
                <h2 class="extra-color font-24 font-xl-32 mst-4 mst-xl-7"><?php echo $product_info['name']; ?></h2>
            </div>
        </div>
        <!-- breadcrumb-area end -->
        <!-- main start -->
        <main id="main">
            <!-- product-detail start -->
            <section class="product-detail section-pt">
                <div class="container">
                    <div class="row row-mtm align-items-lg-start">
                        <?php
// Build image list: main first, then gallery photos
$images = [];
if (!empty($product_info['image'])) {
    $images[] = $product_info['image']; // main image filename
}
if (!empty($productgall) && is_array($productgall)) {
    foreach ($productgall as $g) {
        // gallery row might be 'photo' or 'image'
        $imgName = $g['photo'] ?? ($g['image'] ?? null);
        if ($imgName) {
            $images[] = $imgName;
        }
    }
}
// Fallback to avoid empty slider
if (empty($images)) {
    $images[] = 'placeholder.jpg'; // optional: your placeholder
}
?>

<div class="col-12 col-lg-6 p-lg-sticky top-0">
  <div class="product-detail-slider">
    <div class="row ul-mt15 flex-md-row-reverse">
      <div class="col-12 col-md-10" data-animate="animate__fadeIn">
        <!-- product-img-big start -->
        <div class="product-img-big slider-big-v position-relative br-hidden">
          <div class="swiper" id="slider-big-v">
            <div class="swiper-wrapper product-swiper-wrapper">
              <?php foreach ($images as $idx => $imgName): 
                    $src = base_url('uploads/' . $imgName);
                    $alt = 'product-image-' . ($idx + 1);
              ?>
              <div class="swiper-slide product-swiper-slide">
                <div class="product-item-img position-relative">
                  <a href="<?= $src ?>" 
                     class="full-view product-thumbnail heading-color position-absolute top-0 end-0 width-40 height-40 d-flex align-items-center justify-content-center body-bg z-1 mst-15 mer-15 rounded-circle box-shadow" 
                     aria-label="Image full view">
                    <i class="ri-fullscreen-line d-block lh-1"></i>
                  </a>
                  <img src="<?= $src ?>" 
                       data-zoom="<?= $src ?>" 
                       class="w-100 img-fluid zoom" 
                       alt="<?= esc($alt) ?>">
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>

          <div class="swiper-buttons">
            <button type="button" 
                    class="swiper-prev swiper-prev-big tertiary-btn icon-24 width-32 height-32 position-absolute top-50 translate-middle-y z-1 rounded-circle" 
                    aria-label="Arrow previous">
              <i class="ri-arrow-left-line d-block lh-1"></i>
            </button>
            <button type="button" 
                    class="swiper-next swiper-next-big tertiary-btn icon-24 width-32 height-32 position-absolute top-50 translate-middle-y z-1 rounded-circle" 
                    aria-label="Arrow next">
              <i class="ri-arrow-right-line d-block lh-1"></i>
            </button>
          </div>
        </div>
        <!-- product-img-big end -->
      </div>

      <div class="col-12 col-md-2" data-animate="animate__fadeIn">
        <!-- product-img-small start -->
        <div class="product-img-small slider-small-v">
          <div class="swiper" id="slider-small-v">
            <div class="swiper-wrapper">
              <?php foreach ($images as $idx => $imgName): 
                    $thumb = base_url('uploads/' . $imgName);
                    $alt = 'product-thumb-' . ($idx + 1);
              ?>
              <div class="swiper-slide product-swiper-slide">
                <div class="product-item-img br-hidden">
                  <a href="javascript:void(0)" class="d-block product-thumbnail">
                    <img src="<?= $thumb ?>" class="w-100 img-fluid" alt="<?= esc($alt) ?>">
                  </a>
                </div>
              </div>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
        <!-- product-img-small end -->
      </div>
    </div>
  </div>
</div>

                        <div class="col-12 col-lg-6 p-lg-sticky top-0">
                            <!-- product-detail-info start -->
                            <div class="product-detail-info psl-xxl-20">
                                <div class="product-info" data-animate="animate__fadeIn">
                                    <div class="product-title">
                                        <h2 class="font-24"><?php echo $product_info['name']; ?></h2>
                                    </div>
                                </div>
                                <div class="product-info mst-5" data-animate="animate__fadeIn">
                                    <div class="product-sku">
                                        <div class="ul-mt5 font-18">
                                            <span><span style="color: black;" class="heading-color heading-weight mer-4">SKU:</span><?php echo $product_info['sku']; ?></span>
                                            
                                    </div>
                                    <div class="ul-mt5 font-18">
                                            <span><span style="color: black;" class="heading-color heading-weight mer-4">Category:</span><?php echo $product_info['catname']; ?></span>
                                            
                                    </div>
                                </div>
                        
                                
                                <div class="product-info mst-15" data-animate="animate__fadeIn">
                                    <div class="product-desc">
                                        <p><?php echo $product_info['description']; ?></p>
                                    </div>
                                </div>
                              
                            </div>
                            <!-- product-detail-info end -->
                        </div>
                    </div>
                </div>
 
            </section>
            <!-- product-detail end -->
  
      
            <!-- product-detail-transforms start -->
            <section class="product-detail-transforms section-pt">
                <div class="container">
                    <div class="section-capture text-center">
                        <span class="sub-title" data-animate="animate__fadeIn">Instant Style Boost</span>
                        <div class="section-title" data-animate="animate__fadeIn">
                            <h2 class="section-heading">Transform your space instantly</h2>
                        </div>
                        <p class="section-desc" data-animate="animate__fadeIn">Watch how the luna velvet sofa transforms an ordinary space into a cozy and stylish retreat. From dull corners to statement-worthy comfort zones - experience the difference quality design makes.</p>
                    </div>
                    <div class="product-transforms text-center" data-animate="animate__fadeIn">
                        <div class="d-inline-block position-relative">
                            <div class="position-relative">
                                <span class="d-inline-block position-absolute top-0 start-0 product-img-before"><img src="<?= base_url() . '/assets/public/' ?>//image/product/product-swipe-img1.1.png" class="w-100 img-fluid" alt="product-swipe-img1.1"></span>
                                <span class="d-inline-block product-img-after"><img src="<?= base_url() . '/assets/public/' ?>//image/product/product-swipe-img1.2.png" class="w-100 img-fluid" alt="product-swipe-img1.2"></span>
                            </div>
                            <input type="range" min="0" max="100" value="50" class="product-transforms-slider position-absolute top-50 translate-middle-y start-0 end-0 height-48 z-1 opacity-0">
                            <div class="product-transforms-slider-line position-absolute top-0 bottom-0 translate-middle-x body-bg plr-2"></div>
                            <div class="product-transforms-slider-button heading-color icon-16 position-absolute top-50 translate-middle width-48 height-48 d-flex align-items-center justify-content-center body-bg rounded-circle"><i class="ri-expand-horizontal-s-line d-block lh-1"></i></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product-detail-transforms end -->

            <!-- related-product start -->
            <section class="related-area section-ptb">
                <div class="container">
                    <div class="collection-category">
                        <div class="section-capture text-center">
                            <span class="sub-title" data-animate="animate__fadeIn">You may like</span>
                            <div class="section-title" data-animate="animate__fadeIn">
                                <h2 class="section-heading">Related product</h2>
                            </div>
                        </div>
                        <div class="collection-wrap">
                            <div class="related-slider swiper" id="related-slider">
                                <div class="swiper-wrapper">
                               <?php foreach ($product_related as $key => $value) { ?>
                                    <div class="swiper-slide" data-animate="animate__fadeIn">
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
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button type="button" class="swiper-prev swiper-prev-related" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                    <button type="button" class="swiper-next swiper-next-related" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                </div>
                            </div>
                            <div class="swiper-dots" data-animate="animate__fadeIn">
                                <div class="swiper-pagination swiper-pagination-related"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- related-product end -->
              
              
              
              
              
              

                <script>
  // Thumbs (vertical)
  const thumbSwiper = new Swiper('#slider-small-v', {
    direction: 'vertical',
    slidesPerView: 5,
    spaceBetween: 10,
    watchSlidesProgress: true,
    slideToClickedSlide: true,
    // If you want arrows for the thumbs, add navigation here too.
    breakpoints: {
      0:   { direction: 'horizontal', slidesPerView: 5, spaceBetween: 8 },
      768: { direction: 'vertical',   slidesPerView: 5, spaceBetween: 10 }
    }
  });

  // Main
  const mainSwiper = new Swiper('#slider-big-v', {
    slidesPerView: 1,
    spaceBetween: 0,
    effect: 'slide',
    navigation: {
      nextEl: '.swiper-next-big',
      prevEl: '.swiper-prev-big',
    },
    thumbs: {
      swiper: thumbSwiper
    }
  });

  // Optional: when a thumb is clicked, force sync (extra safety)
  thumbSwiper.on('click', function () {
    const idx = thumbSwiper.clickedIndex;
    if (typeof idx !== 'undefined' && idx !== null) {
      mainSwiper.slideTo(idx);
    }
  });
</script>
<style>/* Keep buttons above the image/overlays */
.product-img-big .swiper-buttons button {
  z-index: 20;           /* higher than .full-view (z-1) and the image */
  opacity: 1;
  display: inline-flex;  /* make sure they're not collapsed */
}

/* Position them clearly */
.swiper-prev-big { left: 8px; }
.swiper-next-big { right: 8px; }

/* If a parent blocks clicks, allow button clicks */
.product-img-big .swiper-buttons { pointer-events: none; }
.product-img-big .swiper-buttons button { pointer-events: all; }
</style>
        <script src="<?= base_url() . '/assets/public/' ?>/js/theme.js"></script>