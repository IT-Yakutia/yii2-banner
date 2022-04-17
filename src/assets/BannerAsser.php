<?php

namespace ityakutia\banner\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class BannerAsset extends AssetBundle
{
    public $sourcePath = '@ityakutia/banner/assets/src/';
    
    public $css = [
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
    ];
    public $js = [
        'js/owl.carousel.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
