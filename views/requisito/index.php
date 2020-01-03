<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\requisitoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Requisitos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="requisito-index">

    <div class="search-form">
    <?php
    echo Yii::$app->controller->renderPartial('_search', array(
        'model' => $searchModel,
    ));
    /* $this->renderPartial('_search', array(
      'model' => $searchModel,
      )); */
    ?>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
              <?= GridView::widget([
        'dataProvider' => $dataProvider,
       // 'filterModel' => $searchModel,
        'class' => 'table table-bordered',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'titulo',
            'projeto.titulo',
            'resp.nome',
            ['attribute' => 'situação',
                                'label' => 'Situação ',
                                'value' => function ($data) {
                                   if($data->situação==1)
                                   {
                                       return 'Novo';
                                   }
                                   if($data->situação==2)
                                   {
                                       return 'Em desenvolvimento';
                                   }
                                   if($data->situação==3)
                                   {
                                       return 'Em teste';
                                   }
                                    if($data->situação==4)
                                   {
                                       return 'Concluido';
                                   }
                                   
                                }
                            ],
            
           ['attribute' => 'prioridade',
               'label' => 'Prioridade ',
                                'value' => function ($data) {
                                   if($data->prioridade==1)
                                   {
                                       return 'Normal';
                                   }
                                   if($data->prioridade==2)
                                   {
                                       return 'Urgente';
                                   }
                                   if($data->prioridade==3)
                                   {
                                       return 'Imediato';
                                   }
                                  
                                   
                                }
                            ],

            ['class' => 'yii\grid\ActionColumn','template'=>'{update}{delete}',],
        ],
    ]); ?>
          </div>
   

</div>
