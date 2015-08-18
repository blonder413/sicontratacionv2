<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Eje */

$this->title = 'Create Eje';
$this->params['breadcrumbs'][] = ['label' => 'Ejes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="eje-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
