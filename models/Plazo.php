<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "plazo".
 *
 * @property integer $id
 * @property integer $estudioid
 * @property integer $unidadtiempoid
 * @property integer $cantidad
 * @property string $descripcion
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Estudio $estudio
 * @property Unidadtiempo $unidadtiempo
 */
class Plazo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'plazo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estudioid', 'unidadtiempoid', 'cantidad', 'descripcion'], 'required'],
            [['estudioid', 'unidadtiempoid', 'cantidad', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['descripcion'], 'string', 'max' => 255]
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
            'unidadtiempoid' => 'Unidadtiempoid',
            'cantidad' => 'Cantidad',
            'descripcion' => 'Descripcion',
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
    public function getUnidadtiempo()
    {
        return $this->hasOne(Unidadtiempo::className(), ['id' => 'unidadtiempoid']);
    }
}
