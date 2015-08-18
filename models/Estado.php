<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado".
 *
 * @property integer $id
 * @property string $estado
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Estadocomponente[] $estadocomponentes
 * @property Estudio[] $estudios
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estado'], 'required'],
            [['usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['estado'], 'string', 'max' => 80]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'estado' => 'Estado',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstadocomponentes()
    {
        return $this->hasMany(Estadocomponente::className(), ['estadoid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudios()
    {
        return $this->hasMany(Estudio::className(), ['estadoid' => 'id']);
    }
}
