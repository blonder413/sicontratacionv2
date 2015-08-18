<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "consultacdp".
 *
 * @property integer $id
 * @property integer $estudioid
 * @property integer $documentoestudioid
 * @property string $objeto
 * @property double $valorcontrato
 * @property string $descripcionplazo
 * @property integer $estado
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Bpim[] $bpims
 * @property Documentoestudio $documentoestudio
 * @property Estudio $estudio
 */
class Consultacdp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'consultacdp';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estudioid', 'objeto', 'valorcontrato', 'descripcionplazo', 'estado'], 'required'],
            [['estudioid', 'documentoestudioid', 'estado', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['objeto', 'descripcionplazo'], 'string'],
            [['valorcontrato'], 'number'],
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
            'documentoestudioid' => 'Documentoestudioid',
            'objeto' => 'Objeto',
            'valorcontrato' => 'Valorcontrato',
            'descripcionplazo' => 'Descripcionplazo',
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
    public function getBpims()
    {
        return $this->hasMany(Bpim::className(), ['consultacdpid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocumentoestudio()
    {
        return $this->hasOne(Documentoestudio::className(), ['id' => 'documentoestudioid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudio()
    {
        return $this->hasOne(Estudio::className(), ['id' => 'estudioid']);
    }
}
