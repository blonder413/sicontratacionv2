<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nota".
 *
 * @property integer $id
 * @property integer $estudioid
 * @property integer $componenteid
 * @property string $nota
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Componente $componente
 * @property Estudio $estudio
 */
class Nota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estudioid', 'componenteid', 'nota'], 'required'],
            [['estudioid', 'componenteid', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['nota'], 'string'],
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
            'estudioid' => 'Estudioid',
            'componenteid' => 'Componenteid',
            'nota' => 'Nota',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComponente()
    {
        return $this->hasOne(Componente::className(), ['id' => 'componenteid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudio()
    {
        return $this->hasOne(Estudio::className(), ['id' => 'estudioid']);
    }
}
