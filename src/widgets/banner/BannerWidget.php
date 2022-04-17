<?php

namespace ityakutia\banner\widgets\banner;

use ityakutia\banner\models\Banner;
use yii\base\Widget;

class BannerWidget extends Widget
{
    public function run()
    {
        $banners = Banner::find()->where(['is_publish' => 1])->orderBy(['sort' => SORT_ASC])->all();
        
        return $this->render('index', [
            'banners' => $banners,
        ]);
    }
}