<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Documentopre */

$this->title = 'Create Documentopre';
$this->params['breadcrumbs'][] = ['label' => 'Documentopres', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="documentopre-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
