<?php

namespace ityakutia\poll\tests\fixtures;

use ityakutia\banner\models\Banner;
use yii\test\ActiveFixture;

class BannerFixture extends ActiveFixture
{
    public $modelClass = Banner::class;
    public $dataFile = '@ityakutia/banner/tests/_data/poll.php';
}