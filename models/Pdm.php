<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pdm".
 *
 * @property integer $id
 * @property string $pdm
 * @property string $acuerdo
 * @property string $fechainicio
 * @property string $fechafin
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Eje[] $ejes
 */
class Pdm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pdm';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pdm','acuerdo'], 'required'],
            [['pdm'], 'string'],
            [['fechainicio', 'fechafin', 'fechacrea', 'fechamodifica'], 'safe'],
            [['usuariocrea', 'usuariomodifica'], 'integer'],
            [['acuerdo'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'pdm' => 'Nombre del plan',
            'acuerdo' => 'Acuerdo',
            'fechainicio' => 'Fecha de inicio',
            'fechafin' => 'Fecha de fin',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEjes()
    {
        return $this->hasMany(Eje::className(), ['pdmid' => 'id']);
    }
}
