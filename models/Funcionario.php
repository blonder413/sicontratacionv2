<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "funcionario".
 *
 * @property integer $id
 * @property integer $dependenciaid
 * @property integer $cargoid
 * @property string $primernombre
 * @property string $segundonombre
 * @property string $primerapellido
 * @property string $segundoapellido
 * @property string $celular
 * @property string $email
 * @property integer $estado
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Cargo $cargo
 * @property Dependencia $dependencia
 * @property Responsableestudio[] $responsableestudios
 * @property Supervisorestudio[] $supervisorestudios
 */
class Funcionario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'funcionario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['dependenciaid', 'cargoid', 'primernombre', 'primerapellido', 'celular', 'email', 'estado'], 'required'],
            [['dependenciaid', 'cargoid', 'estado', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['primernombre', 'segundonombre', 'primerapellido', 'segundoapellido'], 'string', 'max' => 60],
            [['celular'], 'string', 'max' => 12],
            [['email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'dependenciaid' => 'Dependenciaid',
            'cargoid' => 'Cargoid',
            'primernombre' => 'Primernombre',
            'segundonombre' => 'Segundonombre',
            'primerapellido' => 'Primerapellido',
            'segundoapellido' => 'Segundoapellido',
            'celular' => 'Celular',
            'email' => 'Email',
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
    public function getCargo()
    {
        return $this->hasOne(Cargo::className(), ['id' => 'cargoid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDependencia()
    {
        return $this->hasOne(Dependencia::className(), ['id' => 'dependenciaid']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResponsableestudios()
    {
        return $this->hasMany(Responsableestudio::className(), ['funcionarioid' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupervisorestudios()
    {
        return $this->hasMany(Supervisorestudio::className(), ['funcionarioid' => 'id']);
    }
}
