<?php

namespace ityakutia\banner\assets;

use yii\web\AssetBundle;

class InvalidBannerAsset extends AssetBundle
{
    public $sourcePath = '@ityakutia/banner/assets/src/';
    
    public $css = [
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
