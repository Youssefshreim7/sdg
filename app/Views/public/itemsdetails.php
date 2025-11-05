        <!-- breadcrumb-area -->
        <section class="breadcrumb__area">
            <div class="breadcrumb__bg" data-background="<?= base_url() . '/assets/public/' ?>/img/bg/breadcrumb__bg.jpg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb__content">
                            <h2 class="title">Shop Details</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="<?= site_url('home'); ?>">Home</a>
                                </span>
                                <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                                <span property="itemListElement" typeof="ListItem">Shop Details</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- shop-details-area -->
<?php
// 1) Build a flat list of image paths (main + gallery)
$images = [];

// Main image (from product)
if (!empty($itemsinfo['image'])) {
    $images[] = 'uploads/' . ltrim($itemsinfo['image'], '/');
}

// Gallery images (support string or ['image'] form)
if (!empty($itemsgall) && is_array($itemsgall)) {
    foreach ($itemsgall as $g) {
        $fname = is_array($g) ? ($g['photo'] ?? null) : $g;
        if (!empty($fname)) {
            $images[] = 'uploads/' . ltrim($fname, '/');
        }
    }
}

// Remove duplicates & reindex
$images = array_values(array_unique($images));
?>

<section class="shop__details-area section-py-130">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="shop__details-images-wrap">
                    <!-- Main viewer -->
                    <div class="tab-content" id="myTabContent">
                        <?php if (!empty($images)): ?>
                            <?php foreach ($images as $i => $src): ?>
                                <div class="tab-pane <?= $i === 0 ? 'show active' : '' ?>"
                                     id="img-tab-<?= $i ?>"
                                     role="tabpanel" style=" max-width: 250px; "
                                     aria-labelledby="img-tab-btn-<?= $i ?>"
                                     tabindex="0">
                                    <a href="<?= base_url($src); ?>" class="popup-image expand-img">
                                        <img src="<?= base_url('assets/public/img/icons/expand.svg'); ?>" alt="" class="injectable">
                                    </a>
                                    <img src="<?= base_url($src); ?>" alt="image <?= $i; ?>">
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <!-- Fallback if no images at all -->
                            <div class="tab-pane show active" id="img-tab-0" role="tabpanel" aria-labelledby="img-tab-btn-0" tabindex="0" >
                                <img src="<?= base_url('assets/public/img/placeholder.png'); ?>" alt="placeholder">
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Thumbnails -->
                    <?php if (!empty($images)): ?>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <?php foreach ($images as $i => $src): ?>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link <?= $i === 0 ? 'active' : ''; ?>"
                                            id="img-tab-btn-<?= $i ?>"
                                            data-bs-toggle="tab"
                                            data-bs-target="#img-tab-<?= $i ?>"
                                            type="button"
                                            role="tab"
                                            aria-controls="img-tab-<?= $i ?>"
                                            aria-selected="<?= $i === 0 ? 'true' : 'false'; ?>">
                                        <img src="<?= base_url($src); ?>" alt="thumb <?= $i; ?>">
                                    </button>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="shop__details-content">
                    <h2 class="title"><?= $itemsinfo['name']; ?></h2>
                    <div class="shop__details-content-inner">
                        <p><?= $itemsinfo['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

        <!-- shop-details-area-end -->

