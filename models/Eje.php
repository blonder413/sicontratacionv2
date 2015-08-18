<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eje".
 *
 * @property integer $id
 * @property integer $pdmid
 * @property string $eje
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Pdm $pdm
 * @property Programa[] $programas
 */
class Eje extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'eje';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pdmid', 'eje'], 'required'],
            [['pdmid', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['eje'], 'string'],
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
            'pdmid' => 'Pdmid',
            'eje' => 'Eje',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPdm()
    {
        return $this->hasOne(Pdm::className(), ['id' => 'pdmid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgramas()
    {
        return $this->hasMany(Programa::className(), ['ejeid' => 'id']);
    }
}
