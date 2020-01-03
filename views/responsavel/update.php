<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Responsavel */

$this->title = 'Alterar Responsável: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Responsavels', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="responsavel-update">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
