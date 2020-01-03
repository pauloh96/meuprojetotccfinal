<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\HorasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Horas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="horas-index">
    
    
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
           'projeto.titulo',
            'responsavel.nome',
            'requisito.titulo',
            'horas',
           

            ['class' => 'yii\grid\ActionColumn','template'=>'{update}{delete}',],
        ],
    ]); ?>
          </div>
   

</div>

   
