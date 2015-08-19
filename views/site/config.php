<?php 
    use yii\helpers\Html;
    $this->title = 'Administración';
    $this->params['breadcrumbs'][] = $this->title;
?>

<div class="col-md-12">
    <h2>Panel de Administración de variables</h2>
    <ul>
        <li>
            <?= Html::a('Planes de desarrollo', ['/pdm/index']); ?>
        </li>
        <li>
            <?= Html::a('Ejes temáticos', ['/eje/index']); ?>
        </li>
        <li>
            <?= Html::a('Programas', ['/programa/index']); ?>
        </li>
        <li>
            <?= Html::a('Subprogramas', ['/subprograma/index']); ?>
        </li>
        <li>
            <?= Html::a('metas', ['/meta/index']); ?>
        </li>
        <li>
            <?= Html::a('Tipos de norma', ['/tiponorma/index']); ?>
        </li>
        <li>
            <?= Html::a('Clases de contrato', ['/clasecontrato/index']); ?>
        </li>
        <li>
            <?= Html::a('Modalidades de selección', ['/modalidadseleccion/index']); ?>
        </li>
        <li>
            <?= Html::a('Lugares', ['/lugar/index']); ?>
        </li>
        <li>
            <?= Html::a('Fuentes de forma de pago', ['/fuenteformapago/index']); ?>
        </li>
        <li>
            <?= Html::a('Modalidades de pago', ['/modalidadpago/index']); ?>
        </li>
        <li>
            <?= Html::a('Unidades de tiempo', ['/unidadtiempo/index']); ?>
        </li>
        <li>
            <?= Html::a('Documentos', ['/documento/index']); ?>
        </li>
        <li>
            <?= Html::a('Documentos etapa precontractual', ['/documentopre/index']); ?>
        </li>
    </ul>
</div>

