<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Clasecontrato;

/**
 * ClasecontratoSearch represents the model behind the search form about `app\models\Clasecontrato`.
 */
class ClasecontratoSearch extends Clasecontrato
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['clasecontrato', 'fechacrea', 'fechamodifica'], 'safe'],
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
        $query = Clasecontrato::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'usuariocrea' => $this->usuariocrea,
            'fechacrea' => $this->fechacrea,
            'usuariomodifica' => $this->usuariomodifica,
            'fechamodifica' => $this->fechamodifica,
        ]);

        $query->andFilterWhere(['like', 'clasecontrato', $this->clasecontrato]);

        return $dataProvider;
    }
}
