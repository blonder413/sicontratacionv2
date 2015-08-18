<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cdp".
 *
 * @property integer $id
 * @property integer $estudioid
 * @property string $fecha
 * @property string $codigo
 * @property string $descripcion
 * @property double $valor
 * @property string $numerosolicitud
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Estudio $estudio
 * @property Cdprubro[] $cdprubros
 */
class Cdp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cdp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estudioid', 'fecha', 'codigo', 'descripcion', 'valor', 'numerosolicitud'], 'required'],
            [['estudioid', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['fecha', 'fechacrea', 'fechamodifica'], 'safe'],
            [['descripcion'], 'string'],
            [['valor'], 'number'],
            [['codigo', 'numerosolicitud'], 'string', 'max' => 45]
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
            'fecha' => 'Fecha',
            'codigo' => 'Codigo',
            'descripcion' => 'Descripcion',
            'valor' => 'Valor',
            'numerosolicitud' => 'Numerosolicitud',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudio()
    {
        return $this->hasOne(Estudio::className(), ['id' => 'estudioid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCdprubros()
    {
        return $this->hasMany(Cdprubro::className(), ['cdp_id' => 'id']);
    }
}
