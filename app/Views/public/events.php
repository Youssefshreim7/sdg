                    <div class="breadcrumb-area ptb-100 bg-img text-center" data-bgimg="<?= base_url() . '/assets/public/' ?>/image/other/nbackground.jpg">
                        <div class="container">
                            <span class="d-block extra-color"><a href="index.html" class="extra-color">Home</a> - About us</span>
                            <h2 class="extra-color font-24 font-xl-32 mst-4 mst-xl-7">About us</h2>
                        </div>
                    </div>
            <!-- breadcrumb-area end -->
            <!-- main start -->
            <main id="main">

            <!-- .blog-grid-main -->
            <div class="blog-grid-main flat-spacing">
                <div class="container">
                    <div class="row">
                        <div class="tf-grid-layout md-col-3 mb_48 ">
                          <?php foreach($news as $key => $value){?>
                            <div class="blog-article-item">
                                <div class="article-thumb">
                                    <a href="<?= site_url('home/eventsdetails/'.$value['id']); ?>">
                                        <img class="lazyload" data-src="<?= base_url() . 'uploads/' . $value['image'] ?>"
                                            src="<?= base_url() . 'uploads/' . $value['image'] ?>" alt="img-blog">
                                    </a>
                                    <div class="article-label">
                                        
                                    </div>
                                </div>
                                <div class="article-content">
                                    <ul class="meta">
                                        <li class="text-button-small"><a href="#" class="link"><?php echo $value['date'];?></a></li>
                               
                                    </ul>
                                    <h5 class="article-title">
                                        <a href="<?= site_url('home/eventsdetails/'.$value['id']); ?>" class="line-clamp-2 link"><?php echo $value['name'];?></a>
                                    </h5>
                                    <p class="article-description text_secondary text-body-default">
                                        <?php
                                                    $maxLength = 100;
                                                    echo strlen($value['description']) > $maxLength
                                                        ? substr($value['description'], 0, $maxLength) . '...'
                                                        : $value['description'];
                                                    ?>
                                    </p>
                                </div>
                            </div>
                    <?php } ?>
                        </div>
                     
                    </div>
                </div>
            </div><!-- /.blog-grid-main -->

        </div><!-- main-content -->