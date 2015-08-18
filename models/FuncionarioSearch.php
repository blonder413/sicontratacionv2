<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Funcionario;

/**
 * FuncionarioSearch represents the model behind the search form about `app\models\Funcionario`.
 */
class FuncionarioSearch extends Funcionario
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'dependenciaid', 'cargoid', 'estado', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['primernombre', 'segundonombre', 'primerapellido', 'segundoapellido', 'celular', 'email', 'fechacrea', 'fechamodifica'], 'safe'],
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
        $query = Funcionario::find();

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
            'dependenciaid' => $this->dependenciaid,
            'cargoid' => $this->cargoid,
            'estado' => $this->estado,
            'usuariocrea' => $this->usuariocrea,
            'fechacrea' => $this->fechacrea,
            'usuariomodifica' => $this->usuariomodifica,
            'fechamodifica' => $this->fechamodifica,
        ]);

        $query->andFilterWhere(['like', 'primernombre', $this->primernombre])
            ->andFilterWhere(['like', 'segundonombre', $this->segundonombre])
            ->andFilterWhere(['like', 'primerapellido', $this->primerapellido])
            ->andFilterWhere(['like', 'segundoapellido', $this->segundoapellido])
            ->andFilterWhere(['like', 'celular', $this->celular])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}
