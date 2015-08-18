<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Modalidadpago */

$this->title = 'Create Modalidadpago';
$this->params['breadcrumbs'][] = ['label' => 'Modalidadpagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modalidadpago-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
