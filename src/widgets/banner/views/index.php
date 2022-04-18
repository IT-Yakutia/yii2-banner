<?php

use ityakutia\banner\assets\BannerAsset;

$assetBundle = BannerAsset::register($this);

?>

<style>
    #hero .owl-stage {
        display: flex;
        align-items: center;
    }
    #hero .banner-bg {

    }
    #hero .banner-wrapper {
        background: #0065b380;
    }
    #hero .banner-item-icon {
        max-width: 150px;
    }
    #hero .banner-item-title,
    #hero .banner-item-description {

    }
</style>

<section id="hero" class="owl-carousel">
    <?php foreach ($banners as $key => $banner) { ?>
    <div>
        <img class="hero_background img-fluid banner-bg" src="<?= $banner->photo ?>" alt="<?= $banner->title ?>">
        <div class="hero_logotype d-flex align-items-center banner-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid banner-item-icon" src="<?= $this->theme->baseUrl; ?>/img/emblema.png" alt="<?= $banner->title ?>">
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                            <?php if(!empty($banner->title)) { ?>
                                <h1 class="text-white ml-3 banner-item-title"><?= $banner->title ?></h1>
                            <?php } ?>
                            <?php if(!empty($banner->description)) { ?>
                                <p class="text-white ml-3 banner-item-description"><?= $banner->description ?></p>
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


<?php

$script = <<< JS
    $(document).ready(function(){
    $("#hero").owlCarousel({
        loop: true,
        rewind: true,
        margin: 0,
        responsiveClass: true,
        center: true,
        items:1,
        nav:false,
        loop:true,
    });
  });
JS;

$this->registerJS($script, static::POS_READY);
?>