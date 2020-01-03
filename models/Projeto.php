<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projeto".
 *
 * @property int $id
 * @property string $titulo
 * @property string $descrição
 * @property string $data_inicio
 * @property string $data_termino
 *
 * @property Requisito[] $requisitos
 */
class Projeto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'projeto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'descrição', 'data_inicio'], 'required'],
            [['descrição'], 'string'],
            [['data_inicio', 'data_termino'], 'safe'],
            [['titulo'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'descrição' => 'Descrição',
            'data_inicio' => 'Data Inicio',
            'data_termino' => 'Data Termino',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequisitos()
    {
        return $this->hasMany(Requisito::className(), ['projeto_id' => 'id']);
    }
}
