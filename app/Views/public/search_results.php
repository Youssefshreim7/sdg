<!-- Start breadcrumb section -->
      <section class="breadcrumb__section breadcrumb__bg">
          <div class="container">
              <div class="row row-cols-1">
                  <div class="col">
                      <div class="breadcrumb__content">
                          <h1 class="breadcrumb__content--title mb-10">Search Result
                          <ul class="breadcrumb__content--menu d-flex">
                              <li class="breadcrumb__content--menu__items"><a href="<?= site_url('home'); ?>">Home</a></li>
                              <li class="breadcrumb__content--menu__items"><span class="text__secondary"><?php echo $searchTerm; ?></span></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End breadcrumb section -->

      <!-- Start shop section -->
      <section class="shop__section section--padding">
          <div class="container-fluid">
              <div class="row">

                  <div class="col-xl-9 col-lg-8 mx-auto">

                      <div class="shop__product--wrapper">
                          <div class="tab_content">
                              <div id="product_grid" class="tab_pane active show">
                                  <div class="product__section--inner product__grid--inner">
                                      <div class="row row-cols-xl-3 row-cols-lg-2 row-cols-md-3 row-cols-2 mb--n30">
                                        <?php if(!empty($results_products)) { ?>
                                          <?php foreach ($results_products as $key => $value) { ?>
                                          <div class="col custom-col-2 mb-30">
                                              <article class="product__card">
                                                  <div class="product__card--thumbnail">
                                                      <a class="product__card--thumbnail__link display-block" href="<?= site_url('home/productdetails/'.$value['id']); ?>">
                                                          <img class="product__card--thumbnail__img product__primary--img display-block" style="max-height:370px; object-fit: fill;" src="<?= base_url() . 'uploads/' . $value['image'] ?>" alt="product-img">
                                                       </a>

                                                  </div>
                                                  <div class="product__card--content text-center">
                                                    <span class="product__card--meta__tag"><a href="<?= site_url('home/products_by_category/'.$value['categories_id']); ?>"><?php echo $value['catname']; ?></a> <span class="subcat">/</span> <a href="<?= site_url('home/products_by_subcat/'.$value['categories_id'].'/'.$value['subcat_id']); ?>"><?php echo $value['subcatname']; ?></a></span>
                                                      <h3 class="product__card--title" style="min-height:50px"><a href="<?= site_url('home/productdetails/'.$value['id']); ?>"><?php echo $value['name']; ?> </a></h3>

                                                   </div>
                                              </article>
                                          </div>
                                          <?php } ?>
                                            <?php } ?>


                                      </div>
                                  </div>
                              </div>

                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- End shop section -->
