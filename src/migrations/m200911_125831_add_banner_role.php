<?php

use yii\db\Migration;

/**
 * Class m200911_125831_add_banner_role
 */
class m200911_125831_add_banner_role extends Migration
{
    public function safeUp()
    {
        $auth = Yii::$app->authManager;

        $bannerRedactor = $auth->getPermission('banner');
        if($bannerRedactor == null){
            $bannerRedactor = $auth->createPermission('banner');
            $bannerRedactor->description = 'Редактирование баннеров';

            $auth->add($bannerRedactor);

            $operator = $auth->getRole('operator');
            if($operator != null || $operator != false)
                $auth->addChild($operator,$bannerRedactor);
        }
    }

    public function safeDown()
    {
        $auth = Yii::$app->authManager;
        $bannerRedactor = $auth->getPermission('banner');
        if($bannerRedactor !== null)
            $auth->remove($bannerRedactor);
        
    }
}
