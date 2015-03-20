<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "connections_club".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $club_id
 * @property string $role
 *
 * @property Contacts $user
 * @property Clubs $club
 */
class ConnectionsClub extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'connections_club';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'club_id', 'role'], 'required'],
            [['user_id', 'club_id'], 'integer'],
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
            'club_id' => 'Club ID',
            'role' => 'Role',
        ];
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
    public function getClub()
    {
        return $this->hasOne(Clubs::className(), ['id' => 'club_id']);
    }
}
