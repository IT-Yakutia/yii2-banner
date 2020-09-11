<?php

namespace ityakutia\banner\models;

use Yii;
use yii\db\ActiveRecord;
use yii\behaviors\TimestampBehavior;
use uraankhayayaal\sortable\behaviors\Sortable;

class Banner extends ActiveRecord
{
    public static function tableName()
    {
        return 'banner';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
            'sortable' => [
                'class' => Sortable::class,
                'query' => self::find(),
            ]
        ];
    }

    public function rules()
    {
        return [
            [['title','description', 'photo'], 'required'],
            [['sort', 'is_publish', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'description', 'photo'], 'string', 'max' => 255],
            [['link'], 'url'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'description' => 'Описание',
            'photo' => 'Фото',
            'link' => 'Ссылка',
            'sort' => 'Sort',
            'is_publish' => 'Опубликовать',
            'status' => 'Status',
            'created_at' => 'Создан',
            'updated_at' => 'Изменен',
        ];
    }
}