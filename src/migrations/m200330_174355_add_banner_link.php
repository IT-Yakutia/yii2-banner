<?php

use yii\db\Migration;

/**
 * Class m200330_174355_add_banner_link
 */
class m200330_174355_add_banner_link extends Migration
{
    public function safeUp()
    {
        $this->addColumn('banner', 'link', $this->string());
    }

    public function safeDown()
    {
        $this->dropColumn('banner', 'link');
    }
}
