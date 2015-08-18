<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Modalidadpago */

$this->title = 'Update Modalidadpago: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Modalidadpagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="modalidadpago-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
