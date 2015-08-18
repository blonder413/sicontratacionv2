<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Documentopre */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="documentopre-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'documentoid')->textInput() ?>

    <?= $form->field($model, 'modalidadseleccionid')->textInput() ?>

    <?= $form->field($model, 'componenteid')->textInput() ?>

    <?= $form->field($model, 'orden')->textInput() ?>

    <?= $form->field($model, 'obligatorio')->textInput() ?>

    <?= $form->field($model, 'usuariocrea')->textInput() ?>

    <?= $form->field($model, 'fechacrea')->textInput() ?>

    <?= $form->field($model, 'usuariomodifica')->textInput() ?>

    <?= $form->field($model, 'fechamodifica')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
