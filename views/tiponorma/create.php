<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tiponorma */

$this->title = 'Create Tiponorma';
$this->params['breadcrumbs'][] = ['label' => 'Tiponormas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiponorma-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
