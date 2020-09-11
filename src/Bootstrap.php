<?php

namespace ityakutia\banner;

use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface {

    public function bootstrap($app)
    {
        $app->setModule('banner', 'ityakutia\banner\Module');
    }
}