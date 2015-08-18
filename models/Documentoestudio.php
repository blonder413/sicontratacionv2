<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "documentoestudio".
 *
 * @property integer $id
 * @property integer $documentopreid
 * @property integer $estudioid
 * @property integer $estado
 * @property string $evidencia
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Bpim[] $bpims
 * @property Consultacdp[] $consultacdps
 * @property Documentopre $documentopre
 * @property Estudio $estudio
 */
class Documentoestudio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'documentoestudio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['documentopreid', 'estudioid', 'estado', 'evidencia'], 'required'],
            [['documentopreid', 'estudioid', 'estado', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['evidencia'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'documentopreid' => 'Documentopreid',
            'estudioid' => 'Estudioid',
            'estado' => 'Estado',
            'evidencia' => 'Evidencia',
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
        return $this->hasMany(Bpim::className(), ['documentoestudioid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getConsultacdps()
    {
        return $this->hasMany(Consultacdp::className(), ['documentoestudioid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocumentopre()
    {
        return $this->hasOne(Documentopre::className(), ['id' => 'documentopreid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudio()
    {
        return $this->hasOne(Estudio::className(), ['id' => 'estudioid']);
    }
}
