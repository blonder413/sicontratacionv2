<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pdm */

$this->title = 'Actualizar Plan de desarrollo';
$this->params['breadcrumbs'][] = ['label' => 'Administración', 'url' => ['/site/config']];
$this->params['breadcrumbs'][] = ['label' => 'Planes de desarrollo', 'url' => ['/pdm/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pdm-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
