<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\requisito;

/**
 * requisitoSearch represents the model behind the search form of `app\models\requisito`.
 */
class requisitoSearch extends requisito
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'projeto_id', 'resp_id', 'situação', 'prioridade'], 'integer'],
            [['titulo', 'descrição'], 'safe'],
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
        $query = requisito::find();

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
            'resp_id' => $this->resp_id,
            'situação' => $this->situação,
            'prioridade' => $this->prioridade,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'descrição', $this->descrição]);

        return $dataProvider;
    }
}
