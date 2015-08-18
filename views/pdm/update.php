<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pdm */

$this->title = 'Update Pdm: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pdms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pdm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
