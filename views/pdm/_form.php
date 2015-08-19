<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Pdm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pdm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pdm')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'acuerdo')->textarea(['rows' => 3]) ?>

    <?php 
    echo $form->field($model, 'fechainicio')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Seleccione...'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'autoclose' => true
        ]
    ]);
    ?>
    
    <?php 
    echo $form->field($model, 'fechafin')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => 'Seleccione...'],
        'pluginOptions' => [
            'format' => 'yyyy-mm-dd',
            'autoclose' => true
        ]
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
