<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FuncionarioSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="funcionario-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'dependenciaid') ?>

    <?= $form->field($model, 'cargoid') ?>

    <?= $form->field($model, 'primernombre') ?>

    <?= $form->field($model, 'segundonombre') ?>

    <?php // echo $form->field($model, 'primerapellido') ?>

    <?php // echo $form->field($model, 'segundoapellido') ?>

    <?php // echo $form->field($model, 'celular') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'estado') ?>

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
