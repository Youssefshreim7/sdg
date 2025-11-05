
        <!-- breadcrumb-area -->
        <section class="breadcrumb__area">
            <div class="breadcrumb__bg" data-background="<?= base_url() . '/assets/public/' ?>/img/bg/breadcrumb__bg.jpg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title"><?php echo $projectsinfo['name']; ?>s</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="<?= site_url('home'); ?>">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">training Details</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- services-details-area -->
        <div class="services__details-area-three section-py-130">
            <div class="container">
                <div class="row">
                    <div class="col-70">
                        <div class="services__details-thumb-three">
                            <img src="<?= base_url() . 'uploads/' . $projectsinfo['image'] ?>" alt="img">
                        </div>
                        <div class="services__details-content-three">
                          <h2 class="title"><?php echo $projectsinfo['name']; ?></h2>
                          <p><?php echo $projectsinfo['description']; ?></p>                    
                        </div>
                    </div>
                                      <div class="col-30">
                        <aside class="services__sidebar services__sidebar-two">
                            <div class="sidebar__widget">
                                <div class="sidebar__cat-list">
                                    <ul class="list-wrap">
                                         <?php foreach ($projectsrelated as $key => $value) { ?>
                                        <li>
                                            <a href="<?= site_url('home/trainingdetails/'.$value['id']); ?>"><?= $value['name']; ?>
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="14" viewBox="0 0 24 14" fill="none">
                                                        <path d="M1 6.7777H22.6667M22.6667 6.7777L16.9683 1M22.6667 6.7777L16.9683 12.5556" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </span>
                                            </a>
                                        </li>
                                     <?php } ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar__widget">
                                <div class="sidebar__contact">
                                        <h4 class="title">Your Trusted Partner in Growth & Success</h4>
                                        <p>Decades of combined expertise to guide you toward your goals.</p>
                                    <a href="<?= site_url('home/contactinfo'); ?>" class="tg-btn tg-btn-three">Contact With Us <img src="<?= base_url() . '/assets/public/' ?>/img/icons/right_arrow.svg" alt="" class="injectable"></a>
                                    <div class="shape">
                                        <img src="<?= base_url() . '/assets/public/' ?>/img/images/sidebar_contact_shape01.svg" alt="shape" class="rotateme">
                                        <img src="<?= base_url() . '/assets/public/' ?>/img/images/sidebar_contact_shape02.svg" alt="shape" class="alltuchtopdown">
                                    </div>
                                </div>
                            </div>
                        
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- services-details-area-end -->




 