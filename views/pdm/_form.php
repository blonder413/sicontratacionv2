<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pdm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pdm-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pdm')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'acuerdo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fechainicio')->textInput() ?>

    <?= $form->field($model, 'fechafin')->textInput() ?>

    <?= $form->field($model, 'usuariocrea')->textInput() ?>

    <?= $form->field($model, 'fechacrea')->textInput() ?>

    <?= $form->field($model, 'usuariomodifica')->textInput() ?>

    <?= $form->field($model, 'fechamodifica')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
