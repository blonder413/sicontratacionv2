<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subprograma */

$this->title = 'Update Subprograma: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Subprogramas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subprograma-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
