<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "fundamentojuridico".
 *
 * @property integer $id
 * @property integer $estudioid
 * @property integer $tiponormaid
 * @property integer $numero
 * @property integer $año
 * @property string $articulo
 * @property integer $estado
 * @property string $observaciones
 * @property string $anexo
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Estudio $estudio
 * @property Tiponorma $tiponorma
 */
class Fundamentojuridico extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'fundamentojuridico';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['estudioid', 'tiponormaid', 'numero', 'año', 'articulo', 'estado'], 'required'],
            [['estudioid', 'tiponormaid', 'numero', 'año', 'estado', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['observaciones'], 'string'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['articulo'], 'string', 'max' => 255],
            [['anexo'], 'string', 'max' => 100]
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
            'tiponormaid' => 'Tiponormaid',
            'numero' => 'Numero',
            'año' => 'Año',
            'articulo' => 'Articulo',
            'estado' => 'Estado',
            'observaciones' => 'Observaciones',
            'anexo' => 'Anexo',
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
    public function getTiponorma()
    {
        return $this->hasOne(Tiponorma::className(), ['id' => 'tiponormaid']);
    }
}
