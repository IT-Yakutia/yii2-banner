<?php

use yii\bootstrap4\Html;
use ityakutia\banner\assets\BannerAsset;

$assetBundle = BannerAsset::register($this);

?>

<section id="hero" class="owl-carousel">
    <?php foreach ($banners as $key => $banner) { ?>
    <div>
        <img class="img-fluid" src="<?= $banner->photo ?>" alt="<?= $banner->title ?>">
        <div class="banner-wrapper d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid banner-item-icon" src="<?= $this->theme->baseUrl; ?>/img/emblema.png" alt="<?= $banner->title ?>">
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <?php if(!empty($banner->title)) { ?>
                                    <h1 class="banner-item-title text-white ml-3 "><?= $banner->title ?></h1>
                                <?php } ?>
                                <?php if(!empty($banner->description)) { ?>
                                    <p class="banner-item-description text-white ml-3 "><?= $banner->description ?></p>
                                <?php } ?>
                                <?php if(!empty($banner->link)) { ?>
                                    <?= Html::a("Подробнее", $banner->link, ['class' => 'banner-item-link ml-3 btn text-white', 'target' => '_blank']) ?>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
</section>