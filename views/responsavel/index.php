<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ResponsavelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Responsável';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="responsavel-index">

    

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
            'nome',
            'cargo',

            ['class' => 'yii\grid\ActionColumn','template'=>'{update}{delete}',],
        ],
    ]); ?>
          </div>
   
</div>
