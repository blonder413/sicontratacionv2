<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rubro".
 *
 * @property integer $id
 * @property integer $rubro
 * @property string $articulo
 * @property string $nombre
 * @property integer $vigencia
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Cdprubro[] $cdprubros
 */
class Rubro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rubro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'rubro', 'articulo', 'nombre', 'vigencia'], 'required'],
            [['id', 'rubro', 'vigencia', 'usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['articulo'], 'string', 'max' => 45],
            [['nombre'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rubro' => 'Rubro',
            'articulo' => 'Articulo',
            'nombre' => 'Nombre',
            'vigencia' => 'Vigencia',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCdprubros()
    {
        return $this->hasMany(Cdprubro::className(), ['rubro_id' => 'id']);
    }
}
