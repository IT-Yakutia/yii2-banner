<?php

namespace ityakutia\banner\assets;

use yii\web\AssetBundle;

class BannerAsset extends AssetBundle
{
    public $sourcePath = '@ityakutia/banner/assets/src/';
    
    public $css = [
        'css/widget.css',
    ];
    public $js = [
        'js/widget.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'ityakutia\owl\OwlAsset',
    ];
}
