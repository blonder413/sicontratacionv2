<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComponenteSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Componentes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="componente-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Componente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'etapaid',
            'componente',
            'usuariocrea',
            'fechacrea',
            // 'usuariomodifica',
            // 'fechamodifica',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
