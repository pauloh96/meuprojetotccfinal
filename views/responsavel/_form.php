<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Responsavel */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="responsavel-form">

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
                    <?= $form->field($model, 'nome')->textInput(['maxlength' => true,'class'=>'form-control']) ?>
                </div>
                <div class="form-group col-md-12">
                   <?= $form->field($model, 'cargo')->textInput(['maxlength' => true,'class'=>'form-control']) ?>
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
