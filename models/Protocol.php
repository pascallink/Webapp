<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "protocol".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $action
 * @property integer $module
 * @property string $text
 * @property string $ts
 *
 * @property Module $module0
 * @property Contacts $user
 * @property Actions $action0
 */
class Protocol extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'protocol';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'action', 'module', 'text'], 'required'],
            [['user_id', 'action', 'module'], 'integer'],
            [['text'], 'string'],
            [['ts'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'action' => 'Action',
            'module' => 'Module',
            'text' => 'Text',
            'ts' => 'Ts',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getModule0()
    {
        return $this->hasOne(Module::className(), ['id' => 'module']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Contacts::className(), ['id' => 'user_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAction0()
    {
        return $this->hasOne(Actions::className(), ['id' => 'action']);
    }
}
