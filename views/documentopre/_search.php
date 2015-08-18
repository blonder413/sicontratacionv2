<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DocumentopreSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="documentopre-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'documentoid') ?>

    <?= $form->field($model, 'modalidadseleccionid') ?>

    <?= $form->field($model, 'componenteid') ?>

    <?= $form->field($model, 'orden') ?>

    <?php // echo $form->field($model, 'obligatorio') ?>

    <?php // echo $form->field($model, 'usuariocrea') ?>

    <?php // echo $form->field($model, 'fechacrea') ?>

    <?php // echo $form->field($model, 'usuariomodifica') ?>

    <?php // echo $form->field($model, 'fechamodifica') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
