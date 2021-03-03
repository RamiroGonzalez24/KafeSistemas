<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\EntryForm;

/**
 * EntrySearch represents the model behind the search form of `app\models\EntryForm`.
 */
class EntrySearch extends EntryForm
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'age'], 'integer'],
            [['name', 'lastname', 'email', 'dni'], 'safe'],
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
        $query = EntryForm::find();

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
            'age' => $this->age,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'lastname', $this->lastname])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'dni', $this->dni])
            ->andFilterWhere(['like', 'friend', $this->friend]);

        return $dataProvider;
    }
}
