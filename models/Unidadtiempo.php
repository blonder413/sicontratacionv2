<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "unidadtiempo".
 *
 * @property integer $id
 * @property string $unidadtiempo
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Plazo[] $plazos
 */
class Unidadtiempo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'unidadtiempo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['unidadtiempo'], 'required'],
            [['usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['unidadtiempo'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'unidadtiempo' => 'Unidadtiempo',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlazos()
    {
        return $this->hasMany(Plazo::className(), ['unidadtiempoid' => 'id']);
    }
}
