<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subprograma".
 *
 * @property integer $id
 * @property integer $programaid
 * @property string $subprograma
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Meta[] $metas
 * @property Programa $programa
 */
class Subprograma extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subprograma';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['programaid', 'subprograma'], 'required'],
            [['programaid', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['subprograma'], 'string'],
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
            'programaid' => 'Programaid',
            'subprograma' => 'Subprograma',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMetas()
    {
        return $this->hasMany(Meta::className(), ['subprogramaid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrograma()
    {
        return $this->hasOne(Programa::className(), ['id' => 'programaid']);
    }
}
