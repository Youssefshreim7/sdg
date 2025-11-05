        <!-- .page-title -->
            <div class="page-title relative">
                <div class="paralaximg" data-parallax="scroll" data-image-src="<?= base_url() . '/assets/public/' ?>/images/page-title/backgroundd.jpg">
            </div>
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="title">Shop</h3>
                            <ul class="breadcrumb">
                                <li><a href="<?= site_url('home'); ?>">Homepage</a></li>
                                <li>Shop</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.page-title -->

        <!-- Section product -->
        <section class="flat-spacing">
            <div class="container">
                 
                <div class="wrapper-control-shop">
                   
                    <div class="row">
                        <div class="col-xl-3">
                            <div class="sidebar-filter canvas-filter left">
                                <div class="canvas-wrapper">
                                    <div class="canvas-header d-flex d-xl-none">
                                        <h5><span class="icon icon-filter"></span>Filters</h5>
                                        <span class="icon-close close-filter"></span>
                                    </div>
                                    <div class="canvas-body">
                                        <div class="widget-facet facet-categories">
                                            <h6 class="facet-title">Handmade Work</h6>
                                            <ul class="facet-content">
                                            <?php foreach ($allcats as $key => $valuee) { ?>
                                                <li><a href="<?= site_url('home/products_by_category/'.$valuee['id']); ?>" class="link"><?php echo $valuee['name']; ?></a></li>
                                            <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9">
                            
                            <div class="tf-grid-layout wrapper-shop tf-col-4" id="gridLayout">
                                <?php foreach ($allprod as $key => $value) { ?>
                                <!-- card product 11 -->
                                <div class="card-product style-1 grid" data-availability="In stock"
                                    data-brand="zalando">
                                        <div class="card-product-wrapper">
                                            <a href="<?= base_url('uploads/' . $value['image']) ?>"
                                                class="image-wrap glightbox"
                                                data-gallery="product-gallery">

                                                <img class="lazyload img-product"
                                                    data-src="<?= base_url('uploads/' . $value['image']) ?>"
                                                    src="<?= base_url('uploads/' . $value['image']) ?>"
                                                    alt="product-image">

                                                <img class="lazyload img-hover"
                                                    data-src="<?= base_url('uploads/' . $value['image']) ?>"
                                                    src="<?= base_url('uploads/' . $value['image']) ?>"
                                                    alt="product-image">
                                            </a>
                                        </div>
                                    <div class="card-product-info ">
                                       <!-- <a href="#" class="title link"><?php echo $value['name']; ?></a>-->
                                         
                            
                                    </div>
                                </div>
                              <?php } ?>
                                <!-- pagination -->
                                <ul class="wg-pagination justify-content-center">
                                    <?= $pager ?>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Section product -->








 