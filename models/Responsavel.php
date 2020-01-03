<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "responsavel".
 *
 * @property int $id
 * @property string $nome
 * @property string $cargo
 *
 * @property Requisito[] $requisitos
 */
class Responsavel extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'responsavel';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nome', 'cargo'], 'required'],
            [['nome', 'cargo'], 'string', 'max' => 80],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nome' => 'Nome',
            'cargo' => 'Cargo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRequisitos()
    {
        return $this->hasMany(Requisito::className(), ['resp_id' => 'id']);
    }
}
