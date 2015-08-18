<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DocumentopreSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Documentopres';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="documentopre-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Documentopre', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'documentoid',
            'modalidadseleccionid',
            'componenteid',
            'orden',
            // 'obligatorio',
            // 'usuariocrea',
            // 'fechacrea',
            // 'usuariomodifica',
            // 'fechamodifica',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
