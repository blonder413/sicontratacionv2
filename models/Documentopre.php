<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "documentopre".
 *
 * @property integer $id
 * @property integer $documentoid
 * @property integer $modalidadseleccionid
 * @property integer $componenteid
 * @property integer $orden
 * @property integer $obligatorio
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Documentoestudio[] $documentoestudios
 * @property Componente $componente
 * @property Documento $documento
 * @property Modalidadseleccion $modalidadseleccion
 */
class Documentopre extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'documentopre';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['documentoid', 'modalidadseleccionid', 'componenteid', 'orden', 'obligatorio'], 'required'],
            [['documentoid', 'modalidadseleccionid', 'componenteid', 'orden', 'obligatorio', 'usuariocrea', 'usuariomodifica'], 'integer'],
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
            'documentoid' => 'Documentoid',
            'modalidadseleccionid' => 'Modalidadseleccionid',
            'componenteid' => 'Componenteid',
            'orden' => 'Orden',
            'obligatorio' => 'Obligatorio',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocumentoestudios()
    {
        return $this->hasMany(Documentoestudio::className(), ['documentopreid' => 'id']);
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
    public function getDocumento()
    {
        return $this->hasOne(Documento::className(), ['id' => 'documentoid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModalidadseleccion()
    {
        return $this->hasOne(Modalidadseleccion::className(), ['id' => 'modalidadseleccionid']);
    }
}
