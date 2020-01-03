<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ProjetoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Projetos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="projeto-index">

    

   

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
    <div class="box">
           
            <!-- /.box-header -->
            <div class="box-body">
              <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'class' => 'table table-bordered',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'titulo',
            'descrição:ntext',
            'data_inicio',
            'data_termino',

            ['class' => 'yii\grid\ActionColumn',
             'template'=>'{view}{update}{delete}',
             'buttons' => [
            'view' => function ($url, $model) {
                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [ 'target' => "_blank"]);
            },

            'update' => function ($url, $model) {
                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                            'title' => Yii::t('app', 'lead-update'),
                ]);
            },
            'delete' => function ($url, $model) {
                return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                            'title' => Yii::t('app', 'lead-delete'),
                ]);
            }

          ],   ],
        ],
    ]); ?>
          </div>

    


</div>
