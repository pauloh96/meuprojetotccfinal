<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Projeto;
use yii\helpers\ArrayHelper;
use app\models\Responsavel;
use app\models\Requisito;
/* @var $this yii\web\View */
/* @var $model app\models\Horas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="horas-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="form-group col-md-6">
    <?php 
          $projetos= Projeto::find()->all();
          $listData=ArrayHelper::map($projetos, 'id', 'titulo');
          echo  $form->field($model, 'projeto_id')->dropDownList($listData, ['class'=>'form-control', 'prompt'=>'']); ?>
    </div>
    <div class="form-group col-md-6">
    <?php
     $requisito= Requisito::find()->all();
      $listData=ArrayHelper::map($requisito, 'id', 'titulo');
      echo  $form->field($model, 'requisito_id')->dropDownList($listData, ['class'=>'form-control', 'prompt'=>'']); ?>
    </div>
    <div class="form-group col-md-6">
    <?php
      $responsavel= Responsavel::find()->all();
      $listData=ArrayHelper::map($responsavel, 'id', 'nome');
      echo  $form->field($model, 'responsavel_id')->dropDownList($listData, ['class'=>'form-control', 'prompt'=>'']); ?>
    </div>
    <div class="form-group col-md-6">
    <?= $form->field($model, 'horas')->textInput(['class'=>'form-control', 'placeholder'=>'00:00']) ?>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
