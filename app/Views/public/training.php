
        <!-- breadcrumb-area -->
        <section class="breadcrumb__area">
            <div class="breadcrumb__bg" data-background="<?= base_url() . '/assets/public/' ?>/img/bg/breadcrumb__bg.jpg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Our training Services</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="<?= site_url('home'); ?>">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Our training Services</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- services-area -->
        <section class="services__area section-py-130">
            <div class="container">
                <div class="row justify-content-center">
<div class="col-lg-10">
    <div class="section__title text-center mb-40">
        <span class="sub-title">Our training Services</span>
        <h2 class="title">training and <br> instructional programs</h2>
        <p> We offer a suite of training and instructional programs that can be tailored to the grade 
level and the school’s system, with pedagogical supervision and periodic follow-ups</p>
    </div>
</div>

                </div>
                <div class="row gutter-y-30 justify-content-center">
                  <?php foreach ($projects as $key => $value) { ?>
                    <div class="col-lg-4 col-md-6">
                            <div class="services__item shine__animate-item">
                                <div class="services__thumb shine__animate-link">
                                    <a href="<?= site_url('home/trainingdetails/'.$value['id']); ?>"><img src="<?= base_url() . 'uploads/' . $value['image'] ?>"  alt="img"></a>
                              
                                </div>
                                <div class="services__content">
                                    <h3 class="title"><a href="<?= site_url('home/trainingdetails/'.$value['id']); ?>"><?php echo $value['name'];?></a></h3>
                                    <p><?php
                  $maxLength = 50;
                  echo strlen($value['description']) > $maxLength
                    ? substr($value['description'], 0, $maxLength) . '...'
                    : $value['description'];
                ?></p>
                                    <a href="<?= site_url('home/trainingdetails/'.$value['id']); ?>" class="link-btn">Read More <img src="<?= base_url() . '/assets/public/' ?>/img/icons/right_arrow.svg" alt="" class="injectable"></a>
                                </div>
                                <div class="services__item-shape">
                                    <img src="<?= base_url() . '/assets/public/' ?>/img/services/services_item_shape.svg" alt="shape">
                                </div>
                            </div>
                    </div>
                  <?php } ?>
                </div> 
            </div>
        </section>
        <!-- services-area-end -->