<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\alert\AlertBlock;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PdmSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Planes de desarrollo';
$this->params['breadcrumbs'][] = ['label' => 'Administración', 'url' => ['/site/config']];
$this->params['breadcrumbs'][] = $this->title;

echo AlertBlock::widget([
    'useSessionFlash' => true,
    'type' => AlertBlock::TYPE_ALERT
]);
?>
<div class="pdm-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php 
    
    // echo $this->render('_search', ['model' => $searchModel]); 
    
    ?>

    <p>
        <?= Html::a('Crear Pdm', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pdm:ntext',
            'acuerdo',
            'fechainicio',
            'fechafin',
            // 'usuariocrea',
            // 'fechacrea',
            // 'usuariomodifica',
            // 'fechamodifica',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
