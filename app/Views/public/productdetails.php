                <!-- .page-title -->
                <div class="page-title relative">
                    <div class="paralaximg" data-parallax="scroll" data-image-src="<?= base_url() . '/assets/public/' ?>/images/page-title/backgroundd.jpg">
                    </div>
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="title"><?php echo $product_info['name']; ?></h3>
                                    <ul class="breadcrumb">
                                        <li><a href="<?= site_url('home'); ?>">Homepage</a></li>
                                        <li>Pages</li>
                                        <li>Product Details</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.page-title -->



                <!-- Section product -->
                <section class="flat-spacing pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="slider-scroll">
                                    <div class="tf-product-stacked d-grid grid-template-columns-2 gap-20 wrapper-gallery-scroll" id="gallery-started">
                                        <a href="<?= base_url() . 'uploads/' . $product_info['image'] ?>" target="_blank" class="item item-scroll-target"
                                            data-scroll="beige" data-pswp-width="600px" data-pswp-height="600px">
                                            <img class="tf-image-zoom lazyload radius-12 w-100"
                                                data-zoom="<?= base_url() . 'uploads/' . $product_info['image'] ?>" data- src="<?= base_url() . 'uploads/' . $product_info['image'] ?>"
                                                src="<?= base_url() . 'uploads/' . $product_info['image'] ?>" alt="">
                                        </a>
                                        <?php foreach ($productgall as $key => $value) { ?>
                                            <a href="<?= base_url() . 'uploads/' . $value['photo'] ?>" target="_blank" class="item item-scroll-target"
                                                data-scroll="gray" data-pswp-width="600px" data-pswp-height="600px">
                                                <img class="tf-image-zoom lazyload radius-12 w-100"
                                                    data-zoom="<?= base_url() . 'uploads/' . $value['photo'] ?>" data- src="<?= base_url() . 'uploads/' . $value['photo'] ?>"
                                                    src="<?= base_url() . 'uploads/' . $value['photo'] ?>" alt="">
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="sticky-top">
                                    <div class="tf-product-info-wrap position-relative">
                                        <div class="tf-zoom-main"></div>
                                        <div class="tf-product-info-list other-image-zoom">
                                            <div class="tf-product-info-heading">
                                                <div class="tf-product-info-name">
                                                    <h3 class="name"><?php echo $product_info['name']; ?></h3>

                                                </div>

                                            </div>
                                            <div class="tf-product-info-choose-option mb_39">
                                                <div class="tab-description">
                                                    <div>
                                                        <h6 class=" mb_12">Product Description</h6>
                                                        <p class="mb_8 text_secondary"><?php echo $product_info['description']; ?></p>
                                                    </div>

                                                </div>





                                                <ul class="tf-product-info-sku">
                                                    <li>
                                                        <p class="text-caption-1">SKU:</p>
                                                        <p class="text-caption-1 text-1"><?php echo $product_info['sku']; ?></p>
                                                    </li>

                                                    <li>
                                                        <p class="text-caption-1">Categories:</p>
                                                        <p class="text-caption-1"><a href="<?= site_url('home/products_by_category/' . $product_info['categories_id']); ?>" class="text-1 link"><?php echo $product_info['catname']; ?></a>,

                                                        </p>
                                                    </li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- /Section product -->


                                        </br></br></br>
                <!-- Related Products -->
                <section class="flat-spacing-7 pt-0">
                    <div class="container flat-animate-tab">
                        <ul class="tab-product justify-content-center wow fadeInUp" data-wow-delay="0s" role="tablist">
                            <li class="nav-tab-item" role="presentation">
                                <a href="#relatedProducts" class=" h4 active" data-bs-toggle="tab">Related Products</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active show" id="relatedProducts" role="tabpanel">
                                <div dir="ltr" class="swiper tf-sw-latest" data-preview="4" data-tablet="3" data-mobile="2"
                                    data-space-lg="30" data-space-md="30" data-space="15" data-pagination="1"
                                    data-pagination-md="1" data-pagination-lg="1">
                                    <div class="swiper-wrapper">

                                        <?php foreach ($product_related as $key => $value) { ?>
                                            <div class="swiper-slide">
                                                <div class="card-product style-1">
                                                    <div class="card-product-wrapper">
                                                        <a href="<?= site_url('home/productdetails/' . $value['id']); ?>" class="image-wrap">
                                                            <img class="lazyload img-product" data-src="<?= base_url() . 'uploads/' . $value['image'] ?>"
                                                                src="<?= base_url() . 'uploads/' . $value['image'] ?>" alt="image-product">
                                                            <img class="lazyload img-hover" data-src="<?= base_url() . 'uploads/' . $value['image'] ?>"
                                                                src="<?= base_url() . 'uploads/' . $value['image'] ?>" alt="image-product">
                                                        </a>
                                                    </div>
                                                    <div class="card-product-info ">
                                                        <a href="<?= site_url('home/productdetails/' . $value['id']); ?>" class="title link line-clamp-1"><?php echo $value['name']; ?></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <div class="sw-pagination-latest sw-dots type-circle justify-content-center"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!-- /Related Products -->