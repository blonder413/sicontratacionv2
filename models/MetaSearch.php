<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Meta;

/**
 * MetaSearch represents the model behind the search form about `app\models\Meta`.
 */
class MetaSearch extends Meta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'subprogramaid', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['meta', 'fechacrea', 'fechamodifica'], 'safe'],
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
        $query = Meta::find();

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
            'subprogramaid' => $this->subprogramaid,
            'usuariocrea' => $this->usuariocrea,
            'fechacrea' => $this->fechacrea,
            'usuariomodifica' => $this->usuariomodifica,
            'fechamodifica' => $this->fechamodifica,
        ]);

        $query->andFilterWhere(['like', 'meta', $this->meta]);

        return $dataProvider;
    }
}
