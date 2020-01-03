<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Horas;

/**
 * HorasSearch represents the model behind the search form of `app\models\Horas`.
 */
class HorasSearch extends Horas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'projeto_id', 'requisito_id', 'responsavel_id'], 'integer'],
            [['horas'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Horas::find();

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
            'id' => $this->id,
            'projeto_id' => $this->projeto_id,
            'requisito_id' => $this->requisito_id,
            'responsavel_id' => $this->responsavel_id,
            'horas' => $this->horas,
        ]);

        return $dataProvider;
    }
}
