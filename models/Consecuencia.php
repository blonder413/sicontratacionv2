<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consecuencia".
 *
 * @property integer $id
 * @property string $consecuencia
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Estudioamparo[] $estudioamparos
 * @property Estudioriesgo[] $estudioriesgos
 */
class Consecuencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'consecuencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['consecuencia'], 'required'],
            [['usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['consecuencia'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'consecuencia' => 'Consecuencia',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudioamparos()
    {
        return $this->hasMany(Estudioamparo::className(), ['consecuenciaid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudioriesgos()
    {
        return $this->hasMany(Estudioriesgo::className(), ['consecuenciaid' => 'id']);
    }
}
