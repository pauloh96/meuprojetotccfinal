<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "horas".
 *
 * @property int $id
 * @property int $projeto_id
 * @property int $requisito_id
 * @property int $responsavel_id
 * @property string $horas
 *
 * @property Projeto $projeto
 * @property Requisito $requisito
 * @property Responsavel $responsavel
 */
class Horas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'horas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['projeto_id', 'requisito_id', 'responsavel_id', 'horas'], 'required'],
            [['projeto_id', 'requisito_id', 'responsavel_id'], 'integer'],
            [['horas'], 'safe'],
            [['projeto_id'], 'exist', 'skipOnError' => true, 'targetClass' => Projeto::className(), 'targetAttribute' => ['projeto_id' => 'id']],
            [['requisito_id'], 'exist', 'skipOnError' => true, 'targetClass' => Requisito::className(), 'targetAttribute' => ['requisito_id' => 'id']],
            [['responsavel_id'], 'exist', 'skipOnError' => true, 'targetClass' => Responsavel::className(), 'targetAttribute' => ['responsavel_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'projeto_id' => 'Projeto ',
            'projeto.titulo'=>'Projeto',
            'requisito_id' => 'Requisito ',
            'requisito.titulo' => 'Requisito ',
            'responsavel.nome' => 'responsavel',
            'responsavel_id' => 'Responsavel ',
            'horas' => 'Horas',
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
    public function getRequisito()
    {
        return $this->hasOne(Requisito::className(), ['id' => 'requisito_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getResponsavel()
    {
        return $this->hasOne(Responsavel::className(), ['id' => 'responsavel_id']);
    }
}
