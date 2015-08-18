<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modalidadpago".
 *
 * @property integer $id
 * @property string $modalidadpago
 * @property integer $usuariocrea
 * @property string $fechacrea
 * @property integer $usuariomodifica
 * @property string $fechamodifica
 *
 * @property Formapago[] $formapagos
 */
class Modalidadpago extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'modalidadpago';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['modalidadpago'], 'required'],
            [['usuariocrea', 'usuariomodifica'], 'integer'],
            [['fechacrea', 'fechamodifica'], 'safe'],
            [['modalidadpago'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'modalidadpago' => 'Modalidadpago',
            'usuariocrea' => 'Usuariocrea',
            'fechacrea' => 'Fechacrea',
            'usuariomodifica' => 'Usuariomodifica',
            'fechamodifica' => 'Fechamodifica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFormapagos()
    {
        return $this->hasMany(Formapago::className(), ['modalidadpagoid' => 'id']);
    }
}
