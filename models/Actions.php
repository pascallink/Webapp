<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "actions".
 *
 * @property integer $id
 * @property string $name
 * @property string $descritption
 *
 * @property Protocol[] $protocols
 */
class Actions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'actions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'descritption'], 'required'],
            [['descritption'], 'string'],
            [['name'], 'string', 'max' => 20],
            [['name'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'descritption' => 'Descritption',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProtocols()
    {
        return $this->hasMany(Protocol::className(), ['action' => 'id']);
    }
}
