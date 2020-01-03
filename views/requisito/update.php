<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\requisito */

$this->title = 'Alterar Requisito: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Requisitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="requisito-update">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
