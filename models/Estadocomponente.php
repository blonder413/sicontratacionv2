<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estadocomponente".
 *
 * @property integer $id
 * @property integer $estudioid
 * @property integer $componenteid
 * @property integer $estadoid
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Componente $componente
 * @property Estado $estado
 * @property Estudio $estudio
 */
class Estadocomponente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estadocomponente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estudioid', 'componenteid', 'estadoid'], 'required'],
            [['estudioid', 'componenteid', 'estadoid', 'usuariocrea', 'usuariomodifica'], 'integer'],
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
            'estadoid' => 'Estadoid',
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
    public function getEstado()
    {
        return $this->hasOne(Estado::className(), ['id' => 'estadoid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudio()
    {
        return $this->hasOne(Estudio::className(), ['id' => 'estudioid']);
    }
}
