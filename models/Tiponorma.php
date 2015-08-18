<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tiponorma".
 *
 * @property integer $id
 * @property string $tiponorma
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Fundamentojuridico[] $fundamentojuridicos
 * @property Fundamentolegal[] $fundamentolegals
 */
class Tiponorma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tiponorma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tiponorma'], 'required'],
            [['usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['tiponorma'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tiponorma' => 'Tiponorma',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFundamentojuridicos()
    {
        return $this->hasMany(Fundamentojuridico::className(), ['tiponormaid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFundamentolegals()
    {
        return $this->hasMany(Fundamentolegal::className(), ['tiponormaid' => 'id']);
    }
}
