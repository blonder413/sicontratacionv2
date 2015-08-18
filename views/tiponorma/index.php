<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TiponormaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tiponormas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tiponorma-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tiponorma', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'tiponorma',
            'usuariocrea',
            'fechacrea',
            'usuariomodifica',
            // 'fechamodifica',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
