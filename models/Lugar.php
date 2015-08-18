<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "lugar".
 *
 * @property integer $id
 * @property string $lugar
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Estudio[] $estudios
 */
class Lugar extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lugar';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['lugar'], 'required'],
            [['usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['lugar'], 'string', 'max' => 80]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lugar' => 'Lugar',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudios()
    {
        return $this->hasMany(Estudio::className(), ['lugarid' => 'id']);
    }
}
