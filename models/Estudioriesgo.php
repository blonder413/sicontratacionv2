<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estudioriesgo".
 *
 * @property integer $id
 * @property integer $estudioid
 * @property integer $riesgoid
 * @property integer $frecuenciaid
 * @property integer $consecuenciaid
 * @property string $asignacion
 * @property string $cuantia
 * @property string $vigencia
 * @property integer $estado
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Estudio $estudio
 * @property Riesgo $riesgo
 * @property Consecuencia $consecuencia
 * @property Frecuencia $frecuencia
 */
class Estudioriesgo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estudioriesgo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estudioid', 'riesgoid', 'frecuenciaid', 'consecuenciaid', 'asignacion', 'cuantia', 'vigencia', 'estado'], 'required'],
            [['estudioid', 'riesgoid', 'frecuenciaid', 'consecuenciaid', 'estado', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['asignacion', 'cuantia', 'vigencia'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'estudioid' => 'Estudioid',
            'riesgoid' => 'Riesgoid',
            'frecuenciaid' => 'Frecuenciaid',
            'consecuenciaid' => 'Consecuenciaid',
            'asignacion' => 'Asignacion',
            'cuantia' => 'Cuantia',
            'vigencia' => 'Vigencia',
            'estado' => 'Estado',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudio()
    {
        return $this->hasOne(Estudio::className(), ['id' => 'estudioid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiesgo()
    {
        return $this->hasOne(Riesgo::className(), ['id' => 'riesgoid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConsecuencia()
    {
        return $this->hasOne(Consecuencia::className(), ['id' => 'consecuenciaid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFrecuencia()
    {
        return $this->hasOne(Frecuencia::className(), ['id' => 'frecuenciaid']);
    }
}
