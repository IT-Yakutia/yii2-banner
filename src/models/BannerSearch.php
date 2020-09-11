<?php

namespace ityakutia\banner\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

class BannerSearch extends Banner 
{
    public function rules()
    {
        return [
            [['id', 'sort', 'is_publish', 'status', 'created_at', 'updated_at'], 'integer'],
            [['title', 'description', 'photo', 'link'], 'safe']
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Banner::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort'=> ['defaultOrder' => ['sort'=>SORT_ASC]],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'sort' => $this->sort,
            'is_publish' => $this->is_publish,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'link', $this->link])
            ->andFilterWhere(['like', 'photo', $this->photo]);

        return $dataProvider;
    }
}