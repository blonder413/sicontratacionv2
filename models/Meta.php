<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "meta".
 *
 * @property integer $id
 * @property integer $subprogramaid
 * @property string $meta
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Estudiometa[] $estudiometas
 * @property Subprograma $subprograma
 */
class Meta extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'meta';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subprogramaid', 'meta'], 'required'],
            [['subprogramaid', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['meta'], 'string'],
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
            'subprogramaid' => 'Subprogramaid',
            'meta' => 'Meta',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudiometas()
    {
        return $this->hasMany(Estudiometa::className(), ['metaid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubprograma()
    {
        return $this->hasOne(Subprograma::className(), ['id' => 'subprogramaid']);
    }
}
