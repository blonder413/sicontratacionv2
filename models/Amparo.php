<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "amparo".
 *
 * @property integer $id
 * @property string $amparo
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Estudioamparo[] $estudioamparos
 */
class Amparo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'amparo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['amparo'], 'required'],
            [['usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['amparo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'amparo' => 'Amparo',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudioamparos()
    {
        return $this->hasMany(Estudioamparo::className(), ['amparoid' => 'id']);
    }
}
