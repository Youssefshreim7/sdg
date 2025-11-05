        <!-- breadcrumb-area -->
        <section class="breadcrumb__area">
            <div class="breadcrumb__bg" data-background="<?= base_url() . '/assets/public/' ?>/img/bg/breadcrumb__bg.jpg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Products</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="<?= site_url('home'); ?>">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Products</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- shop-area -->
        <section class="shop__area section-py-130">
            <div class="container">
                <div class="row">
                    <div class="col-70 order-0 order-lg-2">
                         
                        <div class="shop-item-wrap">
                            <div class="row gy-4">
                              <?php foreach($items as $key => $value){?>
                                <div class="col-xl-4 col-sm-6">
                                    <div class="shop__item">
                                        <div class="shop__thumb">
                                            <a href="<?= site_url('home/itemsdetails/'.$value['id']); ?>">
                                                <img src="<?= base_url() . 'uploads/' . $value['image'] ?>"  alt="img">
                                            </a>
                                        </div>
                                        <div class="shop__content">
                                            <a href="<?= site_url('home/itemsdetails/'.$value['id']); ?>" class="tag"> </a>
                                            <h3 class="title"><a hhref="<?= site_url('home/itemsdetails/'.$value['id']); ?>"><?php echo $value['name']?></a></h3>

                                            <!--<h4 class="price">$110.00<del>$1,400.00</del></h4>-->
                                        </div>
                                    </div>
                                </div>
                              <?php } ?>
                            </div>
                       
                        </div>
                    </div>
         
                </div>
            </div>
        </section>
        <!-- shop-area-end -->