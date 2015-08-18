<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modalidadseleccion".
 *
 * @property integer $id
 * @property string $modalidadseleccion
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Documentopre[] $documentopres
 * @property Estudio[] $estudios
 */
class Modalidadseleccion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modalidadseleccion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['modalidadseleccion'], 'required'],
            [['usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['modalidadseleccion'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'modalidadseleccion' => 'Modalidadseleccion',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDocumentopres()
    {
        return $this->hasMany(Documentopre::className(), ['modalidadseleccionid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstudios()
    {
        return $this->hasMany(Estudio::className(), ['modalidadseleccionid' => 'id']);
    }
}
