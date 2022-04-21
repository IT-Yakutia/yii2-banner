<?php

namespace ityakutia\banner\assets;

use yii\web\AssetBundle;

class InvalidBannerAsset extends AssetBundle
{
    public $sourcePath = '@ityakutia/banner/assets/src/';
    
    public $css = [
        'css/invalid.css',
    ];
    public $js = [
    ];
    public $depends = [
        'ityakutia\banner\assets\BannerAsset',
    ];
}
