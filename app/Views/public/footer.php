        </main>
        <!-- main end -->
        <!-- footer start -->
     <footer id="footer">
            <!-- footer-brand-logo start -->
            <div class="brand-logo section-ptb bst">
                <div class="container">
                    <div class="brand-category">
                        <div class="brand-wrap">
                            <div class="brand-slider swiper" id="brand-slider">
                                <div class="swiper-wrapper">
                                    <?php foreach($partner as $value){?>
                                    <div class="swiper-slide">
                                        <div class="brand-content text-center">
                                            <span class="brand-img"><img src="<?= base_url() . 'uploads/' . $value['image'] ?>" class="width-104 width-sm-144 img-fluid" alt="brand-logo2"></span>
                                        </div>
                                    </div>
                                     
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button type="button" class="swiper-prev swiper-prev-brandslider" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                    <button type="button" class="swiper-next swiper-next-brandslider" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                </div>
                            </div>
                            <div class="swiper-dots" data-animate="animate__fadeIn">
                                <div class="swiper-pagination swiper-pagination-brandslider"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-brand-logo end -->
            <!-- footer-top start -->
            <div class="footer-area section-ptb extra-bg">
                <div class="container">
                    <div class="footer-desktop d-none d-lg-block">
                        <div class="row row-mtm">
                            <div class="col-12">
                                <div class="row justify-content-xl-between">
                                    <div class="col-12 col-md-6 col-xl-5">
                                        <div class="footer-news">
                                            <h6 class="font-18">Newsletter</h6>
                                            <p class="mst-18">Enter your email below to be the first to know about new collections and product launches.</p>
                                            <form method="post" class="news-form mst-13">
                                                <div class="news-wrap d-flex flex-wrap">
                                                    <input type="email" id="newsletter-email" name="newsletter-email" class="width-calc-72 bg-transparent" placeholder="Enter your email" required>
                                                    <button type="submit" class="width-72 tertiary-btn icon-16" aria-label="Subscribe button"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="footer-menu">
                                                    <h6 class="ft-title font-18">Information</h6>
                                                    <div class="ft-link">
                                                        <ul class="ftlink-ul ul-ft pst-20">
                                                            <li class="ftlink-li">
                                                                <a href="about-us.html" class="d-inline-block body-primary-color">About us</a>
                                                            </li>
                                                            <li class="ftlink-li">
                                                                <a href="contact-us.html" class="d-inline-block body-primary-color">Contact us</a>
                                                            </li>
                                                            <li class="ftlink-li">
                                                                <a href="faqs.html" class="d-inline-block body-primary-color">Faqs</a>
                                                            </li>
                                                            <li class="ftlink-li">
                                                                <a href="blog.html" class="d-inline-block body-primary-color">News</a>
                                                            </li>
                                                            <li class="ftlink-li">
                                                                <a href="store.html" class="d-inline-block body-primary-color">Store</a>
                                                            </li>
                                                            <li class="ftlink-li">
                                                                <a href="sitemap.html" class="d-inline-block body-primary-color">Sitemap</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="footer-menu">
                                                    <h6 class="ft-title font-18">Policies</h6>
                                                    <div class="ft-link">
                                                        <ul class="ftlink-ul ul-ft pst-20">
                                                            <li class="ftlink-li">
                                                                <a href="cookie.html" class="d-inline-block body-primary-color">Cookie</a>
                                                            </li>
                                                            <li class="ftlink-li">
                                                                <a href="payment-policy.html" class="d-inline-block body-primary-color">Payment policy</a>
                                                            </li>
                                                            <li class="ftlink-li">
                                                                <a href="privacy-policy.html" class="d-inline-block body-primary-color">Privacy policy</a>
                                                            </li>
                                                            <li class="ftlink-li">
                                                                <a href="return-policy.html" class="d-inline-block body-primary-color">Return policy</a>
                                                            </li>
                                                            <li class="ftlink-li">
                                                                <a href="shipping-policy.html" class="d-inline-block body-primary-color">Shipping policy</a>
                                                            </li>
                                                            <li class="ftlink-li">
                                                                <a href="terms-condition.html" class="d-inline-block body-primary-color">Terms & condition</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="row justify-content-xl-between">
                                    <div class="col-12 col-md-6 col-xl-5">
                                        <div class="footer-social">
                                            <h6 class="font-18">Follow us</h6>
                                            <ul class="social-ul ul-mt10 pst-25">
                                                <li class="social-li">
                                                    <a href="javascript:void(0)" class="body-primary-color icon-16 width-40 width-xl-48 height-40 height-xl-48 d-flex align-items-center justify-content-center border-full rounded-circle" aria-label="Social link"><i class="ri-facebook-fill d-block lh-1"></i></a>
                                                </li>
                                                <li class="social-li">
                                                    <a href="javascript:void(0)" class="body-primary-color icon-16 width-40 width-xl-48 height-40 height-xl-48 d-flex align-items-center justify-content-center border-full rounded-circle" aria-label="Social link"><i class="ri-twitter-x-fill d-block lh-1"></i></a>
                                                </li>
                                                <li class="social-li">
                                                    <a href="javascript:void(0)" class="body-primary-color icon-16 width-40 width-xl-48 height-40 height-xl-48 d-flex align-items-center justify-content-center border-full rounded-circle" aria-label="Social link"><i class="ri-instagram-fill d-block lh-1"></i></a>
                                                </li>
                                                <li class="social-li">
                                                    <a href="javascript:void(0)" class="body-primary-color icon-16 width-40 width-xl-48 height-40 height-xl-48 d-flex align-items-center justify-content-center border-full rounded-circle" aria-label="Social link"><i class="ri-pinterest-fill d-block lh-1"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-xl-6">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="footer-menu">
                                                    <h6 class="ft-title font-18">Contact us</h6>
                                                    <div class="ft-link">
                                                        <ul class="ftlink-ul ul-ft pst-20">
                                                            <li class="ftlink-li">
                                                                <div class="d-flex flex-wrap">
                                                                    <span class="width-16 primary-color icon-16"><i class="ri-map-pin-line"></i></span>
                                                                    <div class="width-calc-16 psl-5">
                                                                        <div class="ul-ft">
                                                                            <span><?php echo $contactinfo['fulladdress'];?></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="ftlink-li">
                                                                <div class="d-flex flex-wrap align-items-center">
                                                                    <span class="width-16 primary-color icon-16"><i class="ri-phone-line"></i></span>
                                                                    <div class="width-calc-16 psl-5">
                                                                        <a href="tel:<?php echo $contactinfo['mobileleb'];?>" class="d-inline-block body-primary-color"><?php echo $contactinfo['mobileleb'];?></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="ftlink-li">
                                                                <div class="d-flex flex-wrap align-items-center">
                                                                    <span class="width-16 primary-color icon-16"><i class="ri-mail-line"></i></span>
                                                                    <div class="width-calc-16 psl-5">
                                                                        <a href="mailto:<?php echo $contactinfo['email'];?>" class="d-inline-block body-primary-color"><?php echo $contactinfo['email'];?></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="footer-menu">
                                                    <h6 class="ft-title font-18">Opening time</h6>
                                                    <div class="ft-link">
                                                        <ul class="ftlink-ul ul-ft pst-20">
                                                            <li class="ftlink-li">
                                                                <span class="d-inline-block body-color">Mon - Fri : 09:00 am - 11:00 pm</span>
                                                            </li>
                                                            <li class="ftlink-li">
                                                                <span class="d-inline-block body-color">Saturday : 10:00 am - 10:00 pm</span>
                                                            </li>
                                                            <li class="ftlink-li">
                                                                <span class="d-inline-block body-color">Sunday : 10:00 am - 01:00 pm</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-mobile d-lg-none">
                        <div class="row row-mtm">
                            <div class="col-12 col-md-6">
                                <div class="footer-news">
                                    <h6 class="font-18">Newsletter</h6>
                                    <p class="mst-18">Enter your email below to be the first to know about new collections and product launches.</p>
                                    <form method="post" class="news-form mst-13">
                                        <div class="news-wrap d-flex flex-wrap">
                                            <input type="email" id="newsletter-email-mobile" name="newsletter-email-mobile" class="width-calc-72 bg-transparent" placeholder="Enter your email" required>
                                            <button type="submit" class="width-72 tertiary-btn icon-16" aria-label="Subscribe button"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-12 order-md-last footer-list">
                                <div class="row">
                                    <div class="col-12 col-md-3 ft-list">
                                        <div class="footer-menu">
                                            <h6 class="ft-title d-none d-md-block font-18">Information</h6>
                                            <a href="#collapse-information" class="ft-title font-18 d-flex d-md-none flex-wrap align-items-center justify-content-between" data-bs-toggle="collapse" aria-expanded="false">
                                                <span class="ftmenu-title width-calc-16 heading-weight">Information</span>
                                                <span class="ftmenu-icon width-16 icon-16"><i class="ri-add-line"></i></span>
                                            </a>
                                            <div class="ft-link collapse" id="collapse-information">
                                                <ul class="ftlink-ul ul-ft pst-20 peb-1 peb-md-0">
                                                    <li class="ftlink-li">
                                                        <a href="about-us.html" class="d-inline-block body-primary-color">About us</a>
                                                    </li>
                                                    <li class="ftlink-li">
                                                        <a href="contact-us.html" class="d-inline-block body-primary-color">Contact us</a>
                                                    </li>
                                                    <li class="ftlink-li">
                                                        <a href="faqs.html" class="d-inline-block body-primary-color">Faqs</a>
                                                    </li>
                                                    <li class="ftlink-li">
                                                        <a href="blog.html" class="d-inline-block body-primary-color">News</a>
                                                    </li>
                                                    <li class="ftlink-li">
                                                        <a href="store.html" class="d-inline-block body-primary-color">Store</a>
                                                    </li>
                                                    <li class="ftlink-li">
                                                        <a href="sitemap.html" class="d-inline-block body-primary-color">Sitemap</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 ft-list">
                                        <div class="footer-menu">
                                            <h6 class="ft-title d-none d-md-block font-18">Policies</h6>
                                            <a href="#collapse-policies" class="ft-title font-18 d-flex d-md-none flex-wrap align-items-center justify-content-between" data-bs-toggle="collapse" aria-expanded="false">
                                                <span class="ftmenu-title width-calc-16 heading-weight">Policies</span>
                                                <span class="ftmenu-icon width-16 icon-16"><i class="ri-add-line"></i></span>
                                            </a>
                                            <div class="ft-link collapse" id="collapse-policies">
                                                <ul class="ftlink-ul ul-ft pst-20 peb-1 peb-md-0">
                                                    <li class="ftlink-li">
                                                        <a href="cookie.html" class="d-inline-block body-primary-color">Cookie</a>
                                                    </li>
                                                    <li class="ftlink-li">
                                                        <a href="payment-policy.html" class="d-inline-block body-primary-color">Payment policy</a>
                                                    </li>
                                                    <li class="ftlink-li">
                                                        <a href="privacy-policy.html" class="d-inline-block body-primary-color">Privacy policy</a>
                                                    </li>
                                                    <li class="ftlink-li">
                                                        <a href="return-policy.html" class="d-inline-block body-primary-color">Return policy</a>
                                                    </li>
                                                    <li class="ftlink-li">
                                                        <a href="shipping-policy.html" class="d-inline-block body-primary-color">Shipping policy</a>
                                                    </li>
                                                    <li class="ftlink-li">
                                                        <a href="terms-condition.html" class="d-inline-block body-primary-color">Terms & condition</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 ft-list">
                                        <div class="footer-menu">
                                            <h6 class="ft-title d-none d-md-block font-18">Contact us</h6>
                                            <a href="#collapse-contact-us" class="ft-title font-18 d-flex d-md-none flex-wrap align-items-center justify-content-between" data-bs-toggle="collapse" aria-expanded="false">
                                                <span class="ftmenu-title width-calc-16 heading-weight">Contact us</span>
                                                <span class="ftmenu-icon width-16 icon-16"><i class="ri-add-line"></i></span>
                                            </a>
                                            <div class="ft-link collapse" id="collapse-contact-us">
                                                <ul class="ftlink-ul ul-ft pst-20 peb-1 peb-md-0">
                                                    <li class="ftlink-li">
                                                        <div class="d-flex flex-wrap">
                                                            <span class="width-16 primary-color icon-16"><i class="ri-map-pin-line"></i></span>
                                                            <div class="width-calc-16 psl-5">
                                                                <div class="ul-ft">
                                                                    <span><?php echo $contactinfo['fulladdress'];?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ftlink-li">
                                                        <div class="d-flex flex-wrap">
                                                            <span class="width-16 primary-color icon-16"><i class="ri-phone-line"></i></span>
                                                            <div class="width-calc-16 psl-5">
                                                                <a href="tel:+919876543210" class="d-inline-block body-primary-color"><?php echo $contactinfo['mobileleb'];?></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="ftlink-li">
                                                        <div class="d-flex flex-wrap">
                                                            <span class="width-16 primary-color icon-16"><i class="ri-mail-line"></i></span>
                                                            <div class="width-calc-16 psl-5">
                                                                <a href="mailto:<?php echo $contactinfo['email'];?>" class="d-inline-block body-primary-color"><?php echo $contactinfo['email'];?></a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-3 ft-list">
                                        <div class="footer-menu">
                                            <h6 class="ft-title d-none d-md-block font-18">Opening time</h6>
                                            <a href="#collapse-opening-time" class="ft-title font-18 d-flex d-md-none flex-wrap align-items-center justify-content-between" data-bs-toggle="collapse" aria-expanded="false">
                                                <span class="ftmenu-title width-calc-16 heading-weight">Opening time</span>
                                                <span class="ftmenu-icon width-16 icon-16"><i class="ri-add-line"></i></span>
                                            </a>
                                            <div class="ft-link collapse" id="collapse-opening-time">
                                                <ul class="ftlink-ul ul-ft pst-20 peb-1 peb-md-0">
                                                    <li class="ftlink-li">
                                                        <span class="d-inline-block body-color">Mon - Fri : 09:00 am - 11:00 pm</span>
                                                    </li>
                                                    <li class="ftlink-li">
                                                        <span class="d-inline-block body-color">Saturday : 10:00 am - 10:00 pm</span>
                                                    </li>
                                                    <li class="ftlink-li">
                                                        <span class="d-inline-block body-color">Sunday : 10:00 am - 01:00 pm</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="footer-social">
                                    <h6 class="font-18">Follow us</h6>
                                    <ul class="social-ul ul-mt10 pst-25">
                                        <li class="social-li">
                                            <a href="javascript:void(0)" class="body-primary-color icon-16 width-40 width-xl-48 height-40 height-xl-48 d-flex align-items-center justify-content-center border-full rounded-circle" aria-label="Social link"><i class="ri-facebook-fill d-block lh-1"></i></a>
                                        </li>
                                        <li class="social-li">
                                            <a href="javascript:void(0)" class="body-primary-color icon-16 width-40 width-xl-48 height-40 height-xl-48 d-flex align-items-center justify-content-center border-full rounded-circle" aria-label="Social link"><i class="ri-twitter-x-fill d-block lh-1"></i></a>
                                        </li>
                                        <li class="social-li">
                                            <a href="javascript:void(0)" class="body-primary-color icon-16 width-40 width-xl-48 height-40 height-xl-48 d-flex align-items-center justify-content-center border-full rounded-circle" aria-label="Social link"><i class="ri-instagram-fill d-block lh-1"></i></a>
                                        </li>
                                        <li class="social-li">
                                            <a href="javascript:void(0)" class="body-primary-color icon-16 width-40 width-xl-48 height-40 height-xl-48 d-flex align-items-center justify-content-center border-full rounded-circle" aria-label="Social link"><i class="ri-pinterest-fill d-block lh-1"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-top end -->
            <!-- footer-bottom start -->
            <div style="background-color: #2b2b2b!important;" class="copyright ptb-20 ptb-md-30 extra-bg bst">
                <div class="container">
                    <div class="row align-items-md-center">
                        <div class="col-12 col-md-6 col-lg-4 mst-10 mst-md-15 mst-lg-0 text-center text-md-start">Powered by <a target="_blank" href="https://anzimagroup.com/"> Anzima Group</a></div>
                        <div class="col-12 col-lg-4 order-first order-lg-0">
                            <div class="footer-theme-logo text-center">
                                <a href="index.html" class="d-inline-block theme-logo">
                                    <img src="<?= base_url() . '/assets/public/' ?>//image/index2/sdglogo.png" class="width-104 width-xl-152 img-fluid" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 mst-15 mst-lg-0 order-first order-md-0">
                            <ul class="payment-ul">
                                <li class="payment-li ul-mt5 justify-content-center justify-content-md-end">
                                    <a href="javascript:void(0)" class="d-block"><img src="<?= base_url() . '/assets/public/' ?>//image/other/paying-visa.png" class="width-40 img-fluid border-radius" alt="paying-visa"></a>
                                    <a href="javascript:void(0)" class="d-block"><img src="<?= base_url() . '/assets/public/' ?>//image/other/paying-maestro.png" class="width-40 img-fluid border-radius" alt="paying-maestro"></a>
                                    <a href="javascript:void(0)" class="d-block"><img src="<?= base_url() . '/assets/public/' ?>//image/other/paying-american.png" class="width-40 img-fluid border-radius" alt="paying-american"></a>
                                    <a href="javascript:void(0)" class="d-block"><img src="<?= base_url() . '/assets/public/' ?>//image/other/paying-paypal.png" class="width-40 img-fluid border-radius" alt="paying-paypal"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer-bottom end -->
        </footer>
        <!-- footer end -->
        <!-- quickview-modal start -->
        <div class="quickview-modal modal fade" id="quickview-modal" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content body-bg border-0 br-hidden">
                    <div class="modal-body ptb-30 plr-15 plr-md-30">
                        <div class="quickview-modal-header d-flex align-items-center justify-content-between meb-30">
                            <h6 class="font-18">Quickview</h6>
                            <button type="button" class="body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                        </div>
                        <div class="row row-mtm quickview-modal-content">
                            <div class="col-12 col-md-6">
                                <!-- quickview-detail-slider start -->
                                <div class="quickview-detail-slider">
                                    <div class="row ul-mt15">
                                        <div class="col-12">
                                            <!-- quickview-img-big start -->
                                            <div class="quickview-img-big quickview-slider-big position-relative br-hidden">
                                                <div class="swiper" id="quickview-slider-big">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <img src="<?= base_url() . '/assets/public/' ?>/image/product/product-1.1.jpg" class="w-100 img-fluid" alt="product-1.1">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="<?= base_url() . '/assets/public/' ?>/image/product/product-1.2.jpg" class="w-100 img-fluid" alt="product-1.2">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="<?= base_url() . '/assets/public/' ?>/image/product/product-1.3.jpg" class="w-100 img-fluid" alt="product-1.3">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="<?= base_url() . '/assets/public/' ?>/image/product/product-1.4.jpg" class="w-100 img-fluid" alt="product-1.4">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="<?= base_url() . '/assets/public/' ?>/image/product/product-1.5.jpg" class="w-100 img-fluid" alt="product-1.5">
                                                        </div>
                                                    </div>
                                                    <div class="swiper-buttons">
                                                        <button type="button" class="swiper-prev swiper-prev-quickview-big tertiary-btn icon-16 width-32 height-32 position-absolute top-50 translate-middle-y z-1 rounded-circle" aria-label="Arrow previous"><i class="ri-arrow-left-line d-block lh-1"></i></button>
                                                        <button type="button" class="swiper-next swiper-next-quickview-big tertiary-btn icon-16 width-32 height-32 position-absolute top-50 translate-middle-y z-1 rounded-circle" aria-label="Arrow next"><i class="ri-arrow-right-line d-block lh-1"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- quickview-img-big end -->
                                        </div>
                                        <div class="col-12">
                                            <!-- quickview-img-small start -->
                                            <div class="quickview-img-small quickview-slider-small">
                                                <div class="swiper" id="quickview-slider-small">
                                                    <div class="swiper-wrapper">
                                                        <div class="swiper-slide">
                                                            <img src="<?= base_url() . '/assets/public/' ?>/image/product/product-1.1.jpg" class="w-100 img-fluid border-radius" alt="product-1.1">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="<?= base_url() . '/assets/public/' ?>/image/product/product-1.2.jpg" class="w-100 img-fluid border-radius" alt="product-1.2">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="<?= base_url() . '/assets/public/' ?>/image/product/product-1.3.jpg" class="w-100 img-fluid border-radius" alt="product-1.3">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="<?= base_url() . '/assets/public/' ?>/image/product/product-1.4.jpg" class="w-100 img-fluid border-radius" alt="product-1.4">
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <img src="<?= base_url() . '/assets/public/' ?>/image/product/product-1.5.jpg" class="w-100 img-fluid border-radius" alt="product-1.5">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- quickview-img-small end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- quickview-detail-slider end -->
                            </div>
                            <div class="col-12 col-md-6">
                                <!-- quickview-info start -->
                                <div class="quickview-info p-md-relative height-md-100">
                                    <div class="quickview-detail-info p-md-absolute top-0 bottom-0 start-0 psl-md-3 per-md-30">
                                        <div class="quick-info" data-animate="animate__fadeIn">
                                            <div class="product-title">
                                                <h2 class="font-20">Luna velvet sofa</h2>
                                            </div>
                                        </div>
                                        <div class="quick-info mst-5" data-animate="animate__fadeIn">
                                            <div class="product-sku">
                                                <div class="ul-mt5 font-12">
                                                    <span><span class="heading-color heading-weight mer-4">SKU:</span>VI-ABC456</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="quick-info mst-10" data-animate="animate__fadeIn">
                                            <div class="product-ratting">
                                                <div class="pro-review-write">
                                                    <div class="pro-review">
                                                        <span class="review-ratting">
                                                            <span class="review-star icon-16">
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-fill"></i>
                                                                <i class="ri-star-line"></i>
                                                            </span>
                                                            <span class="review-average">4.0<span class="review-caption">2 reviews</span></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="quick-info mst-10" data-animate="animate__fadeIn">
                                            <div class="product-view">
                                                <span class="heading-color">Trending now - <i class="ri-eye-line mer-4"></i><span class="product-live-visitor primary-color heading-weight"></span> views & <span class="text-danger"><i class="ri-fire-line mer-4"></i><span class="product-sold-count heading-weight"></span> recent sales in the last <span class="product-hours-count text-danger heading-weight"></span> hours</span></span>
                                            </div>
                                        </div>
                                        <div class="quick-info mst-10" data-animate="animate__fadeIn">
                                            <div class="product-price">
                                                <div class="price-box">
                                                    <span class="new-price primary-color font-24 heading-weight">$79.00</span>
                                                    <span class="old-price font-20 heading-weight"><span class="mer-5">~</span><span class="text-decoration-line-through">$89.00</span></span>
                                                    <span class="discount-price font-12"><span class="d-inline-block product-label-discount extra-color ptb-4 plr-8 border-radius">Save 11%</span></span>
                                                </div>
                                                <div class="font-12 mst-5">Tax included. <a href="shipping-policy.html" class="body-secondary-color text-decoration-underline">Shipping</a> calculated at checkout.</div>
                                            </div>
                                        </div>
                                        <div class="quick-info mst-20" data-animate="animate__fadeIn">
                                            <div class="product-border bst"></div>
                                        </div>
                                        <div class="quick-info mst-15" data-animate="animate__fadeIn">
                                            <div class="product-variant">
                                                <div class="product-variant-option">
                                                    <span class="d-inline-block meb-9"><span class="heading-color heading-weight">Size:</span> 2-seater</span>
                                                    <div class="product-option-block size">
                                                        <ul class="ul-mt5">
                                                            <li>
                                                                <label class="cust-checkbox-label">
                                                                    <input type="radio" name="quick-luna-velvet-sofa-size" class="cust-checkbox" value="2-seater" checked>
                                                                    <span class="d-block cust-check">2-seater</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="cust-checkbox-label disabled">
                                                                    <input type="radio" name="quick-luna-velvet-sofa-size" class="cust-checkbox" value="3-seater">
                                                                    <span class="d-block cust-check">3-seater</span>
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="cust-checkbox-label">
                                                                    <input type="radio" name="quick-luna-velvet-sofa-size" class="cust-checkbox" value="l-shape">
                                                                    <span class="d-block cust-check">L-shape</span>
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="product-variant-option mst-15">
                                                    <span class="d-inline-block meb-9"><span class="heading-color heading-weight">Color:</span> Aliceblue</span>
                                                    <div class="product-option-block color">
                                                        <ul class="ul-mt10">
                                                            <li>
                                                                <label class="cust-checkbox-label">
                                                                    <input type="radio" name="quick-luna-velvet-sofa-color" class="cust-checkbox" value="aliceblue" checked>
                                                                    <img src="<?= base_url() . '/assets/public/' ?>/image/product/variant-product1.jpg" class="img-fluid" alt="variant-product1">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="cust-checkbox-label disabled">
                                                                    <input type="radio" name="quick-luna-velvet-sofa-color" class="cust-checkbox" value="antiquewhite">
                                                                    <img src="<?= base_url() . '/assets/public/' ?>/image/product/variant-product2.jpg" class="img-fluid" alt="variant-product2">
                                                                </label>
                                                            </li>
                                                            <li>
                                                                <label class="cust-checkbox-label">
                                                                    <input type="radio" name="quick-luna-velvet-sofa-color" class="cust-checkbox" value="azure">
                                                                    <img src="<?= base_url() . '/assets/public/' ?>/image/product/variant-product3.jpg" class="img-fluid" alt="variant-product3">
                                                                </label>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="quick-info mst-10" data-animate="animate__fadeIn">
                                            <div class="product-timer">
                                                <div class="product-timer-countdown">
                                                    <span class="heading-color"><i class="ri-timer-line icon-16 mer-4"></i>Deal ends in
                                                        <span class="countdown" data-time="2027/12/31 00:00:00">
                                                            <span class="text-danger"><span class="day heading-weight"></span>d</span>
                                                            <span class="text-danger"><span class="hrs heading-weight"></span>h</span>
                                                            <span class="text-danger"><span class="min heading-weight"></span>m</span>
                                                            <span class="text-danger"><span class="sec heading-weight"></span>s</span>
                                                        </span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="quick-info mst-10" data-animate="animate__fadeIn">
                                            <div class="product-stock">
                                                <span class="d-inline-block stock-fill"><span class="text-success">In stock</span> - Limited availability! Just <span class="text-success"><span class="available-stock">66</span> items</span> left</span>
                                                <div class="product-stock-bar product-stock-fill mst-8 br-hidden"></div>
                                            </div>
                                        </div>
                                        <div class="quick-info mst-15" data-animate="animate__fadeIn">
                                            <div class="product-quantity-action">
                                                <div class="product-quantity-wish d-flex flex-wrap align-items-center">
                                                    <div class="product-quantity d-flex align-items-center">
                                                        <span class="mer-4"><span class="heading-color heading-weight">Quantity:</span></span>
                                                        <div class="js-qty-wrapper">
                                                            <div class="js-qty-wrap d-flex body-bg border-full br-hidden">
                                                                <button type="button" class="js-qty-adjust js-qty-adjust-minus body-color icon-16" aria-label="Remove item"><i class="ri-subtract-line d-block lh-1"></i></button>
                                                                <input type="number" name="quick-luna-velvet-sofa-3-seater-antiquewhite" class="js-qty-num p-0 text-center border-0" value="1" min="1">
                                                                <button type="button" class="js-qty-adjust js-qty-adjust-plus body-color icon-16" aria-label="Add item"><i class="ri-add-line d-block lh-1"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="product-wishlist">
                                                        <a href="javascript:void(0)" class="add-to-wishlist heading-color icon-16 width-40 height-40 d-flex align-items-center justify-content-center border-full rounded-circle" aria-label="Go to wishlist"><i class="ri-heart-line"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-action mst-15">
                                                    <div class="row btn-row15">
                                                        <div class="col-12 col-md-6">
                                                            <button type="submit" class="w-100 btn-style quaternary-btn add-to-cart">
                                                            <span class="product-icon">
                                                                <span class="product-bag-icon">Add to cart</span>
                                                                <span class="product-loader-icon icon-16"><i class="ri-loader-4-line d-block lh-1"></i></span>
                                                                <span class="product-check-icon icon-16"><i class="ri-check-line d-block lh-1"></i></span>
                                                            </span>
                                                            </button>
                                                        </div>
                                                        <div class="col-12 col-md-6">
                                                            <a href="checkout.html" class="w-100 btn-style secondary-btn">Buy now</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="quick-info mst-20" data-animate="animate__fadeIn">
                                            <div class="product-border bst"></div>
                                        </div>
                                        <div class="quick-info mst-15" data-animate="animate__fadeIn">
                                            <div class="product-payment">
                                                <div class="heading-color meb-9"><span class="heading-weight">Payment protection guaranteed</span></div>
                                                <ul class="payment-ul">
                                                    <li class="payment-li ul-mt5 lh-0">
                                                        <a href="javascript:void(0)" class="d-block"><img src="<?= base_url() . '/assets/public/' ?>/image/other/paying-american.png" class="width-40 img-fluid border-radius" alt="paying-american"></a>
                                                        <a href="javascript:void(0)" class="d-block"><img src="<?= base_url() . '/assets/public/' ?>/image/other/paying-club.png" class="width-40 img-fluid border-radius" alt="paying-club"></a>
                                                        <a href="javascript:void(0)" class="d-block"><img src="<?= base_url() . '/assets/public/' ?>/image/other/paying-discover.png" class="width-40 img-fluid border-radius" alt="paying-discover"></a>
                                                        <a href="javascript:void(0)" class="d-block"><img src="<?= base_url() . '/assets/public/' ?>/image/other/paying-maestro.png" class="width-40 img-fluid border-radius" alt="paying-maestro"></a>
                                                        <a href="javascript:void(0)" class="d-block"><img src="<?= base_url() . '/assets/public/' ?>/image/other/paying-paypal.png" class="width-40 img-fluid border-radius" alt="paying-paypal"></a>
                                                        <a href="javascript:void(0)" class="d-block"><img src="<?= base_url() . '/assets/public/' ?>/image/other/paying-visa.png" class="width-40 img-fluid border-radius" alt="paying-visa"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="quick-info mst-10" data-animate="animate__fadeIn">
                                            <div class="product-share d-flex align-items-center">
                                                <span class="mer-4"><span class="heading-color heading-weight">Share:</span></span>
                                                <div class="product-social">
                                                    <ul class="social-ul ul-mt5">
                                                        <li class="social-li">
                                                            <a href="javascript:void(0)" class="dribbble icon-16" aria-label="Social link"><i class="ri-dribbble-fill d-block lh-1"></i></a>
                                                        </li>
                                                        <li class="social-li">
                                                            <a href="javascript:void(0)" class="facebook icon-16" aria-label="Social link"><i class="ri-facebook-fill d-block lh-1"></i></a>
                                                        </li>
                                                        <li class="social-li">
                                                            <a href="javascript:void(0)" class="instagram icon-16" aria-label="Social link"><i class="ri-instagram-fill d-block instagram lh-1"></i></a>
                                                        </li>
                                                        <li class="social-li">
                                                            <a href="javascript:void(0)" class="linkedin icon-16" aria-label="Social link"><i class="ri-linkedin-fill d-block lh-1"></i></a>
                                                        </li>
                                                        <li class="social-li">
                                                            <a href="javascript:void(0)" class="pinterest icon-16" aria-label="Social link"><i class="ri-pinterest-fill d-block lh-1"></i></a>
                                                        </li>
                                                        <li class="social-li">
                                                            <a href="javascript:void(0)" class="twitter icon-16" aria-label="Social link"><i class="ri-twitter-x-fill d-block lh-1"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="quick-info mst-10">
                                            <div class="product-view-link">
                                                <a href="product.html" class="d-inline-block font-12"><i class="ri-file-info-line mer-4"></i><span class="text-decoration-underline">View full details of this product</span></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- quickview-info end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- quickview-modal end -->
        <!-- mobile-menu start -->
        <div class="mobile-menu d-xl-none position-fixed top-0 bottom-0 body-bg z-index-5 invisible box-shadow" id="mobile-menu">
            <div class="mobile-contents d-flex flex-column">
                <div class="menu-close ptb-10 plr-15 beb">
                    <button type="button" class="menu-close-btn d-block body-secondary-color icon-16 ms-auto" aria-label="Menu close"><i class="ri-close-large-line d-block lh-1"></i></button>
                </div>
                <div class="mobilemenu-content beb">
                    <div class="main-wrap">
                        <ul class="menu-ul">
                            <li class="menu-li bst">
                                <div class="menu-btn d-flex flex-row-reverse">
                                    <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-home" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                    <span class="width-calc-48 ptb-10 plr-15"><a href="index.html" class="d-inline-block body-color">Home</a></span>
                                </div>
                                <div class="menu-dropdown collapse" id="menu-home">
                                    <ul class="menudrop-ul">
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="index.html" class="d-inline-block body-color">01 Classic demo</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="index2.html" class="d-inline-block body-color">02 Modern demo</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="index3.html" class="d-inline-block body-color">03 Elegant demo</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="index4.html" class="d-inline-block body-color">04 Minimal demo</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="index5.html" class="d-inline-block body-color">05 Bold demo</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-li bst">
                                <div class="menu-btn d-flex flex-row-reverse">
                                    <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-product" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                    <span class="width-calc-48 ptb-10 plr-15"><a href="product.html" class="d-inline-block body-color">Product</a></span>
                                </div>
                                <div class="menu-dropdown collapse" id="menu-product">
                                    <ul class="menudrop-ul">
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="collection.html" class="d-inline-block body-color">01 Classic card style</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="collection2.html" class="d-inline-block body-color">02 Modern card style</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="collection3.html" class="d-inline-block body-color">03 Elegant card style</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="collection4.html" class="d-inline-block body-color">04 Minimal card style</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="collection5.html" class="d-inline-block body-color">05 Bold card style</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="collections.html" class="d-inline-block body-color">Collections</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="collection-category.html" class="d-inline-block body-color">Collection category</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="collection-without.html" class="d-inline-block body-color">Collection full</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="collection.html" class="d-inline-block body-color">Collection left</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="collection-right.html" class="d-inline-block body-color">Collection right</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="collection-list-without.html" class="d-inline-block body-color">Collection list full</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="collection-list.html" class="d-inline-block body-color">Collection list left</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="collection-list-right.html" class="d-inline-block body-color">Collection list right</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="search-empty.html" class="d-inline-block body-color">Search empty</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="search-product.html" class="d-inline-block body-color">Search product</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <div class="menu-btn d-flex flex-row-reverse">
                                                <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-productlayout1" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                                <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="collection.html" class="d-inline-block body-color">Product layout</a></span>
                                            </div>
                                            <div class="menusub-dropdown collapse" id="menu-productlayout1">
                                                <ul class="menusub-ul">
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">01 Bottom thumbnail tab details</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product2.html" class="d-inline-block body-color">02 Left thumbnail simple layout</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product3.html" class="d-inline-block body-color">03 Right thumbnail layout</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product4.html" class="d-inline-block body-color">04 Solo slider accordion</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product5.html" class="d-inline-block body-color">05 Single grid layout</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product6.html" class="d-inline-block body-color">06 Two grid layout</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product7.html" class="d-inline-block body-color">07 Split grid template</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product8.html" class="d-inline-block body-color">08 Single & pair layout</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product9.html" class="d-inline-block body-color">09 Full thumbnail layout</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product10.html" class="d-inline-block body-color">10 Modern layout</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product11.html" class="d-inline-block body-color">11 Classic layout</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product-comparison.html" class="d-inline-block body-color">Product comparision</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <div class="menu-btn d-flex flex-row-reverse">
                                                <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-productfeatures" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                                <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="product.html" class="d-inline-block body-color">Product features</a></span>
                                            </div>
                                            <div class="menusub-dropdown collapse" id="menu-productfeatures">
                                                <ul class="menusub-ul">
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Product compare option</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Size guide</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Ask a question</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product7.html" class="d-inline-block body-color">Variant grouped images</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product11.html" class="d-inline-block body-color">Back in stock</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product10.html" class="d-inline-block body-color">Pre-order</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Quick buy now button</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Pincode service availability</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Special promotions offers</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Pickup availability option</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Product warranty info</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Delivery options details</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product4.html" class="d-inline-block body-color">Frequently bought together</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Trusted payment badge</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Top social buzz</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Recommended product</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <div class="menu-btn d-flex flex-row-reverse">
                                                <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-productdetails" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                                <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="product.html" class="d-inline-block body-color">Product details</a></span>
                                            </div>
                                            <div class="menusub-dropdown collapse" id="menu-productdetails">
                                                <ul class="menusub-ul">
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Product sku code</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Currently views count</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Items sold count</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Product short description</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Image swatch option</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product2.html" class="d-inline-block body-color">Color swatch option</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product3.html" class="d-inline-block body-color">Dropdown select option</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Deal count down timer</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Stock count down</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Tab description</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product10.html" class="d-inline-block body-color">Vertical-tab description</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product5.html" class="d-inline-block body-color">Accordian description</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product2.html" class="d-inline-block body-color">About product content</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product3.html" class="d-inline-block body-color">Product video</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="product.html" class="d-inline-block body-color">Product transform space</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-li bst">
                                <div class="menu-btn d-flex flex-row-reverse">
                                    <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-shop" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                    <span class="width-calc-48 ptb-10 plr-15"><a href="collection.html" class="d-inline-block body-color">Shop</a></span>
                                </div>
                                <div class="menu-dropdown collapse" id="menu-shop">
                                    <ul class="menudrop-ul">
                                        <li class="menudrop-li bst">
                                            <div class="menu-btn d-flex flex-row-reverse">
                                                <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-account" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                                <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="javascript:void(0)" class="d-inline-block body-color">Account</a></span>
                                            </div>
                                            <div class="menusub-dropdown collapse" id="menu-account">
                                                <ul class="menusub-ul">
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="login.html" class="d-inline-block body-color">Login</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="forgot-password.html" class="d-inline-block body-color">Forgot password</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="register.html" class="d-inline-block body-color">Register</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <div class="menu-btn d-flex flex-row-reverse">
                                                <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-other" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                                <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="cart-page.html" class="d-inline-block body-color">Other</a></span>
                                            </div>
                                            <div class="menusub-dropdown collapse" id="menu-other">
                                                <ul class="menusub-ul">
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="cancellation.html" class="d-inline-block body-color">404</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="cart-empty.html" class="d-inline-block body-color">Cart empty</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="cart-page.html" class="d-inline-block body-color">Cart</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="checkout.html" class="d-inline-block body-color">Checkout</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="coming-soon.html" class="d-inline-block body-color">Comingsoon</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="invoice.html" class="d-inline-block body-color">Invoice</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <div class="menu-btn d-flex flex-row-reverse">
                                                <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-order" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                                <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="order.html" class="d-inline-block body-color">Order</a></span>
                                            </div>
                                            <div class="menusub-dropdown collapse" id="menu-order">
                                                <ul class="menusub-ul">
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="order-complete.html" class="d-inline-block body-color">Order complete</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="order.html" class="d-inline-block body-color">Order</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="order-info.html" class="d-inline-block body-color">Order info</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="order-info-default.html" class="d-inline-block body-color">Order default</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="order-info-unfulfilled.html" class="d-inline-block body-color">Order unfulfilled</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="order-info-fulfilled.html" class="d-inline-block body-color">Order fulfilled</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="order-info-inprogress.html" class="d-inline-block body-color">Order inprogress</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="order-info-intransit.html" class="d-inline-block body-color">Order intransit</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="order-info-indelivery.html" class="d-inline-block body-color">Order indelivery</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="order-info-delivered.html" class="d-inline-block body-color">Order delivered</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="order-info-pickup.html" class="d-inline-block body-color">Order pickup</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="order-info-cancel.html" class="d-inline-block body-color">Order cancel</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <div class="menu-btn d-flex flex-row-reverse">
                                                <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-profile" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                                <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="profile.html" class="d-inline-block body-color">Profile</a></span>
                                            </div>
                                            <div class="menusub-dropdown collapse" id="menu-profile">
                                                <ul class="menusub-ul">
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="profile.html" class="d-inline-block body-color">Profile</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="profile-address.html" class="d-inline-block body-color">Profile address</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="profile-notification.html" class="d-inline-block body-color">Profile notification</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="profile-order.html" class="d-inline-block body-color">Profile order</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="profile-order-empty.html" class="d-inline-block body-color">Profile order empty</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="profile-ticket.html" class="d-inline-block body-color">Profile ticket</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="profile-ticket-empty.html" class="d-inline-block body-color">Profile ticket empty</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="profile-wishlist.html" class="d-inline-block body-color">Profile wishlist</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="profile-wishlist-empty.html" class="d-inline-block body-color">Profile wishlist empty</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <div class="menu-btn d-flex flex-row-reverse">
                                                <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-ticket" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                                <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="ticket.html" class="d-inline-block body-color">Ticket</a></span>
                                            </div>
                                            <div class="menusub-dropdown collapse" id="menu-ticket">
                                                <ul class="menusub-ul">
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="ticket.html" class="d-inline-block body-color">Ticket</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="ticket-create.html" class="d-inline-block body-color">Ticket create</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="ticket-edit.html" class="d-inline-block body-color">Ticket edit</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="ticket-info.html" class="d-inline-block body-color">Ticket info</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <div class="menu-btn d-flex flex-row-reverse">
                                                <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-policies" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                                <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="javascript:void(0)" class="d-inline-block">Policies</a></span>
                                            </div>
                                            <div class="menusub-dropdown collapse" id="menu-policies">
                                                <ul class="menusub-ul">
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="cancellation.html" class="d-inline-block body-color">Cancellation</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="cookie.html" class="d-inline-block body-color">Cookie</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="legal.html" class="d-inline-block body-color">Legal</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="payment-policy.html" class="d-inline-block body-color">Payment policy</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="privacy-policy.html" class="d-inline-block body-color">Privacy policy</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="return-policy.html" class="d-inline-block body-color">Return policy</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="shipping-policy.html" class="d-inline-block body-color">Shipping policy</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="terms-condition.html" class="d-inline-block body-color">Terms & condition</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <div class="menu-btn d-flex flex-row-reverse">
                                                <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-features" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                                <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="javascript:void(0)" class="d-inline-block body-color">Features</a></span>
                                            </div>
                                            <div class="menusub-dropdown collapse" id="menu-features">
                                                <ul class="menusub-ul">
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="button.html" class="d-inline-block body-color">Button</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="cart-drawer-empty.html" class="d-inline-block body-color">Cart drawer empty</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-li bst">
                                <div class="menu-btn d-flex flex-row-reverse">
                                    <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-blog" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                    <span class="width-calc-48 ptb-10 plr-15"><a href="blog.html" class="d-inline-block body-color">Blog</a></span>
                                </div>
                                <div class="menu-dropdown collapse" id="menu-blog">
                                    <ul class="menudrop-ul">
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="blog-without.html" class="d-inline-block body-color">Blog</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="blog.html" class="d-inline-block body-color">Blog left</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="blog-right.html" class="d-inline-block body-color">Blog right</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="article-without.html" class="d-inline-block body-color">Article</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="article.html" class="d-inline-block body-color">Article left</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="article-right.html" class="d-inline-block body-color">Article right</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="search-blog.html" class="d-inline-block body-color">Search blog</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-li bst">
                                <div class="menu-btn d-flex flex-row-reverse">
                                    <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-page" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                    <span class="width-calc-48 ptb-10 plr-15"><a href="javascript:void(0)" class="d-inline-block body-color">Page</a></span>
                                </div>
                                <div class="menu-dropdown collapse" id="menu-page">
                                    <ul class="menudrop-ul">
                                        <li class="menudrop-li bst">
                                            <div class="menu-btn d-flex flex-row-reverse">
                                                <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-about" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                                <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="about-us.html" class="d-inline-block body-color">About us</a></span>
                                            </div>
                                            <div class="menusub-dropdown collapse" id="menu-about">
                                                <ul class="menusub-ul">
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="about-us.html" class="d-inline-block body-color">01 Modern aboutus</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="about-us2.html" class="d-inline-block body-color">02 Creative aboutus</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <div class="menu-btn d-flex flex-row-reverse">
                                                <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-contact" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                                <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="contact-us.html" class="d-inline-block body-color">Contact us</a></span>
                                            </div>
                                            <div class="menusub-dropdown collapse" id="menu-contact">
                                                <ul class="menusub-ul">
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="contact-us.html" class="d-inline-block body-color">01 Creative contactus</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="contact-us2.html" class="d-inline-block body-color">02 Standard contactus</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="faqs.html" class="d-inline-block body-color">Faqs</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="sitemap.html" class="d-inline-block body-color">Sitemap</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="store.html" class="d-inline-block body-color">Store</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <span class="d-block ptb-10 psl-20 per-15"><a href="track-order.html" class="d-inline-block body-color">Track order</a></span>
                                        </li>
                                        <li class="menudrop-li bst">
                                            <div class="menu-btn d-flex flex-row-reverse">
                                                <button type="button" class="width-48 icon-16 ptb-10 bsl" data-bs-toggle="collapse" data-bs-target="#menu-wishlist" aria-expanded="false" aria-label="Menu accordion"><i class="ri-add-line d-block lh-1"></i></button>
                                                <span class="width-calc-48 ptb-10 psl-20 per-15"><a href="wishlist.html" class="d-inline-block body-color">Wishlist</a></span>
                                            </div>
                                            <div class="menusub-dropdown collapse" id="menu-wishlist">
                                                <ul class="menusub-ul">
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="wishlist.html" class="d-inline-block body-color">Wishlist</a></span>
                                                    </li>
                                                    <li class="menusub-li bst">
                                                        <span class="d-block ptb-10 psl-25 per-15"><a href="wishlist-empty.html" class="d-inline-block body-color">Wishlist empty</a></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile-menu end -->
        <!-- search-modal start -->
        <div class="search-modal modal fade" id="searchmodal">
            <div class="modal-dialog mw-100 m-0">
                <div class="modal-content body-bg border-0 rounded-0">
                    <div class="modal-body p-0">
                        <div class="container">
                            <div class="search-content ptb-30">
                                <div class="search-box d-flex flex-row-reverse">
                                    <button type="button" class="d-block search-close body-secondary-color icon-16" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-large-line d-block lh-1"></i></button>
                                    <form method="get" action="javascript:void(0)" class="search-form w-100">
                                        <div class="search-bar position-relative">
                                            <div class="form-search d-flex flex-row-reverse">
                                                <input type="search" name="search-input" class="search-input w-100 h-auto ptb-0 plr-15 bg-transparent border-0" value="" placeholder="Search here" required>
                                                <button type="submit" onclick="window.location.href='search-product.html'" class="d-block search-btn body-secondary-color icon-16" aria-label="Go to search" disabled><i class="ri-search-line d-block lh-1"></i></button>
                                            </div>
                                            <div class="d-none search-results position-absolute top-100 start-0 end-0 body-bg z-1 border-full border-radius box-shadow">
                                                <div class="search-for ptb-10 plr-15 beb">Search for <span class="search-text">a</span></div>
                                                <ul class="search-ul">
                                                    <li class="search-li ptb-5 plr-15 bst">
                                                        <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                            <span class="width-48"><img src="<?= base_url() . '/assets/public/' ?>/image/search/search-product1.jpg" class="w-100 img-fluid border-radius" alt="search-product1"></span>
                                                            <span class="width-calc-48 psl-15 text-truncate">Luna velvet sofa</span>
                                                        </a>
                                                    </li>
                                                    <li class="search-li ptb-5 plr-15 bst">
                                                        <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                            <span class="width-48"><img src="<?= base_url() . '/assets/public/' ?>/image/search/search-product2.jpg" class="w-100 img-fluid border-radius" alt="search-product2"></span>
                                                            <span class="width-calc-48 psl-15 text-truncate">Aurora storage bed</span>
                                                        </a>
                                                    </li>
                                                    <li class="search-li ptb-5 plr-15 bst">
                                                        <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                            <span class="width-48"><img src="<?= base_url() . '/assets/public/' ?>/image/search/search-product3.jpg" class="w-100 img-fluid border-radius" alt="search-product3"></span>
                                                            <span class="width-calc-48 psl-15 text-truncate">Cavelo oak dining set</span>
                                                        </a>
                                                    </li>
                                                    <li class="search-li ptb-5 plr-15 bst">
                                                        <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                            <span class="width-48"><img src="<?= base_url() . '/assets/public/' ?>/image/search/search-product4.jpg" class="w-100 img-fluid border-radius" alt="search-product4"></span>
                                                            <span class="width-calc-48 psl-15 text-truncate">Dexon work desk</span>
                                                        </a>
                                                    </li>
                                                    <li class="search-li ptb-5 plr-15 bst">
                                                        <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                            <span class="width-48"><img src="<?= base_url() . '/assets/public/' ?>/image/search/search-product5.jpg" class="w-100 img-fluid border-radius" alt="search-product5"></span>
                                                            <span class="width-calc-48 psl-15 text-truncate">Riva patio chair set</span>
                                                        </a>
                                                    </li>
                                                    <li class="search-li ptb-5 plr-15 bst">
                                                        <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                            <span class="width-48"><img src="<?= base_url() . '/assets/public/' ?>/image/search/search-product6.jpg" class="w-100 img-fluid border-radius" alt="search-product6"></span>
                                                            <span class="width-calc-48 psl-15 text-truncate">Modo side cabinet</span>
                                                        </a>
                                                    </li>
                                                    <li class="search-li ptb-5 plr-15 bst">
                                                        <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                            <span class="width-48"><img src="<?= base_url() . '/assets/public/' ?>/image/search/search-product7.jpg" class="w-100 img-fluid border-radius" alt="search-product7"></span>
                                                            <span class="width-calc-48 psl-15 text-truncate">Bunny bunk bed</span>
                                                        </a>
                                                    </li>
                                                    <li class="search-li ptb-5 plr-15 bst">
                                                        <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                            <span class="width-48"><img src="<?= base_url() . '/assets/public/' ?>/image/search/search-product8.jpg" class="w-100 img-fluid border-radius" alt="search-product8"></span>
                                                            <span class="width-calc-48 psl-15 text-truncate">Milo nesting tables</span>
                                                        </a>
                                                    </li>
                                                    <li class="search-li ptb-5 plr-15 bst">
                                                        <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                            <span class="width-48"><img src="<?= base_url() . '/assets/public/' ?>/image/search/search-product9.jpg" class="w-100 img-fluid border-radius" alt="search-product9"></span>
                                                            <span class="width-calc-48 psl-15 text-truncate">Halo pendant light</span>
                                                        </a>
                                                    </li>
                                                    <li class="search-li ptb-5 plr-15 bst">
                                                        <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                            <span class="width-48"><img src="<?= base_url() . '/assets/public/' ?>/image/search/search-product10.jpg" class="w-100 img-fluid border-radius" alt="search-product10"></span>
                                                            <span class="width-calc-48 psl-15 text-truncate">Vera lounge chair</span>
                                                        </a>
                                                    </li>
                                                    <li class="search-li ptb-5 plr-15 bst">
                                                        <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                            <span class="width-48"><img src="<?= base_url() . '/assets/public/' ?>/image/search/search-product11.jpg" class="w-100 img-fluid border-radius" alt="search-product11"></span>
                                                            <span class="width-calc-48 psl-15 text-truncate">Arlo coffee table</span>
                                                        </a>
                                                    </li>
                                                    <li class="search-li ptb-5 plr-15 bst">
                                                        <a href="product.html" class="body-primary-color d-flex flex-wrap align-items-center">
                                                            <span class="width-48"><img src="<?= base_url() . '/assets/public/' ?>/image/search/search-product12.jpg" class="w-100 img-fluid border-radius" alt="search-product12"></span>
                                                            <span class="width-calc-48 psl-15 text-truncate">Noko wall shelf</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="search-more ptb-10 plr-15 bst"><a href="search-product.html" class="body-secondary-color text-decoration-underline">See all results (12)</a></div>
                                                <div class="search-fail ptb-10 plr-15">Search not found</div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="search-example-text mst-15">Trending search: a, e, chair...</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- search-modal end -->
        <!-- cart-drawer start -->
       
        <!-- cart-drawer end -->
        <!-- bottom-menu start -->
        <div class="bottom-menu d-md-none position-sticky bottom-0 body-bg z-1 box-shadow">
            <div class="bottom-menu-element d-flex flex-wrap align-items-center">
                <div class="col">
                    <a href="index.html" class="d-flex flex-column align-items-center ptb-10 text-center">
                        <span class="bottom-menu-icon heading-color icon-16"><i class="ri-home-8-line d-block lh-1"></i></span>
                        <span class="bottom-menu-title body-color font-10 mst-4 text-uppercase lh-1">Home</span>
                    </a>
                </div>
                <div class="col">
                    <a href="account.html" class="d-flex flex-column align-items-center ptb-10 text-center">
                        <span class="bottom-menu-icon heading-color icon-16"><i class="ri-user-3-line d-block lh-1"></i></span>
                        <span class="bottom-menu-title body-color font-10 mst-4 text-uppercase lh-1">Account</span>
                    </a>
                </div>
                <div class="col">
                    <a href="collection.html" class="d-flex flex-column align-items-center ptb-10 text-center">
                        <span class="bottom-menu-icon heading-color icon-16"><i class="ri-layout-grid-line d-block lh-1"></i></span>
                        <span class="bottom-menu-title body-color font-10 mst-4 text-uppercase lh-1">Shop</span>
                    </a>
                </div>
                <div class="col">
                    <a href="wishlist.html" class="d-flex flex-column align-items-center ptb-10 text-center">
                        <span class="bottom-menu-icon-wrap d-flex flex-wrap align-items-center justify-content-center">
                            <span class="d-block bottom-menu-icon heading-color icon-16"><i class="ri-heart-line d-block lh-1"></i></span>
                            <span class="lh-1">/</span>
                            <span class="bottom-menu-counter wishlist-counter heading-color lh-1">5</span>
                        </span>
                        <span class="bottom-menu-title body-color font-10 mst-4 text-uppercase lh-1">Wishlist</span>
                    </a>
                </div>
                <div class="col">
                    <a href="javascript:void(0)" class="js-cart-drawer d-flex flex-column align-items-center ptb-10 text-center">
                        <span class="bottom-menu-icon-wrap d-flex flex-wrap align-items-center justify-content-center">
                            <span class="bottom-menu-icon heading-color icon-16"><i class="ri-shopping-bag-3-line d-block lh-1"></i></span>
                            <span class="lh-1">/</span>
                            <span class="bottom-menu-counter cart-counter heading-color lh-1">4</span>
                        </span>
                        <span class="bottom-menu-title body-color font-10 mst-4 text-uppercase lh-1">Cart</span>
                    </a>
                </div>
            </div>
        </div>
        <!-- bottom-menu end -->
        <!-- bg-screen start -->
        <div class="bg-screen">
            <div class="bg-back position-fixed top-0 end-0 bottom-0 start-0 bg-black z-index-4 opacity-0 invisible"></div>
            <div class="bg-shop position-fixed top-0 end-0 bottom-0 start-0 bg-black z-index-4 opacity-0 invisible"></div>
        </div>
        <!-- bg-screen end -->
        <!-- back-to-top start -->
        <a href="javascript:void(0)" id="top" class="icon-16 secondary-btn position-fixed width-32 height-32 d-flex align-items-center justify-content-center z-1 opacity-0 invisible rounded-circle" aria-label="Back to top"><i class="ri-arrow-up-line d-block lh-1"></i></a>
        <!-- back-to-top end -->
        <!-- plugin js -->
        <script src="<?= base_url() . '/assets/public/' ?>/js/plugin.js"></script>
        <!-- theme js -->
        <script src="<?= base_url() . '/assets/public/' ?>/js/theme4.js"></script>
        
       
    </body>

<!-- Mirrored from spacingtech.com/html/vintage/template/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 31 Oct 2025 08:06:52 GMT -->
</html>
   
   
   
   
    