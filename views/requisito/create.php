<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\requisito */

$this->title = 'Cadastro de Requisito';
$this->params['breadcrumbs'][] = ['label' => 'Requisitos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requisito-create">

  

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
