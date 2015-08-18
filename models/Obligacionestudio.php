<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obligacionestudio".
 *
 * @property integer $id
 * @property integer $estudioid
 * @property string $obligacionestudio
 * @property integer $estado
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Estudio $estudio
 */
class Obligacionestudio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'obligacionestudio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estudioid', 'obligacionestudio', 'estado'], 'required'],
            [['estudioid', 'estado', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['obligacionestudio'], 'string'],
            [['fechacrea', 'fechamodifica'], 'safe']
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
            'obligacionestudio' => 'Obligacionestudio',
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
}
