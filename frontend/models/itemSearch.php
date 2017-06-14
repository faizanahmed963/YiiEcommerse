<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\item;

/**
 * itemSearch represents the model behind the search form about `app\models\item`.
 */
class itemSearch extends item
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['item_id', 'user_id', 'item_price'], 'integer'],
            [['item_title', 'item_description', 'item_tags', 'item_image'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = item::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'item_id' => $this->item_id,
            'user_id' => $this->user_id,
            'item_price' => $this->item_price,
        ]);

        $query->andFilterWhere(['like', 'item_title', $this->item_title])
            ->andFilterWhere(['like', 'item_description', $this->item_description])
            ->andFilterWhere(['like', 'item_tags', $this->item_tags])
            ->andFilterWhere(['like', 'item_image', $this->item_image]);

        return $dataProvider;
    }
}
