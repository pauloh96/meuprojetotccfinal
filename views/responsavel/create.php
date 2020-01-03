<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Responsavel */

$this->title = 'Cadastro de Responsavel';
$this->params['breadcrumbs'][] = ['label' => 'Responsavels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="responsavel-create">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
