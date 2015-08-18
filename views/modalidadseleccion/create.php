<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Modalidadseleccion */

$this->title = 'Create Modalidadseleccion';
$this->params['breadcrumbs'][] = ['label' => 'Modalidadseleccions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modalidadseleccion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
