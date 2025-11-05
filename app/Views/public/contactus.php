                <!-- breadcrumb-area start -->
                <div class="breadcrumb-area ptb-100 bg-img text-center" data-bgimg="<?= base_url() . '/assets/public/' ?>/image/other/nbackground.jpg">
                    <div class="container">
                        <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> - Contact us</span>
                        <h2 class="extra-color font-24 font-xl-32 mst-4 mst-xl-7">Contact us</h2>
                    </div>
                </div>
                <!-- breadcrumb-area end -->
                <!-- main start -->
                <main id="main">
                    <!-- contact-form start -->
                    <section class="contact-form section-ptb">
                        <div class="container">
                            <div class="section-capture text-center">
                                <span class="sub-title" data-animate="animate__fadeIn">Ping us</span>
                                <div class="section-title" data-animate="animate__fadeIn">
                                    <h2 class="section-heading">Reach out today</h2>
                                </div>
                            </div>
                            <form action="<?= site_url('home/send_mail'); ?>" method="post" action="javascript:void(0)">
                                <div class="row field-row">
                                    <div class="col-12 col-md-6 field-col d-flex">
                                        <div class="row field-row">
                                            <div class="col-12 field-col" data-animate="animate__fadeIn">
                                                <label for="name" class="field-label">Name</label>
                                                <input type="text" id="name" name="name" class="w-100" placeholder="Full name" autocomplete="name">
                                            </div>
                                            <div class="col-12 field-col" data-animate="animate__fadeIn">
                                                <label for="email" class="field-label">Email</label>
                                                <input type="email" id="email" name="email" class="w-100" placeholder="Email" autocomplete="email">
                                            </div>
                                            <div class="col-12 field-col" data-animate="animate__fadeIn">
                                                <label for="phone" class="field-label">Phone number</label>
                                                <input type="text" id="phone" name="phone" class="w-100" placeholder="Phone number" autocomplete="tel">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 field-col d-flex" data-animate="animate__fadeIn">
                                        <div class="d-flex flex-column w-100">
                                            <label for="message" class="field-label">Message</label>
                                            <textarea rows="5" id="message" name="message" class="w-100 height-md-100" placeholder="Message" autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="contact-form-btn mst-15 mst-md-30">
                                    <div class="row">

                                        <div class="col-12 col-md-6" data-animate="animate__fadeIn">
                                            <button type="submit" class="w-100 btn-style secondary-btn hide-btn opacity-50 disabled pe-none">Submit now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <?php if (session()->has('success')): ?>
                                    <div class="alert alert-success">
                                        <?php echo session('success'); ?>
                                    </div>
                                <?php endif; ?>

                                <?php if (session()->has('error')): ?>
                                    <div class="alert alert-danger">
                                        <?php echo session('error'); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </section>
                    <!-- contact-banner-touch start -->
                    <section class="contact-banner-touch section-pt">
                        <div class="container">
                            <div class="row row-mtm align-items-lg-center">
                                <div class="col-12 col-lg-7" data-animate="animate__fadeIn">
                                    <!-- contact-banner start -->
                                    <div class="contact-banner">
                                        <div class="banner-hover">
                                            <span class="d-block banner-img br-hidden">
                                                <img src="<?= base_url() . '/assets/public/' ?>/image/other/contact.jpg" class="w-100 img-fluid" alt="contact">
                                            </span>
                                        </div>
                                    </div>
                                    <!-- contact-banner end -->
                                </div>
                                <div class="col-12 col-lg-5">
                                    <!-- contact-touch start -->
                                    <div class="col-xl-10 ms-xl-auto contact-touch">
                                        <div class="section-capture text-center text-md-start">
                                            <span class="sub-title" data-animate="animate__fadeIn">Reach out</span>
                                            <div class="section-title" data-animate="animate__fadeIn">
                                                <h2 class="section-heading">Get in touch</h2>
                                            </div>
                                        </div>
                                        <ul class="ul-mt30">
                                            <li>
                                                <div class="d-flex" data-animate="animate__fadeIn">
                                                    <span class="width-24 primary-color icon-24"><i class="ri-map-pin-range-line"></i></span>
                                                    <div class="psl-15">
                                                        <span class="d-block heading-color heading-weight">Address</span>
                                                        <span class="d-block mst-6"><?php echo $contactinfo['fulladdress'] ?></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex" data-animate="animate__fadeIn">
                                                    <span class="width-24 primary-color icon-24"><i class="ri-phone-line"></i></span>
                                                    <div class="psl-15">
                                                        <span class="d-block heading-color heading-weight">Phone</span>
                                                        <span class="d-block mst-6"><a href="tel:+919876543210" class="d-inline-block body-primary-color"><?php echo $contactinfo['mobileleb'] ?></a></span>
                                                        <span class="d-block mst-6"><a href="tel:+919988765432" class="d-inline-block body-primary-color"><?php echo $contactinfo['mobileiraq'] ?></a></span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="d-flex" data-animate="animate__fadeIn">
                                                    <span class="width-24 primary-color icon-24"><i class="ri-mail-line"></i></span>
                                                    <div class="psl-15">
                                                        <span class="d-block heading-color heading-weight">Email</span>
                                                        <span class="d-block mst-6"><a href="mailto:<?php echo $contactinfo['email'] ?>" class="d-inline-block body-primary-color"><?php echo $contactinfo['email'] ?></a></span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- contact-touch end -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- contact-banner-touch end -->
                    <!-- contact-service start -->


                    <!-- contact-map end -->

                    </br>
                    <!-- contact-form-touch end -->
                    <!-- contact-map start -->
                    <div class="contact-map section-pb" data-animate="animate__fadeIn">
                        <div class="container">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093743!2d144.9556513156168!3d-37.81731367975168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43f1b1f5b3%3A0x2f3e10c62b5d1b8b!2sMelbourne%20Central!5e0!3m2!1sen!2sau!4v1690839464351!5m2!1sen!2sau" class="d-block w-100" height="450" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Location"></iframe>
                        </div>
                    </div>
                </main>






















 


                