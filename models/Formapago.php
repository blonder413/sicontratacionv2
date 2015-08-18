<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "formapago".
 *
 * @property integer $id
 * @property integer $estudioid
 * @property integer $modalidadpagoid
 * @property integer $fuenteformapagoid
 * @property integer $cantidad
 * @property double $valor
 * @property integer $estado
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Estudio $estudio
 * @property Fuenteformapago $fuenteformapago
 * @property Modalidadpago $modalidadpago
 */
class Formapago extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'formapago';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estudioid', 'modalidadpagoid', 'fuenteformapagoid', 'cantidad', 'valor', 'estado'], 'required'],
            [['estudioid', 'modalidadpagoid', 'fuenteformapagoid', 'cantidad', 'estado', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['valor'], 'number'],
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
            'modalidadpagoid' => 'Modalidadpagoid',
            'fuenteformapagoid' => 'Fuenteformapagoid',
            'cantidad' => 'Cantidad',
            'valor' => 'Valor',
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
    public function getEstudio()
    {
        return $this->hasOne(Estudio::className(), ['id' => 'estudioid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFuenteformapago()
    {
        return $this->hasOne(Fuenteformapago::className(), ['id' => 'fuenteformapagoid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModalidadpago()
    {
        return $this->hasOne(Modalidadpago::className(), ['id' => 'modalidadpagoid']);
    }
}
