<?php

use ityakutia\banner\widgets\banner\assets\BannerAsset;

$assetBundle = BannerAsset::register($this);

?>

<style>
    #hero .owl-stage {
        display: flex;
        align-items: center;
    }
</style>

<section id="hero">
    <?php foreach ($banners as $key => $banner) { ?>
    <div>
        <img class="hero_background img-fluid" src="<?= $banner->photo ?>" alt="<?= $banner->title ?>">
        <div class="hero_logotype d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="d-flex align-items-center">
                            <img class="img-fluid " src="<?= $this->theme->baseUrl; ?>/img/emblema.png" alt="<?= $banner->title ?>">
                        </div>
                        <div class="d-flex align-items-center">
                            <?php if(!empty($banner->title)) { ?>
                                <h1 class="text-white ml-3"><?= $banner->title ?></h1>
                            <?php } ?>
                            <?php if(!empty($banner->description)) { ?>
                                <p class="text-white ml-3"><?= $banner->description ?></p>
                            <?php } ?>
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