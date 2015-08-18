<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Clasecontrato */

$this->title = 'Create Clasecontrato';
$this->params['breadcrumbs'][] = ['label' => 'Clasecontratos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="clasecontrato-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
