<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Riesgo */

$this->title = 'Create Riesgo';
$this->params['breadcrumbs'][] = ['label' => 'Riesgos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="riesgo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
