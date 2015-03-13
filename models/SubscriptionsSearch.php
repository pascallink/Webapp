<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Subscriptions;

/**
 * SubscriptionsSearch represents the model behind the search form about `app\models\Subscriptions`.
 */
class SubscriptionsSearch extends Subscriptions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'team_id', 'event_id', 'state_id'], 'integer'],
            [['date'], 'safe'],
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
        $query = Subscriptions::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'team_id' => $this->team_id,
            'event_id' => $this->event_id,
            'date' => $this->date,
            'state_id' => $this->state_id,
        ]);

        return $dataProvider;
    }
}
