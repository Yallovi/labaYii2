<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Author;

/**
 * AuthorSearch represents the model behind the search form of `app\modules\admin\models\Author`.
 */
class AuthorSearch extends Author
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_author', 'count'], 'integer'],
            [['last_name', 'first_name', 'patronymic', 'date_of_birth', 'date_of_death', 'language_of_works'], 'safe'],
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
        $query = Author::find();

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
            'id_author' => $this->id_author,
            'date_of_birth' => $this->date_of_birth,
            'date_of_death' => $this->date_of_death,
            'count' => $this->count,
        ]);

        $query->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'patronymic', $this->patronymic])
            ->andFilterWhere(['like', 'language_of_works', $this->language_of_works]);

        return $dataProvider;
    }
}
