<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "componente".
 *
 * @property integer $id
 * @property integer $etapaid
 * @property string $componente
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Etapa $etapa
 * @property Documentopre[] $documentopres
 * @property Estadocomponente[] $estadocomponentes
 * @property Nota[] $notas
 */
class Componente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'componente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['etapaid'], 'required'],
            [['etapaid', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['componente'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'etapaid' => 'Etapaid',
            'componente' => 'Componente',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEtapa()
    {
        return $this->hasOne(Etapa::className(), ['id' => 'etapaid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocumentopres()
    {
        return $this->hasMany(Documentopre::className(), ['componenteid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstadocomponentes()
    {
        return $this->hasMany(Estadocomponente::className(), ['componenteid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNotas()
    {
        return $this->hasMany(Nota::className(), ['componenteid' => 'id']);
    }
}
