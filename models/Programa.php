<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "programa".
 *
 * @property integer $id
 * @property integer $ejeid
 * @property string $programa
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Eje $eje
 * @property Subprograma[] $subprogramas
 */
class Programa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'programa';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ejeid', 'programa'], 'required'],
            [['ejeid', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['programa'], 'string'],
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
            'ejeid' => 'Ejeid',
            'programa' => 'Programa',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEje()
    {
        return $this->hasOne(Eje::className(), ['id' => 'ejeid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubprogramas()
    {
        return $this->hasMany(Subprograma::className(), ['programaid' => 'id']);
    }
}
