<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "etapa".
 *
 * @property integer $id
 * @property string $etapa
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Componente[] $componentes
 */
class Etapa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'etapa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['etapa'], 'required'],
            [['usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['etapa'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'etapa' => 'Etapa',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComponentes()
    {
        return $this->hasMany(Componente::className(), ['etapaid' => 'id']);
    }
}
