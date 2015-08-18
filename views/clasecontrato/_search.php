<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ClasecontratoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="clasecontrato-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'clasecontrato') ?>

    <?= $form->field($model, 'usuariocrea') ?>

    <?= $form->field($model, 'fechacrea') ?>

    <?= $form->field($model, 'usuariomodifica') ?>

    <?php // echo $form->field($model, 'fechamodifica') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
