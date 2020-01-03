<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Projeto;
use app\models\Responsavel;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\requisitoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requisito-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>
    <div class="box box-primary">
       <!-- form start -->
        
            <div class="box-body">  
                 <div class="form-group col-md-12">
                   <?= $form->field($model, 'titulo')->textInput(['maxlength' => true,'class' => 'form-control']) ?>
                </div>
                
                <div class="form-group col-md-3">
                    <?php
                                    $projetos= Projeto::find()->all();
                                    $listData=ArrayHelper::map($projetos, 'id', 'titulo');

                                  echo  $form->field($model, 'projeto_id')->dropDownList($listData, ['class'=>'form-control', 'prompt'=>'']);  ?>
                  
                </div>
                <div class="form-group col-md-3">
                  <?php
                                    $responsavel= Responsavel::find()->all();
                                    $listData=ArrayHelper::map($responsavel, 'id', 'nome');

                                  echo  $form->field($model, 'resp_id')->dropDownList($listData, ['class'=>'form-control', 'prompt'=>'']);  ?>
                </div>
               
                 <div class="form-group col-md-3">
                  <?= $form->field($model, 'prioridade')->dropDownList([1 => 'Normal', 2 => 'Urgente', 3 => 'Imediato'], ['class'=>'form-control', 'prompt'=>'']);  ?>
                </div>
                 <div class="form-group col-md-3">
                 <?= $form->field($model, 'situação')->dropDownList([1 => 'Novo', 2 => 'Em desenvolvimento', 3 => 'Em teste',4 => 'Concluído'], ['class'=>'form-control', 'prompt'=>'']);  ?>
                  
                </div>
               
               
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <div class="form-group">
                    <?= Html::submitButton('Pesquisar', ['class' => 'btn btn-primary']) ?>
                    <?= Html::resetButton('Limpar', ['class' => 'btn btn-outline-secondary']) ?>
                </div>
            </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
