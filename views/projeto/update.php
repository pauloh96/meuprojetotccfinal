<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Projeto */

$this->title = 'Alterar projeto: ' . $model->titulo;
$this->params['breadcrumbs'][] = ['label' => 'Projetos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="projeto-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
