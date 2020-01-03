<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Projeto;
use app\models\Responsavel;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\requisito */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="requisito-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Dados</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form">
            <div class="box-body">  
                 <div class="form-group col-md-12">
                   <?= $form->field($model, 'titulo')->textInput(['maxlength' => true,'class' => 'form-control']) ?>
                </div>
                <div class="form-group col-md-12">
                 <?= $form->field($model, 'descrição')->textarea(['rows' => 6,'class'=>'form-control']) ?>
                </div>
                
                <div class="form-group col-md-6">
                    <?php
                                    $projetos= Projeto::find()->all();
                                    $listData=ArrayHelper::map($projetos, 'id', 'titulo');

                                  echo  $form->field($model, 'projeto_id')->dropDownList($listData, ['class'=>'form-control', 'prompt'=>'']);  ?>
                  
                </div>
                <div class="form-group col-md-6">
                  <?php
                                    $responsavel= Responsavel::find()->all();
                                    $listData=ArrayHelper::map($responsavel, 'id', 'nome');

                                  echo  $form->field($model, 'resp_id')->dropDownList($listData, ['class'=>'form-control', 'prompt'=>'']);  ?>
                </div>
               
                 <div class="form-group col-md-6">
                  <?= $form->field($model, 'prioridade')->dropDownList([1 => 'Normal', 2 => 'Urgente', 3 => 'Imediato'], ['class'=>'form-control']);  ?>
                </div>
                 <div class="form-group col-md-6">
                 <?= $form->field($model, 'situação')->dropDownList([1 => 'Novo', 2 => 'Em desenvolvimento', 3 => 'Em teste',4 => 'Concluído'], ['class'=>'form-control']);  ?>
                  
                </div>
               
               
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                  <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
            </div>
        </form>
    </div>

    

    

   

    

    

    

   

   

    <?php ActiveForm::end(); ?>

</div>
