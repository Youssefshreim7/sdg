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
                <h1 class="breadcumb-title">Services</h1>
                <ul class="breadcumb-menu">
                    <li><a href="<?= site_url('home'); ?>">Home</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Service Area  
==============================-->
    <section class="overflow-hidden space" id="service-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="title-area text-center">
                        <span class="sub-title"><img class="me-2" src="<?= base_url() . '/assets/public/' ?>/img/theme-img/title_icon.svg" alt="shape">OUR SERVICES<img class="ms-2" src="<?= base_url() . '/assets/public/' ?>/img/theme-img/title_icon.svg" alt="shape"></span>
                        <h2 class="sec-title">Solutions that drive measurable results</h2>
                    </div>
                </div>
            </div>
            <div class="row gy-30 gx-30 justify-content-center">
              <?php foreach ($services as $key => $value) { ?>
                <div class="col-xl-4 col-md-6">
                    <div class="service-card">
                        
                        <div class="service-card-icon">
                            <div class="icon">
                                <img src="<?= base_url('uploads/' . $value['icon']) ?>" style="background-color: #0f5890;" alt="Icon">
                            </div>
                             
                        </div>
                        <div class="box-content">
                            <h3 class="box-title"><a href="<?= site_url('home/servicesdetails/'.$value['id']); ?>"><?php echo $value['name']; ?></a></h3>
                            <p class="box-text">                                        <?php
                                                    $maxLength = 100;
                                                    echo strlen($value['description']) > $maxLength
                                                        ? substr($value['description'], 0, $maxLength) . '...'
                                                        : $value['description'];
                                                    ?></p>
                            <a href="<?= site_url('home/servicesdetails/'.$value['id']); ?>" class="link-btn">Read More<div class="icon"><i class="fa-solid fa-arrow-up-right ms-3"></i></div></a>
                        </div>
                    </div>
                </div>
                <?php } ?>
               
            </div>
        </div>
    </section>



  
  
   