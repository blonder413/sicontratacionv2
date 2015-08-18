<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Subprograma */

$this->title = 'Create Subprograma';
$this->params['breadcrumbs'][] = ['label' => 'Subprogramas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="subprograma-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
