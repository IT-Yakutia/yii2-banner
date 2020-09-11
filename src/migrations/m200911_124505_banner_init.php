<?php

use yii\db\Migration;

/**
 * Class m200911_124505_banner_init
 */
class m200911_124505_banner_init extends Migration
{

    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('banner', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'photo' => $this->string()->notNull(),
            'description' => $this->string()->notNull(),
            'link' => $this->string(),
            'sort' => $this->integer(),

            'is_publish' => $this->boolean(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('banner');
    }
}
