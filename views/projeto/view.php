<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Projeto */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Projetos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="projeto-view">

   <div>
    <div >
        <h3 style="text-align:center"><?= $model->titulo?></h3>
    </div>
    <div >
            <b>Descrição:</b> <?=$model->descrição?>
    </div>  
       <table width="100%" border="0" cellspacing="10" cellpadding="4">
           <tr align="center">
            <td >Data Inicio: <?=$model->data_inicio?></td>   
            <td style="text-align: right">Data termino: <?=$model->data_termino?></td>   
           </tr>    
       
       </table> 
    <hr />
    <h5 style="text-align:center"><u>Requisitos</u></h5>
    <div>
             <?= GridView::widget([
        'dataProvider' => $requisito->search(['']),
       // 'filterModel' => $searchModel,     
        'class' => 'table table-bordered',
        'summary'=>'',         
        'columns' => [
            //['class' => 'yii\grid\SerialColumn'],

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

            //['class' => 'yii\grid\ActionColumn','template'=>'{update}{delete}',],
        ],
    ]); ?>
    </div>
</div>

</div>
