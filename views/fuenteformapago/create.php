<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fuenteformapago */

$this->title = 'Create Fuenteformapago';
$this->params['breadcrumbs'][] = ['label' => 'Fuenteformapagos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fuenteformapago-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
