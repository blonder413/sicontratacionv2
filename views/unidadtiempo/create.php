<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Unidadtiempo */

$this->title = 'Create Unidadtiempo';
$this->params['breadcrumbs'][] = ['label' => 'Unidadtiempos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="unidadtiempo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
