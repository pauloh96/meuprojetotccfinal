<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "requisito".
 *
 * @property int $id
 * @property int $projeto_id
 * @property int $resp_id
 * @property string $titulo
 * @property string $descrição
 * @property int $situação 1 - novo. 2 - em desenvolvimento. 3 - em teste. 4 - concluído.
 * @property int $prioridade 1 - normal. 2 - urgente. 3 - imediato.
 *
 * @property Projeto $projeto
 * @property Responsavel $resp
 */
class Requisito extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'requisito';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['projeto_id', 'resp_id', 'titulo', 'descrição', 'situação', 'prioridade'], 'required'],
            [['projeto_id', 'resp_id', 'situação', 'prioridade'], 'integer'],
            [['descrição'], 'string'],
            [['titulo'], 'string', 'max' => 80],
            [['projeto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Projeto::className(), 'targetAttribute' => ['projeto_id' => 'id']],
            [['resp_id'], 'exist', 'skipOnError' => true, 'targetClass' => Responsavel::className(), 'targetAttribute' => ['resp_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'projeto_id' => 'Projeto',
            'projeto.titulo' => 'Projeto',
            'resp_id' => 'Responsável',
            'resp.nome' => 'Responsável',
            'titulo' => 'Título',
            'descrição' => 'Descrição',
            'situação' => 'Situação',
            'prioridade' => 'Prioridade',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjeto()
    {
        return $this->hasOne(Projeto::className(), ['id' => 'projeto_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResp()
    {
        return $this->hasOne(Responsavel::className(), ['id' => 'resp_id']);
    }
}
