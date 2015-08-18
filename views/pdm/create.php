<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Pdm */

$this->title = 'Create Pdm';
$this->params['breadcrumbs'][] = ['label' => 'Pdms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pdm-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
