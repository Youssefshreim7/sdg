            <!--...::: Breadcrumb Section Start :::... -->
            <section class="section-breadcrumb">
                <!-- Breadcrumb Section Spacer -->
                <div class="breadcrumb-wrapper">
                    <!-- Section Container -->
                    <div class="container-default">
                        <div class="breadcrumb-block">
                            <h1 class="breadcrumb-title">Pricing</h1>
                            <ul class="breadcrumb-nav">
                                <li><a href="<?= site_url('home'); ?>" >Home</a></li>
                                <li>Pricing</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Section Container -->

                    <!-- Breadcrumb Shape - 1 -->
                    <div class="absolute left-0 top-0 -z-10">
                        <img src="<?= base_url() . '/assets/public/' ?>/img/elements/breadcrumb-shape-1.svg" alt="hero-shape-1" width="291" height="380" />
                    </div>

                    <!-- Breadcrumb Shape - 2 -->
                    <div class="absolute bottom-0 right-0 -z-[1]">
                        <img src="<?= base_url() . '/assets/public/' ?>/img/elements/breadcrumb-shape-2.svg" alt="hero-shape-2" width="291" height="380" />
                    </div>
                </div>
                <!-- Breadcrumb Section Spacer -->
            </section>
            <!--...::: Breadcrumb Section End :::... -->

            <!--...::: Pricing Section Start :::... -->
            <section class="section-pricing">
                <!-- Section Space -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container-default">
                        <!-- Section Content Wrapper -->
                        <div class="jos">
                            <!-- Section Content Block -->
                            <div class="mx-auto max-w-[600px]">
                                <div class="mb-5">
                                    <h2 class="text-center">
                                        Choice the right pricing plan that suits your need
                                    </h2>
                                </div>
                            </div>
                            <!-- Section Content Block -->
                        </div>
                        <!-- Section Content Wrapper -->

                        <!-- Pricing Area -->
                        <div>
                            <!-- Pricing Button Block -->
                            <div class="my-[50px] flex flex-row items-center justify-center gap-6">


                                <!-- Toggle Button -->

                            </div>
                            <!-- Pricing Button Block -->

                            <!-- Pricing List -->
                            <div class="grid gap-x-6 gap-y-10 md:grid-cols-2 lg:grid-cols-3">
                                <?php foreach ($price as $key => $value) { ?>
                                    <!-- Pricing Item -->
                                    <div class="jos" data-jos_animation="flip-left" data-jos_delay="0">
                                        <div class="hover-solid-shadow h-full">
                                            <div class="rounded-[10px] border-2 border-ColorBlack bg-white p-7 xl:p-10 h-full">
                                                <!-- Pricing Content Top -->
                                                <div class="text-center">
                                                    <span class="text-xl font-bold text-ColorBlack"><?php echo $value['title']; ?></span>
                                                    <div class="month text-[28px] font-normal leading-[2.85] text-ColorBlack">
                                                        $<span class="text-[48px] font-bold leading-[1.3] xl:text-[58px]"><?php echo $value['price']; ?></span>/<?php echo $value['plan']; ?>
                                                    </div>

                                                    <span class="text-sm text-ColorBlack/70"><?php echo $value['subtitle']; ?></span>
                                                </div>
                                                <!-- Pricing Content Top -->
                                                <!-- Horizontal Line Separator -->
                                                <div class="my-10 h-px w-full bg-ColorBlack/10"></div>
                                                <!-- Horizontal Line Separator -->
                                                <!-- Pricing Data list -->
                                                <ul class="flex flex-col gap-y-6 text-base font-semibold text-ColorBlack xl:px-[18px]">
                                                    <?php if (!empty($value['features'])): ?>
                                                        <?php foreach ($value['features'] as $feature): ?>
                                                            <li class="flex gap-x-3">
                                                                <span class="text-xl">
                                                                    <i class="fa-solid fa-star"></i>
                                                                </span>
                                                                <?= htmlspecialchars($feature) ?>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    <?php else: ?>
                                                        <li class="flex gap-x-3">No features available</li>
                                                    <?php endif; ?>
                                                </ul>
                                                <!-- Pricing Data list -->
                                        
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Pricing Item -->
                                <?php } ?>
                            </div>
                            <!-- Pricing List -->
                        </div>
                        <!-- Pricing Area -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!--...::: Pricing Section End :::... -->