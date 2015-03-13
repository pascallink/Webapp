<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Teams;

/**
 * TeamsSearch represents the model behind the search form about `app\models\Teams`.
 */
class TeamsSearch extends Teams
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'club_id'], 'integer'],
            [['name', 'season', 'short', 'year'], 'safe'],
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
        $query = Teams::find();

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
            'club_id' => $this->club_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'season', $this->season])
            ->andFilterWhere(['like', 'short', $this->short])
            ->andFilterWhere(['like', 'year', $this->year]);

        return $dataProvider;
    }
}
