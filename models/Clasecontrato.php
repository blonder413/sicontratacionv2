<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "clasecontrato".
 *
 * @property integer $id
 * @property string $clasecontrato
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Estudio[] $estudios
 */
class Clasecontrato extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clasecontrato';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['clasecontrato'], 'required'],
            [['usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['clasecontrato'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'clasecontrato' => 'Clasecontrato',
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
        return $this->hasMany(Estudio::className(), ['clasecontratoid' => 'id']);
    }
}
