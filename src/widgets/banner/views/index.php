<?php

use ityakutia\banner\assets\BannerAsset;

$assetBundle = BannerAsset::register($this);

?>

<style>
    #hero {
        position: relative;
    }
    #hero .owl-stage {
        display: flex;
        align-items: center;
    }
    #hero .owl-dots {
        position: absolute;
        bottom: 0;
        height: 2rem;
        width: 100%;
        text-align: center;
    }
    #hero .owl-dots .owl-dot {
        width: 1rem;
        height: 1rem;
        margin: 0.5rem;
        background: #0065b3;
        border-radius: 50%;
        border: 2px solid #003f6f;
        opacity: 0.5;
    }
    #hero .owl-dots .owl-dot:hover{
        opacity: 1;
    }
    #hero .owl-dots .owl-dot.active{
        opacity: 1;
        background: #003f6f;
    }
    #hero .owl-nav .owl-prev,
    #hero .owl-nav .owl-next {
        position: absolute;
        top: 0;
        bottom: 0;
    }
    #hero .owl-nav .owl-prev span,
    #hero .owl-nav .owl-next span {
        display: block;
        width: 40px;
        height: 40px;
        font-size: 2rem;
        color: #003f6f;
        padding-top: 1px;
        display: block;
        line-height: 1;
        border-radius: 50%;
        background: #0065b3;
        opacity: 0.1;
        transition: all ease-in-out 0.3s; 
    }
    #hero .owl-nav .owl-prev:hover span,
    #hero .owl-nav .owl-next:hover span {
        opacity: 1;
        color: white;
    }
    #hero .owl-nav .owl-prev {
        left: 0;
    }
    #hero .owl-nav .owl-next {
        right: 0;
    }
    #hero .owl-nav .owl-prev span {
        margin-left: 0.5rem;
    }
    #hero .owl-nav .owl-next span {
        margin-right: 0.5rem;
    }
    #hero .banner-bg {

    }
    #hero .banner-wrapper {
        background: #0065b380;
    }
    #hero .banner-item-icon {
        max-width: 150px;
        min-width: 100px;
        
    }
    #hero .banner-item-title {
        max-width: 800px;
        font-size: 16px;
    }
    #hero .banner-item-description {
        font-size: 13px;
        display: none;
    }
    @media screen and (min-width: 567px) {
        #hero .banner-item-title {
            font-size: 17px;
        }
        #hero .banner-item-description {
            font-size: 14px;
            display: block;
        }
    }
    @media screen and (min-width: 768px) {
        #hero .banner-item-title {
            font-size: 22px;
        }
    }
    @media screen and (min-width: 992px) {
        #hero .banner-item-title {
            font-size: 22px;
        }
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
        nav:true,
        loop:true,
        dots:true,
    });
  });
JS;

$this->registerJS($script, static::POS_READY);
?>