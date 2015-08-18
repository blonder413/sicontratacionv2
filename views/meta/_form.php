<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Meta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subprogramaid')->textInput() ?>

    <?= $form->field($model, 'meta')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'usuariocrea')->textInput() ?>

    <?= $form->field($model, 'fechacrea')->textInput() ?>

    <?= $form->field($model, 'usuariomodifica')->textInput() ?>

    <?= $form->field($model, 'fechamodifica')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>