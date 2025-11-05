              <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="<?= base_url() . '/assets/public/' ?>/img/bg/breadcumb-bg.jpg">
        <div class="breadcumb-shape1">
            <img src="<?= base_url() . '/assets/public/' ?>/img/shape/breadcrumb-shape1.svg" alt="img">
        </div>
        <div class="breadcumb-shape2">
            <img src="<?= base_url() . '/assets/public/' ?>/img/shape/breadcrumb-shape2.svg" alt="img">
        </div>
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Service Details</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?= site_url('home'); ?>">Home</a></li>
                    <li>Service Details</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
    Service Area
==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xxl-8 col-lg-8">
                    <div class="page-single mb-40">
                        <div class="page-content">
                            <div class="row gy-4">
                                <div class="col-xxl-auto col-lg-7">
                                    <img class="w-100" src="<?= base_url() . 'uploads/' . $servicesinfo['image'] ?>" alt="img">
                                </div>
                            </div></br>
                            <h2 class="sec-title page-title h3"><?php echo $servicesinfo['name']; ?></h2>
                            <p class=""><?php echo $servicesinfo['description']; ?></p>
   
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-lg-4">
                    <aside class="sidebar-area">
                        <div class="widget widget_categories  ">
                            <h3 class="widget_title">All Services</h3>
                            <ul>
                               <?php foreach($servicesrelated as $key => $value){?>
                                <li>
                                    <a href="blog.html"><?php echo $value['name'];?></a>
                                    <span><i class="fas fa-angle-right"></i></span>
                                </li>
                               <?php } ?>
                            </ul>
                        </div>
                      
                    </aside>
                </div>
            </div>
        </div>
    </section>
          
          
          
          
          
          
           