<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "connections_team".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $team_id
 * @property string $role
 *
 * @property Teams $team
 * @property Contacts $user
 */
class ConnectionsTeam extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'connections_team';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'team_id', 'role'], 'required'],
            [['user_id', 'team_id'], 'integer'],
            [['role'], 'string', 'max' => 25]
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
            'team_id' => 'Team ID',
            'role' => 'Role',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTeam()
    {
        return $this->hasOne(Teams::className(), ['id' => 'team_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Contacts::className(), ['id' => 'user_id']);
    }
}
