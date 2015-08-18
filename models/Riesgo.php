<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "riesgo".
 *
 * @property integer $id
 * @property string $riesgo
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Estudioriesgo[] $estudioriesgos
 */
class Riesgo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'riesgo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['riesgo'], 'required'],
            [['usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['riesgo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'riesgo' => 'Riesgo',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudioriesgos()
    {
        return $this->hasMany(Estudioriesgo::className(), ['riesgoid' => 'id']);
    }
}
